<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cosme
 */
$cosme_content_class   = cosme_archive_grid();
$cosme_show_date	=	get_theme_mod( 'cosme_meta_date_enable', 1 );
$cosme_show_author	=	get_theme_mod( 'cosme_meta_author_enable', 0 );
$cosme_show_category	=	get_theme_mod( 'cosme_meta_categories_enable', 0 );
$cosme_show_coment	=	get_theme_mod( 'cosme_meta_comments_enable', 0 );
$cosme_show_read_time	=	get_theme_mod( 'cosme_read_time_enable', 0 );
$cosme_archive_text_align	= get_theme_mod('cosme_archive_text_align', 'left');
$class="";
switch ($cosme_archive_text_align) {
	case 'left':
		$class= "flex-start";
		break;
		case 'center':
			$class= "flex-center";
			break;
		case 'right':
			$class= "flex-end";
			break;
	default:
		$class= "flex-start";
		break;
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('article post-card grid__item '.esc_attr( implode( ' ', $cosme_content_class ) ) );?>  >
	<div class="content-inner">
		<?php cosme_post_thumbnail(); ?>
		<div class="text-content">
			<header class="entry-header">
				<?php
					if ( 'post' === get_post_type() ) : 
						$meta_class = '';
						if( ! has_post_thumbnail() ){
							$meta_class = 'no-thumbnail-meta ';
						}
					?>
						<div class="entry-meta <?php echo esc_attr( $meta_class, 'cosme' ); echo esc_attr($class); ?>">
							<?php if($cosme_show_date):?>
								<span class="date">
									<?php cosme_posted_on(); ?>
							</span>
							<?php endif;?>
							<?php if($cosme_show_author):?>
								<span class="author">
									<?php cosme_posted_by(); ?>
								</span>
							<?php endif;?>
							<?php if($cosme_show_category):?>
								<span class="category">
									<?php cosme_post_categories(); ?>
								</span>
							<?php endif;?>
							<?php if($cosme_show_coment):?>
								<span class="comment">
									<?php cosme_comment(); ?>
								</span>
							<?php endif;?>
							<?php if($cosme_show_read_time):?>
								<span class="reading-time">
									<?php cosme_post_reading_time(); ?>
								</span>
							<?php endif;?>
						</div><!-- .entry-meta -->
				<?php endif; ?>
				<?php 
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;
				?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
				post_excerpt();
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cosme' ),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
