<?php
/**
*
* Excerpt Length
* @since 1.0.0
*
*/
if ( ! function_exists( 'cosme_excerpt_length' ) ) :
	function cosme_excerpt_length( $length ) {
		$length = get_theme_mod('cosme_excerpt_length', 20);
	    return $length;
	}
	add_filter( 'excerpt_length', 'cosme_excerpt_length', 100 );
endif;



if ( ! function_exists( 'cosme_breadcrumb' ) ) :
    function cosme_breadcrumb() {
        $breadcrumb_args = array(
            'container'   => 'nav',
            'show_browse' => false,
        );
        breadcrumb_trail( $breadcrumb_args );
    }
endif;



function post_excerpt() {
	$excerpt 	= get_theme_mod( 'cosme_show_excerpt', 1 );
	$read_more 	= get_theme_mod( 'cosme_show_readmore', 1 );

	if ( !$excerpt ) {
		return;
	}
	
	echo '<div class="entry-content-inner">';
	the_excerpt();

	if ( $read_more ) {
		echo '<a class="read-more more-link" title="' . esc_attr( strip_tags( get_the_title() ) ) . '" href="' . esc_url( get_permalink() ) . '">' . esc_html__( 'Read more', 'cosme' ) . '</a>';
	}
	echo '</div>';
}


/**
 * Google Fonts URL
 */
function cosme_google_fonts_url() {
	$fonts_url 	= '';
	$subsets 	= 'latin';

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

	//Get and decode options
	$body_font		= get_theme_mod( 'cosme_base_font', $defaults_body );
	$headings_font 	= get_theme_mod( 'cosme_heading_font', $defaults_heading );

	$body_font 		= json_decode( $body_font, true );
	$headings_font 	= json_decode( $headings_font, true );

	if ( 'System default' === $body_font['font'] && 'System default' === $headings_font['font'] ) {
		return; //return early if defaults are active
	}

	$font_families = array();

	$font_families[] = $body_font['font'] . ':' . $body_font['regularweight'];
		
	$font_families[] = $headings_font['font'] . ':' . $headings_font['regularweight'];

	$query_args = array(
		'family' => urlencode( implode( '|', $font_families ) ),
		'subset' => urlencode( $subsets ),
		'display' => urlencode( 'swap' ),
	);

	$fonts_url = add_query_arg( $query_args, "//fonts.googleapis.com/css" );

	return esc_url_raw( $fonts_url );
}


/**
 * Google fonts preconnect
 */
function cosme_preconnect_google_fonts() {

	$defaults = json_encode(
		array(
			'font' 			=> 'System default',
			'regularweight' => 'regular',
			'category' 		=> 'sans-serif'
		)
	);	

	$cosme_body_fonts		= get_theme_mod( 'cosme-base-website-font', $defaults );
	$cosme_heading_fonts 	= get_theme_mod( 'cosme-heading-website-font', $defaults );

	$cosme_body_fonts 		= json_decode( $cosme_body_fonts, true );
	$cosme_heading_fonts 	= json_decode( $cosme_heading_fonts, true );

	if ( 'System default' === $cosme_body_fonts['font'] && 'System default' === $cosme_heading_fonts['font'] ) {
		return;
	}
	
	echo '<link rel="preconnect" href="//fonts.googleapis.com">';
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}
add_action( 'wp_head', 'cosme_preconnect_google_fonts', 1);


function cosme_copyright(){
	
	/* translators: %1$1s, %2$2s theme copyright tags*/
	$credits 	= get_theme_mod( 'cosme_footer_credits', sprintf( esc_html__( '%1$1s. Proudly powered by %2$2s', 'cosme' ), '{copyright} {year} {site_title}', '{theme_author}' ) );

	$tags 		= array( '{theme_author}', '{site_title}', '{copyright}', '{year}' );
	$replace 	= array( '<a rel="nofollow" href="https://codegearthemes.com/products/cosme/">' . esc_html__( 'Cosme', 'cosme' ) . '</a>', get_bloginfo( 'name' ), '&copy;', date('Y') );

	$credits 	= str_replace( $tags, $replace, $credits );

	return $credits;
}