<!-- データ -->
<?php
global $array_school_kind; // 学校種別
global $array_academic; // 学問
global $array_region; // エリア
global $array_field;  // 分野

$kind = $_GET['kind']; // 学校種別
$region = $_GET['region']; // エリア
$academic = $_GET['academic']; // 学問
$field = $_GET['field']; // 分野
$feature = $_GET['feature']; // 特色
$search_word = get_search_query(); // 検索ワード

$result_word = "";
$result_word = !empty($search_word) ? $search_word . 'を含む' : '';

if (is_array($region)) {
	$result_word .= !empty($region) ? implode("、", $region) . 'の' : '';
} else {
	$result_word .= !empty($region) ? $region . 'の' : '';
}
$result_word .= !empty($academic) ? $academic . 'の' : '';
$result_word .= !empty($field) ? $field . 'の' : '';
$result_word .= !empty($feature) ? $feature . 'の' : '';
$result_word .= !empty($kind) ? $kind  : '学校';

// ページネーション
$pagenation_args = array(
	'mid_size' => 8,
	'prev_text' => '前へ',
	'next_text' => '次へ',
	'screen_reader_text' => '', // ページャーのタイトル
);
?>


<!-- 本文 -->
<div class="search-result">

	<div class="search-result__container">

		<!-- 検索結果トップ -->
		<div class="search-result__top">

			<!-- 検索結果トップ（上部） -->
			<div class="search-result__top-upper">
				<div class="search-result__top-upper--summary">
					検索結果は、全部で<strong><?php echo $wp_query->found_posts; ?></strong>件です<br />
					<span class="lang-china">
						<span class="lang-china-han">検索結果(外1) </span>
						<span class="lang-china-kan">検索結果(外2)</span>
					</span>
				</div>
				<p class="search-result__top-upper--msg">さらに絞り込み検索<br />
					<span class="lang-china">
						<span class="lang-china-han">絞り込み検索(外1) </span>
						<span class="lang-china-kan">絞り込み検索(外2)</span>
					</span>
				</p>
				<div class="search-result__top-upper--content">
					<form role="search" method="get" action="<?php echo esc_url(home_url() . '/'); ?>">
						<!-- 学問系統・分野 -->
						<div class="search-result__top-upper--item">
							<h3 class="search-result__top-upper--title">
								学問系統・分野から
								<br><span class="lang-china-han">学問系統・分野から(外1) </span>
								<br><span class="lang-china-kan">学問系統・分野から(外2)</span>
							</h3>
							<div class="search-result__top-upper--input">
								<!-- 学校種別 -->
								<select name="kind">
									<option value="">学校種別</option>
									<?php foreach ($array_school_kind as $item) : ?>
										<option value="<?php echo $item[0]; ?>" <?php if ($kind === $item[0]) { ?> selected<?php } ?>><?php echo $item[0]; ?></option>
									<?php endforeach; ?>
								</select>
								<!-- 学問 -->
								<select name="academic" id='js-academic-select-main'>
									<option value="">学問を選択</option>
									<?php foreach ($array_academic as $item) : $main = $item[0]; ?>
										<option value="<?php echo $main[0]; ?>" <?php if ($academic === $main[0]) { ?> selected<?php } ?>><?php echo $main[0]; ?></option>
									<?php endforeach; ?>
								</select>
								<!-- 分野 -->
								<select name="field" id='js-academic-select-detail'>
									<option value="">分野を選択</option>
									<?php foreach ($array_academic as $main) : ?>
										<?php for ($i = 1; $i < count($main); $i++) : $detail = $main[$i]; ?>
											<option value="<?php echo $detail[0]; ?>" data-val='<?php echo $main[0][0]; ?>' <?php if ($field === $detail[0]) { ?> selected<?php } ?>>
												<?php echo $detail[0]; ?>
											</option>
										<?php endfor; ?>
									<?php endforeach; ?>
								</select>
							</div>
						</div><!-- /.search-result__top-upper--item -->
						<!-- エリア -->
						<div class="search-result__top-upper--item">
							<h3 class="search-result__top-upper--title">
								エリアから
								<br><span class="lang-china-han">エリアから(外1) </span>
								<br><span class="lang-china-kan">エリアから(外2)</span>
							</h3>
							<div class="search-result__top-upper--input">
								<select name="region">
									<option value="">地域</option>
									<?php foreach ($array_region as $item) : ?>
										<option value="<?php echo $item ?>" data-val='<?php echo $item; ?>' <?php if ($region === $item) { ?> selected<?php } ?>><?php echo $item ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div><!-- /.search-result__top-upper--item -->
						<!-- フリー -->
						<div class="search-result__top-upper--item">
							<h3 class="search-result__top-upper--title">
								フリーワード
								<br><span class="lang-china-han">フリーワード(外1) </span>
								<br><span class="lang-china-kan">フリーワード(外2)</span>
							</h3>
							<div class="search-result__top-upper--input">
								<input type="text" name="s" value="<?php if (!empty($search_word)) echo $search_word; ?>">
							</div>
						</div><!-- /.search-result__top-upper--item -->
						<button class="search-button">
							この条件で再検索　
							<span class="lang-china-han">再検索(外1) </span>
							<span class="lang-china-kan">再検索(外2)</span>
						</button>
					</form>
				</div><!-- /.search-result__top-upper--content -->

			</div><!-- /.search-result__top-upper -->

			<!-- 検索結果サマリ（下部） -->
			<div class="search-result__top-lower">
				<div class="search-result__top-lower--text">
					<strong>
						<?php echo $result_word; ?>
					</strong>
					の検索結果<strong><?php echo $wp_query->found_posts; ?></strong>件<br>
					<span class="lang-china">
						<span class="lang-china-han">検索結果(外1) </span><span class="lang-china-kan">検索結果(外2)</span>
					</span>
				</div>
				<div class="search-result__pagenation upper">
					<?php the_posts_pagination($pagenation_args); ?>
				</div>
			</div><!-- /.search-result__top-lower -->

		</div><!-- /.search-result__top -->


		<!-- 検索結果リスト -->
		<div class="search-result__results">
			<ul class="search-result__list">

				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

						<li class="search-result__item">
							<div class="search-result__item-main--items">
								<div class="search-result__item-main--items--links">
									<div class="util-link dark-blue search-result__link">
										<a href="<?php echo esc_url(home_url() . '/request-doc/?post_id=' . get_the_ID()); ?>" data-name="<?php the_title(); ?>" class="btn_document">
											<div>資料請求　
												<span class="lang-china">
													<span class="lang-china-han">資料請求(外1)　</span>
													<span class="lang-china-kan">資料請求(外2)</span>
												</span>
											</div>
										</a>
									</div>
									<div class="util-link orange search-result__link">
										<a href="<?php the_permalink(); ?>" data-name="<?php the_title(); ?>" data-id="<?php the_ID(); ?>" class="btn_opencampus">
											<div>来校予約　
												<span class="lang-china">
													<span class="lang-china-han">来校予約(外1)　</span>
													<span class="lang-china-kan">来校予約(外2)</span>
												</span>
											</div>
										</a>
									</div>
									<div class="util-link white search-result__link btn_add_list">
										<a href="<?php echo esc_url(home_url() . '/#'); ?>">
											<div>リストに追加する　
												<span class="lang-china">
													<span class="lang-china-han">外国語1　</span>
													<span class="lang-china-kan">外国語2</span>
												</span>
											</div>
										</a>
									</div>
								</div>
							</div>

							<a href="<?php the_permalink(); ?>">

								<!-- 学校メイン情報 -->
								<div class="search-result__item-main">
									<div class="search-result__item-main--info">
										<div class="search-result__item-main--text">
											<h3><?php the_title(); ?><br>
												<span class="lang-china">
													<span class="lang-china-han">
														<?php
														$school_name_han = get_field('school_name_han');
														if (empty($school_name_han)) {
															$school_name_han = get_the_title();
														}
														echo $school_name_han;
														?>
													</span>
													<span class="lang-china-kan">
														<?php
														$school_name_kan = get_field('school_name_kan');
														if (empty($school_name_kan)) {
															$school_name_kan = get_the_title();
														}
														echo $school_name_kan;
														?>
													</span>
												</span>
											</h3>
											<p>
												<?php the_field('school_base_msg'); ?><br>
												<br>
												<span class="lang-china-han">
													<?php the_field('school_base_msg_ch_han'); ?>
												</span><br>
												<br>
												<span class="lang-china-kan">
													<?php the_field('school_base_msg_ch_kan'); ?>
												</span>
											</p>
										</div>
										<div class="search-result__item-main--img">
											<img src="<?php the_post_thumbnail_url(); ?>">
										</div>
									</div>
								</div><!-- /.search-result__item-main -->

								<!-- 学部・学科・コース -->
								<div class="search-result__item-course">
									<h3 class="search-result__sub-title">
										学部・学科・コース<br />
										<span class="lang-china-han">学部・学科・コース(外1)　</span>
										<span class="lang-china-kan">学部・学科・コース(外2)</span>
									</h3>
									<div class="search-result__item-course--content">
										<ul class="search-result__item-course--list">
											<?php if (have_rows('school_course_list')) : ?>
												<?php while (have_rows('school_course_list')) : the_row(); ?>
													<li class="search-result__item-course--item">
														<?php the_sub_field('school_course_name'); ?>　
														<span class="lang-china">
															<span class="lang-china-han">
																<?php the_sub_field('school_course_name_ch_han'); ?>　
															</span>
															<span class="lang-china-kan">
																<?php the_sub_field('school_course_name_ch_kan'); ?>
															</span></span>
													</li>
												<?php endwhile; ?>
											<?php endif; ?>
										</ul>
										<div class="search-result__item-course--imgs">
											<?php
											if (have_rows('school_course_list')) : $course_num = 0;
												while (have_rows('school_course_list')) : the_row();
													if ($course_num >= 2) {
														break;
													}
											?>
													<div class="search-result__item-course--img">
														<img src="<?php the_sub_field('school_course_img'); ?>">
													</div>
											<?php $course_num++;
												endwhile;
											endif; ?>
										</div>
									</div>
								</div><!-- /.search-result__item-course -->

								<!-- オープンキャンパス -->
								<div class="search-result__item-opencanpas">
									<h3 class="search-result__sub-title">
										オープンキャンパス<br />
										<span class="lang-china-han">オープンキャンパス(外1)　</span>
										<span class="lang-china-kan">オープンキャンパス(外2)</span>
									</h3>
									<div class="search-result__item-opencanpas--content">
										<div class="search-result__item-opencanpas--item">
											<?php
											$school_oc_ch_photo = get_field('school_oc_ch_photo');
											if (!empty($school_oc_ch_photo)) {
											?>
												<div class="search-result__item-opencanpas--img">
													<img src="<?php echo $school_oc_ch_photo['url']; ?>">
												</div>
											<?php } ?>
											<p class="search-result__item-opencanpas--text">
												<?php the_field('school_oc'); ?><br>
												<br>
												<span class="lang-china">
													<span class="lang-china-han">
														<?php the_field('school_oc_ch_han'); ?>
													</span><br><br>
													<span class="lang-china-kan">
														<?php the_field('school_oc_ch_kan'); ?>
													</span>
												</span>
											</p>
										</div>
									</div>
									<br />
								</div><!-- /.search-result__item-opencanpas -->

							</a>
						</li><!-- /.search-result__item -->

					<?php endwhile; ?>
				<?php endif; ?>

			</ul><!-- /.search-result__list -->
		</div><!-- /.search-result__results -->

		<!-- ページング -->
		<div class="search-result__pagenation lower">
			<?php the_posts_pagination($pagenation_args); ?>
		</div>

	</div><!-- /.search-result__container -->

	<script>
		jQuery(".search-result__item-main--items").css("top", "");

		var timer = false;
		jQuery(window).on("load orientationchange resize", function() {
			if (timer !== false) {
				clearTimeout(timer);
			}
			timer = setTimeout(function() {
				resized();
			}, 200);
		});
		resized();

		function resized() {
			jQuery(".search-result__item-main--items").height("");
			var array = jQuery(".search-result__item-main--items");
			jQuery.each(array, function(index, val) {
				jQuery(val).css("top", jQuery(this).closest(".search-result__item").find(".search-result__item-main").height() + 60);
			});
		}

		/**
		 * 資料請求フォームボタン、来校予約フォームボタンクリック
		 */
		jQuery('.btn_document').click(function(e) {
			e.preventDefault();

			var href = jQuery(this).attr("href");
			var name = jQuery(this).attr("data-name");

			jQuery(this).closest(".search-result__item-main--items").remove("form");
			jQuery(this).closest(".search-result__item-main--items").append(jQuery("<form action='" + href + "' method='post' />"));
			jQuery(this).closest(".search-result__item-main--items").find("form").append(jQuery("<input type='hidden' name='school_name' value='" + name + "' />"));
			jQuery(this).closest(".search-result__item-main--items").find("form")[0].submit();

		});
		jQuery('.btn_opencampus').click(function(e) {
			e.preventDefault();

			var href = jQuery(this).attr("href");

			jQuery(this).closest(".search-result__item-main--items").remove("form");
			jQuery(this).closest(".search-result__item-main--items").append(jQuery("<form action='" + href + "' method='post' />"));
			jQuery(this).closest(".search-result__item-main--items").find("form").append(jQuery("<input type='hidden' name='event_kind' value='オープンキャンパス' />"));
			jQuery(this).closest(".search-result__item-main--items").find("form")[0].submit();

		});
		/**
		 * 学問プルダウン変更
		 */
		jQuery('#js-academic-select-main').change(function(e) {
			e.preventDefault();

			/*
						jQuery('#js-academic-select-detail').empty();
						jQuery('#js-academic-select-detail').append(jQuery('<option value="">分野</option>'));

						var academic_selected = jQuery('[name=academic] option:selected').val();
						var array = jQuery('#field_tmp').find("option");
						jQuery.each(array, function(index, value){
							if(academic_selected == jQuery(this).attr('data-val')) {
								jQuery('#js-academic-select-detail').append(jQuery('<option value="' + jQuery(this).val() + '">' + jQuery(this).val() + '</option>'));
							}
						})
			*/
		});
	</script>

</div>