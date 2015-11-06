<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Accelerate Theme Child
 * @since Accelerate Theme Child 1.1
 */
?>

		</div><!-- #main -->


		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<div class="site-description">
				<p><?php bloginfo('description'); ?></p>
				<p>&copy; <?php bloginfo('title'); ?>, LLC
				</div>
				
			<nav class="social-media-navigation" role="navigation">
				<?php //wp_nav_menu( array( 'theme_location' => 'social-media', 'menu_class' => 'social-media-menu' ) ); ?>
			</nav>

				
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php get_footer(); ?>
	<p style="text-align: center;"><img src="http://localhost:8888/accelerate/wp-content/uploads/2015/11/twitter-icon.png">
	<img src="http://localhost:8888/accelerate/wp-content/uploads/2015/11/facebook-icon.png">
	<img src="http://localhost:8888/accelerate/wp-content/uploads/2015/11/linkedin-icon.png">
	
</body>
</html>