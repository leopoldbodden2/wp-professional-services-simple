<?php
require 'inc/vendor/wp-bootstrap-navwalker/wp-bootstrap-navwalker.php';

define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/assets/images");


register_sidebar( array(
    'name'          => 'Navbar Right Widget',
    'id'            => 'custom-navbar-right-widget',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<span class="navbar-text custom-navbar-title">',
    'after_title'   => '</span>',
) );

register_sidebar( array(
    'name'          => 'Header Widget',
    'id'            => 'custom-header-widget',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
) );

register_sidebar( array(
    'name'          => 'Sidebar',
    'id'            => 'custom-sidebar-widget',
    'before_widget' => '<div class="custom-sidebar-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h1 class="custom-sidebar-title">',
    'after_title'   => '</h1>',
) );

register_sidebar( array(
    'name'          => 'Before Footer',
    'id'            => 'custom-before-footer-widget',
    'before_widget' => '<div class="custom-before-footer-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h1 class="custom-before-footer-title">',
    'after_title'   => '</h1>',
) );

register_sidebar( array(
    'name'          => 'Footer Left',
    'id'            => 'custom-footer-left-widget',
    'before_widget' => '<div class="custom-footer-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h1 class="custom-footer-title">',
    'after_title'   => '</h1>',
) );

register_sidebar( array(
    'name'          => 'Footer Center',
    'id'            => 'custom-footer-center-widget',
    'before_widget' => '<div class="custom-footer-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h1 class="custom-footer-title">',
    'after_title'   => '</h1>',
) );

register_sidebar( array(
    'name'          => 'Footer Right',
    'id'            => 'custom-footer-right-widget',
    'before_widget' => '<div class="custom-footer-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h1 class="custom-footer-title">',
    'after_title'   => '</h1>',
) );


// add our style and boostrap js to wp_head
function enqueue_theme_styles()
{
    $theme_data = wp_get_theme();

    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), $theme_data->Version);

    wp_enqueue_script('bootstrap-js',
        get_stylesheet_directory_uri().'/assets/vendor/bootstrap/javascripts/bootstrap.min.js', array('jquery'),
        '3.3.4', true);
}


// add custom logo to customizer
function custom_logo_setup()
{
    $defaults = array(
        'width' => 1000,
        'height' => 300,
        'max-width' => 1200,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}

// get custom logo
function prof_serv_get_custom_logo()
{
    if (has_custom_logo()) {
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
        echo '<img src="'.$logo[0].'" alt="'.get_bloginfo('name').'">';

    } else {
        echo '<img src="https://via.placeholder.com/302x143?text='.urlencode(get_bloginfo('name')).'" alt="'.get_bloginfo('name').'">';
    }
}

// add custom header to customizer
function custom_header_setup()
{
    $defaults = array(
        'default-text-color' => '000',
        'width' => 2300,
        'height' => 500,
        'max-width' => 5000,
        'flex-width' => true,
        'flex-height' => true,
    );
    add_theme_support('custom-header', $defaults);
}


function customize_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

function get_custom_navbar($attr)
{
    //get shortcode/function attributes and set defaults
    $attr = shortcode_atts(array(
        'depth' => 2,
        'container' => 'div',
        'container_class' => 'collapse navbar-collapse navbar-default-collapse',
        'container_id' => 'navbar-default-collapse',
        'menu_class' => 'nav navbar-nav'
    ), $attr);

    $wp_nav_menu_attr = [
        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
        'walker' => new WP_Bootstrap_Navwalker()
    ];

    wp_nav_menu(array_merge($attr, $wp_nav_menu_attr));

}



add_action('wp_enqueue_scripts', 'enqueue_theme_styles', 101);

// Custom theme setup
add_action( 'after_setup_theme', 'custom_logo_setup' );
add_action( 'after_setup_theme', 'custom_header_setup' );
add_action( 'after_setup_theme', 'customize_theme_support' );
