<?php 

/*Template: Header product
*/
?>

<section class="header-product" style="background-color: red;">
	
	<?php 

		global $product;
		$terms = $product->get_categories();

		var_dump($terms);

		if ( is_product_category() ){
    global $wp_query;

    // get the query object
    $cat = $wp_query->get_queried_object();

    // get the thumbnail id using the queried category term_id
    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true ); 

    // get the image URL
    $image = wp_get_attachment_url( $thumbnail_id ); 

    // print the IMG HTML
    echo "<img src='{$image}' alt='' width='762' height='365' />";
    var_dump($image);
}
 		
	?>
	
	<section class="header-product" style="background-image:url(<?php $imagen; ?>);">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam doloremque eligendi error architecto quisquam sunt, soluta aliquid, laborum consequuntur a iste reiciendis, porro atque excepturi earum cupiditate ab animi. Tempora.
				</div>
			</div>
		</div>
	</section>

	

	
	
	<h2></h2>
</section>
