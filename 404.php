<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package desarrollos
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<section class="error-404 not-found">
						<?php 
							$args = array( 'post_type' => 'product', 'posts_per_page' => '1' );
							$loop = new WP_Query( $args ); ?>
						<div class="header-about">
							<?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<?php the_post_thumbnail( $size = 'imagen-post-blog' ); ?>
							<!-- post -->
							<?php endwhile; ?>
							<!-- post navigation -->
							<?php else: ?>
							<!-- no posts found -->
							<?php endif; ?> 
							<?php wp_reset_postdata(); ?>
							<h4>Oops! That page can&rsquo;t be found</h4>
							<h2>404</h2>
							<div class="decora-about"></div>
						</div>

						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'But here are some of my works.', 'desarrollos' ); ?></h1>
						</header><!-- .page-header -->
						
						<?php echo do_shortcode( '[featured_products limit="3" columns="3" class="pro_home" ]' ); ?>
						
					</section><!-- .error-404 -->
	
				</div>
			</div>		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
