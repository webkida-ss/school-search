<div class="sidebar">
	<?php
	wp_reset_postdata();

	$page = get_page(get_the_ID());
	if ($page->post_type === 'content') {
	?>
		<!-- 新着情報 -->
		<div class="sidebar__news">
			<p class="sidebar__news--title">新着記事
				<span class="lang-china">
					<span class="lang-china-han">新着記事(外1) </span>
					<span class="lang-china-kan">新着記事(外2)</span>
				</span>
			</p>
			<ul class="sidebar__news--list">
				<?php
				$args = array('post_type' => 'content', 'posts_per_page' => 5, 'order' => 'DESC', 'orderby' => 'post_date');
				$posts = get_posts($args);
				if (count($posts) === 0) {
				?>
					<li class="sidebar__news--item">新着記事はありません</li>
					<?php
				} else {
					foreach ($posts as $post) {
						setup_postdata($post);

						$title = get_the_title();
						$date = get_the_time('Y-m-d');
					?>
						<li class="sidebar__news--item">
							<a href="<?php the_permalink(); ?>">
								<time><?php echo $date; ?></time>
								<p><?php echo $title; ?></p>
							</a>
						</li>
				<?php
					}
				}
				wp_reset_postdata();
				?>
			</ul>
		</div><!-- /.sidebar__news -->
	<?php
	} else {
	?>

		<!-- 新着情報 -->
		<div class="sidebar__news">
			<p class="sidebar__news--title">新着情報
				<span class="lang-china">
					<span class="lang-china-han">新着情報(外1) </span>
					<span class="lang-china-kan">新着情報(外2)</span>
				</span>
			</p>
			<ul class="sidebar__news--list">
				<?php
				$args = array('category_name' => 'news', 'posts_per_page' => 5, 'order' => 'DESC', 'orderby' => 'post_date');
				$posts = get_posts($args);
				if (count($posts) === 0) {
				?>
					<li class="sidebar__news--item">新着情報はありません</li>
					<?php
				} else {
					foreach ($posts as $post) {
						setup_postdata($post);

						$title = get_the_content();
						$date = get_the_time('Y.m.d');
					?>
						<li class="sidebar__news--item">
							<time><?php echo $date; ?></time>
							<p><?php echo $title; ?></p>
						</li>
				<?php
					}
				}
				wp_reset_postdata();
				?>
			</ul>
		</div><!-- /.sidebar__news -->

		<!-- 新規掲載校 -->
		<div class="sidebar__school">
			<p class="sidebar__school--title">新規掲載校
				<span class="lang-china">
					<span class="lang-china-han">新規掲載校(外1) </span>
					<span class="lang-china-kan">新規掲載校(外2)</span>
				</span>

			</p>
			<ul class="sidebar__school--list">
				<?php
				$args = array(
					'post_type'        => 'school',
					'posts_per_page'   => 4,
					'orderby'          => 'date',
					'order'            => 'DESC',
				);
				$posts_array = get_posts($args);
				if (count($posts_array) === 0) {
				?>
					<li class="sidebar__news--item">新規掲載校はありません</li>
					<?php
				} else {
					foreach ($posts_array as $post) {

						setup_postdata($post);

						$school_name_han = get_field('school_name_han', $post->ID);
						if (empty($school_name_han)) {
						}
						$school_name_han = get_the_title($post->ID);
						$school_name_kan = get_field('school_name_kan', $post->ID);
						if (empty($school_name_kan)) {
							$school_name_kan = get_the_title($post->ID);
						}
					?>
						<li class="sidebar__school--item">
							<time><?php echo get_the_date("Y.m.d", $post->ID); ?></time>
							<p>
								<?php echo get_the_title($post->ID); ?><br>
								<span class="lang-china">
									<span class="lang-china-han"><?php echo $school_name_han; ?></span>
									<br>
									<span class="lang-china-kan"><?php echo $school_name_kan; ?></span>
								</span>
							</p>
						</li>
				<?php
					}
				}
				wp_reset_postdata();
				?>
			</ul><!-- /.sidebar__school--list -->
			<div class="sidebar__school--link">
				<a href="<?php echo esc_url(home_url() . '/?s='); ?>">もっと見る<br>
					<span class="lang-china">
						<span class="lang-china-han">もっと見る(外1)　</span>
						<span class="lang-china-kan">もっと見る(外2)</span>
					</span>
				</a>
			</div>
		</div><!-- /.sidebar__school -->
	<?php } ?>

</div>