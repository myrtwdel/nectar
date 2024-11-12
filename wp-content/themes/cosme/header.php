<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cosme
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Mobile Specific Metas -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="640">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
</head>
<?php 
	$cosme_header_container 		= get_theme_mod( 'cosme_heading_container', 'container' );
	$cosme_header_container_class = 'container';
	if(  $cosme_header_container === 'container-fluid' ){
		$cosme_header_container_class = 'container-fluid';
	} 
	$cosme_enable_search = get_theme_mod( 'cosme_enable_search_bar', 1 );
	$enabled 	= get_theme_mod( 'cosme_enable_sticky_header', 0 );
	$type 		= get_theme_mod( 'cosme_sticky_header_type', 'always' );
	$sticky		= '';
	if ( $enabled ) {
		$sticky = 'sticky-header sticky-' . esc_html( $type );
	}
?>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cosme' ); ?></a>
    <div class="wrapper">
		<?php do_action( 'cosme_before_header' ); ?>
		<header id="masthead" class="site-header <?php echo esc_attr( $sticky ); ?>">
			<div class="<?php echo esc_attr( $cosme_header_container_class ); ?>">
				<?php get_template_part( 'template-parts/header/layout', 'default' ); ?>
			</div>
			<?php if ( function_exists( 'cosme_woocommerce_header_cart' ) && $cosme_enable_search ): ?>
				<div class="mobile-product-search">
					<?php get_search_form(); ?>
				</div>
			<?php endif; ?>
		</header><!-- #masthead -->
		<?php do_action( 'cosme_after_header' ); ?>

		<div id="content" class="site-content">