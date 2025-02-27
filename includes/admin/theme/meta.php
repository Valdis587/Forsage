<?php
/**
 * Redux Framework Sample Metabox Config File
 * For full documentation, please visit: http:https://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Redux_Metaboxes' ) ) {
	return;
}

Redux_Metaboxes::set_box(
	$opt_name,
	array(
		'id'         => 'vakansii',
		'title'      => esc_html__( 'Доп. поле', 'your-textdomain-here' ),
		'post_types' => array( 'vakansii' ),
		'position'   => 'normal', // normal, advanced, side.
		'priority'   => 'high', // high, core, default, low.
		'sections'   => array(
            array(
                'title'      => __( 'Зарплата', 'your-textdomain-here' ),
                'id'     => 'vakansii-1',
                'icon'   => 'el-icon-cogs',
                'fields'     => array(
            array(
				'id'       => 'vakansii-price',
				'type'     => 'text',
				'title'    => esc_html__( 'Зарплата', 'your-textdomain-here' ),
				'default'  => '',
            ),
        ),
    
			),
        ),
    ),
    );

	Redux_Metaboxes::set_box(
		$opt_name,
		array(
			'id'         => 'otzyvy',
			'title'      => esc_html__( 'Доп. поле', 'your-textdomain-here' ),
			'post_types' => array( 'otzyvy' ),
			'position'   => 'normal', // normal, advanced, side.
			'priority'   => 'high', // high, core, default, low.
			'sections'   => array(
				array(
					'title'      => __( 'Должность', 'your-textdomain-here' ),
					'id'     => 'otzyvy-1',
					'icon'   => 'el-icon-cogs',
					'fields'     => array(
				array(
					'id'       => 'otzyvy-job',
					'type'     => 'text',
					'title'    => esc_html__( 'Должность', 'your-textdomain-here' ),
					'default'  => '',
				),
			),
		
				),
			),
		),
		);

	Redux_Metaboxes::set_box(
		$opt_name,
		array(
			'id'         => 'uslugi',
			'title'      => esc_html__( 'Услуги', 'your-textdomain-here' ),
			'post_types' => array('uslugi' ),
			'position'   => 'normal', // normal, advanced, side.
			'priority'   => 'high', // high, core, default, low.
			'sections'   => array(
				array(
					'title'      => __( 'Услуги', 'your-textdomain-here' ),
					'id'     => 'uslugi-item',
					'icon'   => 'el-icon-cogs',
					'fields'     => array(
				array(
					'id'          => 'table-uslugi',
					'type'        => 'repeater',
					'title'       => esc_html__( 'Таблица', 'your-textdomain-here' ),
					'full_width'  => true,
					'item_name'   => '',
					'sortable'    => true,
					'active'      => false,
					'collapsible' => false,
					'fields'      => array(
						array(
							'id'          => 'uslugi-tablefield1',
							'type'        => 'text',
							'placeholder' => esc_html__( 'Запись слева', 'your-textdomain-here' ),
						),
						array(
							'id'          => 'uslugi-tablefield2',
							'type'        => 'text',
							'placeholder' => esc_html__( 'Запись справа', 'your-textdomain-here' ),
						),
					),
				),
			),
		),
			),
		),
		);

		Redux_Metaboxes::set_box(
			$opt_name,
			array(
				'id'         => 'proekty',
				'title'      => esc_html__( 'Проекты', 'your-textdomain-here' ),
				'post_types' => array('proekty' ),
				'position'   => 'normal', // normal, advanced, side.
				'priority'   => 'high', // high, core, default, low.
				'sections'   => array(
					array(
						'title'      => __( 'Проекты', 'your-textdomain-here' ),
						'id'     => 'proekty-item',
						'icon'   => 'el-icon-cogs',
						'fields'     => array(
					array(
						'id'          => 'table-proekty',
						'type'        => 'repeater',
						'title'       => esc_html__( 'Таблица', 'your-textdomain-here' ),
						'full_width'  => true,
						'item_name'   => '',
						'sortable'    => true,
						'active'      => false,
						'collapsible' => false,
						'fields'      => array(
							array(
								'id'          => 'proekty-tablefield1',
								'type'        => 'text',
								'placeholder' => esc_html__( 'Запись слева', 'your-textdomain-here' ),
							),
							array(
								'id'          => 'proekty-tablefield2',
								'type'        => 'text',
								'placeholder' => esc_html__( 'Запись справа', 'your-textdomain-here' ),
							),
						),
					),
					array(
						'id'       => 'proekty-size',
						'type'     => 'text',
						'title'    => esc_html__( 'Размеры', 'your-textdomain-here' ),
						'default'  => '',
					),
					array(
						'id'       => 'proekty-price',
						'type'     => 'text',
						'title'    => esc_html__( 'Цена', 'your-textdomain-here' ),
						'default'  => '',
					),
					array(
						'id'       => 'proekty-gallery',
						'type'     => 'gallery',
						'title'    => esc_html__( 'Добавить/редактировать галерею', 'your-textdomain-here' ),
					),
				),
			),
			
		),
	),
);