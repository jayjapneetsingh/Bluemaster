<?php 



add_theme_support( 'title-tag' );

add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

function blue_master_scripts(){
    wp_enqueue_style('fonts', "//fonts.googleapis.com/css?family=Open+Sans:400,300,700");
    wp_enqueue_style('css_fonts', get_stylesheet_directory_uri() . "/assets/css/font-awesome.min.css");
    wp_enqueue_style('fancy-box', get_stylesheet_directory_uri() . "/assets/css/jquery.fancybox.css");
    wp_enqueue_style('boostrap', get_stylesheet_directory_uri() . "/assets/css/bootstrap.min.css");
    wp_enqueue_style('owl_carousel', get_stylesheet_directory_uri() . "/assets/css/owl.carousel.css");
    wp_enqueue_style('slider', get_stylesheet_directory_uri() . "/assets/css/slit-slider.css");
    wp_enqueue_style('animate', get_stylesheet_directory_uri() . "/assets/css/animate.css");
    wp_enqueue_style('main', get_stylesheet_directory_uri() . "/assets/css/main.css");
    wp_enqueue_script('moderniser', get_stylesheet_directory_uri()."/assets/js/modernizr-2.6.2.min.js", array('jquery'), true);




    wp_enqueue_script('jquery-js', get_stylesheet_directory_uri()."/assets/js/jquery-1.11.1.min.js", array('jquery'), false);
    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri()."/assets/js/bootstrap.min.js", array('jquery'), false);

    wp_enqueue_script('single', get_stylesheet_directory_uri()."/assets/js/jquery.singlePageNav.min.js", array('jquery'), false);
    wp_enqueue_script('fancy', get_stylesheet_directory_uri()."/assets/js/jquery.fancybox.pack.js", array('jquery'), false);
    wp_enqueue_script('owl', get_stylesheet_directory_uri()."/assets/js/owl.carousel.min.js", array('jquery'), false);
    wp_enqueue_script('easing', get_stylesheet_directory_uri()."/assets/js/jquery.easing.min.js", array('jquery'), false);


    wp_enqueue_script('jqueryese', get_stylesheet_directory_uri()."/assets/js/jquery.ba-cond.min.js", array('jquery'), false);
    wp_enqueue_script('wow', get_stylesheet_directory_uri()."/assets/js/wow.min.js", array('jquery'), false);
    wp_enqueue_script('main', get_stylesheet_directory_uri()."/assets/js/main.js", array('jquery'), false);
    wp_enqueue_script('maps', "//maps.google.com/maps/api/js?sensor=false", false);
    wp_enqueue_script('slider-js', get_stylesheet_directory_uri()."/assets/js/jquery.slitslider.js", array('jquery'), false);

}


add_action('wp_enqueue_scripts', 'blue_master_scripts');



add_action('init', 'blue_master_nav_menus');
function blue_master_nav_menus()
{

    register_nav_menus(array(
        'header_menus' => __("Header Menu", 'blue'),
        // 'login_menus' => __("Login Menu", 'msm'),
    ));

}




if (function_exists('register_sidebar')) {
    register_sidebar(array(

        'name' => 'Footer column 1',
        'id' => 'footer-column-1',
        'description' => 'Content of First footer Widget',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}

if (function_exists('register_sidebar')) {
    register_sidebar(array(

        'name' => 'Footer column 2',
        'id' => 'footer-column-2',
        'description' => 'Content of First footer Widget',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}