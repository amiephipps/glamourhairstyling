<?php
/**
*
* @package master_theme
*/

get_header(); ?>

<main> 		
	<section class="hours container">			

		<?php while( has_sub_field('hours') ): ?>
			<div class="dayOfWeek">
				<h6><?php the_sub_field('day'); ?></h6>
				<p><?php the_sub_field('opening_time'); ?> - <?php the_sub_field('closing_time'); ?></p>
			</div>
		<?php endwhile; ?>
		
		<div class="dayOfWeek">
			<h6>Sunday</h6>
			<p>closed</p>
		</div>
		<div class="dayOfWeek">
			<h6>Monday</h6>
			<p>closed</p>
		</div>

	</section>

	<section class="about">
		<div class="aboutContainer container">
			<div>
				<?php the_content(); ?>
			</div>	
			<div class="special">
				<h5>Special</h5>
				<p><?php the_field( 'special' ); ?></p>
			</div>
		</div>
	</section>

	<section class="services">

		<div class="cuts">
			<h2>CUTS</h2>
			<?php while( has_sub_field('cut_services') ): ?>
				<p class="nameOfService"><?php the_sub_field('cut_service_name'); ?></p>
				<p><?php the_sub_field('cut_service_price'); ?></p>
			<?php endwhile; ?>
		</div>

		<div class="color">
			<h2>COLOR</h2>
			<?php while( has_sub_field('color_services') ): ?>
				<p class="nameOfService"><?php the_sub_field('color_service_name'); ?></p>
				<p><?php the_sub_field('color_service_price'); ?></p>
			<?php endwhile; ?>
		</div>

		<div class="otherServices">
			<h2>OTHER</h2>
			<?php while( has_sub_field('other_services') ): ?>
				<p class="nameOfService"><?php the_sub_field('other_service_name'); ?></p>
				<p><?php the_sub_field('other_service_price'); ?></p>
			<?php endwhile; ?>
			
		</div>

	</section>

</main> <!-- main -->

<?php get_footer(); ?>