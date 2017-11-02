<?php 

/*Template: Content-blog
*/
	$args = array( 'post_type' => 'post' ,'posts_per_page' => 2 );
	$loop = new WP_Query( $args );

	if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<!-- post -->
	<div class="col-md-6">
		<div class="post-entry" style="background: url(<?php the_post_thumbnail_url(); ?>);background-size: cover;">
			<div class="post-scuare">
				<p><?php the_date(); ?></p>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p class="post-categories"><b> <?php the_category( ', ' ); ?>					
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