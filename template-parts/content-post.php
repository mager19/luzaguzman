<?php 

/*Template: Content-post
*/
	
?>

	<div class="col-md-12">
		<div class="post_blog_luza">
			<section class="luza_post_header" style="background-image: url('<?php echo the_post_thumbnail_url($size = "imagen-post-blog"); ?>');">
			</section>
			<h3><?php the_title(); ?></h3>
			<h4><?php the_category( ', ' ) ?></h4>
			<?php the_content(); ?>
		</div>
	</div>

