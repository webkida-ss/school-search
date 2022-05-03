jQuery(window).bind('load', function () {
	setupCommonComponent();
});

var setupCommonComponent = function () {
	// Ajaxのキャッシュを無効化
	jQuery.ajaxSetup({
		cache: false
	});

	jQuery(".top-search__area--region").css("visibility", "visible");


	/**
	 * 学校詳細 メインビジュアル 下 サムネイル選択時
	 */
	jQuery('.school-base__top ul li img').click(function (e) {
		jQuery(this).closest(".school-base__top").find(".school-base__top--img img").attr("src", jQuery(this).attr("src"));
	});

};