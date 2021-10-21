<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>
			<!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    
                    
                    <ul class="social">
						<?php if(get_theme_mod('social_facebook')):?>
                        <li><a href="<?php echo get_theme_mod('social_facebook'); ?>"><i class="fa fa-facebook-f"></i></a></li>
                        <?php endif; ?>
                        <?php if(get_theme_mod('social_twitter')):?>
                        <li><a href="<?php echo get_theme_mod('social_twitter'); ?>"><i class="fa fa-twitter"></i></a></li>
                        <?php endif; ?>
                        <?php if(get_theme_mod('social_linkedIn')):?>
                        <li><a href="<?php echo get_theme_mod('social_linkedIn'); ?>"><i class="fa fa-linkedin"></i></a></li>
                        <?php endif; ?>
                        <?php if(get_theme_mod('social_rss')):?>
                        <li><a href="<?php echo get_theme_mod('social_rss'); ?>"><i class="fa fa-rss"></i></a></li>
                        <?php endif; ?>
                        <?php if(get_theme_mod('social_dribbble')):?>
                        <li><a href="<?php echo get_theme_mod('social_dribbble'); ?>"><i class="fa fa-dribbble"></i></a></li>
                        <?php endif; ?>
                    </ul>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                	<?php if(get_theme_mod('footer_text')):?>
                    	<p class="copyright"><?php echo get_theme_mod('footer_text'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </footer>

<!-- jQuery -->
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/popper.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/scrollreveal.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/waypoints.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/jquery.counterup.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/imgfix.min.js"></script> 

<!-- Global Init -->
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/custom.js"></script>


<?php wp_footer(); ?>

</body>
</html>
