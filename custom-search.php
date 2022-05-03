<?php

/**
 * カスタムテンプレート
 * Template Name: 学校を探す
 */
$page = get_page(get_the_ID());
$slug = $page->post_name;
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_header(); ?>
</head>

<body>
	<div class="custom-search">

		<?php get_template_part('src-php/10_common/_header'); ?>

		<div class="inner narrow">
			<div class="container pt-60 pb-120">
				<h2 class="page-title custom-search__title">
					<?php the_title(); ?><br>
					<span class="lang-china">
						<?php if ($slug === 'search-college') { ?>
							<span class="lang-china-han">大学・短大を探す(外1)　</span>
							<span class="lang-china-kan">大学・短大を探す(外2)</span>
						<?php } else if ($slug === 'search-speciality') { ?>
							<span class="lang-china-han">専門学校を探す(外1)　</span>
							<span class="lang-china-kan">専門学校を探す(外2)</span>
						<?php } ?>
					</span>

				</h2>
				<!-- メイン -->
				<main class="main one-column">
					<section class="custom-search__search-free">
						<?php get_template_part('src-php/20_component/04_search/_search-free'); ?>
					</section>
					<section class="custom-search__search-area">
						<?php get_template_part('src-php/20_component/04_search/_search-area'); ?>
					</section>
					<section class="custom-search__search-academic">
						<?php get_template_part('src-php/20_component/04_search/_search-academic'); ?>
					</section>
					<section class="custom-search__search-feature">
						<?php get_template_part('src-php/20_component/04_search/_search-feature'); ?>
					</section>
				</main>
			</div>
		</div>




		<?php get_template_part('src-php/10_common/_footer'); ?>
	</div>

	<?php get_footer(); ?>
</body>

</html>