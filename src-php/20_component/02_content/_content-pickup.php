<div class="content-pickup">

	<?php
	$content_cat = get_query_var('content_cat');
	if (empty($content_cat)) {
		$content_cat = "進学情報";
	}


	$the_term = get_term_by('slug', $content_cat, 'content_category');
	$term_id = $the_term->term_id;
	$term_idsp = 'content_category' . "_" . $term_id;
	$han = get_field('han', $term_idsp);
	$kan = get_field('kan', $term_idsp);

	if (empty($han)) {
		$han = $content_cat;
	}
	if (empty($kan)) {
		$kan = $content_cat;
	}

	$args = array(
		'post_type' => 'content', 'posts_per_page' => -1, 'order' => 'DESC', 'orderby' => 'post_date', 'tax_query' => array(array('taxonomy' => 'content_category', 'field' => 'name', 'terms' => $content_cat, 'operator' => 'IN'))
	);
	$posts = get_posts($args);
	?>
	<h3 class="section-title content-pickup__title">
		<?php echo $content_cat; ?>
		<span class="lang-china">
			<span class="lang-china-han"><?php echo $han; ?></span>　<span class="lang-china-kan"><?php echo $kan; ?></span>
		</span>
	</h3>

	<div class="content-pickup__container">
		<ul class="content-pickup__list">
			<?php if (count($posts) === 0) { ?>
				<li class="content-pickup__item">
					<div class="content-pickup__item--content">
						<div class="content-pickup__item--text">
							該当の留学情報はありません。
						</div>
					</div>
				</li><!-- /.content-pickup__item -->
				<?php
			} else {
				foreach ($posts as $post) {
					setup_postdata($post);

					$date = get_the_time('Y/m/d');
					$title = get_the_title();
					$permalink = get_permalink();
				?>
					<li class="content-pickup__item">
						<a href="<?php echo $permalink; ?>">
							<div class="content-pickup__item--content">
								<div class="content-pickup__item--date"><?php echo $date; ?></div>
								<div class="content-pickup__item--title"><?php echo $title; ?></div>
							</div>
						</a>
					</li><!-- /.content-pickup__item -->
			<?php
				}
			}
			?>
		</ul><!-- /.content-pickup__list -->
	</div><!-- /.content-pickup__container -->

</div>