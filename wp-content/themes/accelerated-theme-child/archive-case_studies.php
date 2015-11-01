<?php
/**
 * This template will tell WordPress to use THIS archive file for the 
 * case studies custom post type instead of WordPress’ default archive template.
 *
 * @package WordPress
 * @subpackage Accelerated Marketing
 * @since Accelerated Marketing 1.1
 */

get_header(); ?>

<div id="primary" class="site-content">
	<div id="content" role="main">
		<?php while ( have_posts() ) : the_post(); 
		$image_1 = get_field("image_1");
    	$size = "full";
    	$services = get_field('services');
	?>		
<article class="case-study">			
   		<aside class="case-study-sidebar">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<h5><?php echo $services; ?></h5>
			<?php the_excerpt(); ?>
			<p><strong><a href="<?php the_permalink(); ?>">View Project</a></strong></p>
     	 </aside>
     	 
        	<figure>
        			<?php echo wp_get_attachment_image($image_1, $size); ?>
         	</figure>
</article>		
			
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>