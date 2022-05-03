<div class="school-base">

	<div class="school-base__container">

		<section class="school-base__top">
			<ul class="school-base__top--list">
				<!-- 1つ目サムネイル -->
				<li><img src="<?php the_post_thumbnail_url(); ?>"></li>
				<?php if (have_rows('school_base_img_list')) : ?>
					<!-- 2つ目以降サブ画像 -->
					<?php while (have_rows('school_base_img_list')) : the_row(); ?>
						<li><img src="<?php the_sub_field('school_base_img'); ?>"></li>
					<?php endwhile; ?>
				<?php endif; ?>
			</ul><!-- /.school-base__top--list -->
		</section><!-- /.school-base__top -->

		<section class="school-base__item">
			<h3 class="section-title school-base__item--title">メッセージ</h3>
			<div class="school-base__item--content">
				<?php the_field('school_base_msg'); ?>
			</div><!-- /.school-base__item--content -->
		</section><!-- /.school-base__item -->

		<section class="school-base__item lang-china-han">
			<h3 class="section-title school-base__item--title">メッセージ(外1)</h3>
			<div class="school-base__item--content">
				<?php the_field('school_base_msg_ch_han'); ?>
			</div><!-- /.school-base__item--content -->
		</section><!-- /.school-base__item -->

		<section class="school-base__item lang-china-kan">
			<h3 class="section-title school-base__item--title">メッセージ(外2)</h3>
			<div class="school-base__item--content">
				<?php the_field('school_base_msg_ch_kan'); ?>
			</div><!-- /.school-base__item--content -->
		</section><!-- /.school-base__item -->

	</div><!-- /.school-base__container -->

	<script>
		jQuery(window).bind('load', function() {
			jQuery('.school-base__top--list').slick({
				autoplay: false,
				dots: true,
				slidesToShow: 1,
			});
		});
	</script>

</div>