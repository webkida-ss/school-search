<div class="school-access">

	<div class="school-access__container">

		<!-- 日本語：Google maps表示あり -->
		<section class="school-access__item">
			<h3 class="section-title school-access__title">アクセス</h3>
			<div class="school-access__content">
				<div class="school-access__text">
					<?php the_field('school_access_free'); ?>
					<br><br>
					所在地<br>
					〒<?php the_field('school_access_postal'); ?><br>
					<span id="js-address"><?php the_field('school_access_address'); ?></span>
				</div><!-- /.school-access__text -->

				<!-- Google Map 表示 -->
				<div id="js-map" class="school-access__map">
					<iframe src="https://maps.google.co.jp/maps?output=embed&z=15&q=<?php the_field('school_access_address'); ?>"></iframe>
				</div>
			</div><!-- /.school-access__content -->

		</section><!-- /.school-access__item -->

		<!-- 繁体字 -->
		<section class="school-access__item lang-china-han">
			<h3 class="section-title school-access__title">アクセス(外1)</h3>
			<div class="school-access__content">
				<div class="school-access__text">
					<?php the_field('school_access_free_han'); ?>
				</div>
			</div><!-- /.school-access__content -->
		</section><!-- /.school-access__item.ch-->

		<!-- 簡体字 -->
		<section class="school-access__item lang-china-kan">
			<h3 class="section-title school-access__title">アクセス(外2)</h3>
			<div class="school-access__content">
				<div class="school-access__text">
					<?php the_field('school_access_free_kan'); ?>
				</div>
			</div><!-- /.school-access__content -->
		</section><!-- /.school-access__item.ch-->

	</div>

</div>