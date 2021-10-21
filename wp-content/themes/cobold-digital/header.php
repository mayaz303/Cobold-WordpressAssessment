<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/font-awesome.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <?php if(get_bloginfo()):?>
                            <a href="<?php echo get_home_url('/')?>" class="logo" style="font-size: 20px; font-weight: bold; color: #161616">
                                <?php echo get_bloginfo(); ?>
                            </a>
                        <?php endif; ?>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav', 'container' => false)); ?>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome" style="background-image: url(<?php echo get_theme_mod('banner_image_upload');?>);">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <?php if(get_theme_mod('banner_title')):?>
                            <h1><?php echo get_theme_mod('banner_title'); ?></h1>
                        <?php endif; ?>
                        <?php if(get_theme_mod('banner_description')):?>
                            <p><?php echo get_theme_mod('banner_description'); ?></p>
                        <?php endif; ?>
                       <?php if(get_theme_mod('banner_button')):?>
                            <a href="<?php echo get_theme_mod('banner_button_link'); ?>" class="main-button-slider"><?php echo get_theme_mod('banner_button'); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->
    