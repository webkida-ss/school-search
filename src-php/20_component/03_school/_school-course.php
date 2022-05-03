<div class="school-course">

	<div class="school-course__container">

		<section class="school-course__item-jp">
			<h3 class="section-title school-course__item-jp--title">学部・学科・コース</h3>
			<div class="school-course__item-jp--content">
				<ul class="school-course__item-jp--list">
					<?php if (have_rows('school_course_list')) : ?>
						<?php while (have_rows('school_course_list')) : the_row(); ?>
							<li class="school-course__item-jp--item">
								<div class="school-course__item-jp--img">
									<?php
									$school_course_img = get_sub_field('school_course_img');
									if (!empty($school_course_img)) { ?>
										<img src="<?php the_sub_field('school_course_img'); ?>">
									<?php } ?>
								</div>
								<div class="school-course__item-jp--text">
									<span><?php the_sub_field('school_course_name'); ?></span><br>
									<p><?php the_sub_field('school_course_desc'); ?></p>
								</div>
							</li><!-- /.school-course__item-jp--item -->
						<?php endwhile; ?>
					<?php endif; ?>
				</ul><!-- /.school-course__item-jp--list -->
			</div><!-- /.school-course__item-jp--content -->
		</section>

		<section class="school-course__item-ch lang-china-han">
			<h3 class="section-title school-course__item-ch--title">学部・学科・コース(外1)</h3>
			<div class="school-course__item-ch--content">
				<div class="school-course__item-ch--text">
					<?php if (have_rows('school_course_list')) : ?>
						<?php while (have_rows('school_course_list')) : the_row(); ?>
							<span><?php the_sub_field('school_course_name_ch_han'); ?></span>
							<p><?php the_sub_field('school_course_desc_ch_han'); ?></p>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div><!-- /.school-course__item-ch--content -->
		</section>

		<section class="school-course__item-ch lang-china-kan">
			<h3 class="section-title school-course__item-ch--title">学部・学科・コース(外2)</h3>
			<div class="school-course__item-ch--content">
				<div class="school-course__item-ch--text">
					<?php if (have_rows('school_course_list')) : ?>
						<?php while (have_rows('school_course_list')) : the_row(); ?>
							<span><?php the_sub_field('school_course_name_ch_kan'); ?></span>
							<p><?php the_sub_field('school_course_desc_ch_kan'); ?></p>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div><!-- /.school-course__item-ch--content -->
		</section>

	</div>

</div>