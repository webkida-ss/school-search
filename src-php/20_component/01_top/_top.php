<div class="top">
	<div class="top__top-img">
		<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/20_component/top/image_01.jpg'); ?>" alt="alt">
	</div>
	<div class="top__bunnar-slider">
		<div class="top__bunnar">
			<div class="top__bunnar--img">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/20_component/top/banner_01.png'); ?>" alt="alt">
			</div>
			<div class="top__bunnar--img">
				<a href="<?php echo esc_url(home_url() . '/request-doc/'); ?>">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/20_component/top/banner_02.png'); ?>" alt="alt">
				</a>
			</div>
			<div class="top__bunnar--img">
				<a href="<?php echo esc_url(home_url() . '/studying/'); ?>">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/20_component/top/banner_03.png'); ?>" alt="alt">
				</a>
			</div>
		</div><!-- /.top__bunnar -->
	</div>
</div>

<script>
	jQuery(window).bind('load', function() {
		jQuery('.top__bunnar').slick({
			autoplay: false,
			dots: false,
			slidesToShow: 2,
			prevArrow: '<div class="slide-arrow prev-arrow">',
			nextArrow: '<div class="slide-arrow next-arrow">'
		});
	});
</script>