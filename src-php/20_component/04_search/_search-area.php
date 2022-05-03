<!-- データ -->
<?php global $array_area_search; ?>

<!-- 本文 -->
<div class="search-area">

	<div class="search-area__container">
		<h3 class="search-area__title">エリアから<?php the_title(); ?>
			<span class="lang-china">
				<span class="lang-china-han">エリアから<?php the_title(); ?>(外1)　</span>
				<span class="lang-china-kan">エリアから<?php the_title(); ?>(外2)</span>
			</span>
		</h3>
		<div class="search-area__content">
			<?php foreach ($array_area_search as $region) :  ?>
				<div class="search-area__item <?php echo $region[0]; ?>">
					<form role="search" method="get" action="<?php echo esc_url(home_url() . '/'); ?>">
						<div>
							<input type="hidden" name='s'>
							<input type="hidden" name='kind' value='<?php the_field('kind') ?>'>
							<input type="hidden" name='region' value='<?php echo $region[1]; ?>'>
							<button type="submit">
								<span class="search-area__item--title">
									<?php echo $region[1]; ?>エリア
									<br>
									<span class="lang-china">
										<span class="lang-china-han"><?php echo $region[2]; ?></span>
										<br>
										<span class="lang-china-kan"><?php echo $region[3]; ?></span>
									</span>
								</span>
								<span class="search-area__item--text">
									<?php foreach ($region[4] as $prefecture) : ?>
										<?php echo $prefecture; ?><br>
									<?php endforeach; ?>
								</span>
							</button>
						</div>
					</form>
				</div>
			<?php endforeach; ?>
		</div><!-- /.search-area__content -->
	</div><!-- /.search-area__container -->

</div>