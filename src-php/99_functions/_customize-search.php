<?php

/************************************************************************
 * 検索仕様をカスタマイズ
 ************************************************************************/


/***************************************************************
 * 検索条件の基本設定
 * 　検索結果画面の場合のみを対象
 * 　GETパラメータを検索条件に指定（AND条件）
 * 　　学校種別、地方名、県名、学問、特色
 ***************************************************************/
function edit_pre_get_posts($query)
{
	// 管理画面の場合、メインクエリではない場合は対象外
	if (is_admin() || !$query->is_main_query()) {
		return;
	}

	// 検索結果画面の場合のみを対象
	if ($query->is_search()) {
		$query->set('post_type', 'school'); // カスタム投稿：学校詳細のみ
	}

	// クエリ検索条件
	$meta_query = [];

	/******************************************
	 * 学校種別：大学・短大の場合はリスト検索
	 ******************************************/
	$school_kind = $_GET['kind'];
	if (!empty($school_kind)) {
		$value = ($school_kind == '大学・短大') ? array('大学', '短大') : $school_kind;
		$compare = ($school_kind == '大学・短大') ? 'IN' : '=';
		$meta_query[] =    array(
			array(
				'key'     => 'school_kind',
				'value'   => $value,
				'compare' => $compare
			)
		);
	}

	/******************************************
	 * 地方名
	 ******************************************/
	$region = $_GET['region'];
	if (!empty($region)) {
		if (is_array($region)) {
			foreach ($region as $a) {
				$sub_query[] =    array(
					'key'     => 'school_region',
					'value'   => $a,
				);
			}
		} else {
			$sub_query[] =    array(
				'key'     => 'school_region',
				'value'   => $region,
			);
		}

		$meta_query[] = $sub_query;
	}

	/******************************************
	 * 県名
	 ******************************************/
	$prefecture = $_GET['prefecture'];
	if (!empty($prefecture)) {
		$meta_query[] =    array(
			'key'     => 'school_prefecture',
			'value'   => $prefecture,
		);
	}

	/******************************************
	 * 学問：カンマ区切りのリストに対して部分一致検索
	 ******************************************/
	$academic = $_GET['academic'];
	if (!empty($academic)) {
		$meta_query[] =    array(
			'key'     => 'school_academic',
			'value'   => $academic,
			'compare' => 'LIKE'
		);
	}

	/******************************************
	 * 学問：カンマ区切りのリストに対して部分一致検索
	 * 複数選択の場合はOR検索
	 ******************************************/
	$academics = $_GET['academics'];
	if (!empty($academics)) {
		$sub_query = [
			'relation' => 'OR'
		];
		foreach ($academics as $a) {
			$sub_query[] =    array(
				'key'     => 'school_academic',
				'value'   => $a,
				'compare' => 'LIKE'
			);
		}
		$meta_query[] = $sub_query;
	}

	/******************************************
	 * 分野：学問のカンマ区切りのリストに対して部分一致検索
	 ******************************************/
	$field = $_GET['field'];
	if (!empty($field)) {
		$meta_query[] =    array(
			'key'     => 'school_academic',
			'value'   => $field,
			'compare' => 'LIKE'
		);
	}

	/******************************************
	 * 特色：カンマ区切りのリストに対して部分一致検索
	 ******************************************/
	$feature = $_GET['feature'];
	if (!empty($feature)) {
		$meta_query[] =    array(
			'key'     => 'school_feature',
			'value'   => $feature,
			'compare' => 'LIKE'
		);
	}

	// 絞り込み条件をセット
	$query->set('meta_query', $meta_query);
	// var_dump($meta_query);
	return;
}
add_action('pre_get_posts', 'edit_pre_get_posts');


/***************************************************************
 * カスタムフィールドを検索
 * 　検索結果画面の場合のみを対象
 * 　検索項目
 * 　　タイトル、
 * 　　学校種別、地方名、県名、
 * 　　基本メッセージ、基本メッセージ（繁体字）、基本メッセージ（簡体字）、 
 * 　　コース名、コース説明、
 * 　　コース名（繁体字）、コース説明（繁体字）、
 * 　　コース名（簡体字）、コース説明（簡体字）、
 * 　　入試方法・学費 - 入試、入試方法・学費 - 費用、
 * 　　入試方法・学費（繁体字） - 入試、入試方法・学費（繁体字） - 費用、
 * 　　入試方法・学費（簡体字） - 入試、入試方法・学費（簡体字） - 費用、
 * 　　オープンキャンパス、オープンキャンパス（繁体字）、オープンキャンパス（簡体字）、
 * 　　アクセスフリーテキスト、関連学問、関連特色
 ***************************************************************/
function custom_search($search, $wp_query)
{
	global $wpdb;
	if (!$wp_query->is_search) return $search; // 検索結果のみ対象
	if (!isset($wp_query->query_vars)) return $search; // 検索ワード(s)がある場合のみ対象：空文字もここは抜ける

	// 検索ワード（半角スペース区切り）
	$search_words = explode(' ', isset($wp_query->query_vars['s']) ? $wp_query->query_vars['s'] : '');

	// 検索ワードがある場合のみ検索
	if (count($search_words) > 0) {
		$search = '';
		foreach ($search_words as $word) {
			if (!empty($word)) { // 空文字の場合はWHERE区作成しない
				$search_word = '%' . esc_sql($word) . '%'; // 検索ワードをエスケープ
				$search .= " AND (
                    {$wpdb->posts}.post_title LIKE '{$search_word}' 
                    OR {$wpdb->posts}.ID IN (
                        SELECT distinct post_id
                        FROM {$wpdb->postmeta}
                        WHERE 
                            (
                                {$wpdb->postmeta}.meta_key LIKE 'school_base_msg%'
                                OR {$wpdb->postmeta}.meta_key LIKE 'school_course_list_%_school_course_%'
                                OR {$wpdb->postmeta}.meta_key LIKE 'school_fee_%school_fee_%'
                                OR {$wpdb->postmeta}.meta_key LIKE 'school_oc%'
                                OR {$wpdb->postmeta}.meta_key IN ('school_kind','school_region','school_prefecture','school_access_free','school_academic','school_feature')
                            )
                            AND meta_value LIKE '{$search_word}'
                    )
                ) ";
			}
		}
	}
	// var_dump($search_words);
	// var_dump($search);
	return $search;
}
add_filter('posts_search', 'custom_search', 10, 2);
