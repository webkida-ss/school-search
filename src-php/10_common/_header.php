<!-- データ -->
<?php global $array_header_nav_link; ?>

<!-- 本文 -->
<header>

	<div class="header__inner">

		<!-- トップ -->
		<div class="inner header__top">
			<ul>
				<!-- トップページ -->
				<li class="header__top--logo">
					<a href="<?php echo esc_url(home_url()); ?>">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/10_common/header/logo.png'); ?>" alt="alt">
					</a>
				</li>
				<!-- お問い合わせ -->
				<li class="header__top--contact">
					<a href="<?php echo esc_url(home_url() . '/contact'); ?>">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/10_common/header/btn_contact.png'); ?>" alt="alt">
					</a>
				</li>
			</ul>
		</div><!-- /.header__top -->

		<!-- トップ：スマホ -->
		<div class="inner header__top-sp">
			<ul>
				<!-- トップページ -->
				<li class="header__top-sp--logo">
					<a href="<?php echo esc_url(home_url()); ?>">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/10_common/header/logo.png'); ?>" alt="alt">
					</a>
				</li>
				<!-- 開くボタン -->
				<li class="header__top-sp--menu for-drawer" id="js-drawer" data-target="for-drawer">
					<img class="for-drawer" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/10_common/header/btn_navi_open.png'); ?>" alt="alt">
				</li>
			</ul>
		</div><!-- /.header__top-sp -->

		<!-- ナビゲーション -->
		<div class="header__nav for-drawer">
			<nav class="inner">
				<ul>
					<?php foreach ($array_header_nav_link as $key => $item) : ?>
						<li class="<?php if ($key === 3) { ?>sub_menu_on<?php } ?>">
							<a href="<?php echo esc_url(home_url() . '/' . $item[3]); ?>" class="js-drawer-item">
								<?php echo esc_html($item[0]); ?><?php if ($key === 3) { ?>　<p class="arrow_down">▼</p>
								<p class="arrow_up">▲</p><?php } ?><br>
							<span class="lang-china">
								<span class="lang-china-han">
									<?php echo esc_html($item[1]); ?>
								</span>
								<br>
								<span class="lang-china-kan">
									<?php echo esc_html($item[2]); ?>
								</span>
							</span>
							</a>
							<?php if ($key === 3) { ?>
								<ul class="sub_menu" id="item_3">
									<?php
									$terms = get_terms('content_category', array('hide_empty' => false, 'orderby' => 'order'));
									foreach ($terms as $term) {
									?>
										<li>
											<a href="<?php echo esc_url(home_url() . '/content/?content_cat=' . $term->name); ?>">
												<?php echo $term->name; ?><br>
												<span class="lang-china">
													<?php
													$han = "";
													$kan = "";
													if ($term->name === '進学情報') {
														$han = "進学情報(外1)";
														$kan = "進学情報(外2)";
													} else if ($term->name === '留学生インタビュー') {
														$han = "留学生インタビュー(外1)";
														$kan = "留学生インタビュー(外2)";
													} else if ($term->name === '留学最新情報') {
														$han = "留学最新情報(外1)";
														$kan = "留学最新情報(外2)";
													} else if ($term->name === '日本生活') {
														$han = "日本生活(外1)";
														$kan = "日本生活(外2)";
													} else if ($term->name === '日本語') {
														$han = "日本語(外1)";
														$kan = "日本語(外2)";
													} else if ($term->name === '日本文化') {
														$han = "日本文化(外1)";
														$kan = "日本文化(外2)";
													}
													?>
													<span class="lang-china-han"><?php echo $han; ?></span>
													<br>
													<span class="lang-china-kan"><?php echo $kan; ?></span>
												</span>
											</a>
										</li>
									<?php
									}
									?>
								</ul>
							<?php } ?>
						</li>
					<?php endforeach; ?>
				</ul>
			</nav>
		</div><!-- /.header__nav -->

		<div class="header__close for-drawer" id="js-drawer-close" data-target="for-drawer">
			<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/10_common/header/btn_navi_close.png'); ?>" alt="alt">
		</div>

		<!-- ドロワー背景：ドロワー開いている場合のみ表示 -->
		<div class="header__drawer-bg for-drawer"></div>

	</div><!-- /.inner header__inner -->
</header>