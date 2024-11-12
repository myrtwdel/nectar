<?php
/**
 * Footer Customizer options
 *
 * @package Cosme
 */

/*--------------------------------------------
	Footer Panel
---------------------------------------------*/
$wp_customize->add_panel( 'cosme_footer_panel',
	array(
		'title'         => esc_html__( 'Footer', 'cosme'),
		'priority'      => 40,
	)
);

/*--------------------------------------------
	Footer Section
---------------------------------------------*/
$wp_customize->add_section( 'cosme_footer_section',
	array(
		'title'      => esc_html__( 'Footer widgets', 'cosme'),
		'panel'      => 'cosme_footer_panel',
	)
);

$wp_customize->add_setting( 'cosme_footer_tabs',
	array(
		'default'           => '',
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Tabs( $wp_customize, 'cosme_footer_tabs',
		array(
			'label' 				=> esc_html__( 'Footer credit tabs', 'cosme' ),
			'section'       		=> 'cosme_footer_section',
			'controls_general'		=> json_encode( array( '#customize-control-footer_section_layout' ) ),
			'controls_design'		=> json_encode( array( '#customize-control-cosme_footer_section_heading_color', '#customize-control-cosme_footer_section_text_color', '#customize-control-cosme_footer_section_background' ) ),
		)
	)
);

$wp_customize->add_setting( 'footer_section_layout',
	array(
		'default'           => 'simple',
		'sanitize_callback' => 'sanitize_key',
	)
);

$wp_customize->add_control( new Cosme_Control_RadioImage( $wp_customize, 'footer_section_layout',
		array(
			'label'    => esc_html__( 'Footer layout', 'cosme' ),
			'section'  => 'cosme_footer_section',
			'columns'  => 'one-half',
			'choices'  => array(
				'disabled' => array(
					'label' => esc_html__( 'Disabled', 'cosme' ),
					'url'   => '%s/assets/admin/src/layout/disabled.svg'
				),				
				'simple' => array(
					'label' => esc_html__( 'Simple', 'cosme' ),
					'url'   => '%s/assets/admin/src/layout/footer-simple.svg'
				)
			)
		)
	)
); 

$wp_customize->add_setting( 'cosme_footer_section_heading_color',
	array(
		'default'           => '#222222',
		'sanitize_callback' => 'cosme_sanitize_hex_rgba',
		'transport'         => 'refresh'
	)
);
$wp_customize->add_control( new Cosme_Control_AlphaColor( $wp_customize, 'cosme_footer_section_heading_color',
		array(
			'label'         	=> esc_html__( 'Heading color', 'cosme' ),
			'section'       	=> 'cosme_footer_section',
			'priority' 			=> 100
		)
	)
);

$wp_customize->add_setting( 'cosme_footer_section_text_color',
	array(
		'default'           => '#333333',
		'sanitize_callback' => 'cosme_sanitize_hex_rgba',
		'transport'         => 'refresh'
	)
);

$wp_customize->add_control( new Cosme_Control_AlphaColor( $wp_customize, 'cosme_footer_section_text_color',
		array(
			'label'         	=> esc_html__( 'Text color', 'cosme' ),
			'section'       	=> 'cosme_footer_section',
			'priority' 			=> 110
		)
	)
);

$wp_customize->add_setting( 'cosme_footer_section_background',
	array(
		'default'           => '#f8f8f8',
		'sanitize_callback' => 'cosme_sanitize_hex_rgba',
		'transport'         => 'refresh'
	)
);

$wp_customize->add_control( new Cosme_Control_AlphaColor( $wp_customize, 'cosme_footer_section_background',
		array(
			'label'         	=> esc_html__( 'Background color', 'cosme' ),
			'section'       	=> 'cosme_footer_section',
			'priority' 			=> 110
		)
	)
);



/**
 * Scroll to top
 */

$wp_customize->add_section(
	'cosme_section_scrolltotop',
	array(
		'title'      => esc_html__( 'Scroll to top', 'cosme'),
		'panel'      => 'cosme_footer_panel',
	)
);

$wp_customize->add_setting(
	'cosme_scrolltop_tabs',
	array(
		'default'           => '',
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control(
	new Cosme_Control_Tabs (
		$wp_customize,
		'cosme_scrolltop_tabs',
		array(
			'label' 				=> '',
			'section'       		=> 'cosme_section_scrolltotop',
			'controls_general'		=> json_encode( array( '#customize-control-scrolltop_text','#customize-control-enable_scrolltop','#customize-control-scrolltop_type','#customize-control-scrolltop_icon','#customize-control-scrolltop_radius','#customize-control-scrolltop_divider_1','#customize-control-scrolltop_position','#customize-control-scrolltop_side_offset','#customize-control-scrolltop_bottom_offset','#customize-control-scrolltop_divider_2','#customize-control-scrolltop_visibility',	) ),
			'controls_design'		=> json_encode( array( '#customize-control-scrolltop_color','#customize-control-scrolltop_bg_color','#customize-control-scrolltop_divider_3','#customize-control-scrolltop_color_hover','#customize-control-scrolltop_bg_color_hover','#customize-control-scrolltop_divider_4','#customize-control-scrolltop_icon_size','#customize-control-scrolltop_padding', ) ),
		)
	)
);

$wp_customize->add_setting(
	'enable_scrolltop',
	array(
		'default'           => 1,
		'sanitize_callback' => 'cosme_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Cosme_Control_Switch(
		$wp_customize,
		'enable_scrolltop',
		array(
			'label'         	=> esc_html__( 'Enable scroll to top', 'cosme' ),
			'section'       	=> 'cosme_section_scrolltotop',
		)
	)
);

$wp_customize->add_setting( 'scrolltop_type',
	array(
		'default' 			=> 'icon',
		'sanitize_callback' => 'cosme_sanitize_text'
	)
);
$wp_customize->add_control( new Cosme_Control_RadioButtons( $wp_customize, 'scrolltop_type',
	array(
		'label' 	=> esc_html__( 'Type', 'cosme' ),
		'section' 	=> 'cosme_section_scrolltotop',
		'choices' 	=> array(
			'icon' 		=> esc_html__( 'Icon', 'cosme' ),
			'text' 		=> esc_html__( 'Text + Icon', 'cosme' ),
		),
		'active_callback' => 'cosme_callback_scrolltop',
	)
) );

$wp_customize->add_setting(
	'scrolltop_text',
	array(
		'sanitize_callback' => 'cosme_sanitize_text',
		'default'           => esc_html__( 'Back to top', 'cosme' ),
	)       
);
$wp_customize->add_control( 'scrolltop_text', array(
	'label'       		=> esc_html__( 'Text', 'cosme' ),
	'type'        		=> 'text',
	'section'     		=> 'cosme_section_scrolltotop',
	'active_callback' 	=> 'cosme_callback_scrolltop_text'
) );

$wp_customize->add_setting(
	'scrolltop_icon',
	array(
		'default'           => 'icon1',
		'sanitize_callback' => 'sanitize_key',
	)
);
$wp_customize->add_control(
	new Cosme_Control_RadioImage(
		$wp_customize,
		'scrolltop_icon',
		array(
			'label'    	=> esc_html__( 'Icon', 'cosme' ),
			'section'  	=> 'cosme_section_scrolltotop',
			'cols'		=> 4,
			'choices'  	=> array(			
				'icon1' 	=> array(
					'label' => esc_html__( 'Icon 1', 'cosme' ),
					'url'   => '%s/assets/admin/src/scroll/st1.svg'
				),
				'icon2' => array(
					'label' => esc_html__( 'Icon 2', 'cosme' ),
					'url'   => '%s/assets/admin/src/scroll/st2.svg'
				),		
				'icon3' => array(
					'label' => esc_html__( 'Icon 3', 'cosme' ),
					'url'   => '%s/assets/admin/src/scroll/st3.svg'
				),				
				'icon4' => array(
					'label' => esc_html__( 'Icon 4', 'cosme' ),
					'url'   => '%s/assets/admin/src/scroll/st4.svg'
				),
			),
			'active_callback' => 'cosme_callback_scrolltop',
		)
	)
); 

$wp_customize->add_setting( 'scrolltop_radius', array(
	'default'   		=> 0,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );			

$wp_customize->add_control( new Cosme_Control_Slider( $wp_customize, 'scrolltop_radius',
	array(
		'label' 		=> esc_html__( 'Button radius', 'cosme' ),
		'section' 		=> 'cosme_section_scrolltotop',
		'is_responsive'	=> 0,
		'settings' 		=> array (
			'size_desktop' 		=> 'scrolltop_radius',
		),
		'input_attrs' => array (
			'min'	=> 0,
			'max'	=> 100
		),
		'active_callback' => 'cosme_callback_scrolltop',
	)
) );

$wp_customize->add_setting( 'scrolltop_divider_1',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Divider( $wp_customize, 'scrolltop_divider_1',
		array(
			'section' 		=> 'cosme_section_scrolltotop',
			'active_callback' => 'cosme_callback_scrolltop',
		)
	)
);

$wp_customize->add_setting( 'scrolltop_position',
	array(
		'default' 			=> 'right',
		'sanitize_callback' => 'cosme_sanitize_text'
	)
);
$wp_customize->add_control( new Cosme_Control_RadioButtons( $wp_customize, 'scrolltop_position',
	array(
		'label' 	=> esc_html__( 'Position', 'cosme' ),
		'section' 	=> 'cosme_section_scrolltotop',
		'choices' 	=> array(
			'left' 		=> esc_html__( 'Left', 'cosme' ),
			'right' 	=> esc_html__( 'Right', 'cosme' ),
		),
		'active_callback' => 'cosme_callback_scrolltop',
	)
) );

$wp_customize->add_setting( 'scrolltop_side_offset', array(
	'default'   		=> 30,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );			

$wp_customize->add_control( new Cosme_Control_Slider( $wp_customize, 'scrolltop_side_offset',
	array(
		'label' 		=> esc_html__( 'Side offset', 'cosme' ),
		'section' 		=> 'cosme_section_scrolltotop',
		'is_responsive'	=> 0,
		'settings' 		=> array (
			'size_desktop' 		=> 'scrolltop_side_offset',
		),
		'input_attrs' => array (
			'min'	=> 0,
			'max'	=> 100
		),
		'active_callback' => 'cosme_callback_scrolltop',
	)
) );

$wp_customize->add_setting( 'scrolltop_bottom_offset', array(
	'default'   		=> 30,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );			

$wp_customize->add_control( new Cosme_Control_Slider( $wp_customize, 'scrolltop_bottom_offset',
	array(
		'label' 		=> esc_html__( 'Bottom offset', 'cosme' ),
		'section' 		=> 'cosme_section_scrolltotop',
		'is_responsive'	=> 0,
		'settings' 		=> array (
			'size_desktop' 		=> 'scrolltop_bottom_offset',
		),
		'input_attrs' => array (
			'min'	=> 0,
			'max'	=> 100
		),
		'active_callback' => 'cosme_callback_scrolltop',
	)
) );

$wp_customize->add_setting( 'scrolltop_divider_2',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Divider( $wp_customize, 'scrolltop_divider_2',
		array(
			'section' 		=> 'cosme_section_scrolltotop',
			'active_callback' => 'cosme_callback_scrolltop',
		)
	)
);

$wp_customize->add_setting( 'scrolltop_visibility', array(
	'sanitize_callback' => 'cosme_sanitize_select',
	'default' 			=> 'all',
) );

$wp_customize->add_control( 'scrolltop_visibility', array(
	'type' 		=> 'select',
	'section' 	=> 'cosme_section_scrolltotop',
	'label' 	=> esc_html__( 'Visibility', 'cosme' ),
	'choices' => array(
		'all' 			=> esc_html__( 'Show on all devices', 'cosme' ),
		'desktop-only' 	=> esc_html__( 'Desktop only', 'cosme' ),
		'mobile-only' 	=> esc_html__( 'Mobile/tablet only', 'cosme' ),
	),
	'active_callback' => 'cosme_callback_scrolltop',
) );

/**
 * Style
 */
$wp_customize->add_setting(
	'scrolltop_color',
	array(
		'default'           => '#fff',
		'sanitize_callback' => 'cosme_sanitize_hex_rgba'
	)
);
$wp_customize->add_control(
	new Cosme_Control_AlphaColor(
		$wp_customize,
		'scrolltop_color',
		array(
			'label'         	=> esc_html__( 'Icon color', 'cosme' ),
			'section'       	=> 'cosme_section_scrolltotop',
		)
	)
);

$wp_customize->add_setting(
	'scrolltop_bg_color',
	array(
		'default'           => '#212121',
		'sanitize_callback' => 'cosme_sanitize_hex_rgba',
	)
);
$wp_customize->add_control(
	new Cosme_Control_AlphaColor(
		$wp_customize,
		'scrolltop_bg_color',
		array(
			'label'         	=> esc_html__( 'Background color', 'cosme' ),
			'section'       	=> 'cosme_section_scrolltotop',
		)
	)
);

$wp_customize->add_setting( 'scrolltop_divider_3',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Divider( $wp_customize, 'scrolltop_divider_3',
		array(
			'section' 		=> 'cosme_section_scrolltotop',
		)
	)
);

$wp_customize->add_setting(
	'scrolltop_color_hover',
	array(
		'default'           => '#fff',
		'sanitize_callback' => 'cosme_sanitize_hex_rgba',
	)
);
$wp_customize->add_control(
	new Cosme_Control_AlphaColor(
		$wp_customize,
		'scrolltop_color_hover',
		array(
			'label'         	=> esc_html__( 'Icon hover color', 'cosme' ),
			'section'       	=> 'cosme_section_scrolltotop',
		)
	)
);

$wp_customize->add_setting(
	'scrolltop_bg_color_hover',
	array(
		'default'           => '#757575',
		'sanitize_callback' => 'cosme_sanitize_hex_rgba',
	)
);
$wp_customize->add_control(
	new Cosme_Control_AlphaColor(
		$wp_customize,
		'scrolltop_bg_color_hover',
		array(
			'label'         	=> esc_html__( 'Background hover color', 'cosme' ),
			'section'       	=> 'cosme_section_scrolltotop',
		)
	)
);

$wp_customize->add_setting( 'scrolltop_divider_4',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Divider( $wp_customize, 'scrolltop_divider_4',
		array(
			'section' 		=> 'cosme_section_scrolltotop',
		)
	)
);

$wp_customize->add_setting( 'scrolltop_icon_size', array(
	'default'   		=> 18,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );			

$wp_customize->add_control( new Cosme_Control_Slider( $wp_customize, 'scrolltop_icon_size',
	array(
		'label' 		=> esc_html__( 'Icon size', 'cosme' ),
		'section' 		=> 'cosme_section_scrolltotop',
		'is_responsive'	=> 0,
		'settings' 		=> array (
			'size_desktop' 		=> 'scrolltop_icon_size',
		),
		'input_attrs' => array (
			'min'	=> 10,
			'max'	=> 100
		),
	)
) );

$wp_customize->add_setting( 'scrolltop_padding', array(
	'default'   		=> 15,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );			

$wp_customize->add_control( new Cosme_Control_Slider( $wp_customize, 'scrolltop_padding',
	array(
		'label' 		=> esc_html__( 'Padding', 'cosme' ),
		'section' 		=> 'cosme_section_scrolltotop',
		'is_responsive'	=> 0,
		'settings' 		=> array (
			'size_desktop' 		=> 'scrolltop_padding',
		),
		'input_attrs' => array (
			'min'	=> 0,
			'max'	=> 100
		),
	)
) );


/*--------------------------------------------
	Footer Credits
---------------------------------------------*/
$wp_customize->add_section('cosme_footer_credits',
	array(
		'title'      => esc_html__( 'Copyright', 'cosme'),
		'panel'      => 'cosme_footer_panel',
	)
);

$wp_customize->add_setting( 'cosme_footer_credits_tabs',
	array(
		'default'           => '',
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Tabs( $wp_customize, 'cosme_footer_credits_tabs',
		array(
			'label' 				=> esc_html__( 'Footer credit tabs', 'cosme' ),
			'section'       		=> 'cosme_footer_credits',
			'controls_general'		=> json_encode( array( '#customize-control-footer_copyright_layout', '#customize-control-cosme_footer_credits' ) ),
			'controls_design'		=> json_encode( array( '#customize-control-cosme_footer_credits_background', '#customize-control-cosme_footer_credits_color', '#customize-control-cosme_footer_credits_style_divider', '#customize-control-cosme_footer_credits_link_color', '#customize-control-cosme_footer_credits_link_hover_color' ) ),
		)
	)
);

/*--------------------------------------------
	Footer Credits General
---------------------------------------------*/
$wp_customize->add_setting('cosme_footer_credits',
	array(
		'sanitize_callback' => 'cosme_sanitize_text',
		'default'           => sprintf( esc_html__( '%1$1s. Proudly powered by %2$2s', 'cosme' ), '{copyright} {year} {site_title}', '{theme_author}' ),// phpcs:ignore WordPress.WP.I18n.MissingTranslatorsComment
		'transport' 		=> 'refresh'
	)       
);
$wp_customize->add_control( 'cosme_footer_credits',
	array(
		'label'       	  => esc_html__( 'Footer credits', 'cosme' ),
		'description' 	  => esc_html__( 'You can use the following tags: {copyright}, {year}, {site_title}', 'cosme' ),
		'type'        	  => 'textarea',
		'section'         => 'cosme_footer_credits',
		'priority'    	  => 10
	) 
);


/*--------------------------------------------
	Footer Credits Styling
---------------------------------------------*/
$wp_customize->add_setting( 'cosme_footer_credits_color',
	array(
		'default'           => '#333333',
		'sanitize_callback' => 'cosme_sanitize_hex_rgba',
		'transport'         => 'refresh'
	)
);

$wp_customize->add_control( new Cosme_Control_AlphaColor( $wp_customize, 'cosme_footer_credits_color',
		array(
			'label'         	=> esc_html__( 'Text color', 'cosme' ),
			'section'       	=> 'cosme_footer_credits',
			'priority' 			=> 100
		)
	)
);

$wp_customize->add_setting( 'cosme_footer_credits_background',
	array(
		'default'           => '#f8f8f8',
		'sanitize_callback' => 'cosme_sanitize_hex_rgba',
		'transport'         => 'refresh'
	)
);

$wp_customize->add_control( new Cosme_Control_AlphaColor( $wp_customize, 'cosme_footer_credits_background',
		array(
			'label'         	=> esc_html__( 'Background color', 'cosme' ),
			'section'       	=> 'cosme_footer_credits',
			'priority' 			=> 110
		)
	)
);

$wp_customize->add_setting( 'cosme_footer_credits_style_divider',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Divider( $wp_customize, 'cosme_footer_credits_style_divider',
		array(
			'section' 		=> 'cosme_footer_credits',
			'priority' 			=> 115
		)
	)
);

$wp_customize->add_setting( 'cosme_footer_credits_link_color',
	array(
		'default'           => '#7e7e7e',
		'sanitize_callback' => 'cosme_sanitize_hex_rgba',
		'transport'         => 'refresh'
	)
);
$wp_customize->add_control( new Cosme_Control_AlphaColor( $wp_customize, 'cosme_footer_credits_link_color',
		array(
			'label'         	=> esc_html__( 'Link color', 'cosme' ),
			'section'       	=> 'cosme_footer_credits',
			'priority' 			=> 120
		)
	)
);

$wp_customize->add_setting( 'cosme_footer_credits_link_hover_color',
	array(
		'default'           => '#222222',
		'sanitize_callback' => 'cosme_sanitize_hex_rgba',
		'transport'         => 'refresh'
	)
);
$wp_customize->add_control( new Cosme_Control_AlphaColor( $wp_customize, 'cosme_footer_credits_link_hover_color',
		array(
			'label'         	=> esc_html__( 'Link hover color', 'cosme' ),
			'section'       	=> 'cosme_footer_credits',
			'priority' 			=> 130
		)
	)
);