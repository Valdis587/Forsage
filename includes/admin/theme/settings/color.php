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
		'title'            => esc_html__( 'Цвета', 'your-textdomain-here' ),
		'id'               => 'site-color',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'          => 'site-color1',
				'type'        => 'color',
				'title'       => esc_html__( 'Главный цвет', 'your-textdomain-here' ),
				'default'     => '#4073A2',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'--ColorHead' => ':root',
				),
			),
            array(
				'id'          => 'site-color2',
				'type'        => 'color',
				'title'       => esc_html__( 'Второй цвет', 'your-textdomain-here' ),
				'default'     => '#EF3E31',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'--ColorDuble' => ':root',
				),
			),
            array(
				'id'          => 'site-color3',
				'type'        => 'color',
				'title'       => esc_html__( 'Третий цвет', 'your-textdomain-here' ),
				'default'     => '#ffffff',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'--ColorWhite' => ':root',
				),
			),
            array(
				'id'          => 'site-color4',
				'type'        => 'color',
				'title'       => esc_html__( 'Футер цвет', 'your-textdomain-here' ),
				'default'     => '#2c2c2c',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'--ColorFooter' => ':root',
				),
			),
            array(
				'id'          => 'site-color5',
				'type'        => 'color',
				'title'       => esc_html__( 'Текст', 'your-textdomain-here' ),
				'default'     => '#333333',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'--ColorText' => ':root',
				),
			),
        ),
        )
    );
    