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
		'title'            => esc_html__( 'О нас', 'your-textdomain-here' ),
		'id'               => 'onas-title',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'nonas-title-home',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок О нас', 'your-textdomain-here' ),
				'default'  => 'О нас',
			),
            array(
				'id'       => 'nonas-back',
				'type'     => 'media',
				'title'    => esc_html__( 'Картинка фон', 'your-textdomain-here' ),
				'url'      => false,
				'preview'  => true,
			),
            array(
				'id'       => 'nonas-text-left',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Текст', 'your-textdomain-here' ),
				'default'  => '',
			),
            array(
				'id'       => 'nonas-img-right',
				'type'     => 'media',
				'title'    => esc_html__( 'Картинка правая', 'your-textdomain-here' ),
				'url'      => false,
				'preview'  => true,
			),
        ),
        )
    );