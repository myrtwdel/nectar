<?php
/**
 * General Customizer options
 *
 * @package Cosme
 */
/*--------------------------------------------
	General Panel
---------------------------------------------*/
$wp_customize->add_panel('cosme_general_panel',
	array(
		'title'         => esc_html__( 'General', 'cosme'),
		'priority'      => 5,
	)
);

$wp_customize->add_section( 'cosme_container_section',
	array(
		'title'      => esc_html__( 'Container', 'cosme'),
		'panel'      => 'cosme_general_panel',
	)
);

$wp_customize->add_setting( 'cosme_website_container',
	array(
		'default' 			=> 'container',
		'sanitize_callback' => 'cosme_sanitize_text'
	)
);

$wp_customize->add_control( new Cosme_Control_RadioButtons( $wp_customize, 'cosme_website_container',
	array(
		'label' 		=> esc_html__( 'Container', 'cosme' ),
		'section' 		=> 'cosme_container_section',
		'choices' => array(
			'container' 		=> esc_html__( 'Fixed', 'cosme' ),
			'container-fluid' 	=> esc_html__( 'Full Width', 'cosme' ),
		),
		'priority'		  => 10
	)
) );

$wp_customize->add_setting(
	'cosme_container_width',
	array(
		'default'           => 1170,
		'transport'			=> 'postMessage',
		'sanitize_callback' => 'absint',
	)
);

$wp_customize->add_control(
	new Cosme_Control_Slider(
		$wp_customize,
		'cosme_container_width',
		array(
			'label' 		=> esc_html__('Container Width', 'cosme'),
			'section' 		=> 'cosme_container_section',
			'responsive'	=> false,
			'settings' 		=> array(
				'size_desktop' 		=> 'cosme_container_width',
			),
			'input_attrs' => array(
				'min'	=> 990,
				'max'	=> 1920,
				'unit'  => 'px'
			),
			'priority'		  => 15
		)
	)
);




