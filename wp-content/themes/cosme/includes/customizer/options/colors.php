<?php
/**
 * Colors Customizer options
 *
 * @package Cosme
 */
/*--------------------------------------------
	General
---------------------------------------------*/
$wp_customize->add_setting( 'cosme_general_color_title',
	array(
		'default' 			=> '',
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Heading( $wp_customize, 'cosme_general_color_title',
		array(
			'label'			=> esc_html__( 'General', 'cosme' ),
			'section' 		=> 'colors',
            'priority' 			=> 5
		)
	)
);

$wp_customize->add_setting( 'cosme_website_primary_color',
	array(
		'default'           => '#4E7661',
		'sanitize_callback' => 'cosme_sanitize_hex_rgba',
		'transport'         => 'refresh'
	)
);

$wp_customize->add_control( new Cosme_Control_AlphaColor( $wp_customize, 'cosme_website_primary_color',
		array(
			'label'         	=> esc_html__( 'Primary color', 'cosme' ),
			'section'       	=> 'colors',
            'priority' 			=> 5
		)
	)
);

$wp_customize->add_setting( 'cosme_website_secondary_color',
	array(
		'default'           => '#224229',
		'sanitize_callback' => 'cosme_sanitize_hex_rgba',
		'transport'         => 'refresh'
	)
);

$wp_customize->add_control( new Cosme_Control_AlphaColor( $wp_customize, 'cosme_website_secondary_color',
		array(
			'label'         	=> esc_html__( 'Secondary color', 'cosme' ),
			'section'       	=> 'colors',
            'priority' 			=> 5
		)
	)
);

$wp_customize->add_setting( 'cosme_website_accent_color',
	array(
		'default'           => '#000000',
		'sanitize_callback' => 'cosme_sanitize_hex_rgba',
		'transport'         => 'refresh'
	)
);

$wp_customize->add_control( new Cosme_Control_AlphaColor( $wp_customize, 'cosme_website_accent_color',
		array(
			'label'         	=> esc_html__( 'Accent color', 'cosme' ),
			'section'       	=> 'colors',
            'priority' 			=> 5
		)
	)
);


$wp_customize->add_setting( 'cosme_colors_general_divider',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Divider( $wp_customize, 'cosme_colors_general_divider',
		array(
			'section' 		=> 'colors',
            'priority' 			=> 6
		)
	)
);

$wp_customize->add_setting( 'cosme_header_color_title',
	array(
		'default' 			=> '',
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Heading( $wp_customize, 'cosme_header_color_title',
		array(
			'label'			=> esc_html__( 'Website', 'cosme' ),
			'section' 		=> 'colors',
            'priority' 			=> 6
		)
	)
);

$wp_customize->add_setting( 'cosme_website_text_color',
	array(
		'default'           => '#333333',
		'sanitize_callback' => 'cosme_sanitize_hex_rgba',
		'transport'         => 'refresh'
	)
);

$wp_customize->add_control(
	new Cosme_Control_AlphaColor(
		$wp_customize,
		'cosme_website_text_color',
		array(
			'label'         	=> esc_html__( 'Text', 'cosme' ),
			'section'       	=> 'colors',
            'priority' 			=> 7
		)
	)
);

$wp_customize->add_setting( 'cosme_website_heading_color',
	array(
		'default'           => '#222222',
		'sanitize_callback' => 'cosme_sanitize_hex_rgba',
		'transport'         => 'refresh'
	)
);

$wp_customize->add_control(
	new Cosme_Control_AlphaColor(
		$wp_customize,
		'cosme_website_heading_color',
		array(
			'label'         	=> esc_html__( 'Heading', 'cosme' ),
			'section'       	=> 'colors',
            'priority' 			=> 7
		)
	)
);

$wp_customize->add_setting( 'cosme_colors_website_divider',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Divider( $wp_customize, 'cosme_colors_website_divider',
		array(
			'section' 		=> 'colors',
            'priority' 			=> 10
		)
	)
);


$wp_customize->add_setting( 'cosme_form_color_title',
	array(
		'default' 			=> '',
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Heading( $wp_customize, 'cosme_form_color_title',
		array(
			'label'			=> esc_html__( 'Form', 'cosme' ),
			'section' 		=> 'colors',
            'priority' 			=> 15
		)
	)
);

$wp_customize->add_setting( 'cosme_form_field_background',
	array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'cosme_sanitize_hex_rgba',
		'transport'         => 'refresh'
	)
);

$wp_customize->add_control( new Cosme_Control_AlphaColor( $wp_customize, 'cosme_form_field_background',
		array(
			'label'         	=> esc_html__( 'Form field background', 'cosme' ),
			'section'       	=> 'colors',
            'priority' 			=> 20
		)
	)
);

$wp_customize->add_setting( 'cosme_border_color',
	array(
		'default'           => '#cccccc',
		'sanitize_callback' => 'cosme_sanitize_hex_rgba',
		'transport'         => 'refresh'
	)
);

$wp_customize->add_control( new Cosme_Control_AlphaColor( $wp_customize, 'cosme_border_color',
		array(
			'label'         	=> esc_html__( 'Border color', 'cosme' ),
			'section'       	=> 'colors',
            'priority' 			=> 25
		)
	)
);

$wp_customize->add_setting( 'cosme_colors_form_divider',
	array(
		'sanitize_callback' => 'cosme_sanitize_text'
	)
);

$wp_customize->add_control( new Cosme_Control_Divider( $wp_customize, 'cosme_colors_form_divider',
		array(
			'section' 		=> 'colors',
            'priority' 			=> 30
		)
	)
);

$wp_customize->add_setting( 'cosme_button_color_title',
	array(
		'default' 			=> '',
		'sanitize_callback' => 'cosme_sanitize_text'
	)
);

$wp_customize->add_control( new Cosme_Control_Heading( $wp_customize, 'cosme_button_color_title',
		array(
			'label'			=> esc_html__( 'Button', 'cosme' ),
			'section' 		=> 'colors',
            'priority' 			=> 35
		)
	)
);

$wp_customize->add_setting( 'cosme_button_text_color',
	array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'cosme_sanitize_hex_rgba',
		'transport'         => 'refresh'
	)
);

$wp_customize->add_control( new Cosme_Control_AlphaColor( $wp_customize, 'cosme_button_text_color',
		array(
			'label'         	=> esc_html__( 'Button Text Color', 'cosme' ),
			'section'       	=> 'colors',
            'priority' 			=> 40
		)
	)
);

$wp_customize->add_setting( 'cosme_button_hover_color',
	array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'cosme_sanitize_hex_rgba',
		'transport'         => 'refresh'
	)
);

$wp_customize->add_control( new Cosme_Control_AlphaColor( $wp_customize, 'cosme_button_hover_color',
		array(
			'label'         	=> esc_html__( 'Button Hover Color', 'cosme' ),
			'section'       	=> 'colors',
            'priority' 			=> 45
		)
	)
);