<!-- データ -->
<?php
global $array_academic;
$num = 4;
$row = ceil(count($array_academic) / $num); // 行数を求める
$last_row = $num * ($row - 1);
/*
?>

<div class="search-academic-check">

	<h2 class="page-title search-academic-check__title">
		興味がある学問をチェック<br>
		<span class="lang-china">
			<span class="lang-china-han">選擇興趣領域　</span>
			<span class="lang-china-kan">选择兴趣专业</span>
		</span>
	</h2>
	<div class="search-academic-check__container">

		<form role="search" method="get" action="<?php echo esc_url(home_url() . '/'); ?>">
			<input type="hidden" name="s">

			<!-- 分野のリスト -->
			<ul class="search-academic-check__list">

				<?php
				$id = 0;
				for ($i = 0; $i < count($array_academic); $i++) :
					$item = $array_academic[$i];
					$add_class = ($i >= $last_row) ? 'last-row' : '';
				?>
					<li class="search-academic-check__item <?php echo $add_class; ?>">
						<!-- 分野の詳細リスト -->
						<ul class="search-academic-check__item--detail-list">
							<?php
							for ($j = 0; $j < count($item); $j++) :
								$detail = $item[$j];
								$id++;
								$add_checkbox_class =  ($j == 0) ? 'js-search-chk-parent' : 'js-search-chk-child';
								$add_accordion_class =  ($j == 0) ? 'js-search-accordion' : '';
							?>
								<li class="search-academic-check__item--detail-item">
									<input name="academics[]" value="<?php echo $detail[0]; ?>" class="<?php echo $add_checkbox_class; ?>" type="checkbox" id="<?php echo 'academic' . $id; ?>">
									<label for="<?php echo 'academic' . $id; ?>">
										<?php echo $detail[0]; ?>
										<br>
										<span class="lang-china">
											<span class="lang-china-han"><?php echo $detail[1]; ?></span>
											<br>
											<span class="lang-china-kan"><?php echo $detail[2]; ?></span>
										</span>
									</label>
									<div class="<?php echo $add_accordion_class; ?>"></div>
								</li>
							<?php endfor; ?>
						</ul><!-- /.search-academic-check__detail-list -->
					</li><!-- /.search-academic-check__item -->
				<?php endfor; ?>

			</ul><!-- /.search-academic-check__list -->

			<button class="search-button">
				この条件で検索　
				<span class="lang-china">
					<span class="lang-china-han">搜尋　</span>
					<span class="lang-china-kan">搜索</span>
				</span>
			</button>

		</form>

	</div><!-- /.search-academic-check__container -->
</div><!-- /.search-academic-check -->
<?php
*/
?>
<!-- データ -->
<?php global $array_academic; ?>
<div class="search-academic-check">
	<h3 class="search-academic__title">興味がある学問をチェック
		<span class="lang-china">
			<span class="lang-china-han">興味がある学問をチェック(外1)　</span>
			<span class="lang-china-kan">興味がある学問をチェック(外2)</span>
		</span>
	</h3>
	<div class="search-academic__content">
		<ul class="search-academic__list">
			<?php foreach ($array_academic as $item) : $academic = $item[0]; ?>
				<li class="search-academic__item">
					<form role="search" method="get" action="<?php echo esc_url(home_url() . '/'); ?>">
						<div>
							<input type="hidden" name='s'>
							<input type="hidden" name='academic' value='<?php echo $academic[0]; ?>'>
							<button type="submit">
								<?php echo $academic[0]; ?><br>
								<span class="lang-china">
									<span class="lang-china-han"><?php echo $academic[1]; ?></span>
									<span class="lang-china-kan"><?php echo $academic[2]; ?></span>
								</span>
							</button>
						</div>
					</form>
				</li>
			<?php endforeach; ?>
		</ul><!-- /.search-academic__list -->
	</div><!-- /.search-academic__content -->
</div>