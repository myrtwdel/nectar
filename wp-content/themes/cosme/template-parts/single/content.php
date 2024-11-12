<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cosme
 */
 
// Title
$cosme_single_title_align	= get_theme_mod( 'cosme_single_heading_alignment', 'center');
if( $cosme_single_title_align == 'left' ) {
	$cosme_alignment_class = "text-left";
}else{
	$cosme_alignment_class = "text-center";
}

// Image
$cosme_show_featured_image = get_theme_mod( 'single_post_show_featured', 1 );
$cosme_featured_image_placement	= get_theme_mod('single_post_image_placement', 'above');

// Meta
$cosme_meta_placement	= get_theme_mod('single_post_meta_placement', 'above');


// Elements
$cosme_authorbox_enable 		=	get_theme_mod('cosme_single_authorbox_enable', 1);
$cosme_related_post_enable		=	get_theme_mod('cosme_single_related_post_enable', 1);


?>
<article id="post-<?php the_ID(); ?>" <?php post_class('article-content'); ?>>
	<?php 
		if($cosme_show_featured_image && $cosme_featured_image_placement === 'above'){
			cosme_post_thumbnail(); 
		}
	?>
	<header class="entry-header <?php echo esc_attr( $cosme_alignment_class ); ?>">
		<?php
			if ( 'post' === get_post_type() && 'above' === $cosme_meta_placement ):
				cosme_single_postmeta();
			endif; 

			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() && 'below' === $cosme_meta_placement ):
				cosme_single_postmeta();
			endif; 
		?>
		<?php 
			if($cosme_show_featured_image && $cosme_featured_image_placement === 'below'){
				cosme_post_thumbnail(); 
			}
		?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'cosme' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cosme' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php cosme_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php
		if($cosme_authorbox_enable){
			get_template_part( 'template-parts/snippets/content', 'author' );
		}
		if($cosme_related_post_enable){
			get_template_part( 'template-parts/snippets/content', 'related' );
		}
		
		
	?>

</article><!-- #post-<?php the_ID(); ?> -->
