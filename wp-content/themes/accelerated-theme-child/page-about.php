<?php
/**
 * The template for displaying the about page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Theme Child
 * @since Accelerate Theme 1.1
 */


get_header(); ?>

    <div id="page" class="about-hfeed site"> 
	  <div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_header(); ?>
				<?php the_content(); ?>			 
				
			</div><!-- #content -->
			<?php endwhile; // end of the loop. ?>
		

	</div><!-- #primary -->
</div><!--#page -->


