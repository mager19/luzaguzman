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
			<div class="slide">
				<div class="col-sm-1"><span class="glyphicon glyphicon-menu-left slider-arrows" aria-hidden="true"></span></div>
				<div class="col-sm-10 slide-content">
				<h2>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dolore laborum, corporis impedit sapiente. </h2>
				</div>
				<div class="col-sm-1"><span class="glyphicon glyphicon-menu-right slider-arrows" aria-hidden="true"></span></div>
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
					<div class="row">
						<?php 
						$args = array( 'pagename' => 'AboutMe', 'posts_per_page' => '1' );
						$loop = new WP_Query( $args );

						if ($loop->have_posts() ) : while ($loop->have_posts() ) :$loop->the_post(); ?>
						<!-- post -->
						<div class="col-md-7">
							<div class="information--left__info">
								<h4>About Me</h4>
								<h3>Hi Everyone my name is Luz! </h3>
								<p><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink(); ?>" class="boton boton--verde">Read More</a>
								</div>
						</div>
						<div class="col-md-5">
							<div class="information--left__imagen" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
							</div>							
						</div>
						<?php endwhile; ?>
						<!-- post navigation -->
						<?php else: ?>
						<!-- no posts found -->
						<?php endif; ?>
						<?php wp_reset_postdata(); ?>
						
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="information--right">
					<?php get_template_part( 'template-parts/category', 'list' ); ?>
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
				<?php echo do_shortcode( '[featured_products limit="6" columns="3" class="pro_home" ]' ); ?>
			</div>
		</div>
	</div>
</section>

<!-- Blog -->
<section class="blog contenedor">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>BLOG</h3>
			</div>
			<?php get_template_part( 'template-parts/content', 'blog' ); ?>
		</div>
	</div>
</section>


<?php get_footer(); ?>