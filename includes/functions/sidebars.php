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
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function forsage_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Сайдбар новости', 'forsage' ),
			'id'            => 'sidebar-news',
			'description'   => esc_html__( 'Add widgets here.', 'forsage' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s sidebar__wydget">',
			'after_widget'  => '</section>',
			'before_title'  => '<div class="sidebar__title-wrapper"><h3 class="sidebar__title">',
			'after_title'   => '</h3></div>',
		)
	);
}
add_action( 'widgets_init', 'forsage_widgets_init' );

