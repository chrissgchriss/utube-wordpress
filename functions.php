<?php

/*
    ===============================================
    Include Scripts
    ===============================================
*/
	
function awesome_script_enqueue() {
	
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/awesome.css', array(), '1.0.0', 'all');
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
// OK, think below if we put 'after_setup_theme the function will run after setup, but we need it befor then
// so we put init instad in place of after_setup_theme
//add_action('after_setup_theme', 'awesome_theme_setup');
add_action('init','awesome_theme_setup');

// if you are making a plugin for distribution, you need to put you
// add_theme_support() in a function, if just for your theme, OK to
// put it outside of function

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

// this adds POSTing formating options - use array to specity options
add_theme_support('post-formats', array('aside','image','video'));


