<?php
$title = get_the_title();
$contents = get_the_content();
$date = get_the_time('Y/m/d');
?>

<div class="content-detail">

	<h3 class="content-detail__title"><?php echo $title; ?></h3>
	<div class="content-detail__container">
		<div class="content-detail__item">
			<div class="content-detail__item--content">
				<div class="content-detail__item--date">
					<?php echo $date; ?>
				</div>
				<div class="content-detail__item--text">
					<?php echo nl2br($contents); ?>
				</div>
			</div>
		</div><!-- /.content-detail__item -->

		<div class="content-detail__share">
			<p class="content-detail__share--title">Share This</p>
			<ul>
				<li>
					<!-- <a href="http://www.facebook.com/share.php?u=<?php echo esc_url(get_permalink()); ?>" target="_blank"> -->
					<a href="<?php echo esc_url(home_url()); ?>" target="_blank">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/20_component/content/sns/facebook.png'); ?>" alt="alt">
					</a>
				</li>
				<li>
					<!-- <a href="http://twitter.com/share?text=<?php echo urlencode(the_title_attribute('echo=0')); ?>&url=<?php the_permalink(); ?>" target="_blank"> -->
					<a href="<?php echo esc_url(home_url()); ?>" target="_blank">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/20_component/content/sns/twitter.png'); ?>" alt="alt">
					</a>
				</li>
				<li>
					<!-- <a href="https://social-plugins.line.me/lineit/share?url=<?php echo urlencode(get_permalink()); ?>" target="_blank"> -->
					<a href="<?php echo esc_url(home_url()); ?>" target="_blank">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/20_component/content/sns/line.png'); ?>" alt="alt">
					</a>
				</li>
			</ul>
		</div><!-- /.content-detail__share -->
	</div>

</div>