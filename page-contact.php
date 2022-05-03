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
				<h2 class="page-title contact__title">
					<?php the_title(); ?>
					<span class="lang-china">
						<span class="lang-china-han">お問い合わせ(外1)　</span>
						<span class="lang-china-kan">お問い合わせ(外2)</span>
					</span>
				</h2>
				<main class="main one-column">
					<div class="contact__form">
						<?php echo do_shortcode('[mwform_formkey key="386"]'); ?>
					</div>
				</main>
			</div>
		</div>

		<?php get_template_part('src-php/10_common/_footer'); ?>
	</div>

	<?php get_footer(); ?>
</body>

</html>