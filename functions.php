<?php
	
	// Register stylesheets
	function atw_styles() {
		
		// Add stylesheets
		wp_register_style('googlefonts', 'https://fonts.googleapis.com/css?family=PT+Sans:400,700', array(), '1.0.0');
		wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '6.0.0');
		wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0');
		
		// Enqueue stylesheets
		wp_enqueue_style('normalize');
		wp_enqueue_style('style');
		
	}
	
	add_action('wp_enqueue_scripts', 'atw_styles');
	
	
	// Add menus to theme
	function atw_menus() {
		register_nav_menus(array(
			'header-menu' => __('Header Menu', 'atw')
		));
	}
	
	add_action('init', 'atw_menus');
	
	
	// Add featured image support 
	add_theme_support('post-thumbnails');
	
	
?>