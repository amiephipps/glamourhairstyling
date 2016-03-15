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
			<h6>SUN</h6>
			<p>closed</p>
		</div>
		<div class="dayOfWeek">
			<h6>MON</h6>
			<p>closed</p>
		</div>
	</section>

	<section id="about" class="about">
		<div class="aboutContainer container">
			<div>
				<?php the_content(); ?>
			</div>	
			<div class="special">
				<h2>- Special -</h2>
				<p><?php the_field( 'special' ); ?></p>
			</div>
		</div>
	</section>

	<section class="gallery">
		<?php
			echo photo_gallery(1);
		 ?>
	</section>

	<section id="services" class="services">
		<div class="cuts">
			<h1>CUTS</h1>
			<div>
				<ul class="nameOfService">
					<?php while( has_sub_field('cut_services') ): ?>
						<li class="nameOfService"><?php the_sub_field('cut_service_name'); ?></li>
					<?php endwhile; ?>
				</ul>
				<ul>
					<?php while( has_sub_field('cut_services') ): ?>
						<li class="nameOfService"><?php the_sub_field('cut_service_price'); ?></li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
		
		<div class="color">
			<h1>COLOR</h1>
			<div>
				<ul class="nameOfService">
					<?php while( has_sub_field('color_services') ): ?>
						<li class="nameOfService"><?php the_sub_field('color_service_name'); ?></li>
					<?php endwhile; ?>
				</ul>
				<ul>
					<?php while( has_sub_field('color_services') ): ?>
						<li class="nameOfService"><?php the_sub_field('color_service_price'); ?></li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>

		<div class="otherServices">
			<h1>OTHER</h1>
			<div>
				<ul class="nameOfService">
					<?php while( has_sub_field('other_services') ): ?>
						<li class="nameOfService"><?php the_sub_field('other_service_name'); ?></li>
					<?php endwhile; ?>
				</ul>
				<ul>
					<?php while( has_sub_field('other_services') ): ?>
						<li class="nameOfService"><?php the_sub_field('other_service_price'); ?></li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</section>

	<section id="contact" class="contact">
		<div class="container contact--container">
		<h2>CONTACT</h2>
		<div>
			<section class="contact--section1">
				<iframe style="pointer-events:none;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7347.16339752812!2d-79.4677206005556!3d46.326404380279584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4d29aaa71385776d%3A0x500d1912daaab755!2s123+Delaware+Ave%2C+North+Bay%2C+ON+P1B+6Z6!5e0!3m2!1sen!2sca!4v1457488425075" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>			
			</section>
			
			<section class="contact--section2 clearfix">
				<p class="contactLabel">PHONE:</p><p>705-477-1308</p>
				<p class="contactLabel">ADDRESS:</p>
				<p>123 Delaware Ave N<br/>
				North Bay, ON P1B 6Z6<br/>
				Located inside Locks Taper Scissors</p>
				<?php 
					$contactForm = get_field( 'contact_form' );
					echo do_shortcode( $contactForm );
				 ?>
			</section>
		</div>
		</div>
	</section>
</main> <!-- main -->

<?php get_footer(); ?>