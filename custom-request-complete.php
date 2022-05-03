<?php

/**
 * カスタムテンプレート
 * Template Name: 資料請求/オープンキャンパス - 完了
 */
?>

<?php
$page = get_page(get_the_ID());
$slug = $page->post_name;
?>

<!-- 本文 -->
<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_header(); ?>
</head>

<body>
	<div class="contact <?php echo $slug; ?>">

		<?php get_template_part('src-php/10_common/_header'); ?>

		<div class="inner narrow pt-60 pb-120">
			<div class="container">
				<main class="main one-column">
					<section class="contact-complete__form">
						<?php the_content(); ?>
					</section>
					<section class="contact-complete__register">
						<?php get_template_part('src-php/20_component/05_contact/_contact-register'); ?>
					</section>
				</main>
			</div>
		</div>

		<?php get_template_part('src-php/10_common/_footer'); ?>
	</div>

	<?php get_footer(); ?>
</body>

</html>