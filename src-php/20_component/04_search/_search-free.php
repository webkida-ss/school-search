<?php
$page = get_page(get_the_ID());
$slug = $page->post_name;
?>
<div class="search-free">

	<div class="search-free__container">
		<h3 class="search-free__title">フリーワードから<?php the_title(); ?>
			<span class="lang-china">
				<?php if ($slug === 'search-college') { ?>
					<span class="lang-china-han">フリーワードから大学・短大を探す(外1)　</span>
					<span class="lang-china-kan">フリーワードから大学・短大を探す(外2)</span>
				<?php } else if ($slug === 'search-speciality') { ?>
					<span class="lang-china-han">フリーワードから専門学校を探す(外1)　</span>
					<span class="lang-china-kan">フリーワードから専門学校を探す(外2)</span>
				<?php } ?>
			</span>
		</h3>
		<div class="search-free__content">
			<form role="search" method="get" action="<?php echo esc_url(home_url() . '/'); ?>">
				<div class="search-free__input">
					<input type="text" name='s'>
					<input type="hidden" name='kind' value='<?php the_field('kind'); ?>'>
					<button type="submit"><i class="fas fa-search"></i></button>
				</div>
			</form>
		</div><!-- /.search-free__content -->
	</div><!-- /.search-free__container -->

</div>