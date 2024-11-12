<?php
/**
 *
 * Header Default Layout
 *
 * @author      CodeGearThemes
 * @category    WordPress
 * @package     cosme
 * @version     1.0.0
 *
 */

$cosme_class = '';
if( function_exists( 'cosme_woocommerce_header_cart' ) ){
$cosme_class = 'grid-layout';
}else{
$cosme_class = 'flex-layout';
}

$menu_align_class = 'flex-end';
$menu_alignment = get_theme_mod( 'cosme_header_menu_alignment' , 'right' );
switch ($menu_alignment) {
	case 'right':
		$menu_align_class = 'flex-end';
		break;
	case 'center':
		$menu_align_class = 'flex-center';
		break;
	case 'left':
		$menu_align_class = 'flex-start';
		break;
	
	default:
		$menu_align_class = 'flex-end';
		break;
}

?>
<div class="header--default-main header-main header-ghost">
	<div class="site--header-inner">
		<div class="<?php echo esc_attr( $cosme_class ); ?>">
			<div class="branding">
				<div class="site-branding">
					<?php the_custom_logo(); ?>
					<div class="site-title h1"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
					<?php 
						$cosme_description = get_bloginfo( 'description', 'display' );
						if ( $cosme_description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $cosme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
			</div>
			<div class="navigation header--main-navigation align--flex-center <?php echo esc_attr( $menu_align_class ); ?>">
				<div id="header-navigation" class="header--desktop-navigation header-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<span class="item alpha"></span>
						<span class="item center"></span>
						<span class="item omega"></span>
						<small class="screen-reader-text"><?php esc_html_e( 'Primary Menu', 'cosme' ); ?></small>
					</button>
					<nav id="site-navigation" class="main-navigation">
						<div class="navigation--desktop">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'main-menu',
									'menu_id'        => 'primary-menu',
								) );
							?>
						</div>
					</nav><!-- #site-navigation --> 
				</div>
			</div>
			<?php if ( function_exists( 'cosme_woocommerce_header_cart' ) ): ?>
				<div class="header-right widget--header-right">
					<?php cosme_woocommerce_header_cart(); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>