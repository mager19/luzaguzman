<?php
/**
 * Template Name:  Template Home
 * 
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package desarrollos
 */

get_header();

?>
<!-- Slide principal -->
<section class="slide-principal">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dolore laborum, corporis impedit sapiente. Necessitatibus magnam molestiae, est nisi provident expedita laboriosam adipisci ullam, fugit, dignissimos sit ipsum at fugiat!
			</div>
		</div>
	</div>
</section>

<!-- information -->
<section class="information contenedor">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="information--left">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti laboriosam aperiam maiores enim maxime reprehenderit nihil, ab vel. Quod voluptate et natus pariatur quis repellendus molestiae iste quia culpa ducimus.
				</div>
			</div>
			<div class="col-md-4">
				<div class="information--right">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam obcaecati ipsum veniam eius eligendi, saepe, vitae magnam doloribus qui sequi dicta labore cum! Enim placeat eos mollitia facilis, nam quasi.
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Categorias -->
<section class="categorias contenedor">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php echo do_shortcode( '[featured_products limit="6" columns="3" ]' ); ?>
			</div>
		</div>
	</div>
</section>

<!-- Blog -->
<section class="blog contenedor">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Blog</h3>
			</div>
			<?php 
				$args = array( 'post_type' => 'post' ,'posts_per_page' => 2 );
				$loop = new WP_Query( $args );

				if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<!-- post -->
				<div class="col-md-6">
					<?php the_title(); ?>
					<?php the_post_thumbnail(); ?>
				</div>
				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?>
				<?php wp_reset_postdata();?>
		</div>
	</div>
</section>