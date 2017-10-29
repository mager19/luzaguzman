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
								<a href="#" class="boton boton--verde">Read More</a>
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
					<div class="post-entry" style="background: url(<?php the_post_thumbnail_url(); ?>);">
						<div class="post-scuare">
							<p><?php the_date(); ?></p>
							<h2><?php the_title(); ?></h2>
							<p><b><?php
								$category = get_the_category();
								echo $category[0]->cat_name;
								?>
									
							</b></p>

						</div>
					</div>
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


<?php get_footer(); ?>