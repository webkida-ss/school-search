<?php

/**
 * カスタムテンプレート
 * Template Name: 資料請求/オープンキャンパス
 */

$page = get_page(get_the_ID());
$slug = $page->post_name;

?>

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
				<h2 class="page-title contact__title">
					<?php
					//$school_name = $_POST['school_name'];
					$title = str_replace("オープンキャンパス来校予約", "来校予約", get_the_title());

					$id = $_GET['post_id'];
					$post = get_post($id);

					setup_postdata($post);

					$school_name = get_the_title();
					if ($school_name === 'オープンキャンパス来校予約') {
						$school_name = 'オープンキャンパス';
					} else if ($school_name === '資料請求') {
						$school_name = '';
					}
					$school_name_han = get_field('school_name_han');
					if (empty($school_name_han)) {
						$school_name_han = get_the_title();
					}
					$school_name_kan = get_field('school_name_kan');
					if (empty($school_name_kan)) {
						$school_name_kan = get_the_title();
					}
					$_school_name_han = "";
					$_school_name_kan = "";
					if ($slug === 'request-doc') {
						$_school_name_han = '資料請求(外1)';
						$_school_name_kan = '資料請求(外2)';
					} else if ($slug === 'request-opencampus') {
						$_school_name_han = 'オープンキャンパス(外1)';
						$_school_name_kan = 'オープンキャンパス(外2)';
					}

					wp_reset_postdata();
					?>
					<?php echo $school_name; ?><?php if (!empty($school_name)) { ?>　<?php } ?><?php echo $title; ?>
					<span class="lang-china">
						<span class="lang-china-han"><?php echo $school_name_han . "　" . $_school_name_han; ?>　</span><br />
						<span class="lang-china-kan"><?php echo $school_name_kan . "　" . $_school_name_kan; ?></span>
					</span>
				</h2>
				<main class="main one-column">
					<div class="contact__form">
						<!-- あなたの情報はフォームへ移行 -->
						<div class="contact__form--content">
							<?php the_content(); ?>
						</div>
					</div>
				</main>
			</div>
		</div>

		<script>
			<?php
			$id = $_GET['post_id'];
			$post = get_post($id);
			$events = [];

			setup_postdata($post);

			$event_selected = $_POST['event_selected'];
			?>
			jQuery("#event_detail").empty();
			<?php
			while (have_rows('school_event_list')) {
				the_row();
				$event = get_sub_field('school_event_detail');
				if ($event_selected == esc_html($event)) {
			?>
					jQuery("#event_detail").append(jQuery("<option value='<?php echo esc_html($event) ?>' selected><?php echo esc_html($event) ?></option>"));
				<?php
				} else {
				?>
					jQuery("#event_detail").append(jQuery("<option value='<?php echo esc_html($event) ?>'><?php echo esc_html($event) ?></option>"));
			<?php
				}
			}
			wp_reset_postdata();
			?>
		</script>




		<?php get_template_part('src-php/10_common/_footer'); ?>
	</div>

	<?php get_footer(); ?>
</body>

</html>