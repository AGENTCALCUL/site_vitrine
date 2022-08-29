<?php

require get_stylesheet_directory() . '/customizer/options-funfact.php';
require get_stylesheet_directory() . '/customizer/options-services.php';
require get_stylesheet_directory() . '/sections/funfact.php';
require get_stylesheet_directory() . '/sections/services.php';

add_action( 'wp_enqueue_scripts', 'smart_health_pharmacy_chld_thm_parent_css' );
function smart_health_pharmacy_chld_thm_parent_css() {

    wp_enqueue_style( 
    	'smart_health_pharmacy_chld_css', 
    	trailingslashit( get_template_directory_uri() ) . 'style.css', 
    	array( 
    		'bootstrap',
    		'font-awesome-5',
    		'bizberg-main',
    		'bizberg-component',
    		'bizberg-style2',
    		'bizberg-responsive' 
    	) 
    );

    if ( is_rtl() ) {
        wp_enqueue_style( 
            'smart_health_pharmacy_parent_rtl', 
            trailingslashit( get_template_directory_uri() ) . 'rtl.css'
        );
    }
    
}

add_action( 'after_setup_theme', 'smart_health_pharmacy_setup_theme' );
function smart_health_pharmacy_setup_theme() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
}

add_filter( 'bizberg_banner_image', 'smart_health_pharmacy_banner_image' );
function smart_health_pharmacy_banner_image(){
    return [
        'background-color'      => 'rgba(20,20,20,.8)',
        'background-image'      => get_stylesheet_directory_uri() . '/img/america-american-application-care-caucasian-clinic-1444739-pxhere.com.jpg',
        'background-repeat'     => 'repeat',
        'background-position'   => 'center center',
        'background-size'       => 'cover',
        'background-attachment' => 'scroll',
    ];
}

add_filter( 'bizberg_banner_title', 'smart_health_pharmacy_banner_title' );
function smart_health_pharmacy_banner_title(){
    return current_user_can( 'edit_theme_options' ) ? esc_html__( 'Investing in Quality Care', 'smart-health-pharmacy' ) : '';
}

add_filter( 'bizberg_banner_subtitle', 'smart_health_pharmacy_banner_subtitle' );
function smart_health_pharmacy_banner_subtitle(){
    return current_user_can( 'edit_theme_options' ) ? esc_html__( 'Serving all people through exemplary health care, education, research and community outreach.', 'smart-health-pharmacy' ) : '';
}

add_filter( 'bizberg_banner_opacity_primary_color', 'smart_health_pharmacy_banner_opacity_primary_color' );
function smart_health_pharmacy_banner_opacity_primary_color(){
    return 'rgba(0,0,0,0.50)';
}

add_filter( 'bizberg_banner_opacity_secondary_color', 'smart_health_pharmacy_banner_opacity_secondary_color' );
function smart_health_pharmacy_banner_opacity_secondary_color(){
    return 'rgba(0,0,0,0.50)';
}

add_filter( 'bizberg_footer_social_links' , 'smart_health_pharmacy_footer_social_links' );
function smart_health_pharmacy_footer_social_links(){
    return [];
}

add_filter( 'bizberg_sticky_content_sidebar' , 'smart_health_pharmacy_sticky_content_sidebar' );
function smart_health_pharmacy_sticky_content_sidebar(){
    return false;
}

add_filter( 'bizberg_site_title_font', 'smart_health_pharmacy_site_title_font' );
function smart_health_pharmacy_site_title_font(){
    return [
        'font-family'    => 'Montserrat',
        'variant'        => '600',
        'font-size'      => '23px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'uppercase',
        'text-align'     => 'left',
    ];
}

add_filter( 'bizberg_site_tagline_font', 'smart_health_pharmacy_site_tagline_font' );
function smart_health_pharmacy_site_tagline_font(){
    return [
        'font-family'    => 'Montserrat',
        'variant'        => '300',
        'font-size'      => '13px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'none',
        'text-align'     => 'left',
    ];
}

add_filter( 'bizberg_background_color_1', 'smart_health_pharmacy_change_top_bar_color' );
add_filter( 'bizberg_background_color_2', 'smart_health_pharmacy_change_top_bar_color' );
function smart_health_pharmacy_change_top_bar_color(){
    return '#0088cc';
}

add_filter( 'bizberg_getting_started_screenshot', 'smart_health_pharmacy_getting_started_screenshot' );
function smart_health_pharmacy_getting_started_screenshot(){
    return true;
}

add_action( 'after_switch_theme', 'smart_health_pharmacy_switch_theme' );
function smart_health_pharmacy_switch_theme() {

    $flag = get_theme_mod( 'smart_health_pharmacy_copy_settings', false );

    if ( true === $flag ) {
        return;
    }

    foreach( Kirki::$fields as $field ) {
        set_theme_mod( $field["settings"],$field["default"] );
    }

    //Set flag
    set_theme_mod( 'smart_health_pharmacy_copy_settings', true );
    
}