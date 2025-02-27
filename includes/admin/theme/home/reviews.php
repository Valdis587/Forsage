<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Отзывы', 'your-textdomain-here' ),
		'id'               => 'reviews-title',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'reviews-title-home',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок Отзывы', 'your-textdomain-here' ),
				'default'  => 'Отзывы',
			),
            array(
				'id'       => 'reviews-back',
				'type'     => 'media',
				'title'    => esc_html__( 'Картинка фон', 'your-textdomain-here' ),
				'url'      => false,
				'preview'  => true,
			),
        ),
        )
    );