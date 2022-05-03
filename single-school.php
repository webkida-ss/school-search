<!-- データ -->
<?php
// 送信元により初期アクティブなタブを設定
$event_kind = $_POST['event_kind'];
$tab_active_class = 'tab-active';
$tab_active_base = $tab_active_class;
$tab_active_opencampus = '';
if ($event_kind == 'オープンキャンパス') {
	$tab_active_base = '';
	$tab_active_opencampus = $tab_active_class;
}
?>

<!-- 本文 -->
<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_header(); ?>
</head>

<body>
	<div class="single-school">

		<?php get_template_part('src-php/10_common/_header'); ?>

		<div class="inner narrow pt-60 pb-120">

			<div class="single-school__top">
				<h2 class="page-title single-school__title">
					<?php echo the_title(); ?>
					<br>
					<span class="lang-china">
						<span class="lang-china-han">
							<?php
							$school_name_han = get_field('school_name_han');
							if (empty($school_name_han)) {
								$school_name_han = get_the_title();
							}
							echo $school_name_han;
							?>　
						</span>
						<span class="lang-china-kan">
							<?php
							$school_name_kan = get_field('school_name_kan');
							if (empty($school_name_kan)) {
								$school_name_kan = get_the_title();
							}
							echo $school_name_kan;
							?>
						</span>
					</span>
				</h2>
				<div class="util-link dark-blue single-school__link">
					<a href="<?php echo esc_url(home_url() . '/request-doc/?post_id=' . get_the_ID()); ?>" data-name="<?php the_title(); ?>" class="btn_document">
						<div>資料請求<br>
							<span class="lang-china">
								<span class="lang-china-han">資料請求(外1)</span>
								<br>
								<span class="lang-china-kan">資料請求(外2)</span>
							</span>
						</div>
					</a>
				</div>
				<div class="util-link orange single-school__link">
					<!--a href="<?php echo esc_url(home_url() . '/request-opencampus/?post_id=' . get_the_ID()); ?>" data-name="<?php the_title(); ?>" data-id="<?php the_ID(); ?>" class="btn_opencampus"-->
					<a href="javascript:void(0);" class="btn_opencampus">
						<div>来校予約<br>
							<span class="lang-china">
								<span class="lang-china-han">来校予約(外1)</span>
								<br>
								<span class="lang-china-kan">来校予約(外2)</span>
							</span>
						</div>
					</a>
				</div>
			</div><!-- /.single-school__top -->

			<!-- タブメニュー -->
			<div class="single-school__tab-menu">
				<ul>
					<li class="js-tab-menu <?php echo esc_html($tab_active_base); ?>">
						基本情報 <br>
						<span class="lang-china">
							<span class="lang-china-han">基本情報(外1)</span>
							<br>
							<span class="lang-china-kan">基本情報(外2)</span>
						</span>
					</li>
					<li class="js-tab-menu">
						学部・学科コース<br>
						<span class="lang-china">
							<span class="lang-china-han">学部・学科コース(外1)</span>
							<br>
							<span class="lang-china-kan">学部・学科コース(外2)</span>
						</span>
					</li>
					<li class="js-tab-menu">
						入試・学費<br>
						<span class="lang-china">
							<span class="lang-china-han">入試・学費(外1)</span>
							<br>
							<span class="lang-china-kan">入試・学費(外2)</span>
						</span>
					</li>
					<li class="js-tab-menu <?php echo esc_html($tab_active_opencampus); ?>">
						オープンキャンパス<br>
						<span class="lang-china">
							<span class="lang-china-han">オープンキャンパス(外1)</span>
							<br>
							<span class="lang-china-kan">オープンキャンパス(外1)</span>
						</span>
					</li>
					<li class="js-tab-menu">
						アクセス<br>
						<span class="lang-china">
							<span class="lang-china-han">アクセス(外1)</span>
							<br>
							<span class="lang-china-kan">アクセス(外1)</span>
						</span>
					</li>
				</ul>
				<select name="js-select-menu" class="js-select-menu">
					<option value="0">基本情報<span class="lang-china-han">／基本情報(外1)</span><span class="lang-china-kan">／基本情報(外2)</span></option>
					<option value="1">学部・学科コース<span class="lang-china-han">／学部・学科コース(外1)</span><span class="lang-china-kan">／学部・学科コース(外2)</span></option>
					<option value="2">入試・学費<span class="lang-china-han">／入試・学費(外1)</span><span class="lang-china-kan">／入試・学費(外2)</span></option>
					<option value="3">オープンキャンパス<span class="lang-china-han">／オープンキャンパス(外1)</span><span class="lang-china-kan">／オープンキャンパス(外2)</span></option>
					<option value="4">アクセス<span class="lang-china-han">／アクセス(外1)</span><span class="lang-china-kan">／アクセス(外2)</span></option>
					<optgroup label=""></optgroup>
				</select>
			</div><!-- /.single-school__tab-menu -->

			<div class="container pt-60">
				<!-- メイン -->
				<main class="main one-column">
					<!-- タブ内容 -->
					<div class="single-school__tab-item js-tab-item <?php echo esc_html($tab_active_base); ?>">
						<?php get_template_part('src-php/20_component/03_school/_school-base'); ?>
					</div>
					<div class="single-school__tab-item js-tab-item">
						<?php get_template_part('src-php/20_component/03_school/_school-course'); ?>
					</div>
					<div class="single-school__tab-item js-tab-item">
						<?php get_template_part('src-php/20_component/03_school/_school-fee'); ?>
					</div>
					<div class="single-school__tab-item js-tab-item <?php echo esc_html($tab_active_opencampus); ?>">
						<?php get_template_part('src-php/20_component/03_school/_school-opencanpas'); ?>
					</div>
					<div class="single-school__tab-item js-tab-item">
						<?php get_template_part('src-php/20_component/03_school/_school-access'); ?>
					</div>
				</main>
			</div>
		</div>

		<script>
			/**
			 * 資料請求フォームボタン、来校予約フォームボタンクリック
			 */
			/*
			    jQuery('.btn_document').click(function(e) {
			    e.preventDefault();

			    var href = jQuery(this).attr("href");
			    var name = jQuery(this).attr("data-name");

			    jQuery(this).closest(".util-link").remove("form");
			    jQuery(this).closest(".util-link").append(jQuery("<form action='" + href + "' method='post' />"));
			    jQuery(this).closest(".util-link").find("form").append(jQuery("<input type='hidden' name='school_name' value='" + name + "' />"));
			    jQuery(this).closest(".util-link").find("form")[0].submit();

			});
			*/
			jQuery('.school-opencanpas__item--content button').click(function(e) {

				return false;
			});

			jQuery('.single-school__tab-menu .js-tab-menu').eq(0).click(function(e) {
				e.preventDefault();

				jQuery(".js-tab-menu").removeClass("tab-active");
				jQuery(".js-tab-item").removeClass("tab-active");

				jQuery(".js-tab-menu").eq(0).addClass("tab-active");
				jQuery(".js-tab-item").eq(0).addClass("tab-active");

				return false;
			});
			jQuery('.single-school__tab-menu .js-tab-menu').eq(1).click(function(e) {
				e.preventDefault();

				jQuery(".js-tab-menu").removeClass("tab-active");
				jQuery(".js-tab-item").removeClass("tab-active");

				jQuery(".js-tab-menu").eq(1).addClass("tab-active");
				jQuery(".js-tab-item").eq(1).addClass("tab-active");

				return false;
			});
			jQuery('.single-school__tab-menu .js-tab-menu').eq(2).click(function(e) {
				e.preventDefault();

				jQuery(".js-tab-menu").removeClass("tab-active");
				jQuery(".js-tab-item").removeClass("tab-active");

				jQuery(".js-tab-menu").eq(2).addClass("tab-active");
				jQuery(".js-tab-item").eq(2).addClass("tab-active");

				return false;
			});
			jQuery('.single-school__tab-menu .js-tab-menu').eq(3).click(function(e) {
				e.preventDefault();

				jQuery(".js-tab-menu").removeClass("tab-active");
				jQuery(".js-tab-item").removeClass("tab-active");

				jQuery(".js-tab-menu").eq(3).addClass("tab-active");
				jQuery(".js-tab-item").eq(3).addClass("tab-active");

				return false;
			});
			jQuery('.single-school__tab-menu .js-tab-menu').eq(4).click(function(e) {
				e.preventDefault();

				jQuery(".js-tab-menu").removeClass("tab-active");
				jQuery(".js-tab-item").removeClass("tab-active");

				jQuery(".js-tab-menu").eq(4).addClass("tab-active");
				jQuery(".js-tab-item").eq(4).addClass("tab-active");

				return false;
			});

			jQuery('.btn_opencampus').click(function(e) {
				e.preventDefault();

				jQuery(".js-tab-menu").removeClass("tab-active");
				jQuery(".js-tab-item").removeClass("tab-active");

				jQuery(".js-tab-menu").eq(3).addClass("tab-active");
				jQuery(".js-tab-item").eq(3).addClass("tab-active");

				return false;
			});

			jQuery('.js-select-menu').change(function(e) {
				var value = jQuery('[name=js-select-menu] option:selected').val();

				jQuery(".js-tab-menu").removeClass("tab-active");
				jQuery(".js-tab-item").removeClass("tab-active");
				jQuery(".js-tab-menu").eq(value).addClass("tab-active");
				jQuery(".js-tab-item").eq(value).addClass("tab-active");


				return false;
			});
		</script>

		<?php get_template_part('src-php/10_common/_footer'); ?>
	</div>

	<?php get_footer(); ?>
</body>

</html>