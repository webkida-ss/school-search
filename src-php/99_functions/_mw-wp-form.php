<?php

/************************************************************************
 * MW WP Form の自動pタグを削除
 ************************************************************************/
function mvwpform_autop_filter()
{
	if (class_exists('MW_WP_Form_Admin')) {
		$mw_wp_form_admin = new MW_WP_Form_Admin();
		$forms = $mw_wp_form_admin->get_forms();
		foreach ($forms as $form) {
			add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
		}
	}
}
mvwpform_autop_filter();


/************************************************************************
 * MW WP Form プライバシーポリシーの同意チェック
 ************************************************************************/
function my_validation_rule($Validation, $data)
{
	if ($data['privacy'] === 'false') { // 同意しない場合のみチェック追加
		$Validation->set_rule('privacy', 'in', array(
			'options' => array('true'),
			'message' => '個人情報保護に同意した上で、お申込みください。'
		));
	}
	return $Validation;
}
add_filter('mwform_validation_mw-wp-form-386', 'my_validation_rule', 10, 2);
add_filter('mwform_validation_mw-wp-form-387', 'my_validation_rule', 10, 2);
add_filter('mwform_validation_mw-wp-form-420', 'my_validation_rule', 10, 2);


/************************************************************************
 * MW WP Form セレクトボックスのデータを動的生成
 ************************************************************************/
function mwform_add_birthday_options($children, $atts)
{
	if ($atts['name'] === 'birthday-year') { // 生年月日（年）
		for ($i = 1950; $i <= date('Y'); $i++) {
			$children[$i] = $i;
		}
	} else if ($atts['name'] === 'schedule-year') { // 卒業年月日（月）
		for ($i = date('Y'); $i <= date('Y') + 10; $i++) {
			$children[$i] = $i;
		}
	} else if ($atts['name'] === 'birthday-month' || $atts['name'] === 'schedule-month') { // 生年月日/卒業年月日（月）
		for ($i = 1; $i <= 12; $i++) {
			$children[$i] = $i;
		}
	} else if ($atts['name'] === 'birthday-day') { // // 生年月日（日）
		for ($i = 1; $i <= 31; $i++) {
			$children[$i] = $i;
		}
	} else if ($atts['name'] === 'prefecture') { // 都道府県
		global $array_prefecture;
		$children = $array_prefecture;
	} else if ($atts['name'] === 'event_detail') {
		$events = $_POST['events'];
		if ($events != null) {
			for ($i = 0; $i < count($events); $i++) {
				$item = $events[$i];
				$children[$item] = $item;
			}
		}
	}

	return $children;
}
add_filter('mwform_choices_mw-wp-form-387', 'mwform_add_birthday_options', 10, 2);
add_filter('mwform_choices_mw-wp-form-420', 'mwform_add_birthday_options', 10, 2);

function mwform_birthday_year_value_setting($value, $name)
{
	if ($name === 'birthday-year') { // 年
		$value = '2000';
	} else if ($name === 'birthday-month') { // 月
		$value = '4';
	} else if ($name === 'birthday-day') { // 日
		$value = '1';
	} else if ($name === 'schedule-year') { // 月
		$value = '2022';
	} else if ($name === 'schedule-month') { // 月
		$value = '3';
	} else if ($name === 'prefecture') { // 都道府県
		// $value = '東京都';
	}
	return $value;
}
add_filter('mwform_value_mw-wp-form-387', 'mwform_birthday_year_value_setting', 10, 2);
add_filter('mwform_value_mw-wp-form-420', 'mwform_birthday_year_value_setting', 10, 2);
