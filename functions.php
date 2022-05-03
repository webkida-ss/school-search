<?php

/************************************************************************
 * テーマのセットアップ
 ************************************************************************/
add_action('after_setup_theme', function () {
	add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag'); // 管理画面からのタイトルの設定（header.phpには直接記述しない）
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
});

/**
 * ウィジェットの登録
 */
add_action(
	'widgets_init',
	function () {
		register_sidebar(
			array(
				'name' => 'サイドバー', // 表示するエリア名
				'id' => 'sidebar', // id
			)
		);
	}
);

/************************************************************************
 * CSS・JS読み込み
 ************************************************************************/

add_action('wp_enqueue_scripts', function () {
	// CSS読み込み
	wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/lib/reset.css', array(), '1.0.0', 'all');
	wp_enqueue_style('allmin', get_template_directory_uri() . '/assets/css/lib/all.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('fab', get_template_directory_uri() . '/assets/css/lib/fab.css', array(), '1.0.0', 'all');
	wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/lib/slick.css', array(), '1.0.0', 'all');
	wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/css/lib/slick-theme.css', array(), '1.0.0', 'all');
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.min.css', array(), '1.0.0', 'all');

	// JS読み込み
	wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.min.js', array('jquery'), '1.0.0', false);
	wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/lib/slick.min.js', array('jquery'), '1.0.0', false);
	wp_enqueue_script('custom_common', get_template_directory_uri() . '/assets/js/lib/common.js', array('jquery'), '1.0.0', false);
});

/************************************************************************
 * ファイル取込み
 ************************************************************************/
get_template_part('src-php/99_functions/_my-global-variables'); // グローバル変数
get_template_part('src-php/99_functions/_customize-search'); // 検索仕様カスタマイズ
get_template_part('src-php/99_functions/_filter-hook'); // フィルターフック
get_template_part('src-php/99_functions/_short-code'); // ショートコード
get_template_part('src-php/99_functions/_user-define'); // ユーザ定義関数
get_template_part('src-php/99_functions/_mw-wp-form'); // MW MP Form
get_template_part('src-php/99_functions/_w3c'); // W3C

/************************************************************************
 * タイトルカスタマイズ
 ************************************************************************/
function change_document_title_parts($title_parts)
{
	if (is_search()) {
		$title_parts['title'] = '絞り込み検索';
	}
	return $title_parts;
}
add_filter('document_title_parts', 'change_document_title_parts');

/************************************************************************
 * 資料請求
 ************************************************************************/
function custom_mwform_value_387($value, $name)
{
	if ($name === 'school_name') {
		$_value = $_POST['school_name'];
		return $_value;
	}
	return $value;
}
add_filter('mwform_value_mw-wp-form-387', 'custom_mwform_value_387', 10, 2);

/************************************************************************
 * オープンキャンパス来校予約
 ************************************************************************/
function custom_mwform_value_420($value, $name)
{
	if ($name === 'school_name') {
		$_value = $_POST['school_name'];
		return $_value;
	} else if ($name === 'event_name') {
		$_value = $_POST['event_name'];
		return $_value;
	} else if ($name === 'ymd') {
		$_value = $_POST['ymd'];
		return $_value;
	} else if ($name === 'event_detail') {
		$_value = $_POST['event_selected'];
		return $_value;
	}
	return $value;
}
add_filter('mwform_value_mw-wp-form-420', 'custom_mwform_value_420', 10, 2);

function add_vars($vars)
{
	$vars[] = 'content_cat';
	return $vars;
}
add_filter('query_vars', 'add_vars');

function sql_dump($query)
{
	//var_dump($query);
	return $query;
}
add_filter('query', 'sql_dump');
