<?php
/**
 * Template name: Template Contact
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
						<h4>Get in touch with us</h4>
						<h2>Contact</h2>
						<div class="decora-about"></div>
					</div>
				</div>

				<div class="col-md-12">
				<?php
				while ( have_posts() ) : the_post();?>
						<div class="content-contact">
							<div class="col-md-5">
								<?php the_post_thumbnail(); ?>
								<div class="subtitle"><?php the_content(); ?></div>
							</div>							
							<div class="col-md-7">
								<?php echo do_shortcode( '[contact-form-7 id="173" title="Contact form 1"]' ); ?>
							</div>
						</div>
						
					
				<?php 
				endwhile; // End of the loop.
				?>
				</div>
		</div>
	</div>

			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
