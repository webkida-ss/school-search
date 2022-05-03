<!-- データ -->
<?php
global $array_area; // エリア
global $array_school_kind; // 学校種別：こだわり条件（検索）
$array_condition_link = [
	['学問から探す', '学問から探す(外1)', '学問から探す(外2)', 'search-academic'],
	['分野から探す', '分野から探す(外1)', '分野から探す(外2)', 'search-academic'],
	['特色から探す', '特色から探す(外1)', '特色から探す(外2)', 'search-academic'],
	//    ['オープン<br>キャンパス<br>から探す', '搜尋學校說明會', '搜索招生说明会', ''],
];
?>

<!-- 本文 -->
<div class="top-search">

	<h2 class="section-title top-search__title">
		学校を探す
		<span class="lang-china">
			<span class="lang-china-han">学校を探す(外1)　</span>
			<span class="lang-china-kan">学校を探す(外2)</span>
		</span>
	</h2>
	<div class="top-search__container">

		<div class="top-search__area">
			<h3 class="top-search__sub-title">
				エリアから探す<br class="display-only-pc">
				<span class="lang-china">
					<span class="lang-china-han">エリアから探す(外1)　</span>
					<span class="lang-china-kan">エリアから探す(外2)</span>
				</span>

			</h3>
			<div class="top-search__area--content">
				<div class="top-search__area--map"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/20_component/top/map.png'); ?>" alt="alt"></div>
				<?php foreach ($array_area as $item) : ?>
					<div class="top-search__area--region <?php echo $item[4]; ?>">
						<form role="search" method="get" action="<?php echo esc_url(home_url() . '/'); ?>">
							<div>
								<input type="hidden" name='s'>
								<input type="hidden" name='region[]' value='<?php echo $item[0]; ?>'>
								<?php if (!empty($item[1])) { ?>
									<input type="hidden" name='region[]' value='<?php echo $item[1]; ?>'>
								<?php } ?>
								<button type="submit">
									<?php echo $item[0]; ?><br><?php echo $item[1]; ?><br>
								</button>
							</div>
						</form>
					</div>
				<?php endforeach; ?>
			</div>
		</div><!-- /.top-search__area -->

		<div class="top-search__keyword">
			<h3 class="top-search__sub-title">
				キーワードから探す<br class="display-only-pc">
				<span class="lang-china">
					<span class="lang-china-han">キーワードから探す(外1)　</span>
					<span class="lang-china-kan">キーワードから探す(外2)</span>
				</span>

			</h3>
			<div class="top-search__keyword--content">
				<form role="search" method="get" action="<?php echo esc_url(home_url() . '/'); ?>">
					<div class="top-search__keyword--input">
						<input type="text" name='s'>
						<button type="submit"><i class="fas fa-search"></i></button>
					</div>
				</form>
			</div>
		</div>
		<!-- /.top-search__keyword -->

		<div class="top-search__condition">
			<h3 class="top-search__sub-title">
				こだわり条件から検索<br class="display-only-pc">
				<span class="lang-china">
					<span class="lang-china-han">こだわり条件(外1)　</span>
					<span class="lang-china-kan">こだわり条件(外2)</span>
				</span>
			</h3>
			<div class="top-search__condition--content">
				<!-- こだわり条件（検索） -->
				<?php foreach ($array_school_kind as $item) : ?>
					<div class="top-search__condition--category">
						<form role="search" method="get" action="<?php echo esc_url(home_url() . '/'); ?>">
							<div>
								<input type="hidden" name='s'>
								<input type="hidden" name='kind' value='<?php echo $item[3]; ?>'>
								<button type="submit">
									<span class="category--inner"><?php echo $item[0]; ?><br>
										<span class="lang-china">
											<span class="lang-china-han"><?php echo $item[1]; ?></span>
											<br>
											<span class="lang-china-kan"><?php echo $item[2]; ?></span>
										</span>
									</span>
								</button>
							</div>
						</form>
					</div>
				<?php endforeach; ?>
				<!-- こだわり条件（リンク） -->
				<?php foreach ($array_condition_link as $item) : ?>
					<div class="top-search__condition--category">
						<a href="<?php echo esc_url(home_url() . '/' . $item[3]); ?>">
							<span class="category--inner">
								<?php echo $item[0]; ?><br>
								<span class="lang-china">
									<span class="lang-china-han"><?php echo $item[1]; ?></span>
									<br>
									<span class="lang-china-kan"><?php echo $item[2]; ?></span>
								</span>
							</span>
						</a>
					</div>
				<?php endforeach; ?>
				<!-- こだわり条件（検索） -->
				<div class="top-search__condition--category">
					<form role="search" method="get" action="<?php echo esc_url(home_url() . '/'); ?>">
						<div>
							<input type="hidden" name='s'>
							<input type="hidden" name='s' value='オープンキャンパス'>
							<button type="submit">
								<span class="category--inner small">オープン<br>キャンパス<br>から探す<br>
									<span class="lang-china">
										<span class="lang-china-han">外国語1</span>
										<br>
										<span class="lang-china-kan">外国語2</span>
									</span>
								</span>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div><!-- /.top-search__condition -->

	</div><!-- /.top-search__container -->

</div>