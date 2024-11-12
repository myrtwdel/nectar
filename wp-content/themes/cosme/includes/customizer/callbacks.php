<?php
/**
 * Customizer callbacks
 *
 * @package Cosme
 */

/**
 * Archive Grid
 */
function cosme_archives_callback_grid() {
	$archive= get_theme_mod( 'cosme_archive_layout', 'simple' );

	if ( 'simple' !== $archive ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Sticky header
 */

function cosme_callback_sticky_header() {
	$enable        = get_theme_mod( 'cosme_enable_sticky_header', 0 );

	if ( $enable ) {
		return true;
	} else {
		return false;
	}
}


/**
 * Scroll to top
 */
function cosme_callback_scrolltop() {
    $enable = get_theme_mod( 'enable_scrolltop', 1 );

	if ( $enable ) {
		return true;
	} else {
		return false;
	}	
}

function cosme_callback_scrolltop_text() {
    $enable = get_theme_mod( 'enable_scrolltop', 1 );
	$type 	= get_theme_mod( 'scrolltop_type', 'icon' );

	if ( $enable && 'text' === $type ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Excerpt
 */
function cosme_callback_excerpt() {
    $enable = get_theme_mod( 'cosme_show_excerpt', 1 );

	if ( $enable ) {
		return true;
	} else {
		return false;
	} 	
}

/**
 * Single post author bio align
 */
function cosme_callback_single_post_show_author_box() {
    $enable = get_theme_mod( 'cosme_single_authorbox_enable', 1 );

	if ( $enable ) {
		return true;
	} else {
		return false;
	}   	
}


