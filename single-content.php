<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_header(); ?>
</head>

<body>
	<div class="single-content">

		<?php get_template_part('src-php/10_common/_header'); ?>

		<div class="inner narrow pt-60 pb-120">
			<div class="flex-container pt-40">
				<!-- メイン -->
				<main class="main narrow">
					<?php
					$post_terms = get_the_terms(get_the_ID(), 'content_category');
					?>

					<p class="content-pickup__BreadC pb-40"><a href="<?php echo home_url(); ?>/studying/">留学情報</a> &gt; <a href="<?php echo home_url(); ?>/content/?content_cat=<?php echo $post_terms[0]->name; ?>"><?php echo $post_terms[0]->name; ?></a></p>
					<section class="single-content__content-detail">
						<?php get_template_part('src-php/20_component/02_content/_content-detail'); ?>
					</section>
				</main>
				<!-- サイドバー -->
				<aside class="aside narrow">
					<?php get_sidebar(); ?>
				</aside>
			</div>
		</div>

		<?php get_template_part('src-php/10_common/_footer'); ?>
	</div>

	<?php get_footer(); ?>
</body>

</html>