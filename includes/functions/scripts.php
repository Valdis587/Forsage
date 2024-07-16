<?php
/**
 * Forsage functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Forsage
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Enqueue scripts and styles.
 */
function forsage_scripts() {

    wp_enqueue_style('forsage-theme-style', get_template_directory_uri() . '/assets/css/style.min.css', array(), _S_VERSION,);

	wp_enqueue_style( 'forsage-style', get_stylesheet_uri(), array(), _S_VERSION );
	

	wp_enqueue_script( 'forsage-scripts', get_template_directory_uri() . '/assets/js/scripts.min.js', array(), _S_VERSION, true );

    wp_enqueue_script( 'forsage-lib', get_template_directory_uri() . '/assets/js/lib.min.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'forsage_scripts', 1 );