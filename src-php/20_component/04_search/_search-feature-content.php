<!-- データ -->
<?php global $array_feature; ?>

<!-- 本文 -->
<div class="search-feature-content__content">
	<ul class="search-feature-content__list">
		<?php foreach ($array_feature as $item) : ?>
			<li class="search-feature-content__item">
				<form role="search" method="get" action="<?php echo esc_url(home_url() . '/'); ?>">
					<div>
						<input type="hidden" name='s'>
						<input type="hidden" name='kind' value='<?php the_field('kind') ?>'>
						<input type="hidden" name='feature' value='<?php echo $item[0]; ?>'>
						<button type="submit">
							<?php echo esc_html($item[0]); ?><br>
							<span class="lang-china lang-china-han"><?php echo esc_html($item[1]); ?></span>
							<span class="lang-china lang-china-kan"><?php echo esc_html($item[2]); ?></span>
						</button>
					</div>
				</form>
			</li>
		<?php endforeach; ?>
	</ul><!-- /.search-feature-content__list -->
</div><!-- /.search-feature-content__content -->