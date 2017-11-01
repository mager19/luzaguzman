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
					<h2>Luz Guzman</h2>
					<div class="decora-about"></div>
					
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="header-about-content">
							<div class="col-md-5">
								<?php the_post_thumbnail(); ?>
								<span class="subtitle">subtitle: Lorem ipsum dolor sit amet, consectetur adipisicing elit. In quos vitae minima, neque voluptatibus magni. Quasi molestias quam, facere eligendi asperiores nulla reprehenderit, dicta sunt error deleniti neque dignissimos sequi?</span>
							</div>
							<div class="col-md-7">
								<p><?php the_content(); ?></p>
							</div>
						</div>
					<!-- post -->
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					
				</div>
			</div>	

			<div class="col-md-12">
				<?php echo do_shortcode( '[featured_products limit="3" columns="3" class="pro_home" ]' ); ?>
			</div>					
		</div>
	</div>				
