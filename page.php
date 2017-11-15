<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package desarrollos
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
			
			<?php
			while ( have_posts() ) : the_post();?>
			<section class="luza_product_header" style="background: url(<?php the_post_thumbnail_url(); ?>);background-size: cover;">
        		<h2><?php the_title(); ?></h2>
        	</section>
			<div class="container">
				<?php get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;?>
			</div>
			<?php endwhile; // End of the loop.
			?>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
