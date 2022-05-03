jQuery(function () {

	/*****************************************************************************
	 * 学校詳細
	 *****************************************************************************/

	/*********************************************
	 * タブメニュー制御
	 * jQuery
	 *********************************************/
	let tab_menus = jQuery('.js-tab-menu');
	tab_menus.click(function () {
		jQuery('.tab-active').removeClass('tab-active'); // tab-activeクラスを消す
		jQuery(this).addClass('tab-active'); // クリックした箇所にtab-activeクラスを追加
		let index = tab_menus.index(this);
		jQuery('.js-tab-item').eq(index).addClass('tab-active');
	});
	let tab_select = jQuery('.js-select-menu');
	tab_select.change(function () {
		// 選択済みの要素を探す
		let index = tab_select.children().index(tab_select.children('option:selected'));
		jQuery('.tab-active').removeClass('tab-active'); // tab-activeクラスを消す
		jQuery('.js-tab-item').eq(index).addClass('tab-active');
	});


	/*********************************************
	 * ドロワー
	 * jQuery
	 *********************************************/
	let drawerBtn = jQuery("#js-drawer");
	let drawerCloseBtn = jQuery("#js-drawer-close");
	let targetClass = drawerBtn.attr("data-target");
	drawerBtn.add(drawerCloseBtn).on("click", function (e) {
		e.preventDefault();
		jQuery("." + targetClass).toggleClass("is-checked"); // for-drawerクラスがついてる要素をトグルでis-checked
		return false;
	});
	// リンク選択時にドロワーを閉じる
	jQuery('.js-drawer-item').on('click', function (e) {
		jQuery("." + targetClass).removeClass('is-checked');
	});
	jQuery(window).resize(function () {
		if (jQuery(window).width() > 768) {
			jQuery("." + targetClass).removeClass('is-checked');
		}
	});

	/*****************************************************************************
	 * 検索
	 *****************************************************************************/
	/*********************************************
	 * アコーディオン
	 * jQuery
	 *********************************************/
	let accordion = jQuery('.js-search-accordion');
	accordion.click(function () {
		jQuery(this).parent().nextAll().slideToggle();
		jQuery(this).toggleClass('reverse');
	});
	// PC表示の場合
	let parent = accordion.parent();
	jQuery(window).resize(function () {

		if (jQuery(window).width() > 767) { // PC表示
			parent.nextAll().show(); // 子要素を全表示
		} else {
			parent.nextAll().hide(); // 子要素を全隠し
			accordion.removeClass('reverse'); // 閉じるボタン
		}
	});

	/*********************************************
	 * チェックボックス
	 * jQuery
	 *********************************************/
	jQuery('.js-search-chk-parent').click(function () {
		// 子要素を一斉選択、解除する
		jQuery(this).parent().nextAll().children('input').prop('checked', this.checked);
	});
	jQuery('.js-search-chk-child').click(function () {
		let child_all_count = // 子要素のすべての数
			jQuery(this).parent().parent().find('.js-search-chk-child').length;
		let child_checked_count = // 子要素のすべての選択済み数
			jQuery(this).parent().parent().find('.js-search-chk-child:checked').length;
		let parent = jQuery(this).parent().parent().find('.js-search-chk-parent'); // 親
		// すべての子要素が選択済みの場合は親を選択済みにする
		if (child_all_count == child_checked_count) {
			parent.prop('checked', true);
		} else {
			parent.prop('checked', false);
		}
	});

	/*********************************************
	 * セレクトボックス連動
	 * jQuery
	 * メイン - ディテールの関係
	 *********************************************/
	let select_main = jQuery('#js-academic-select-main'); // メイン
	let select_detail = jQuery('#js-academic-select-detail'); // ディテール
	let select_detail_init = jQuery('#js-academic-select-detail option[value=""]'); // ディテール初期値

	// メインの選択が変わった場合
	select_main.change(function () {

		select_detail.prop('disabled', false); // ディテールの選択不可を解除（実質初回のみ）
		select_detail_init.prop('selected', true); // ディテールの選択を初期値に戻す

		// ディテールのうち、メインが一致するもののみ表示
		let selected_main = jQuery('#js-academic-select-main option:selected').attr("value");
		select_detail.children().each(function (index, item) {
			select_detail_init.show();
			let jq_item = jQuery(item);
			let details_main = jq_item.attr('data-val');
			if (selected_main == details_main) {
				jq_item.show();
			} else {
				jq_item.hide();
			}
		});
	});

	/*********************************************
	 * ラジオボタン＆チェックボックスでテキスト改行
	 * 管理画面で入力した<br>を文字列ではなく改行として出力
	 * jQuery
	 *********************************************/
	jQuery('.mwform-radio-field-text').each(function () {
		let text = jQuery(this).html();
		jQuery(this).html(text.replace('&lt;br&gt;', '<br>'));
	})
});