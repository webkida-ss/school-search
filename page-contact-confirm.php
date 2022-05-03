<!-- 本文 -->
<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_header(); ?>
</head>

<body>
	<div class="contact-confirm">

		<?php get_template_part('src-php/10_common/_header'); ?>

		<div class="inner narrow pt-60 pb-120">
			<div class="container">
				<main class="main one-column">
					<section class="contact-confirm__form">
						<?php echo do_shortcode('[mwform_formkey key="386"]'); ?>
					</section>
				</main>
			</div>
		</div>

		<?php get_template_part('src-php/10_common/_footer'); ?>
	</div>

	<?php get_footer(); ?>
</body>

</html>