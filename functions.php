<?php
function oemwptheme() {
	// Style
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
	// Script
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js'); 
}

add_action('wp_enqueue_scripts', 'oemwptheme');

// Sidebar
if (function_exists('register_sidebar') ) {
	register_sidebar(array(
			'name' => 'Main Sidebar',
			'id' => 'main_sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s clearfix">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
			));
	register_sidebar(array(
			'name' => 'Home Widget',
			'id' => 'home_widget',
			'before_widget' => '<div id="%1$s" class="col-md-4">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="title-service">',
			'after_title' => '</h3>',
			));
}

?>


