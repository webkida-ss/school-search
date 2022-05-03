<div class="school-opencanpas">
	<div class="school-opencanpas__container">

		<section class="school-opencanpas__item">
			<h3 class="section-title school-opencanpas__item--title">オープンキャンパスの情報</h3>
			<div class="school-opencanpas__item--content">
				<?php the_field('school_oc'); ?>
				<br /><br />
				<form action="<?php echo esc_html(home_url() . '/request-opencampus/?post_id=' . get_the_ID()); ?>" method="post">
					<button type="button">申込</button>
				</form>
			</div>
		</section><!-- /.school-opencanpas__item -->

		<section class="school-opencanpas__item lang-china-han">
			<h3 class="section-title school-opencanpas__item--title">オープンキャンパスの情報(外1)</h3>
			<div class="school-opencanpas__item--content">
				<?php the_field('school_oc_ch_han'); ?>
				<br /><br />
				<form action="<?php echo esc_html(home_url() . '/request-opencampus/?post_id=' . get_the_ID()); ?>" method="post">
					<button type="button">申込</button>
				</form>
			</div>
		</section><!-- /.school-opencanpas__item -->

		<section class="school-opencanpas__item lang-china-kan">
			<h3 class="section-title school-opencanpas__item--title">オープンキャンパスの情報(外2)</h3>
			<div class="school-opencanpas__item--content">
				<?php the_field('school_oc_ch_kan'); ?>
				<br /><br />
				<form action="<?php echo esc_html(home_url() . '/request-opencampus/?post_id=' . get_the_ID()); ?>" method="post">
					<button type="button">申込</button>
				</form>
			</div>
		</section><!-- /.school-opencanpas__item -->

	</div>
</div>

<script>
	jQuery(".school-opencanpas__item--content button").on("click", function() {
		jQuery(this).closest("form").submit();
	});
</script>