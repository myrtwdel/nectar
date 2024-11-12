<?php
/**
 * Enqueue admin scripts and styles.
 *
 * @author      CodeGearThemes
 * @category    WordPress
 * @package     Cosme
 * @version     1.0.0
 *
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function cosme_public_scripts(){

	$defaults_body = json_encode(
		array(
			'font' 			=> 'Poppins',
			'regularweight' => 'regular',
			'category' 		=> 'sans-serif'
		)
	);
	
	$defaults_heading = json_encode(
		array(
			'font' 			=> 'Libre Baskerville',
			'regularweight' => 'regular',
			'category' 		=> 'serif'
		)
	);	

	$cosme_site_width 					= get_theme_mod( 'cosme_container_width', '1170').'px';

	$cosme_primary_color			= get_theme_mod( 'cosme_website_primary_color', '#4E7661' );
	$cosme_secondary_color			= get_theme_mod( 'cosme_website_secondary_color', '#224229' );
	$cosme_accent_color				= get_theme_mod( 'cosme_website_accent_color', '#000000' );

	$cosme_base_color						= get_theme_mod( 'cosme_website_text_color', '#333333' );
	$cosme_heading_color					= get_theme_mod( 'cosme_website_heading_color', '#222222' );

	$font_body 						= json_decode( get_theme_mod( 'cosme_base_font', $defaults_body ), true );
	if ( 'Poppins' === $font_body['font'] ) {
		$cosme_base_fonts			= ' Poppins , sans-serif';
	}else{
		$cosme_base_fonts			= $font_body['font'];
	}

	$cosme_desktop_logo_size = get_theme_mod( 'cosme_logo_size_desktop' , '130'). 'px';
	$cosme_tablet_logo_size = get_theme_mod( 'cosme_logo_size_tablet' , '120'). 'px';
	$cosme_mobile_logo_size = get_theme_mod( 'cosme_logo_size_mobile' , '115'). 'px';


	$cosme_base_font_size			= get_theme_mod('cosme_base_font_size_desktop', '16' ).'px';
	$cosme_base_tablet_font_size	= get_theme_mod('cosme_base_font_size_tablet', '14' ).'px';
	$cosme_base_mobile_font_size	= get_theme_mod('cosme_base_font_size_mobile', '14' ).'px';

	$cosme_base_font_weight = 'normal';
	if( isset( $font_body['regularweight'] ) ){
		$cosme_base_font_weight		= $font_body['regularweight'];
	}

	$cosme_base_font_style		= get_theme_mod('cosme_base_font_style', 'normal');
	$cosme_base_line_height 		= get_theme_mod( 'cosme_base_line_height', '1.4' );
	$cosme_base_letter_spacing 	= get_theme_mod( 'cosme_base_letter_spacing', '0' ).'px';
	$cosme_base_text_transform 	= get_theme_mod( 'scosme_base_text_transform', 'none' );


	$font_heading = json_decode( get_theme_mod( 'cosme_heading_font', $defaults_heading ), true  ); 
	if ( 'Libre Baskerville' === $font_heading['font'] ) {
		$cosme_heading_fonts			= 'Libre Baskerville, serif';
	}else{
		$cosme_heading_fonts			= $font_heading['font'];
	}

	$cosme_heading_font_weight = 'bold';
	if( isset( $font_heading['boldweight'] ) ){
		$cosme_heading_font_weight		= $font_heading['boldweight'];
	}

	$cosme_heading_font_style		= get_theme_mod( 'cosme_heading_font_style', 'normal');
	$cosme_heading_line_height 		= get_theme_mod( 'cosme_heading_line_height', '1.4' );
	$cosme_heading_letter_spacing 	= get_theme_mod( 'cosme_heading_letter_spacing', '0' ).'px';
	$cosme_heading_text_transform 	= get_theme_mod( 'cosme_heading_text_transform', 'none' );

	$cosme_heading_fontsizeh1 			= get_theme_mod( 'cosme_heading_h1_font_size_desktop' , '40' ).'px';
	$cosme_heading_fontsizeh2			= get_theme_mod( 'cosme_heading_h2_font_size_desktop' , '32' ).'px';
	$cosme_heading_fontsizeh3			= get_theme_mod( 'cosme_heading_h3_font_size_desktop' , '28' ).'px';
	$cosme_heading_fontsizeh4			= get_theme_mod( 'cosme_heading_h4_font_size_desktop' , '24' ).'px';
	$cosme_heading_fontsizeh5			= get_theme_mod( 'cosme_heading_h5_font_size_desktop' , '20' ).'px';
	$cosme_heading_fontsizeh6			= get_theme_mod( 'cosme_heading_h6_font_size_desktop' , '16' ).'px';

	$cosme_heading_tablet_fontsizeh1 		= get_theme_mod( 'cosme_heading_h1_font_size_tablet' , '36' ).'px';
	$cosme_heading_tablet_fontsizeh2		= get_theme_mod( 'cosme_heading_h2_font_size_tablet' , '28' ).'px';
	$cosme_heading_tablet_fontsizeh3		= get_theme_mod( 'cosme_heading_h3_font_size_tablet' , '24' ).'px';
	$cosme_heading_tablet_fontsizeh4		= get_theme_mod( 'cosme_heading_h4_font_size_tablet' , '20' ).'px';
	$cosme_heading_tablet_fontsizeh5		= get_theme_mod( 'cosme_heading_h5_font_size_tablet' , '16' ).'px';
	$cosme_heading_tablet_fontsizeh6		= get_theme_mod( 'cosme_heading_h6_font_size_tablet' , '16' ).'px';
	

	$cosme_heading_mobile_fontsizeh1 		= get_theme_mod( 'cosme_heading_h1_font_size_mobile' , '28' ).'px';
	$cosme_heading_mobile_fontsizeh2		= get_theme_mod( 'cosme_heading_h2_font_size_mobile' , '22' ).'px';
	$cosme_heading_mobile_fontsizeh3		= get_theme_mod( 'cosme_heading_h3_font_size_mobile' , '18' ).'px';
	$cosme_heading_mobile_fontsizeh4		= get_theme_mod( 'cosme_heading_h4_font_size_mobile' , '16' ).'px';
	$cosme_heading_mobile_fontsizeh5		= get_theme_mod( 'cosme_heading_h5_font_size_mobile' , '16' ).'px';
	$cosme_heading_mobile_fontsizeh6		= get_theme_mod( 'cosme_heading_h6_font_size_mobile' , '16' ).'px';

	$cosme_archive_title_fontsize			= get_theme_mod( 'cosme_archive_title_size_desktop' , '24' ).'px';
	$cosme_archive_title_tablet_fontsize	= get_theme_mod( 'cosme_archive_title_size_tablet' , '18' ).'px';
	$cosme_archive_title_mobile_fontsize	= get_theme_mod( 'cosme_archive_title_size_mobile' , '18' ).'px';
	$cosme_archive_meta_fontsize			= get_theme_mod( 'cosme_archive_meta_size' , '12' ).'px';

	$cosme_form_border_color 				= get_theme_mod( 'cosme_border_color', '#cccccc' );
	$cosme_form_field_background			= get_theme_mod( 'cosme_form_field_background', '#ffffff' );

	$cosme_button_color						= get_theme_mod('cosme_button_text_color', '#ffffff' );
	$cosme_button_hover_color				= get_theme_mod( 'cosme_button_hover_color', '#ffffff' );
	
	$cosme_header_text_color				=  get_theme_mod( 'cosme_header_text_color', '#000' );
	$cosme_header_background				=  get_theme_mod( 'cosme_header_background', '#fff' );

	$cosme_header_sticky_text_color				=  get_theme_mod( 'cosme_header_sticky_text_color', '#000' );
	$cosme_header_sticky_background				=  get_theme_mod( 'cosme_header_sticky_background', '#fff' );

	$cosme_footer_text_color				=  get_theme_mod( 'cosme_footer_section_text_color', '#333333' );
	$cosme_footer_heading_color				=  get_theme_mod( 'cosme_footer_section_heading_color', '#222222' );
	$cosme_footer_background				=  get_theme_mod( 'cosme_footer_section_background', '#f8f8f8' );

	$cosme_footer_credit_color 				= get_theme_mod( 'cosme_footer_credits_color', '#333333' );
	$cosme_footer_credit_background 		= get_theme_mod( 'cosme_footer_credits_background', '#f8f8f8' );
	$cosme_footer_credit_link_color 		= get_theme_mod( 'cosme_footer_credits_link_color', '#7e7e7e' );
	$cosme_footer_credit_link_hover_color 	= get_theme_mod( 'cosme_footer_credits_link_hover_color', '#222222' );

	$cosme_scroll_to_top_color				= get_theme_mod( 'scrolltop_color', '#fff' );
	$cosme_scroll_to_top_background			= get_theme_mod( 'scrolltop_bg_color', '#212121' );
	$cosme_scroll_to_top_hover_color		= get_theme_mod( 'scrolltop_color_hover', '#fff' );
	$cosme_scroll_to_top_hover_background	= get_theme_mod( 'scrolltop_bg_color_hover', '#757575' );
	$cosme_scroll_to_top_size				= get_theme_mod( 'scrolltop_icon_size', '18' ).'px';
	$cosme_scroll_to_top_padding			= get_theme_mod( 'scrolltop_padding', '15' ).'px';
	$cosme_scroll_to_top_radius				= get_theme_mod('scrolltop_radius', '0'). 'px';
	$cosme_scroll_to_top_side_offset		= get_theme_mod( 'scrolltop_side_offset' , '30'). 'px';
	$cosme_scroll_to_top_vertical_offset		= get_theme_mod( 'scrolltop_bottom_offset' , '30'). 'px';


    $cosme_custom_styles = "
		:root{
			--theme--site-width: $cosme_site_width;

			--theme--primary-color: $cosme_primary_color;
			--theme--secondary-color: $cosme_secondary_color;
			--theme--accent-color: $cosme_accent_color;

			--theme--base-color:	$cosme_base_color;
			--theme--heading-color:	$cosme_heading_color;

			--theme--website-base-font-size: $cosme_base_font_size;
			--theme--website-base-tablet-font-size: $cosme_base_tablet_font_size;
			--theme--website-base-mobile-font-size: $cosme_base_mobile_font_size;
			--theme--website-base-font-family: $cosme_base_fonts;
			--theme--website-base-font-weight: $cosme_base_font_weight;
			--theme--website-base-font-style: $cosme_base_font_style;
			--theme--website-base-line-height: $cosme_base_line_height;
			--theme--website-base-letter-spacing: $cosme_base_letter_spacing;
			--theme--website-base-text-transform: $cosme_base_text_transform;

			--theme--desktop-logo-size:	$cosme_desktop_logo_size;
			--theme--tablet-logo-size:  $cosme_tablet_logo_size;
			--theme--mobile-logo-size:	$cosme_mobile_logo_size;

			--theme--heading-size1: $cosme_heading_fontsizeh1;
			--theme--heading-size2: $cosme_heading_fontsizeh2;
			--theme--heading-size3: $cosme_heading_fontsizeh3;
			--theme--heading-size4: $cosme_heading_fontsizeh4;
			--theme--heading-size5: $cosme_heading_fontsizeh5;
			--theme--heading-size6: $cosme_heading_fontsizeh6;	

			--theme--heading-tablet-size1: $cosme_heading_tablet_fontsizeh1;
			--theme--heading-tablet-size2: $cosme_heading_tablet_fontsizeh2;
			--theme--heading-tablet-size3: $cosme_heading_tablet_fontsizeh3;
			--theme--heading-tablet-size4: $cosme_heading_tablet_fontsizeh4;
			--theme--heading-tablet-size5: $cosme_heading_tablet_fontsizeh5;
			--theme--heading-tablet-size6: $cosme_heading_tablet_fontsizeh6;

			--theme--heading-mobile-size1: $cosme_heading_mobile_fontsizeh1;
			--theme--heading-mobile-size2: $cosme_heading_mobile_fontsizeh2;
			--theme--heading-mobile-size3: $cosme_heading_mobile_fontsizeh3;
			--theme--heading-mobile-size4: $cosme_heading_mobile_fontsizeh4;
			--theme--heading-mobile-size5: $cosme_heading_mobile_fontsizeh5;
			--theme--heading-mobile-size6: $cosme_heading_mobile_fontsizeh6;

			--theme--website-heading-font-weight: $cosme_heading_font_weight;
			--theme--website-heading-font-style: $cosme_heading_font_style;
			--theme--website-heading-font-family: $cosme_heading_fonts;
			--theme--website-heading-line-height: $cosme_heading_line_height;
			--theme--website-heading-letter-spacing: $cosme_heading_letter_spacing;
			--theme--website-heading-text-transform: $cosme_heading_text_transform;
			
			--theme--archive--title-font-size: $cosme_archive_title_fontsize;
			--theme--archive--title-tablet-font-size: $cosme_archive_title_tablet_fontsize;
			--theme--archive--title-mobile-font-size: $cosme_archive_title_mobile_fontsize;
			--theme--archive--meta-fontsize: $cosme_archive_meta_fontsize;


			--theme--form-border-color: $cosme_form_border_color;
			--theme--form-background-color: $cosme_form_field_background;

			--theme--button-color: $cosme_button_color;
			--theme--button-hover-color: $cosme_button_hover_color;

			--theme--header-color: $cosme_header_text_color;
			--theme--header-background: $cosme_header_background;
			
			--theme--header-sticky-color: $cosme_header_sticky_text_color;
			--theme--header-sticky-background: $cosme_header_sticky_background;

			--theme--footer-color: $cosme_footer_text_color;
			--theme--footer-heading-color: $cosme_footer_heading_color;
			--theme--footer-background: $cosme_footer_background;

			--theme--credit-color: $cosme_footer_credit_color;
			--theme--credit-link-color: $cosme_footer_credit_link_color;
			--theme--credit-link-hover-color: $cosme_footer_credit_link_hover_color;;
			--theme--credit-background: $cosme_footer_credit_background;

			--theme--scroll-top-color: $cosme_scroll_to_top_color;
			--theme--scroll-top-background: $cosme_scroll_to_top_background;	
			--theme--scroll-top-hover-color: $cosme_scroll_to_top_hover_color;
			--theme--scroll-top-hover-background: $cosme_scroll_to_top_hover_background;
			--theme--scroll-top-size: $cosme_scroll_to_top_size;
			--theme--scroll-top-padding: $cosme_scroll_to_top_padding;
			--theme--scroll-top-border-radius: $cosme_scroll_to_top_radius;
			--theme--scroll-top-side-offset: $cosme_scroll_to_top_side_offset;
			--theme--scroll-top-vertical-offset: $cosme_scroll_to_top_vertical_offset;	
		}
	";
	$cosme_archive_featured_image_spacing	= get_theme_mod('cosme_featured_image_spacing', '15').'px';
	$cosme_archive_title_spacing	= get_theme_mod('cosme_featured_image_spacing', '20').'px';
	$cosme_archive_text_align	= get_theme_mod('cosme_archive_text_align', 'left');

	$cosme_single_title_fontsize			= get_theme_mod( 'cosme_single_title_size_desktop' , '24' ).'px';
	$cosme_single_title_tablet_fontsize	= get_theme_mod( 'cosme_single_title_size_tablet' , '18' ).'px';
	$cosme_single_title_mobile_fontsize	= get_theme_mod( 'cosme_single_title_size_mobile' , '18' ).'px';
	$cosme_single_meta_fontsize			= get_theme_mod( 'cosme_single_meta_size' , '12' ).'px';
	$cosme_single_header_spacing		= get_theme_mod('single_post_header_spacing', '40').'px';
	$cosme_single_post_image_spacing 	= get_theme_mod('single_post_image_spacing', '38').'px';
	$cosme_single_entry_meta_spacing 	= get_theme_mod('single_post_meta_spacing', '20').'px';


	$cosme_custom_styles .= ".post-card .post-thumbnail { margin:0 0 " . esc_attr( $cosme_archive_featured_image_spacing ) . " 0;}" . "\n";
	$cosme_custom_styles .= ".post-card .entry-title { margin:0 0 " . esc_attr( $cosme_archive_featured_image_spacing ) . " 0;}" . "\n";
	$cosme_custom_styles .= ".post-card .text-content{ text-align:".esc_attr( $cosme_archive_text_align )."}" . "\n";

	$cosme_custom_styles .= ".single .entry-header { margin:0 0 " . esc_attr( $cosme_single_header_spacing ) . " 0;}" . "\n";
	$cosme_custom_styles .= ".single .entry-title { font-size:" . esc_attr( $cosme_single_title_fontsize ) . ";}" . "\n";
	$cosme_custom_styles .= "@media(max-width:992px){.single .entry-title { font-size:" . esc_attr( $cosme_single_title_tablet_fontsize ) . ";}}" . "\n";
	$cosme_custom_styles .= "@media(max-width:767px){.single .entry-title { font-size:" . esc_attr( $cosme_single_title_mobile_fontsize ) . ";}}" . "\n";
	$cosme_custom_styles .= ".single .entry-meta { font-size:" . esc_attr( $cosme_single_meta_fontsize ) . ";}" . "\n";
	$cosme_custom_styles .= ".single .post-thumbnail { margin:0 0 " . esc_attr( $cosme_single_post_image_spacing ) . " 0;}" . "\n";
	$cosme_custom_styles .= ".single .entry-meta { margin:0 0 " . esc_attr( $cosme_single_entry_meta_spacing ) . " 0;}" . "\n";

	
	wp_enqueue_style( 'cosme-google-fonts', cosme_google_fonts_url(), array(), COSME_THEME_VERSION );
    wp_enqueue_style( 'cosme-theme-style', COSME_THEME_URI . '/assets/public/css/theme.css', array(), COSME_THEME_VERSION );
	wp_enqueue_style( 'cosme-media-style', COSME_THEME_URI . '/assets/public/css/media.css', array(), COSME_THEME_VERSION );
    wp_add_inline_style( 'cosme-theme-style', $cosme_custom_styles );


	wp_enqueue_script( 'navigation', COSME_THEME_URI . '/assets/lib/navigation/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'skip-link-focus-fix', COSME_THEME_URI . '/assets/lib/automattic/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'cosme-theme-scripts', COSME_THEME_URI.'assets/public/js/theme.js', array(), COSME_THEME_VERSION, true );

	$enabled       = get_theme_mod( 'cosme_enable_sticky_header', 1 );
	$logo          = get_theme_mod( 'cosme_sticky_header_logo', 1 );

	if( ! $enabled || ! $logo ) {
		return;
	}
	wp_localize_script( 'cosme-theme-scripts', 'cosme_sticky_header_logo', wp_get_attachment_image_src( $logo, 'full' ) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cosme_public_scripts' );