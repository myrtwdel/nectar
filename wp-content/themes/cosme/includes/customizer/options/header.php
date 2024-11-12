<?php
/**
 * Header Customizer options
 *
 * @package Cosme
 */

$wp_customize->add_panel( 'cosme_header_panel',
	array(
		'title'         => esc_html__( 'Header', 'cosme'),
		'priority'      => 10,
	)
);


/**
 * Site identity
 */
$wp_customize->add_setting( 'cosme_logo_size_desktop', array(
	'default'   		=> 130,
	'sanitize_callback' => 'absint',
) );			

$wp_customize->add_setting( 'cosme_logo_size_tablet', array(
	'default'   		=> 120,
	'sanitize_callback' => 'absint',
) );

$wp_customize->add_setting( 'cosme_logo_size_mobile', array(
	'default'   		=> 115,
	'sanitize_callback' => 'absint',
) );			


$wp_customize->add_control( new Cosme_Control_Slider( $wp_customize, 'cosme_logo_size',
	array(
		'label' 		=> esc_html__( 'Logo width', 'cosme' ),
		'section' 		=> 'title_tagline',
		'responsive'	=> true,
		'settings' 		=> array (
			'size_desktop' 		=> 'cosme_logo_size_desktop',
			'size_tablet' 		=> 'cosme_logo_size_tablet',
			'size_mobile' 		=> 'cosme_logo_size_mobile',
		),
		'input_attrs' => array (
			'min'	=> 10,
			'max'	=> 500,
            'step'  => 1,
            'unit'  => 'px'
		)		
	)
) );

$wp_customize->add_section( 'cosme_header_section', array(
	'title'			=> esc_html__('Main Header', 'cosme'),
	'priority'		=> 5,
	'panel'			=> 'cosme_header_panel'
) );


$wp_customize->add_setting( 'cosme_header_tabs',
	array(
		'default'           => '',
		'sanitize_callback' => 'cosme_sanitize_text'
	)
);

$wp_customize->add_control( new Cosme_Control_Tabs( $wp_customize, 'cosme_header_tabs',
		array(
			'label' 				=> esc_html__( 'Header Tabs', 'cosme' ),
			'section'       		=> 'cosme_header_section',
			'controls_general'		=> json_encode( 
				array( 
					'#customize-control-cosme_header_wocommerce_title',
					'#customize-control-cosme_enable_search_bar',
					'#customize-control-cosme_enable_account',
					'#customize-control-cosme_enable_cart', 
					'#customize-control-cosme_woocommerce_info',
					'#customize-control-cosme_header_settings_title',
					'#customize-control-cosme_heading_container',
					'#customize-control-cosme_header_menu_alignment',
					'#customize-control-cosme_enable_sticky_header',
					'#customize-control-cosme_sticky_header_type',
					'#customize-control-cosme_sticky_header_logo',
					'#customize-control-cosme_header_settings_divider'
				) 
			),
			'controls_design'		=> json_encode( 
				array( '#customize-control-cosme_header_text_color',
					'#customize-control-cosme_header_background',
					'#customize-control-cosme_sticky_header_divider',
					'#customize-control-cosme_header_sticky_text_color',
					'#customize-control-cosme_header_sticky_background',
				) 
			),
			'priority' 			=> 3,
		)
	)
);

