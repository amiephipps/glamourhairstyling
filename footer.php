<?php
/**
 * The footer template
 *
 * @package master_theme
 */
?>
	 
<footer class="footer">
	<div class="footer--sections container">
		<section class="footer--section2">
			<p>CONNECT WITH ME</p>
			<p><a href="http://www.facebook.com" target="_blank">Facebook</a></p>
			<p><a href="mailto:glamourgirlhairstyling@gmail.com">Email</a></p>
		</section>

		<section class="footer--section3">
			<p>HOURS</p>
			<p><span>Tuesday:</span> 9:00am - 8:00pm</p>
			<p><span>Wednesday:</span> 9:00am - 8:00pm</p>
			<p><span>Thursday:</span> 9:00am - 8:00pm</p>
			<p><span>Friday:</span> 9:00am - 8:00pm</p>
			<p><span>Saturday:</span> 9:00am - 8:00pm</p>
			<p><span>Sunday:</span> Closed</p>
			<p><span>Monday:</span> Closed</p>
		</section>

		<section class="footer--section1">
			<nav class="footer--copyright">
			   <p>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?></a><a href="http://amiephipps.com">Developed by Amie</a></p>
			</nav>
		</section>
	</div>
</footer><!-- #colophon -->

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?> 
<div> <!-- wrapper -->
</body>
</html>