<?php

function awesome_script_enqueue() {
	//css
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.1.1', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/gymnastics.css', array(), '1.0.0', 'all');
	wp_enqueue_style ('fontawesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.css', array(), '5.1.0', 'all');
	
	//js
	wp_enqueue_script('jqueryjs', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true);
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.1.1', true);
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/gymnastics.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'awesome_script_enqueue');
/*
	==========================================
	 Activate menus
	==========================================
*/
function awesome_theme_setup() {
	
	add_theme_support('menus');
	
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	
}
add_action('init', 'awesome_theme_setup');
/*
	==========================================
	 Theme support function
	==========================================
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image','video'));
add_theme_support('html5',array('search-form'));

?>
