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
		'title'            => esc_html__( 'Проекты', 'your-textdomain-here' ),
		'id'               => 'job-title',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'job-title-home',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок Проекты', 'your-textdomain-here' ),
				'default'  => 'Проекты',
			),
        ),
        )
    );