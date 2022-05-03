<!-- データ -->
<?php
$array_left = [
	['北海道・東北', '北海道・東北(外1)', '北海道・東北(外2)', '北海道,東北'],
	['関東', '関東(外1)', '関東(外2)', '関東'],
	['甲信越', '甲信越(外1)', '甲信越(外2)', '甲信越'],
	['東海', '東海(外1)', '東海(外2)', '東海']
];
$array_right = [
	['北陸', '北陸(外1)', '北陸(外2)', '北陸'],
	['近畿', '近畿(外1)', '近畿(外2)', '近畿'],
	['中国・四国', '中国・四国(外1)', '中国・四国(外2)', '中国,四国'],
	['九州・沖縄', '九州・沖縄(外1)', '九州・沖縄(外2)', '九州,沖縄'],
];
global $array_footer_link;
?>

<!-- 本文 -->
<footer class="footer">

	<nav class="footer__nav">
		<ul class="inner">
			<?php foreach ($array_footer_link as $item) : ?>
				<li>
					<a href="<?php echo esc_url(home_url() . '/' . $item[3]); ?>">
						<?php echo esc_html($item[0]); ?><br>
						<span class="lang-china">
							<span class="lang-china-han"><?php echo esc_html($item[1]); ?></span>
							<br>
							<span class="lang-china-kan"><?php echo esc_html($item[2]); ?></span>
						</span>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	</nav><!-- /.footer__nav -->

	<div class="inner footer__container">
		<div class="footer__inner">
			<div class="footer__list">
				<!-- 大学・短大を探す -->
				<div class="footer__item">
					<div class="footer__item--link">
						<a href="<?php echo esc_url(home_url() . '/search-college/'); ?>">
							<span>大学・短大を探す</span>
							<span class="lang-china-han">大学・短大を探す(外1)</span>
							<span class="lang-china-kan">大学・短大を探す(外2)</span>
						</a>
					</div>
					<div class="footer__item--context">
						<div class="footer__item--left">
							<?php foreach ($array_left as $item) : ?>
								<div class="footer__item--region">
									<?php
									$_item3 = explode(",", $item[3]);
									$item3 = '';
									foreach ($_item3 as $key => $value) {
										$item3 .= "&region[]=" . $value;
									}
									?>
									<a href="<?php echo esc_url(home_url() . '/?s=&kind=大学・短大' . $item3); ?>" class="footer__item--area">
										<?php echo $item[0]; ?></a>
									<a href="<?php echo esc_url(home_url() . '/?s=&kind=大学・短大' . $item3); ?>" class="footer__item--district lang-china-han">
										<?php echo $item[1]; ?></a>
									<a href="<?php echo esc_url(home_url() . '/?s=&kind=大学・短大' . $item3); ?>" class="footer__item--district lang-china-kan">
										<?php echo $item[2]; ?></a>
								</div>

							<?php endforeach; ?>
						</div>
						<div class="footer__item--right">
							<?php foreach ($array_right as $item) : ?>
								<div class="footer__item--region">
									<?php
									$_item3 = explode(",", $item[3]);
									$item3 = '';
									foreach ($_item3 as $key => $value) {
										$item3 .= "&region[]=" . $value;
									}
									?>
									<a href="<?php echo esc_url(home_url() . '/?s=&kind=大学・短大' . $item3); ?>" class="footer__item--area">
										<?php echo $item[0]; ?></a>
									<a href="<?php echo esc_url(home_url() . '/?s=&kind=大学・短大' . $item3); ?>" class="footer__item--district lang-china-han">
										<?php echo $item[1]; ?></a>
									<a href="<?php echo esc_url(home_url() . '/?s=&kind=大学・短大' . $item3); ?>" class="footer__item--district lang-china-kan">
										<?php echo $item[2]; ?></a>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div><!-- /.footer__item -->
				<!-- 専門学校を探す -->
				<div class="footer__item">
					<div class="footer__item--link">
						<a href="<?php echo esc_url(home_url() . '/search-speciality/'); ?>">
							<span>専門学校を探す</span>
							<span class="lang-china-han">専門学校を探す(外1)</span>
							<span class="lang-china-kan">専門学校を探す(外2)</span>
						</a>
					</div>
					<div class="footer__item--context">
						<div class="footer__item--left">
							<?php foreach ($array_left as $item) : ?>
								<div class="footer__item--region">
									<?php
									$_item3 = explode(",", $item[3]);
									$item3 = '';
									foreach ($_item3 as $key => $value) {
										$item3 .= "&region[]=" . $value;
									}
									?>
									<a href="<?php echo esc_url(home_url() . '/?s=&kind=専門学校' . $item3); ?>" class="footer__item--area">
										<?php echo $item[0]; ?></a>
									<a href="<?php echo esc_url(home_url() . '/?s=&kind=専門学校' . $item3); ?>" class="footer__item--district lang-china-han">
										<?php echo $item[1]; ?></a>
									<a href="<?php echo esc_url(home_url() . '/?s=&kind=専門学校' . $item3); ?>" class="footer__item--district lang-china-kan">
										<?php echo $item[2]; ?></a>
								</div>
							<?php endforeach; ?>
						</div>
						<div class="footer__item--right">
							<?php foreach ($array_right as $item) : ?>
								<div class="footer__item--region">
									<?php
									$_item3 = explode(",", $item[3]);
									$item3 = '';
									foreach ($_item3 as $key => $value) {
										$item3 .= "&region[]=" . $value;
									}
									?>
									<a href="<?php echo esc_url(home_url() . '/?s=&kind=専門学校' . $item3); ?>" class="footer__item--area">
										<?php echo $item[0]; ?></a>
									<a href="<?php echo esc_url(home_url() . '/?s=&kind=専門学校' . $item3); ?>" class="footer__item--district lang-china-kan">
										<?php echo $item[1]; ?></a>
									<a href="<?php echo esc_url(home_url() . '/?s=&kind=専門学校' . $item3); ?>" class="footer__item--district lang-china-kan">
										<?php echo $item[2]; ?></a>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div><!-- /.footer__item -->
			</div><!-- /.footer__list -->
		</div><!-- /.footer__inner -->

		<!-- コピーライト -->
		<div class="footer__copyright">Copyright (c) School Search All Rights Reserved.</div>

	</div><!-- /.inner footer__container -->

</footer>