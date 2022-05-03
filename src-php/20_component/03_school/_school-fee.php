<div class="school-fee">

	<div class="school-fee__container">

		<section class="school-fee__item">
			<h3 class="section-title school-fee__title">入試方法・学費</h3>
			<div class="school-fee__content">
				<div class="school-fee__exam">
					<h4 class="school-fee__exam--title">入試</h4>
					<div class="school-fee__exam--text">
						<?php echo get_field('school_fee')['school_fee_exam']; ?>
					</div><!-- /.school-fee__exam -->
					<div class="school-fee__cost">
						<h4 class="school-fee__cost--title">学費</h4>
						<div class="school-fee__cost--text">
							<?php echo get_field('school_fee')['school_fee_price']; ?>
						</div>
					</div><!-- /.school-fee__cost -->
				</div><!-- /.school-fee__content -->
		</section>

		<section class="school-fee__item lang-china-han">
			<h3 class="section-title school-fee__title">入試方法・学費(外1)</h3>
			<div class="school-fee__content">
				<div class="school-fee__exam">
					<h4 class="school-fee__exam--title">入試(外1)</h4>
					<div class="school-fee__exam--text">
						<?php echo get_field('school_fee_ch_han')['school_fee_exam']; ?>
					</div>
				</div><!-- /.school-fee__exam -->
				<div class="school-fee__cost">
					<h4 class="school-fee__cost--title">学費(外1)</h4>
					<div class="school-fee__cost--text">
						<?php echo get_field('school_fee_ch_han')['school_fee_price']; ?>
					</div>
				</div><!-- /.school-fee__cost -->
			</div><!-- /.school-fee__content -->
		</section>

		<section class="school-fee__item lang-china-kan">
			<h3 class="section-title school-fee__tisrc-php/20_component/03_school/_school-fee.phpe">入試方法・学費(外2)</h3>
			<div class="school-fee__content">
				<div class="school-fee__exam">
					<h4 class="school-fee__exam--title">入試(外2)</h4>
					<div class="school-fee__exam--text">
						<?php echo get_field('school_fee_ch_kan')['school_fee_exam']; ?>
					</div>
				</div><!-- /.school-fee__exam -->
				<div class="school-fee__cost">
					<h4 class="school-fee__cost--title">学費(外2)</h4>
					<div class="school-fee__cost--text">
						<?php echo get_field('school_fee_ch_kan')['school_fee_price']; ?>
					</div>
				</div><!-- /.school-fee__cost -->
			</div><!-- /.school-fee__content -->
		</section>

	</div>

</div>