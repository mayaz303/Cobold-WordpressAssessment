<?php
function cobold_custom_customizer($wp_customize){
	
	//  =============================
    //  = Home Page Banner    =
    //  =============================
    
    $wp_customize->add_section('home_banner', array(
        'title'      => __( 'Home Page Banner', 'twentytwentyone' ),
        'description' => '',
        'priority'   => 220,
        )
    ); 

    $wp_customize->add_setting('banner_image_upload', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'banner_image_upload', array(
        'label'    => __('Add Banner Image', 'twentytwentyone'),
        'section'  => 'home_banner',
    )));
	
    $wp_customize->add_setting('banner_title', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('banner_title', array(
        'type'     => 'textarea',
        'priority' => 10,
        'label'      => __('Add Banner Title', 'twentytwentyone'),
        'section'    => 'home_banner',
    ));

    $wp_customize->add_setting('banner_description', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('banner_description', array(
        'type'     => 'textarea',
        'priority' => 10,
        'label'      => __('Add Banner Description', 'twentytwentyone'),
        'section'    => 'home_banner',
    ));

    $wp_customize->add_setting('banner_button', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('banner_button', array(
        'type'     => 'text',
        'priority' => 10,
        'label'      => __('Add Banner Button Text', 'twentytwentyone'),
        'section'    => 'home_banner',
    ));

    $wp_customize->add_setting('banner_button_link', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('banner_button_link', array(
        'type'     => 'text',
        'priority' => 10,
        'label'      => __('Add Banner Button Link', 'twentytwentyone'),
        'section'    => 'home_banner',
    ));
	
	//Banner List
	$wp_customize->add_setting('banner_image_crm', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));

    
    
    //  =============================
    //  = Social Channels Section   =
    //  =============================
    
    $wp_customize->add_section('social_channels', array(
        'title'      => __( 'Social Channels', 'twentytwentyone' ),
        'description' => '',
        'priority'   => 220,
        )
    ); 
    
    //  ===============================
    //  =Social Channels Text Input 1 facebook =
    //  ===============================
    

    $wp_customize->add_setting('social_facebook', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('social_facebook', array(
        'type' => 'url',
        'priority' => 10,
        'label'      => __('Facebook', 'twentytwentyone'),
        'section'    => 'social_channels',
    )); 
    //  ===============================
    //  =Social Channels Text Input 3 twitter =
    //  ===============================
    $wp_customize->add_setting('social_twitter', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('social_twitter', array(
        'type' => 'url',
        'priority' => 10,
        'label'      => __('Twitter', 'twentytwentyone'),
        'section'    => 'social_channels',
    ));

    //  ===============================
    //  =Social Channels Text Input 4 linkedIn =
    //  ===============================
    $wp_customize->add_setting('social_linkedIn', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('social_linkedIn', array(
        'type' => 'url',
        'priority' => 10,
        'label'      => __('LinkedIn', 'twentytwentyone'),
        'section'    => 'social_channels',
    ));
    
    
    //  ===============================
    //  =Social Channels Text Input 5 rss =
    //  ===============================
    $wp_customize->add_setting('social_rss', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('social_rss', array(
        'type' => 'url',
        'priority' => 10,
        'label'      => __('RSS Feed', 'twentytwentyone'),
        'section'    => 'social_channels',
    ));
	
	//  ===============================
    //  =Social Channels Text Input 5 rss =
    //  ===============================
    $wp_customize->add_setting('social_dribbble', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('social_dribbble', array(
        'type' => 'url',
        'priority' => 10,
        'label'      => __('Dribbble', 'twentytwentyone'),
        'section'    => 'social_channels',
    ));
    
    
    
    //  =============================
    //  = Contact Information Section   =
    //  =============================
    
    $wp_customize->add_section('contact_information', array(
        'title'      => __( 'Footer Section', 'twentytwentyone' ),
        'description' => '',
        'priority'   => 240,
        )
    ); 

    
	
    //  ===================================
    //  = Footer Copy rights =
    //  ===================================
    $wp_customize->add_setting('footer_text', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('footer_text', array(
        'type'     => 'textarea',
        'priority' => 10,
        'label'      => __('Footer Text', 'twentytwentyone'),
        'section'    => 'contact_information',
    ));
	 
}

add_action('customize_register', 'cobold_custom_customizer');



// Before VC Init


