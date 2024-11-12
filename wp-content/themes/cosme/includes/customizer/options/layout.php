<?php
/**
 * Layout Customizer options
 *
 * @package Cosme
 */
/*--------------------------------------------
	Layout Panel
---------------------------------------------*/
$wp_customize->add_panel( 'cosme_layout_panel', 
    array(
        'title'          => esc_html__( 'Layout', 'cosme' ),
        'capability'     => 'edit_theme_options',
        'priority'       => 20,
    ) 
);

/*--------------------------------------------
	Archive Section
---------------------------------------------*/
$wp_customize->add_section( 'cosme_archive_section',
	array(
		'title'         => esc_html__( 'Archive layout', 'cosme'),
		'panel'         => 'cosme_layout_panel',
        'priority'      => 10,
	)
);

$wp_customize->add_setting('cosme_archive_tabs',
	array(
		'default'           => '',
		'sanitize_callback'	=> 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Tabs ( $wp_customize, 'cosme_archive_tabs',
		array(
			'label' 				=> esc_html__( 'Archive tabs', 'cosme'),
			'section'       		=> 'cosme_archive_section',
			'controls_general'		=> json_encode( array( 
				'#customize-control-cosme_archive_layout', 
				'#customize-control-cosme_archive_layout_divider', 
				'#customize-control-cosme_archive_sidebar', 
				'#customize-control-cosme_archive_sidebar_divider', 
				'#customize-control-cosme_archives_grid_columns',
				'#customize-control-cosme_archive_column_divider',
				'#customize-control-cosme_archive_image_title',
				'#customize-control-cosme_featured_image_spacing',
				'#customize-control-cosme_featured_image_spacing_divider',
				'#customize-control-cosme_archive_text_title',
				'#customize-control-cosme_archive_text_align',
				'#customize-control-cosme_archive_title_spacing',
				'#customize-control-cosme_show_excerpt',
				'#customize-control-cosme_excerpt_length',
				'#customize-control-cosme_show_readmore',
				'#customize-control-cosme_text_spacing_divider',
				'#customize-control-cosme_meta_heading_title',
				'#customize-control-cosme_meta_date_enable',
				'#customize-control-cosme_meta_author_enable',
				'#customize-control-cosme_meta_categories_enable',
				'#customize-control-cosme_meta_comments_enable',
				'#customize-control-cosme_read_time_enable'


			) ),
			'controls_design'		=> json_encode( array( '#customize-control-cosme_archive_title_size', '#customize-control-cosme_archive_meta_size' ) ),
		)
	)
);

/*--------------------------------------------
	Archive General
---------------------------------------------*/
$wp_customize->add_setting( 'cosme_archive_layout',
	array(
		'default'           => 'simple',
		'sanitize_callback' => 'sanitize_key',
	)
);

$wp_customize->add_control( new Cosme_Control_RadioImage( $wp_customize, 'cosme_archive_layout',
		array(
			'label'    => esc_html__( 'Layout', 'cosme' ),
			'section'  => 'cosme_archive_section',
			'columns'  => 'one-half',
			'choices'  => array(
				'simple' => array(
					'label' => esc_html__( 'Simple', 'cosme' ),
					'url'   => '%s/assets/admin/src/layout/simple.svg'
				),
				'grid' => array(
					'label' => esc_html__( 'Grid', 'cosme' ),
					'url'   => '%s/assets/admin/src/layout/grid.svg'
				)
			)
		)
	)
); 

$wp_customize->add_setting( 'cosme_archive_layout_divider',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Divider( $wp_customize, 'cosme_archive_layout_divider',
		array(
			'section' 		=> 'cosme_archive_section',
		)
	)
);

$wp_customize->add_setting( 'cosme_archive_sidebar',
	array(
		'default'           => 'none',
		'sanitize_callback' => 'sanitize_key',
	)
);

$wp_customize->add_control( new Cosme_Control_RadioImage( $wp_customize, 'cosme_archive_sidebar',
		array(
			'label'    => esc_html__( 'Sidebar', 'cosme' ),
			'section'  => 'cosme_archive_section',
			'columns'  => 'one-half',
			'choices'  => array(
				'left' => array(
					'label' => esc_html__( 'Left Sidebar', 'cosme' ),
					'url'   => '%s/assets/admin/src/layout/left-sidebar@2x.png'
				),
				'none' => array(
					'label' => esc_html__( 'No Sidebar', 'cosme' ),
					'url'   => '%s/assets/admin/src/layout/fullwidth@2x.png'
                ),
                'right' => array(
					'label' => esc_html__( 'Right Sidebar', 'cosme' ),
					'url'   => '%s/assets/admin/src/layout/right-sidebar@2x.png'
				)
			)
		)
	)
); 

$wp_customize->add_setting( 'cosme_archive_sidebar_divider',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Divider( $wp_customize, 'cosme_archive_sidebar_divider',
		array(
			'section' 		=> 'cosme_archive_section',
			'active_callback' 	=> 'cosme_archives_callback_grid'
		)
	)
);

$wp_customize->add_setting( 'cosme_archives_grid_columns',
	array(
		'default' 			=> '2',
		'sanitize_callback' => 'cosme_sanitize_text',

	)
);
$wp_customize->add_control( new Cosme_Control_RadioButtons( $wp_customize, 'cosme_archives_grid_columns',
	array(
		'label' 	=> esc_html__( 'Columns', 'cosme' ),
		'section' 	=> 'cosme_archive_section',
		'choices' 	=> array(
			'2' 		=> esc_html__( '2', 'cosme' ),
			'3' 		=> esc_html__( '3', 'cosme' ),
			'4' 		=> esc_html__( '4', 'cosme' ),
		),
		'active_callback' 	=> 'cosme_archives_callback_grid'
	)
) );

$wp_customize->add_setting( 'cosme_archive_column_divider',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Divider( $wp_customize, 'cosme_archive_column_divider',
		array(
			'section' 		=> 'cosme_archive_section'
		)
	)
);

$wp_customize->add_setting( 'cosme_archive_image_title',
	array(
		'default' 			=> '',
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Heading( $wp_customize, 'cosme_archive_image_title',
		array(
			'label'			=> esc_html__( 'Featured Image', 'cosme' ),
			'section' 		=> 'cosme_archive_section',
		)
	)
);


$wp_customize->add_setting( 'cosme_featured_image_spacing', array(
	'default'   		=> 15,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );			

$wp_customize->add_control( new Cosme_Control_Slider( $wp_customize, 'cosme_featured_image_spacing',
	array(
		'label' 		=> esc_html__( 'Spacing', 'cosme' ),
		'section' 		=> 'cosme_archive_section',
		'responsive'	=> false,
		'settings' 		=> array (
			'size_desktop' 		=> 'cosme_featured_image_spacing',
		),
		'input_attrs' => array (
			'min'	=> 0,
			'max'	=> 60,
		)
	)
) ); 

$wp_customize->add_setting( 'cosme_featured_image_spacing_divider',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Divider( $wp_customize, 'cosme_featured_image_spacing_divider',
		array(
			'section' 		=> 'cosme_archive_section'
		)
	)
);

$wp_customize->add_setting( 'cosme_archive_text_title',
	array(
		'default' 			=> '',
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Heading( $wp_customize, 'cosme_archive_text_title',
		array(
			'label'			=> esc_html__( 'Text', 'cosme' ),
			'section' 		=> 'cosme_archive_section',
		)
	)
);


$wp_customize->add_setting( 'cosme_archive_text_align',
	array(
		'default' 			=> 'left',
		'sanitize_callback' => 'cosme_sanitize_text'
	)
);
$wp_customize->add_control( new Cosme_Control_RadioButtons( $wp_customize, 'cosme_archive_text_align',
	array(
		'label'   => esc_html__( 'Text alignment', 'cosme' ),
		'section' => 'cosme_archive_section',
		'choices' => array(
			'left' 		=> '<svg width="16" height="13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h10v1H0zM0 4h16v1H0zM0 8h10v1H0zM0 12h16v1H0z"/></svg>',
			'center' 	=> '<svg width="16" height="13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 0h10v1H3zM0 4h16v1H0zM3 8h10v1H3zM0 12h16v1H0z"/></svg>',
			'right' 	=> '<svg width="16" height="13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 0h10v1H6zM0 4h16v1H0zM6 8h10v1H6zM0 12h16v1H0z"/></svg>',
		)
	)
) );

$wp_customize->add_setting( 'cosme_archive_title_spacing', array(
	'default'   		=> 20,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );			

$wp_customize->add_control( new Cosme_Control_Slider( $wp_customize, 'cosme_archive_title_spacing',
	array(
		'label' 		=> esc_html__( 'Title Spacing', 'cosme' ),
		'section' 		=> 'cosme_archive_section',
		'responsive'	=> false,
		'settings' 		=> array (
			'size_desktop' 		=> 'cosme_archive_title_spacing',
		),
		'input_attrs' => array (
			'min'	=> 0,
			'max'	=> 60,
		)
	)
) ); 

$wp_customize->add_setting(
	'cosme_show_excerpt',
	array(
		'default'           => 1,
		'sanitize_callback' => 'cosme_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Cosme_Control_Switch(
		$wp_customize,
		'cosme_show_excerpt',
		array(
			'label'         	=> esc_html__( 'Show Excerpt', 'cosme' ),
			'section'       	=> 'cosme_archive_section',
			'settings'      	=> 'cosme_show_excerpt',
		)
	)
);

$wp_customize->add_setting( 'cosme_excerpt_length', array(
	'default'   		=> 20,
	'transport'			=> 'refresh',
	'sanitize_callback' => 'absint',
) );			

$wp_customize->add_control( new Cosme_Control_Slider( $wp_customize, 'cosme_excerpt_length',
	array(
		'label' 		=> esc_html__( 'Excerpt Length', 'cosme' ),
		'section' 		=> 'cosme_archive_section',
		'responsive'	=> false,
		'settings' 		=> array (
			'size_desktop' 		=> 'cosme_excerpt_length',
		),
		'input_attrs' => array (
			'min'	=> 0,
			'max'	=> 120,
		),
		'active_callback' => 'cosme_callback_excerpt',
	)
) ); 

$wp_customize->add_setting(
	'cosme_show_readmore',
	array(
		'default'           => 1,
		'sanitize_callback' => 'cosme_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Cosme_Control_Switch(
		$wp_customize,
		'cosme_show_readmore',
		array(
			'label'         	=> esc_html__( 'Show Read More', 'cosme' ),
			'section'       	=> 'cosme_archive_section',
			'settings'      	=> 'cosme_show_readmore',
		)
	)
);

$wp_customize->add_setting( 'cosme_text_spacing_divider',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Divider( $wp_customize, 'cosme_text_spacing_divider',
		array(
			'section' 		=> 'cosme_archive_section'
		)
	)
);

$wp_customize->add_setting( 'cosme_meta_heading_title',
	array(
		'default' 			=> '',
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Heading( $wp_customize, 'cosme_meta_heading_title',
		array(
			'label'			=> esc_html__( 'Meta', 'cosme' ),
			'section' 		=> 'cosme_archive_section',
		)
	)
);


$wp_customize->add_setting(
	'cosme_meta_date_enable',
	array(
		'default'           => 1,
		'sanitize_callback' => 'cosme_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Cosme_Control_Switch(
		$wp_customize,
		'cosme_meta_date_enable',
		array(
			'label'         	=> esc_html__( 'Show Date', 'cosme' ),
			'section'       	=> 'cosme_archive_section',
			'settings'      	=> 'cosme_meta_date_enable',
		)
	)
);

$wp_customize->add_setting(
	'cosme_meta_author_enable',
	array(
		'default'           => 0,
		'sanitize_callback' => 'cosme_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Cosme_Control_Switch(
		$wp_customize,
		'cosme_meta_author_enable',
		array(
			'label'         	=> esc_html__( 'Show Author', 'cosme' ),
			'section'       	=> 'cosme_archive_section',
			'settings'      	=> 'cosme_meta_author_enable',
		)
	)
);

$wp_customize->add_setting(
	'cosme_meta_categories_enable',
	array(
		'default'           => 1,
		'sanitize_callback' => 'cosme_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Cosme_Control_Switch(
		$wp_customize,
		'cosme_meta_categories_enable',
		array(
			'label'         	=> esc_html__( 'Show Categories', 'cosme' ),
			'section'       	=> 'cosme_archive_section',
			'settings'      	=> 'cosme_meta_categories_enable',
		)
	)
);

$wp_customize->add_setting(
	'cosme_meta_comments_enable',
	array(
		'default'           => 0,
		'sanitize_callback' => 'cosme_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Cosme_Control_Switch(
		$wp_customize,
		'cosme_meta_comments_enable',
		array(
			'label'         	=> esc_html__( 'Show Comments', 'cosme' ),
			'section'       	=> 'cosme_archive_section',
			'settings'      	=> 'cosme_meta_comments_enable',
		)
	)
);

$wp_customize->add_setting(
	'cosme_read_time_enable',
	array(
		'default'           => 0,
		'sanitize_callback' => 'cosme_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Cosme_Control_Switch(
		$wp_customize,
		'cosme_read_time_enable',
		array(
			'label'         	=> esc_html__( 'Show Post Reading Time', 'cosme' ),
			'section'       	=> 'cosme_archive_section',
			'settings'      	=> 'cosme_read_time_enable',
		)
	)
);


/*--------------------------------------------
	Archive Styling
---------------------------------------------*/
$wp_customize->add_setting( 'cosme_archive_title_size_desktop', array(
	'default'   		=> 24,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );			

$wp_customize->add_setting( 'cosme_archive_title_size_tablet', array(
	'default'   		=> 18,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );

$wp_customize->add_setting( 'cosme_archive_title_size_mobile', array(
	'default'   		=> 18,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );			


$wp_customize->add_control( new Cosme_Control_Slider( $wp_customize, 'cosme_archive_title_size',
	array(
		'label' 		=> esc_html__( 'Title size', 'cosme' ),
		'section' 		=> 'cosme_archive_section',
		'responsive'	=> true,
		'settings' 		=> array (
			'size_desktop' 		=> 'cosme_archive_title_size_desktop',
			'size_tablet' 		=> 'cosme_archive_title_size_tablet',
			'size_mobile' 		=> 'cosme_archive_title_size_mobile',
		),
		'input_attrs' => array (
			'min'	=> 14,
			'max'	=> 100,
            'step'  => 1,
            'unit'  => 'px'
		)		
	)
) );

$wp_customize->add_setting( 'cosme_archive_meta_size', array(
	'default'   		=> 12,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );					


$wp_customize->add_control( new Cosme_Control_Slider( $wp_customize, 'cosme_archive_meta_size',
	array(
		'label' 		=> esc_html__( 'Meta size', 'cosme' ),
		'section' 		=> 'cosme_archive_section',
		'responsive'	=> false,
		'settings' 		=> array (
			'size_desktop' 		=> 'cosme_archive_meta_size',
		),
		'input_attrs' => array (
			'min'	=> 8,
			'max'	=> 72,
            'step'  => 1,
            'unit'  => 'px'
		)		
	)
) );


/*--------------------------------------------
	Posts Section
---------------------------------------------*/
$wp_customize->add_section( 'cosme_posts_section',
	array(
		'title'         => esc_html__( 'Posts layout', 'cosme'),
		'panel'         => 'cosme_layout_panel',
        'priority'      => 15,
	)
);

$wp_customize->add_setting( 'cosme_posts_sidebar',
	array(
		'default'           => 'right',
		'sanitize_callback' => 'sanitize_key',
	)
);

$wp_customize->add_control( new Cosme_Control_RadioImage( $wp_customize, 'cosme_posts_sidebar',
		array(
			'label'    => esc_html__( 'Sidebar', 'cosme' ),
			'section'  => 'cosme_posts_section',
			'columns'  => 'one-half',
			'choices'  => array(
				'left' => array(
					'label' => esc_html__( 'Left Sidebar', 'cosme' ),
					'url'   => '%s/assets/admin/src/layout/left-sidebar@2x.png'
				),
				'none' => array(
					'label' => esc_html__( 'No Sidebar', 'cosme' ),
					'url'   => '%s/assets/admin/src/layout/fullwidth@2x.png'
                ),
                'right' => array(
					'label' => esc_html__( 'Right Sidebar', 'cosme' ),
					'url'   => '%s/assets/admin/src/layout/right-sidebar@2x.png'
				)
			)
		)
	)
); 

/*--------------------------------------------
	Page Section
---------------------------------------------*/
$wp_customize->add_section( 'cosme_page_section',
	array(
		'title'         => esc_html__( 'Page layout', 'cosme'),
		'panel'         => 'cosme_layout_panel',
        'priority'      => 20,
	)
);

$wp_customize->add_setting( 'cosme_page_sidebar',
	array(
		'default'           => 'none',
		'sanitize_callback' => 'sanitize_key',
	)
);

$wp_customize->add_control( new Cosme_Control_RadioImage( $wp_customize, 'cosme_page_sidebar',
		array(
			'label'    => esc_html__( 'Sidebar', 'cosme' ),
			'section'  => 'cosme_page_section',
			'columns'  => 'one-half',
			'choices'  => array(
				'left' => array(
					'label' => esc_html__( 'Left Sidebar', 'cosme' ),
					'url'   => '%s/assets/admin/src/layout/left-sidebar@2x.png'
				),
				'none' => array(
					'label' => esc_html__( 'No Sidebar', 'cosme' ),
					'url'   => '%s/assets/admin/src/layout/fullwidth@2x.png'
                ),
                'right' => array(
					'label' => esc_html__( 'Right Sidebar', 'cosme' ),
					'url'   => '%s/assets/admin/src/layout/right-sidebar@2x.png'
				)
			)
		)
	)
);

/*--------------------------------------------
	Single Section
---------------------------------------------*/
$wp_customize->add_section( 'cosme_single_section',
	array(
		'title'         => esc_html__( 'Single layout', 'cosme'),
		'panel'         => 'cosme_layout_panel',
        'priority'      => 25,
	)
);

$wp_customize->add_setting( 'cosme_single_sidebar',
	array(
		'default'           => 'none',
		'sanitize_callback' => 'sanitize_key',
	)
);

$wp_customize->add_control( new Cosme_Control_RadioImage( $wp_customize, 'cosme_single_sidebar',
		array(
			'label'    => esc_html__( 'Sidebar', 'cosme' ),
			'section'  => 'cosme_single_section',
			'columns'  => 'one-half',
			'choices'  => array(
				'left' => array(
					'label' => esc_html__( 'Left Sidebar', 'cosme' ),
					'url'   => '%s/assets/admin/src/layout/left-sidebar@2x.png'
				),
				'none' => array(
					'label' => esc_html__( 'No Sidebar', 'cosme' ),
					'url'   => '%s/assets/admin/src/layout/fullwidth@2x.png'
                ),
                'right' => array(
					'label' => esc_html__( 'Right Sidebar', 'cosme' ),
					'url'   => '%s/assets/admin/src/layout/right-sidebar@2x.png'
				)
			)
		)
	)
);

$wp_customize->add_setting( 'cosme_single_layout_divider',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Divider( $wp_customize, 'cosme_single_layout_divider',
		array(
			'section' 		=> 'cosme_single_section',
		)
	)
);


$wp_customize->add_setting( 'cosme_single_heading_title',
	array(
		'default' 			=> '',
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Heading( $wp_customize, 'cosme_single_heading_title',
		array(
			'label'			=> esc_html__( 'Header', 'cosme' ),
			'section' 		=> 'cosme_single_section',
		)
	)
);

$wp_customize->add_setting( 'cosme_single_heading_alignment',
	array(
		'default' 			=> 'center',
		'sanitize_callback' => 'cosme_sanitize_text'
	)
);

$wp_customize->add_control( new Cosme_Control_RadioButtons( $wp_customize, 'cosme_single_heading_alignment',
	array(
		'label' 	=> esc_html__( 'Header alignment', 'cosme' ),
		'section' 	=> 'cosme_single_section',
		'choices' 	=> array(
			'left' 		=> esc_html__( 'Left', 'cosme' ),
			'center' 	=> esc_html__( 'Center', 'cosme' ),
		),
		'priority'  => 70,
	)
) );

$wp_customize->add_setting( 'cosme_single_title_size_desktop', array(
	'default'   		=> 24,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );			

$wp_customize->add_setting( 'cosme_single_title_size_tablet', array(
	'default'   		=> 18,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );

$wp_customize->add_setting( 'cosme_single_title_size_mobile', array(
	'default'   		=> 18,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );			


$wp_customize->add_control( new Cosme_Control_Slider( $wp_customize, 'cosme_single_title_size',
	array(
		'label' 		=> esc_html__( 'Title size', 'cosme' ),
		'section' 		=> 'cosme_single_section',
		'responsive'	=> true,
		'settings' 		=> array (
			'size_desktop' 		=> 'cosme_single_title_size_desktop',
			'size_tablet' 		=> 'cosme_single_title_size_tablet',
			'size_mobile' 		=> 'cosme_single_title_size_mobile',
		),
		'input_attrs' => array (
			'min'	=> 14,
			'max'	=> 100,
            'step'  => 1,
            'unit'  => 'px'
		)		
	)
) );

$wp_customize->add_setting( 'cosme_single_meta_size', array(
	'default'   		=> 12,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );					


$wp_customize->add_control( new Cosme_Control_Slider( $wp_customize, 'cosme_single_meta_size',
	array(
		'label' 		=> esc_html__( 'Meta size', 'cosme' ),
		'section' 		=> 'cosme_single_section',
		'responsive'	=> false,
		'settings' 		=> array (
			'size_desktop' 		=> 'cosme_single_meta_size',
		),
		'input_attrs' => array (
			'min'	=> 8,
			'max'	=> 72,
            'step'  => 1,
            'unit'  => 'px'
		)		
	)
) );



$wp_customize->add_setting( 'single_post_header_spacing', array(
	'default'   		=> 40,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( new Cosme_Control_Slider( $wp_customize, 'single_post_header_spacing',
	array(
		'label' 		=> esc_html__( 'Header spacing', 'cosme' ),
		'section' 		=> 'cosme_single_section',
		'responsive'	=> false,
		'settings' 		=> array (
			'size_desktop' 		=> 'single_post_header_spacing',
		),
		'input_attrs' => array (
			'min'	=> 0,
			'max'	=> 60,
            'step'  => 1,
            'unit'  => 'px'
		),
		'priority'     => 80,		
	)
) );

$wp_customize->add_setting( 'cosme_single_header_divider',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Divider( $wp_customize, 'cosme_single_header_divider',
		array(
			'section' 		=> 'cosme_single_section',
			'priority'     => 90,
		)
	)
);

$wp_customize->add_setting( 'single_post_show_featured_title',
	array(
		'default' 			=> '',
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Heading( $wp_customize, 'single_post_show_featured_title',
		array(
			'label'			=> esc_html__( 'Image', 'cosme' ),
			'section' 		=> 'cosme_single_section',
			'priority'     => 95,
		)
	)
);

$wp_customize->add_setting(
	'single_post_show_featured',
	array(
		'default'           => 1,
		'sanitize_callback' => 'cosme_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Cosme_Control_Switch(
		$wp_customize,
		'single_post_show_featured',
		array(
			'label'         	=> esc_html__( 'Show featured image', 'cosme' ),
			'section'       	=> 'cosme_single_section',
			'settings'      	=> 'single_post_show_featured',
			'priority'    		=> 100,
		)
	)
);

$wp_customize->add_setting( 'single_post_image_placement',
	array(
		'default' 			=> 'above',
		'sanitize_callback' => 'cosme_sanitize_text'
	)
);
$wp_customize->add_control( new Cosme_Control_RadioButtons( $wp_customize, 'single_post_image_placement',
	array(
		'label' 	=> esc_html__( 'Image placement', 'cosme' ),
		'section' 	=> 'cosme_single_section',
		'choices' 	=> array(
			'below' 	=> esc_html__( 'Below', 'cosme' ),
			'above' 	=> esc_html__( 'Above', 'cosme' ),
		),
		'priority'  => 110,
	)
) );

$wp_customize->add_setting( 'single_post_image_spacing', array(
	'default'   		=> 38,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( new Cosme_Control_Slider( $wp_customize, 'single_post_image_spacing',
	array(
		'label' 		=> esc_html__( 'Image spacing', 'cosme' ),
		'section' 		=> 'cosme_single_section',
		'responsive'	=> false,
		'settings' 		=> array (
			'size_desktop' 		=> 'single_post_image_spacing',
		),
		'input_attrs' => array (
			'min'	=> 0,
			'max'	=> 60,
            'step'  => 1,
            'unit'  => 'px'
		),
		'priority'     => 120,		
	)
) );

$wp_customize->add_setting( 'cosme_single_image_divider',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Divider( $wp_customize, 'cosme_single_image_divider',
		array(
			'section' 		=> 'cosme_single_section',
			'priority'     => 130,
		)
	)
);

$wp_customize->add_setting( 'single_post_show_meta_title',
	array(
		'default' 			=> '',
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Heading( $wp_customize, 'single_post_show_meta_title',
		array(
			'label'			=> esc_html__( 'Meta', 'cosme' ),
			'section' 		=> 'cosme_single_section',
			'priority'     => 135,
		)
	)
);

$wp_customize->add_setting( 'single_post_meta_placement',
	array(
		'default' 			=> 'above',
		'sanitize_callback' => 'cosme_sanitize_text'
	)
);
$wp_customize->add_control( new Cosme_Control_RadioButtons( $wp_customize, 'single_post_meta_placement',
	array(
		'label' 	=> esc_html__( 'Position', 'cosme' ),
		'section' 	=> 'cosme_single_section',
		'choices' 	=> array(
			'below' 	=> esc_html__( 'Below', 'cosme' ),
			'above' 	=> esc_html__( 'Above', 'cosme' ),
		),
		'priority'  => 140,
	)
) );

$wp_customize->add_setting(
	'cosme_single_meta_date_enable',
	array(
		'default'           => 1,
		'sanitize_callback' => 'cosme_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Cosme_Control_Switch(
		$wp_customize,
		'cosme_single_meta_date_enable',
		array(
			'label'         	=> esc_html__( 'Show Date', 'cosme' ),
			'section'       	=> 'cosme_single_section',
			'settings'      	=> 'cosme_single_meta_date_enable',
			'priority'  => 145,
		)
	)
);

$wp_customize->add_setting(
	'cosme_single_meta_author_enable',
	array(
		'default'           => 1,
		'sanitize_callback' => 'cosme_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Cosme_Control_Switch(
		$wp_customize,
		'cosme_single_meta_author_enable',
		array(
			'label'         	=> esc_html__( 'Show Author', 'cosme' ),
			'section'       	=> 'cosme_single_section',
			'settings'      	=> 'cosme_single_meta_author_enable',
			'priority'  => 150,
		)
	)
);

$wp_customize->add_setting(
	'cosme_single_meta_categories_enable',
	array(
		'default'           => 0,
		'sanitize_callback' => 'cosme_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Cosme_Control_Switch(
		$wp_customize,
		'cosme_single_meta_categories_enable',
		array(
			'label'         	=> esc_html__( 'Show categories', 'cosme' ),
			'section'       	=> 'cosme_single_section',
			'settings'      	=> 'cosme_single_meta_categories_enable',
			'priority'  => 155,
		)
	)
);

$wp_customize->add_setting(
	'cosme_single_meta_comments_enable',
	array(
		'default'           => 1,
		'sanitize_callback' => 'cosme_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Cosme_Control_Switch(
		$wp_customize,
		'cosme_single_meta_comments_enable',
		array(
			'label'         	=> esc_html__( 'Show Comments', 'cosme' ),
			'section'       	=> 'cosme_single_section',
			'settings'      	=> 'cosme_single_meta_comments_enable',
			'priority'  => 160,
		)
	)
);

$wp_customize->add_setting(
	'cosme_single_meta_reading_enable',
	array(
		'default'           => 1,
		'sanitize_callback' => 'cosme_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Cosme_Control_Switch(
		$wp_customize,
		'cosme_single_meta_reading_enable',
		array(
			'label'         	=> esc_html__( 'Show Reading Time', 'cosme' ),
			'section'       	=> 'cosme_single_section',
			'settings'      	=> 'cosme_single_meta_reading_enable',
			'priority'  => 165,
		)
	)
);

$wp_customize->add_setting( 'single_post_meta_spacing', array(
	'default'   		=> 20,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( new Cosme_Control_Slider( $wp_customize, 'single_post_meta_spacing',
	array(
		'label' 		=> esc_html__( 'Meta spacing', 'cosme' ),
		'section' 		=> 'cosme_single_section',
		'responsive'	=> false,
		'settings' 		=> array (
			'size_desktop' 		=> 'single_post_meta_spacing',
		),
		'input_attrs' => array (
			'min'	=> 0,
			'max'	=> 60,
            'step'  => 1,
            'unit'  => 'px'
		),
		'priority'     => 170,		
	)
) );

$wp_customize->add_setting( 'cosme_single_meta_divider',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Divider( $wp_customize, 'cosme_single_meta_divider',
		array(
			'section' 		=> 'cosme_single_section',
			'priority'     => 180,
		)
	)
);

$wp_customize->add_setting( 'single_post_show_elements_title',
	array(
		'default' 			=> '',
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Cosme_Control_Heading( $wp_customize, 'single_post_show_elements_title',
		array(
			'label'			=> esc_html__( 'Elements', 'cosme' ),
			'section' 		=> 'cosme_single_section',
			'priority'     => 185,
		)
	)
);

$wp_customize->add_setting(
	'cosme_single_tags_enable',
	array(
		'default'           => 1,
		'sanitize_callback' => 'cosme_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Cosme_Control_Switch(
		$wp_customize,
		'cosme_single_tags_enable',
		array(
			'label'         	=> esc_html__( 'Show Tags', 'cosme' ),
			'section'       	=> 'cosme_single_section',
			'settings'      	=> 'cosme_single_tags_enable',
			'priority'  => 190,
		)
	)
);

$wp_customize->add_setting(
	'cosme_single_authorbox_enable',
	array(
		'default'           => 1,
		'sanitize_callback' => 'cosme_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Cosme_Control_Switch(
		$wp_customize,
		'cosme_single_authorbox_enable',
		array(
			'label'         	=> esc_html__( 'Show Author Box', 'cosme' ),
			'section'       	=> 'cosme_single_section',
			'settings'      	=> 'cosme_single_authorbox_enable',
			'priority'  => 200,
		)
	)
);

$wp_customize->add_setting( 'cosme_single_author_align',
	array(
		'default' 			=> 'left',
		'sanitize_callback' => 'cosme_sanitize_text'
	)
);
$wp_customize->add_control( new Cosme_Control_RadioButtons( $wp_customize, 'cosme_single_author_align',
	array(
		'label'   => esc_html__( 'Author alignment', 'cosme' ),
		'section' => 'cosme_single_section',
		'choices' => array(
			'left' 		=> '<svg width="16" height="13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h10v1H0zM0 4h16v1H0zM0 8h10v1H0zM0 12h16v1H0z"/></svg>',
			'center' 	=> '<svg width="16" height="13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 0h10v1H3zM0 4h16v1H0zM3 8h10v1H3zM0 12h16v1H0z"/></svg>',
			'right' 	=> '<svg width="16" height="13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 0h10v1H6zM0 4h16v1H0zM6 8h10v1H6zM0 12h16v1H0z"/></svg>',
		),
		'priority'  => 206,
		'active_callback'	=> 'cosme_callback_single_post_show_author_box',
	)
) );


$wp_customize->add_setting(
	'cosme_single_post_navigation_enable',
	array(
		'default'           => 1,
		'sanitize_callback' => 'cosme_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Cosme_Control_Switch(
		$wp_customize,
		'cosme_single_post_navigation_enable',
		array(
			'label'         	=> esc_html__( 'Show Post Navigation', 'cosme' ),
			'section'       	=> 'cosme_single_section',
			'settings'      	=> 'cosme_single_post_navigation_enable',
			'priority'  => 208,
		)
	)
);

$wp_customize->add_setting(
	'cosme_single_related_post_enable',
	array(
		'default'           => 1,
		'sanitize_callback' => 'cosme_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Cosme_Control_Switch(
		$wp_customize,
		'cosme_single_related_post_enable',
		array(
			'label'         	=> esc_html__( 'Show Related Post', 'cosme' ),
			'section'       	=> 'cosme_single_section',
			'settings'      	=> 'cosme_single_related_post_enable',
			'priority'  => 210,
		)
	)
);

$wp_customize->add_setting(
	'cosme_single_comment_box_enable',
	array(
		'default'           => 1,
		'sanitize_callback' => 'cosme_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Cosme_Control_Switch(
		$wp_customize,
		'cosme_single_comment_box_enable',
		array(
			'label'         	=> esc_html__( 'Show Comment Box', 'cosme' ),
			'section'       	=> 'cosme_single_section',
			'settings'      	=> 'cosme_single_comment_box_enable',
			'priority'  => 210,
		)
	)
);






