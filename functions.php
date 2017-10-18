<?php 

// Theme support
function wpb_theme_setup(){

    // Thumbnails 'Image à la une'
    add_theme_support( 'post-thumbnails' );

    // Post Formats
    add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	add_theme_support( 'customize-selective-refresh-widgets' );

}

add_action('after_setup_theme', 'wpb_theme_setup');




// Customizer Front Page EN
require get_template_directory().'/inc/customizer.php';

// Customizer Front Page FR
require get_template_directory().'/inc/customizer_home_fr.php';




