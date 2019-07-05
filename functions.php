<?php 

// Enable Theme Support
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5' );

// Load Theme CSS
function theme_styles() {	
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css' );	
	wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.9.0/css/all.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );	

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

// Load Theme JS
function theme_js() {
	
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.bundle.js', array('jquery'), '', true );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/theme.js', array('jquery','bootstrap_js'), '', true );
}
add_action( 'wp_enqueue_scripts', 'theme_js' );

// Load Theme Fonts
function theme_fonts() {
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'theme_fonts');


// Actions and filters

// Removes span tags added by contact form 7 plugin
add_filter('wpcf7_form_elements', function($content) {
   //$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});