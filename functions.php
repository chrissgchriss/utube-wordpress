<?php
/*
    ===============================================
    Include Scripts
    ===============================================
*/

function awesome_script_enqueue() {
	
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/awesome.css', array(), '1.0.0', 'all');
	wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true);
        wp_enqueue_script('customjs', get_template_directory_uri() . '/js/awesome.js', array(), '1.0.0', true);

}

add_action( 'wp_enqueue_scripts', 'awesome_script_enqueue');

/*
    ===============================================
    Activate Menus
    ===============================================
    // below is ok, if not going to PUBLISH your theme
    // add_theme_support('menus');
    // but if we are PUBLISHING , put add_theme_support('menus') in a function
*/

function awesome_theme_setup() {
  add_theme_support('menus');
  
  register_nav_menu('primary', 'Granville Header Navigation');
  register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init','awesome_theme_setup');

/*
    ===============================================
    Theme Support Functions
    ===============================================
*/

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside','image','video'));


