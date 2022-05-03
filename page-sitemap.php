<!-- データ -->
<?php
global $array_header_nav_link;
global $array_region_sitemap;
global $array_academic;
global $array_footer_link;
?>

<!-- 本文 -->
<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_header(); ?>
</head>

<body>
	<div class="page-sitemap">

		<?php get_template_part('src-php/10_common/_header'); ?>

		<div class="inner narrow pt-60 pb-120">
			<div class="container">
				<h2 class="page-title page-sitemap__title custom-search__title">
					<?php the_title(); ?><br />
					<span class="lang-china"><span class="lang-china-han">サイトマップ(外1)　</span><span class="lang-china-kan">サイトマップ(外2)</span></span>
				</h2>
				<main class="main one-column">
					<div class="page-sitemap__inner">

						<div class="page-sitemap__category">
							<h3>学校を探す</h3>
							<div class="page-sitemap__content">
								<ul>
									<?php
									for ($i = 0; $i < 3; $i++) :
										$item = $array_header_nav_link[$i];
									?>
										<li>
											<a href="<?php echo esc_url(home_url() . '/' . $item[3]); ?>">
												<?php echo esc_html($item[0]); ?>
											</a>
										</li>
									<?php endfor; ?>
								</ul>
								<div class="page-sitemap__content--detail">
									<h4>エリアから探す</h4>
									<ul>
										<?php foreach ($array_region_sitemap as $item) : ?>
											<li>
												<a href="<?php echo esc_url(home_url() . '/?s=&region=' . $item); ?>">
													<?php echo esc_html($item); ?>
												</a>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
								<div class="page-sitemap__content--detail">
									<h4>特徴から探す</h4>
									<ul>
										<?php foreach ($array_academic as $item) : ?>
											<li>
												<a href="<?php echo esc_url(home_url() . '/?s=&academic=' . $item[0][0]); ?>">
													<?php echo esc_html($item[0][0]); ?>
												</a>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
							</div><!-- /.page-sitemap__content -->
						</div><!-- /.page-sitemap__category -->

						<div class="page-sitemap__category">
							<h3>各種リンク</h3>
							<div class="page-sitemap__content">
								<ul>
									<?php foreach ($array_sitemap_link as $item) :
										if ($item[3] == 'sitemap') :
											continue;
										endif;
									?>

										<li>
											<a href="<?php echo esc_url(home_url() . '/' . $item[3]); ?>">
												<?php echo esc_html($item[0]); ?>
											</a>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div><!-- /.page-sitemap__category -->

					</div><!-- /.page-sitemap__inner -->
				</main>
			</div>
		</div>

		<?php get_template_part('src-php/10_common/_footer'); ?>
	</div>

	<?php get_footer(); ?>
</body>

</html>