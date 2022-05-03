<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_header(); ?>
</head>

<body>
	<div class="archive-content">

		<?php get_template_part('src-php/10_common/_header'); ?>

		<div class="inner narrow pt-60 pb-120">
			<p class="content-pickup__BreadC pb-40"><a href="<?php echo home_url(); ?>/studying/">留学情報</a> &gt; <?php echo $content_cat; ?></p>

			<h2 class="page-title custom-search__title">
				留学情報<br>
				<span class="lang-china"><span class="lang-china-han">留学情報(外1)　</span><span class="lang-china-kan">留学情報(外2)</span></span>
			</h2>
			<!--div class="flex-container pt-40"-->
			<div class="container pt-40">
				<!-- メイン -->
				<!--main class="main narrow"-->
				<main>
					<section class="archive-content__content-pickup">
						<?php get_template_part('src-php/20_component/02_content/_content-pickup'); ?>
					</section>
				</main>
			</div>
		</div>

		<?php get_template_part('src-php/10_common/_footer'); ?>
	</div>

	<?php get_footer(); ?>
</body>

</html>