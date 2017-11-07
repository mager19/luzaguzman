<?php
/**
 * Template name: Template About
 *
 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package desarrollos
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="header-about">
					<h4>Artister Painter</h4>
					<h2>Luza Guzman</h2>
					<div class="decora-about"></div>
					
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="header-about-content">
							<div class="col-md-5">
								<?php the_post_thumbnail(); ?>
								<div class="subtitle">subtitle: Lorem ipsum dolor sit amet, consectetur adipisicing elit. In quos vitae minima, neque voluptatibus magni. Quasi molestias quam, facere eligendi asperiores nulla.</div>
							</div>
							<div class="col-md-7">
								<div class="about-description"><?php the_content(); ?></div>
							</div>
						</div>
					<!-- post -->
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					
				</div>
			</div>	

			<div class="col-md-12">
				<div class="about-relacionados">
					<h3>My Work</h3>
					<?php echo do_shortcode( '[featured_products limit="3" columns="3" class="pro_home" ]' ); ?>
				</div>
			</div>					
		</div>
	</div>				

<?php get_footer(); ?>
