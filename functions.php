<?php
/**
 * Functions file for the theme
 *
 * @package Fictional University
 */

define( 'FU_THEME_URI', get_template_directory_uri() );
define( 'FU_JS_URI', get_template_directory_uri() . '/js' );
define( 'FU_CSS_URI', get_template_directory_uri() . '/css' );
define( 'FU_IMAGES_URI', get_template_directory_uri() . '/images' );

if ( ! function_exists( 'fu_university_scripts' ) ) {
	function fu_university_scripts() {
		wp_register_style( 'fu_google_fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );
		wp_register_style( 'fu_font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
		wp_register_style( 'fu_style', get_stylesheet_uri() );

		wp_register_script( 'fu_main_js', FU_JS_URI . '/scripts-bundled.js', array( 'jquery' ), microtime(), true  );

		wp_enqueue_style( 'fu_font_awesome' );
		wp_enqueue_style( 'fu_google_fonts' );
		wp_enqueue_style( 'fu_style' );

		wp_enqueue_script( 'fu_main_js' );
	}
	add_action( 'wp_enqueue_scripts', 'fu_university_scripts' );
}

if ( ! function_exists( 'fu_university_features' ) ) {
	function fu_university_features() {
		register_nav_menu( 'headerMenuLocation', 'Header Menu Location' );
		register_nav_menu( 'footerLocationOne', 'Footer Location One' );
		register_nav_menu( 'footerLocationTwo', 'Footer Location Two' );
	}
	add_action( 'after_setup_theme', 'fu_university_features' );
}