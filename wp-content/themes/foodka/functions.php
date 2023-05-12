<?php


function add_theme(){

    // wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css');
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/boots.min.css');
	wp_enqueue_style( 'magnific-css', get_template_directory_uri() . '/assets/css/magnific.min.css');
	wp_enqueue_style( 'jquery-ui-css', get_template_directory_uri() . '/assets/css/jquery-ui.min.css');
	wp_enqueue_style( 'nice-select-css', get_template_directory_uri() . '/assets/css/nice-select.min.css');
	wp_enqueue_style( 'owl-css', get_template_directory_uri() . '/assets/css/owl.min.css');
	wp_enqueue_style( 'slick-slide-css', get_template_directory_uri() . '/assets/css/slick-slide.min.css');
	wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . '/assets/css/fontawesome.min.css');
	wp_enqueue_style( 'remixicon-css', get_template_directory_uri() . '/assets/css/remixicon/remixicon.css');
    wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css');
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css');

	wp_enqueue_script( 'jquery.3.6-js', get_template_directory_uri() . '/assets/java/jquery.3.6.min.js');
	wp_enqueue_script( 'jquery-ui-js', get_template_directory_uri() . '/assets/java/jquery-ui.min.js');
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/java/boots.min.js');
	wp_enqueue_script( 'imageloded-js', get_template_directory_uri() . '/assets/java/imageloded.min.js');
	wp_enqueue_script( 'counterup-js', get_template_directory_uri() . '/assets/java/counterup.js');
	wp_enqueue_script( 'waypoint-js', get_template_directory_uri() . '/assets/java/waypoint.js');
	wp_enqueue_script( 'magnific-js', get_template_directory_uri() . '/assets/java/magnific.min.js');
	wp_enqueue_script( 'isotope.pkgd-js', get_template_directory_uri() . '/assets/java/isotope.pkgd.min.js');
	wp_enqueue_script( 'nice-select-js', get_template_directory_uri() . '/assets/java/nice-select.min.js');
	wp_enqueue_script( 'fontawesome-js', get_template_directory_uri() . '/assets/java/fontawesome.min.js');
	wp_enqueue_script( 'owl-js', get_template_directory_uri() . '/assets/java/owl.min.js');
	wp_enqueue_script( 'slick-slider-js', get_template_directory_uri() . '/assets/java/slick-slider.min.js');
	wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/assets/java/wow.min.js');
	wp_enqueue_script( 'tweenmax-js', get_template_directory_uri() . '/assets/java/tweenmax.min.js');

	// wp_enqueue_script( 'demos-js', get_template_directory_uri() . '/assets/java/demos.js');
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/java/main.js');
	// wp_enqueue_script( 'ripple-js', get_template_directory_uri() . '/assets/java/ripple.js');
    
}

add_action( 'wp_enqueue_scripts', 'add_theme' );


// Add Menus
register_nav_menus(array(
	'main_menu' => 'Menu Utama'
)); 

function init_setup(){

    //add featured image
    add_theme_support('post-thumbnails');
    add_image_size('small_thumb', 69, 54, true);
    add_image_size('menu_thumb', 150, 150, true);
    add_image_size('blog_thumb', 420, 461, true);
    add_image_size('middle_thumb', 285, 285, true);
    add_image_size('big_thumb', 820, 461, true);

}

add_action('after_setup_theme', 'init_setup');


// The Excerpt
function get_excerpt_length(){
    return 20;
}

function return_excerpt_text() {
    return '...';
}

add_filter('excerpt_more','return_excerpt_text');
add_filter('excerpt_length', 'get_excerpt_length');
?>