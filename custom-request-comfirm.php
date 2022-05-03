<?php

/**
 * カスタムテンプレート
 * Template Name: 資料請求/オープンキャンパス - 確認
 */
?>


<!-- 本文 -->
<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_header(); ?>
</head>

<body>
	<div class="contact">

		<?php get_template_part('src-php/10_common/_header'); ?>

		<div class="inner narrow pt-60 pb-120">
			<div class="container">
				<main class="main one-column">
					<div class="contact__form">
						<?php the_content(); ?>
					</div>
				</main>
			</div>
		</div>

		<?php get_template_part('src-php/10_common/_footer'); ?>
	</div>

	<?php get_footer(); ?>
</body>

</html>