<?php
/**
 * The footer template
 *
 * @package master_theme
 */
?>
	 
<footer class="footer">
	<div class="footer--sections">
		<section class="footer--section1">
			<p>CONNECT</p>
			<p>Facebook</p>
			<p>Email</p>
		</section>
		<section class="footer--section2">
<!-- 			<div class='googlemaps'>
				<?php 
					$googleMaps = get_field( 'google_maps' );
					echo do_shortcode( $googleMaps );
				?>
			</div> -->
		</section>
		<section class="footer--section3">
			<p>HOURS</p>
			<p>Tuesday: 9:00am - 8:00pm</p>
			<p>Wednesday: 9:00am - 8:00pm</p>
			<p>Thursday: 9:00am - 8:00pm</p>
			<p>Friday: 9:00am - 8:00pm</p>
			<p>Saturday: 9:00am - 8:00pm</p>
			<p>Sunday: Closed</p>
			<p>Monday: Closed</p>
		</section>
	</div>

	<nav class="footer--copyright">
	   <p>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?></a> | <a href="http://amiephipps.com">Developed with love by Amie</a></p>
	</nav>
</footer><!-- #colophon -->

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?> 
</body>
</html>