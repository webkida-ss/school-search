<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_header(); ?>
</head>

<body>
	<div class="front-page">

		<?php get_template_part('src-php/10_common/_header'); ?>
		<?php get_template_part('src-php/20_component/04_search/_search-box'); ?>

		<div class="inner flex-container pt-50 pb-120">
			<!-- メイン -->
			<main class="main">
				<div class="front-page__top">
					<?php get_template_part('src-php/20_component/01_top/_top'); ?>
				</div>
				<section class="front-page__top-search">
					<?php get_template_part('src-php/20_component/01_top/_top-search'); ?>
				</section>
				<section class="front-page__top-school">
					<?php get_template_part('src-php/20_component/01_top/_top-school'); ?>
				</section>
				<section class="front-page__top-news">
					<?php get_template_part('src-php/20_component/01_top/_top-news'); ?>
				</section>
			</main>
			<!-- サイドバー -->
			<aside class="aside">
				<?php get_sidebar(); ?>
			</aside>
		</div>




		<?php get_template_part('src-php/10_common/_footer'); ?>
	</div>

	<?php get_footer(); ?>
</body>

</html>