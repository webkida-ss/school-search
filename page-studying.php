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
				<!--p class="content-pickup__BreadC pb-40">留学情報</p-->

				<h2 class="page-title custom-search__title">
					留学情報<br>
					<span class="lang-china"><span class="lang-china-han">留学情報(外1)　</span><span class="lang-china-kan">留学情報(外2)</span></span>
				</h2>
				<div class="container pt-40">
					<!-- メイン -->
					<main>
						<section class="archive-content__content-pickup">
							<ul class="top-news__list">
								<li class="top-news__item">
									<div class="top-news__item--img">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/20_component/top/info_01.jpg'); ?>" alt="alt">
									</div>
									<div class="top-news__item--content">
										<h4 class="top-news__item--title">
											進学情報
											<span class="lang-china">
												<span class="lang-china-han">進学情報(外1)</span>　<span class="lang-china-kan">進学情報(外2)</span>
											</span>
										</h4>
										<div class="top-news__item--text">
											<ul>
												<?php
												$cnt = 0;
												$args = array(
													'post_type' => 'content', 'posts_per_page' => 5, 'order' => 'DESC', 'orderby' => 'post_date', 'tax_query' => array(array('taxonomy' => 'content_category', 'field' => 'name', 'terms' => '進学情報', 'operator' => 'IN'))
												);
												$posts = get_posts($args);
												if (count($posts) === 0) {
													$cnt = 5;
												?>
													<li>該当の留学情報はありません。</li>
													<li class="space">&nbsp;</li>
													<li class="space">&nbsp;</li>
													<li class="space">&nbsp;</li>
													<li class="space">&nbsp;</li>
												<?php
												}
												foreach ($posts as $post) {
													setup_postdata($post);

													$cnt++;

													$title = get_the_title();
													$permalink = get_permalink();
												?>
													<li><a href="<?php echo $permalink; ?>">・<?php echo $title; ?></a></li>
												<?php
												}
												for ($i = $cnt; $i < 5; $i++) {
												?>
													<li class="space">&nbsp;</li>
												<?php
												}
												?>
											</ul>
											<div class="button"><a href="<?php echo home_url(); ?>/content/?content_cat=進学情報">一覧</a></div>
										</div>
									</div>
								</li>
								<li class="top-news__item">
									<div class="top-news__item--img">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/20_component/top/info_02.jpg'); ?>" alt="alt">
									</div>
									<div class="top-news__item--content">
										<h4 class="top-news__item--title">
											留学生インタビュー
											<span class="lang-china">
												<span class="lang-china-han">留學生經驗談</span>　<span class="lang-china-kan">留学生访谈</span>
											</span>
										</h4>
										<div class="top-news__item--text">
											<ul>
												<?php
												$cnt = 0;
												$args = array(
													'post_type' => 'content', 'posts_per_page' => 5, 'order' => 'DESC', 'orderby' => 'post_date', 'tax_query' => array(array('taxonomy' => 'content_category', 'field' => 'name', 'terms' => '留学生インタビュー', 'operator' => 'IN'))
												);
												$posts = get_posts($args);
												if (count($posts) === 0) {
													$cnt = 5;
												?>
													<li>該当の留学情報はありません。</li>
													<li class="space">&nbsp;</li>
													<li class="space">&nbsp;</li>
													<li class="space">&nbsp;</li>
													<li class="space">&nbsp;</li>
												<?php
												}
												foreach ($posts as $post) {
													setup_postdata($post);

													$cnt++;

													$title = get_the_title();
													$permalink = get_permalink();
												?>
													<li><a href="<?php echo $permalink; ?>">・<?php echo $title; ?></a></li>
												<?php
												}
												for ($i = $cnt; $i < 5; $i++) {
												?>
													<li class="space">&nbsp;</li>
												<?php
												}
												?>
											</ul>
											<div class="button"><a href="<?php echo home_url(); ?>/content/?content_cat=留学生インタビュー">一覧</a></div>
										</div>
									</div>
								</li>
								<li class="top-news__item">
									<div class="top-news__item--img">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/20_component/top/info_03.jpg'); ?>" alt="alt">
									</div>
									<div class="top-news__item--content">
										<h4 class="top-news__item--title">
											留学最新情報
											<span class="lang-china">
												<span class="lang-china-han">留学最新情報(外1)</span>　<span class="lang-china-kan">留学最新情報(外2)</span>
											</span>
										</h4>
										<div class="top-news__item--text">
											<ul>
												<?php
												$cnt = 0;
												$args = array(
													'post_type' => 'content', 'posts_per_page' => 5, 'order' => 'DESC', 'orderby' => 'post_date', 'tax_query' => array(array('taxonomy' => 'content_category', 'field' => 'name', 'terms' => '留学最新情報', 'operator' => 'IN'))
												);
												$posts = get_posts($args);
												if (count($posts) === 0) {
													$cnt = 5;
												?>
													<li>該当の留学情報はありません。</li>
													<li class="space">&nbsp;</li>
													<li class="space">&nbsp;</li>
													<li class="space">&nbsp;</li>
													<li class="space">&nbsp;</li>
												<?php
												}
												foreach ($posts as $post) {
													setup_postdata($post);

													$cnt++;

													$title = get_the_title();
													$permalink = get_permalink();
												?>
													<li><a href="<?php echo $permalink; ?>">・<?php echo $title; ?></a></li>
												<?php
												}
												for ($i = $cnt; $i < 5; $i++) {
												?>
													<li class="space">&nbsp;</li>
												<?php
												}
												?>
											</ul>
											<div class="button"><a href="<?php echo home_url(); ?>/content/?content_cat=留学最新情報">一覧</a></div>
										</div>
									</div>
								</li>
								<li class="top-news__item">
									<div class="top-news__item--img">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/20_component/top/info_04.jpg'); ?>" alt="alt">
									</div>
									<div class="top-news__item--content">
										<h4 class="top-news__item--title">
											日本生活
											<span class="lang-china">
												<span class="lang-china-han">日本生活(外1)</span>　<span class="lang-china-kan">日本生活(外2)</span>
											</span>
										</h4>
										<div class="top-news__item--text">
											<ul>
												<?php
												$cnt = 0;
												$args = array(
													'post_type' => 'content', 'posts_per_page' => 5, 'order' => 'DESC', 'orderby' => 'post_date', 'tax_query' => array(array('taxonomy' => 'content_category', 'field' => 'name', 'terms' => '日本生活', 'operator' => 'IN'))
												);
												$posts = get_posts($args);
												if (count($posts) === 0) {
													$cnt = 5;
												?>
													<li>該当の留学情報はありません。</li>
													<li class="space">&nbsp;</li>
													<li class="space">&nbsp;</li>
													<li class="space">&nbsp;</li>
													<li class="space">&nbsp;</li>
												<?php
												}
												foreach ($posts as $post) {
													setup_postdata($post);

													$cnt++;

													$title = get_the_title();
													$permalink = get_permalink();
												?>
													<li><a href="<?php echo $permalink; ?>">・<?php echo $title; ?></a></li>
												<?php
												}
												for ($i = $cnt; $i < 5; $i++) {
												?>
													<li class="space">&nbsp;</li>
												<?php
												}
												?>
											</ul>
											<div class="button"><a href="<?php echo home_url(); ?>/content/?content_cat=日本生活">一覧</a></div>
										</div>
									</div>
								</li>
								<li class="top-news__item">
									<div class="top-news__item--img">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/20_component/top/info_05.jpg'); ?>" alt="alt">
									</div>
									<div class="top-news__item--content">
										<h4 class="top-news__item--title">
											日本語
											<span class="lang-china">
												<span class="lang-china-han">日本語(外1)</span>　<span class="lang-china-kan">日本語(外2)</span>
											</span>
										</h4>
										<div class="top-news__item--text">
											<ul>
												<?php
												$cnt = 0;
												$args = array(
													'post_type' => 'content', 'posts_per_page' => 5, 'order' => 'DESC', 'orderby' => 'post_date', 'tax_query' => array(array('taxonomy' => 'content_category', 'field' => 'name', 'terms' => '日本語', 'operator' => 'IN'))
												);
												$posts = get_posts($args);
												if (count($posts) === 0) {
													$cnt = 5;
												?>
													<li>該当の留学情報はありません。</li>
													<li class="space">&nbsp;</li>
													<li class="space">&nbsp;</li>
													<li class="space">&nbsp;</li>
													<li class="space">&nbsp;</li>
												<?php
												}
												foreach ($posts as $post) {
													setup_postdata($post);

													$cnt++;

													$title = get_the_title();
													$permalink = get_permalink();
												?>
													<li><a href="<?php echo $permalink; ?>">・<?php echo $title; ?></a></li>
												<?php
												}
												for ($i = $cnt; $i < 5; $i++) {
												?>
													<li class="space">&nbsp;</li>
												<?php
												}
												?>
											</ul>
											<div class="button"><a href="<?php echo home_url(); ?>/content/?content_cat=日本語">一覧</a></div>
										</div>
									</div>
								</li>
								<li class="top-news__item">
									<div class="top-news__item--img">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/20_component/top/info_06.jpg'); ?>" alt="alt">
									</div>
									<div class="top-news__item--content">
										<h4 class="top-news__item--title">
											日本文化
											<span class="lang-china">
												<span class="lang-china-han">日本文化(外1)</span>　<span class="lang-china-kan">日本文化(外2)</span>
											</span>
										</h4>
										<div class="top-news__item--text">
											<ul>
												<?php
												$cnt = 0;
												$args = array(
													'post_type' => 'content', 'posts_per_page' => 5, 'order' => 'DESC', 'orderby' => 'post_date', 'tax_query' => array(array('taxonomy' => 'content_category', 'field' => 'name', 'terms' => '日本文化', 'operator' => 'IN'))
												);
												$posts = get_posts($args);
												if (count($posts) === 0) {
													$cnt = 5;
												?>
													<li>該当の留学情報はありません。</li>
													<li class="space">&nbsp;</li>
													<li class="space">&nbsp;</li>
													<li class="space">&nbsp;</li>
													<li class="space">&nbsp;</li>
												<?php
												}
												foreach ($posts as $post) {
													setup_postdata($post);

													$cnt++;

													$title = get_the_title();
													$permalink = get_permalink();
												?>
													<li><a href="<?php echo $permalink; ?>">・<?php echo $title; ?></a></li>
												<?php
												}
												for ($i = $cnt; $i < 5; $i++) {
												?>
													<li class="space">&nbsp;</li>
												<?php
												}
												?>
											</ul>
											<div class="button"><a href="<?php echo home_url(); ?>/content/?content_cat=日本文化">一覧</a></div>
										</div>
									</div>
								</li>
							</ul><!-- /.top-news__list -->

						</section>
					</main>
				</div>
			</div>
		</div>

		<?php get_template_part('src-php/10_common/_footer'); ?>
	</div>

	<?php get_footer(); ?>
</body>

</html>