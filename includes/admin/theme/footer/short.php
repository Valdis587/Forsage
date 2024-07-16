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
		'title'            => esc_html__( 'Форма', 'your-textdomain-here' ),
		'id'               => 'foo-short',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'foo-short-form',
				'type'     => 'text',
				'title'    => esc_html__( 'Шоркод', 'your-textdomain-here' ),
				'default'  => '',
			),
        ),
        )
    );