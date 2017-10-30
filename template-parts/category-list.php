<?php 

/*Template: Category-list
*/
?>

<h4>Mi Work</h4>
<h3>Categories</h3>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- post -->
		
	<?php 
		$terms = get_terms( 'product_cat', $args );
 
		if ( $terms ) {
		         
		    echo '<ul class="category-list">';
		     
		        foreach ( $terms as $term ) {
		                         
		            echo '<li class="category">';                 
		         	    echo '<a href="' .  esc_url( get_term_link( $term ) ) . '">';
		                        echo "- " . $term->name;
		                    echo '</a>';
		            echo '</li>';  
		    }
		    echo '</ul>';
		}
	?>

	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
