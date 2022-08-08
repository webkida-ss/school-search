<?php
$page = get_page(get_the_ID());
$slug = $page->post_name;
?>

<!-- 本文 -->
<div class="search-academic">
	<div class="search-academic__container">
		<?php if ($slug === 'search-speciality') { ?>
			<!-- データ -->
			<?php global $array_field; ?>

			<h3 class="search-academic__title">分野から<?php the_title(); ?>
				<span class="lang-china">
					<span class="lang-china-han">分野から<?php the_title(); ?>(外1)　</span>
					<span class="lang-china-kan">分野から<?php the_title(); ?>(外2)</span>
				</span>
			</h3>
			<div class="search-academic__content">
				<ul class="search-academic__list">
					<?php foreach ($array_field as $field) : ?>
						<li class="search-academic__item search-academic__item01">
							<form role="search" method="get" action="<?php echo esc_url(home_url() . '/'); ?>">
								<div>
									<input type="hidden" name='s'>
									<input type="hidden" name='kind' value='<?php the_field('kind'); ?>'>
									<input type="hidden" name='academic' value='<?php echo $field[0]; ?>'>
									<button type="submit">
										<?php echo $field[0]; ?><br>
										<span class="lang-china">
											<span class="lang-china-han"><?php echo $field[1]; ?></span>
											<span class="lang-china-kan"><?php echo $field[2]; ?></span>
										</span>
									</button>
								</div>
							</form>
						</li>
					<?php endforeach; ?>
				</ul><!-- /.search-academic__list -->
			</div><!-- /.search-academic__content -->
		<?php } else if ($slug === 'search-college') { ?>
			<!-- データ -->
			<?php global $array_academic; ?>

			<h3 class="search-academic__title">学問から<?php the_title(); ?>
				<span class="lang-china">
					<span class="lang-china-han">学問から探す(外1)　</span>
					<span class="lang-china-kan">学問から探す(外2)</span>
				</span>
			</h3>
			<div class="search-academic__content">
				<ul class="search-academic__list">
					<?php foreach ($array_academic as $item) : $academic = $item[0]; ?>
						<li class="search-academic__item">
							<form role="search" method="get" action="<?php echo esc_url(home_url() . '/'); ?>">
								<div>
									<input type="hidden" name='s'>
									<input type="hidden" name='kind' value='<?php the_field('kind'); ?>'>
									<input type="hidden" name='academic' value='<?php echo $academic[0]; ?>'>
									<button type="submit">
										<?php echo $academic[0]; ?><br>
										<span class="lang-china">
											<span class="lang-china-han"><?php echo $academic[1]; ?>　</span>
											<span class="lang-china-kan"><?php echo $academic[2]; ?></span>
										</span>
									</button>
								</div>
							</form>
						</li>
					<?php endforeach; ?>
				</ul><!-- /.search-academic__list -->
			</div><!-- /.search-academic__content -->
		<?php } ?>
	</div><!-- /.search-academic__container -->

</div>