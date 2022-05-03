<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_header(); ?>
</head>

<body>
	<div class="search">

		<?php get_template_part('src-php/10_common/_header'); ?>

		<div class="inner narrow pt-60 pb-120">
			<h2 class="page-title search__title">
				絞り込み検索<br>
				<span class="lang-china">
					<span class="lang-china-han">絞り込み検索(外1)　</span>
					<span class="lang-china-kan">絞り込み検索(外2)</span>
				</span>
			</h2>
			<div class="container pt-40">
				<!-- メイン -->
				<main class="main one-column">
					<section class="search__search-result">
						<?php get_template_part('src-php/20_component/04_search/_search-result'); ?>
					</section>
				</main>
			</div>
		</div>

		<?php get_template_part('src-php/10_common/_footer'); ?>
	</div>

	<?php get_footer(); ?>
</body>

</html>