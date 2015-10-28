<?php
/**
 * The template for displaying case studies.
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.1
 */


/* HEADER */
get_header(); ?>
	<div id="primary" class="site-content">
		<div id="content" role="main">

<!-- START OF LOOP HERE -->		
		<?php while ( have_posts() ) : the_post(); 
			$services = get_field('services');
			$client = get_field('client');
			$link = get_field('link');
			$image_1 = get_field('image_1');
			$image_2 = get_field('image_2');
			$image_3 = get_field('image_3'); 
			$size = "medium";   ?>

		<article class="case-study">			
   			<aside class="case-study-sidebar">
				<h2><?php the_title(); ?></h2>
				<h5><?php echo $services; ?></h5>
				<h6>Client: <?php echo $client; ?></h6>
<!-- CONTENT -->
<?php the_content(); ?>
	<p><strong><a href="<?php echo $link; ?>">Site Link</a></strong></p>
     	   </aside>
     	   
<!-- DISPLAY IMAGES HERE -->
	     <div class="case-study-images">
	     	<?php if($image_1) { ?>
				<img src="<?php echo $image_1; ?>" />
	     	<?php } ?>	
	     	<?php if($image_2) { ?>
		     	<img src="<?php echo $image_2; ?>" />
	     	<?php } ?>	
	     	<?php if($image_3) { ?>
		     	<img src="<?php echo $image_3; ?>" />
	     	<?php } ?>		
	 	 </div>

	</article>
	
<!-- END OF LOOP HERE -->
			<?php endwhile; ?>
			
	</div><!-- #primary -->
	
<!-- FOOTER -->
<?php get_footer(); ?>