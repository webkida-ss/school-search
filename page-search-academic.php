<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_header(); ?>
</head>

<body>
	<div class="page-search-academic">




		<?php get_template_part('src-php/10_common/_header'); ?>




		<div class="inner narrow pt-60 pb-120">
			<div class="container">
				<h2 class="page-title page-search-academic__title">
					<?php the_title(); ?><br>
					<span class="lang-china">
						<span class="lang-china-han">特徴から探す(外1)　</span>
						<span class="lang-china-kan">特徴から探す(外2)</span>
					</span>
				</h2>
				<!-- メイン -->
				<main class="main one-column">
					<!-- 興味がある学問 -->
					<section class="page-search-academic__search-academic-check">
						<?php get_template_part('src-php/20_component/04_search/_search-academic-check'); ?>
					</section>
					<section class="page-search-academic__search-feature-check">
						<?php get_template_part('src-php/20_component/04_search/_search-feature-check'); ?>
					</section>
				</main>
			</div>
		</div>




		<?php get_template_part('src-php/10_common/_footer'); ?>
	</div>

	<?php get_footer(); ?>
</body>

</html>