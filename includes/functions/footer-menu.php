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

// This theme uses wp_nav_menu() in one location.
register_nav_menus(
    array(
        'menu-page' => esc_html__( 'Меню футера "Страницы"', 'autoparts' ),
    )
);

function Forsage_menu_page() {
    wp_nav_menu([
        'theme_location'  => 'menu-page',
        'menu'            => 'page',
        'container'       => false,
        'menu_class'      => 'footer__menu-list',
        'walker'          => new Forsage_Walker_Nav_menu_page()
    ]);
}

// This theme uses wp_nav_menu() in one location.
register_nav_menus(
    array(
        'menu-service' => esc_html__( 'Меню футера "Услуги"', 'autoparts' ),
    )
);

function Forsage_menu_service() {
    wp_nav_menu([
        'theme_location'  => 'menu-service',
        'menu'            => 'service',
        'container'       => false,
        'menu_class'      => 'footer__menu-list',
        'walker'          => new Forsage_Walker_Nav_menu_page()
    ]);
}

class Forsage_Walker_Nav_menu_page extends Walker_Nav_Menu {

    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="item-vertical ' . esc_attr( $class_names ) . '"' : '';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        // создаем HTML код элемента меню
        $output .= $indent . '<li' . $id . $class_names .'>';

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters( 'the_title', $item->title, $item->ID );
        $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

        $item_output = $args->before;
        $item_output .= '<i class="icon-angle-double-right"></i><a '. $attributes .'>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= ( $depth == 0 && $args->walker->has_children ) ? '</a>' : '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

}