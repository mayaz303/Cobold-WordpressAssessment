<?php
/**
 * The main template file
   Template Name: Home Page
 *
 *
 */

get_header(); ?>

	<div class="main-content">  
		<?php if (have_posts()){
			while (have_posts()) : the_post(); ?>            
            	<?php 
echo do_shortcode(the_content()); 
?>           
			<?php endwhile; ?>
        <?php } ?>
	</div>
<?php get_footer();