$wp_customize->add_setting( 'cosme_header_settings_title',
	array(
		'default' 			=> '',
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Heading( $wp_customize, 'cosme_header_settings_title',
		array(
			'label'			=> esc_html__( 'Settings', 'cosme' ),
			'section' 		=> 'cosme_header_section',
			'priority' 			=> 5
		)
	)
);

$wp_customize->add_setting( 'cosme_heading_container',
	array(
		'default' 			=> 'container',
		'sanitize_callback' => 'cosme_sanitize_text'
	)
);

$wp_customize->add_control( new Cosme_Control_RadioButtons( $wp_customize, 'cosme_heading_container',
	array(
		'label' 		=> esc_html__( 'Container', 'cosme' ),
		'section' 		=> 'cosme_header_section',
		'choices' => array(
			'container' 		=> esc_html__( 'Fixed', 'cosme' ),
			'container-fluid' 	=> esc_html__( 'Full Width', 'cosme' ),
		),
		'priority'		  => 10
	)
) );

$wp_customize->add_setting( 'cosme_header_menu_alignment',
	array(
		'default' 			=> 'right',
		'sanitize_callback' => 'cosme_sanitize_text'
	)
);

$wp_customize->add_control( new Cosme_Control_RadioButtons( $wp_customize, 'cosme_header_menu_alignment',
	array(
		'label' 		=> esc_html__( 'Menu Position', 'cosme' ),
		'section' 		=> 'cosme_header_section',
		'choices' => array(
			'left' 		=> esc_html__( 'Left', 'cosme' ),
			'center' 	=> esc_html__( 'Center', 'cosme' ),
			'right' 	=> esc_html__( 'Right', 'cosme' ),
		),
		'priority'		  => 10
	)
) );

$wp_customize->add_setting(
	'cosme_enable_sticky_header',
	array(
		'default'           => 0,
		'sanitize_callback' => 'cosme_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Cosme_Control_Switch(
		$wp_customize,
		'cosme_enable_sticky_header',
		array(
			'label'         	=> esc_html__( 'Enable Sticky Header', 'cosme' ),
			'section'       	=> 'cosme_header_section',
			'settings'      	=> 'cosme_enable_sticky_header',
			'priority'		  => 15
		)
	)
);

$wp_customize->add_setting( 'cosme_sticky_header_type',
	array(
		'default' 			=> 'always',
		'sanitize_callback' => 'cosme_sanitize_text'
	)
);
$wp_customize->add_control( new Cosme_Control_RadioButtons( $wp_customize, 'cosme_sticky_header_type',
	array(
		'label' 		=> esc_html__( 'Sticky header type', 'cosme' ),
		'section' => 'cosme_header_section',
		'choices' => array(
			'always' 		=> esc_html__( 'Always sticky', 'cosme' ),
			'scrolltop' 	=> esc_html__( 'On scroll to top', 'cosme' ),
		),
		'active_callback' => 'cosme_callback_sticky_header',
		'priority'		  => 20
	)
) );

$wp_customize->add_setting( 
	'cosme_sticky_header_logo',
	array(
		'default'           => '',
		'sanitize_callback' => 'absint',
	) 
);
$wp_customize->add_control( 
	new WP_Customize_Media_Control( 
		$wp_customize, 
		'cosme_sticky_header_logo',
		array(
			'label'           => __( 'Sticky Header Logo', 'cosme' ),
			'section'         => 'cosme_header_section',
			'mime_type'       => 'image',
			'active_callback' => 'cosme_callback_sticky_header',
			'priority'	      => 21
		)
	)
);



$wp_customize->add_setting( 'cosme_header_settings_divider',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Divider( $wp_customize, 'cosme_header_settings_divider',
		array(
			'section' 		=> 'cosme_header_section',
            'priority' 			=> 25
		)
	)
);



$cosme_woocommerce = false;
if( class_exists('WooCommerce') ):
	$cosme_woocommerce = true; 
endif;

if( $cosme_woocommerce ):
	$wp_customize->add_setting( 'cosme_header_wocommerce_title',
		array(
			'default' 			=> '',
			'sanitize_callback' => 'esc_attr'
		)
	);

	$wp_customize->add_control( new Cosme_Control_Heading( $wp_customize, 'cosme_header_wocommerce_title',
			array(
				'label'			=> esc_html__( 'Woocommerce', 'cosme' ),
				'section' 		=> 'cosme_header_section',
				'priority' 			=> 30
			)
		)
	);
	$wp_customize->add_setting(
		'cosme_enable_search_bar',
		array(
			'default'           => 1,
			'sanitize_callback' => 'cosme_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		new cosme_Control_Switch(
			$wp_customize,
			'cosme_enable_search_bar',
			array(
				'label'         	=> esc_html__( 'Enable Search', 'cosme' ),
				'section'       	=> 'cosme_header_section',
				'settings'      	=> 'cosme_enable_search_bar',
				'priority' 			=> 35
			)
		)
	);


	$wp_customize->add_setting(
		'cosme_enable_account',
		array(
			'default'           => 1,
			'sanitize_callback' => 'cosme_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		new cosme_Control_Switch(
			$wp_customize,
			'cosme_enable_account',
			array(
				'label'         	=> esc_html__( 'Enable Account', 'cosme' ),
				'section'       	=> 'cosme_header_section',
				'settings'      	=> 'cosme_enable_account',
				'priority' 			=> 40
			)
		)
	);

	$wp_customize->add_setting(
		'cosme_enable_cart',
		array(
			'default'           => 1,
			'sanitize_callback' => 'cosme_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		new cosme_Control_Switch(
			$wp_customize,
			'cosme_enable_cart',
			array(
				'label'         	=> esc_html__( 'Enable Cart', 'cosme' ),
				'section'       	=> 'cosme_header_section',
				'settings'      	=> 'cosme_enable_cart',
				'priority' 			=> 45
			)
		)
	);
else:
	$wp_customize->add_setting( 'cosme_woocommerce_info', 
		array(
	    	'sanitize_callback'    => 'cosme_sanitize_text'
	  	)
  	);

  	$wp_customize->add_control( 
		new Cosme_Customize_Control_Information( $wp_customize,'cosme_woocommerce_info', 
			array(
				'label'           => esc_html__('Information','cosme'),
				'description'     => esc_html__('Install WooCommerce Plugin to control header WooCommerce items.','cosme'),
				'section'         => 'cosme_header_section',
			)
		)
 	);
endif;


// Styling

$wp_customize->add_setting( 'cosme_header_text_color',
	array(
		'default'           => '#000',
		'sanitize_callback' => 'cosme_sanitize_hex_rgba',
		'transport'         => 'refresh'
	)
);

$wp_customize->add_control( new Cosme_Control_AlphaColor( $wp_customize, 'cosme_header_text_color',
		array(
			'label'         	=> esc_html__( 'Text color', 'cosme' ),
			'section'       	=> 'cosme_header_section',
			'priority' 			=> 100
		)
	)
);

$wp_customize->add_setting( 'cosme_header_background',
	array(
		'default'           => '#fff',
		'sanitize_callback' => 'cosme_sanitize_hex_rgba',
		'transport'         => 'refresh'
	)
);

$wp_customize->add_control( new Cosme_Control_AlphaColor( $wp_customize, 'cosme_header_background',
		array(
			'label'         	=> esc_html__( 'Background color', 'cosme' ),
			'section'       	=> 'cosme_header_section',
			'priority' 			=> 110
		)
	)
);

$wp_customize->add_setting( 'cosme_sticky_header_divider',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Divider( $wp_customize, 'cosme_sticky_header_divider',
		array(
			'section' 		=> 'cosme_header_section',
			'active_callback' => 'cosme_callback_sticky_header',
			'priority' 			=> 110
		)
	)
);

$wp_customize->add_setting( 'cosme_header_sticky_text_color',
	array(
		'default'           => '#000',
		'sanitize_callback' => 'cosme_sanitize_hex_rgba',
		'transport'         => 'refresh'
	)
);

$wp_customize->add_control( new Cosme_Control_AlphaColor( $wp_customize, 'cosme_header_sticky_text_color',
		array(
			'label'         	=> esc_html__( 'Sticky Header Text color', 'cosme' ),
			'section'       	=> 'cosme_header_section',
			'active_callback' => 'cosme_callback_sticky_header',
			'priority' 			=> 115
		)
	)
);

$wp_customize->add_setting( 'cosme_header_sticky_background',
	array(
		'default'           => '#fff',
		'sanitize_callback' => 'cosme_sanitize_hex_rgba',
		'transport'         => 'refresh'
	)
);

$wp_customize->add_control( new Cosme_Control_AlphaColor( $wp_customize, 'cosme_header_sticky_background',
		array(
			'label'         	=> esc_html__( 'Sticky Header Background color', 'cosme' ),
			'section'       	=> 'cosme_header_section',
			'active_callback' => 'cosme_callback_sticky_header',
			'priority' 			=> 120
		)
	)
);
