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
		'title'            => esc_html__( 'Вопросы', 'your-textdomain-here' ),
		'id'               => 'faq-title',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'faq-title-home',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок Вопросы', 'your-textdomain-here' ),
				'default'  => 'Вопросы',
			),
        ),
        )
    );