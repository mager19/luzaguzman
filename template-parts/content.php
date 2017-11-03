<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package desarrollos
 */

?>
	<div class="col-md-6">
		<div class="post__item">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_post_thumbnail($size = 'imagen-blog') ?>
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;

					if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<h4><?php the_category( ', ' ); ?></h4>
					</div><!-- .entry-meta -->
					<?php
					endif; ?>

				</header><!-- .entry-header -->

				<div class="entry-content">
					<div class="blog-excerp"><?php the_excerpt();?> </div>

					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'desarrollos' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php 
					// desarrollos_entry_footer(); ?>
					<a href="<?php the_permalink(); ?>" class="boton boton--cafe">Read More</a>
				</footer><!-- .entry-footer -->
			</article><!-- #post-<?php the_ID(); ?> -->
		</div>
	</div>



