<?php
/**
 * desarrollos functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package desarrollos
 */

if ( ! function_exists( 'desarrollos_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function desarrollos_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on desarrollos, use a find and replace
		 * to change 'desarrollos' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'desarrollos', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'imagen-blog', 600, 500, true );
		add_image_size( 'imagen-post-blog', 1280, 350, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'desarrollos' ),
		) );
		register_nav_menus( array(
			'social-networks' => esc_html__( 'Social Networks', 'desarrollos' ),
		) );
		register_nav_menus( array(
			'menu-footer' => esc_html__( 'Footer', 'desarrollos' ),
		) );
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'desarrollos_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

	
	}
endif;
add_action( 'after_setup_theme', 'desarrollos_setup' );

add_action( 'after_setup_theme', 'woocommerce_support' );
	function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function desarrollos_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'desarrollos_content_width', 640 );
}
add_action( 'after_setup_theme', 'desarrollos_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function desarrollos_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'desarrollos' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'desarrollos' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'desarrollos_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function desarrollos_scripts() {
	wp_enqueue_style( 'desarrollos-style', get_stylesheet_uri() );

	wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css' );

	wp_enqueue_style( 'slickcss', get_template_directory_uri(). '/css/slick.css' );

	wp_enqueue_style( 'slicktema', get_template_directory_uri(). '/css/slick-theme.css' );

	wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css?family=Lora:400i|Open+Sans:300,400,700,800');

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), false, 'all' );

	wp_enqueue_script( 'desarrollos-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'jqueryf', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), '20151215', true );

	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array(), false, 'all' );	

	wp_enqueue_script( 'funciones', get_template_directory_uri() . '/js/funciones.js', array(), false, 'all' );	

	wp_enqueue_script( 'desarrollos-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'desarrollos_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );	

/*Categoria de producto en el home*/
add_action( 'woocommerce_before_shop_loop_item_title', 'luzaguzman_cat_pro_home', 10 ); 
function luzaguzman_cat_pro_home(){
	$product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );
	$single_cat = array_shift( $product_cats ); 
	echo( '<h4>' . $single_cat->name . '</h4>' );	
}

/*Quito el precio sale y el sticker sale*/
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_product_get_sale_price', 10 );

/*Quito el boton add to cart en el home*/
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);

/*Se añade boton readmore*/
add_action( 'woocommerce_after_shop_loop_item', 'luzaguzman_boton_readmore', 10);
function luzaguzman_boton_readmore(){
	echo('<a href="'. get_the_permalink() . '" class="boton boton--cafe">Read More</a>');
}

/*header para producto, trae el nombre e imagen de la categoria*/
add_action( 'woocommerce_before_single_product', 'luzaguzman_product_header' );
function luzaguzman_product_header(){
	
	$terms = get_the_terms( $post->ID, 'product_cat' );
	$numero = 1;
    foreach ( $terms as $term ){
        $category_name = $term->name;
        $category_thumbnail = get_woocommerce_term_meta($term->term_id, 'thumbnail_id', true);
        $image = wp_get_attachment_url($category_thumbnail);
        // echo '<img src="'.$image.'">';
        if($numero<2){
        	
        	echo '<section class="luza_product_header" style="background-image: url(' .$image. ');">';
        	echo '<h2>'.$category_name.'</h2>';
        	echo('</section>');
        }
        $numero++;
    }	
}

/*Remover el rating de los productos single*/
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating' , 10 );

/*Remover el cuadro de cantidad en cada producto*/
function default_no_quantities( $individually, $product ){
	$individually = true;
	return $individually;
}
add_filter( 'woocommerce_is_sold_individually', 'default_no_quantities', 10, 2 );

/*Modificaciones a info  product en single product*/

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 6 );

add_action( 'woocommerce_single_product_summary', 'luzguzman_price_decoration', 7 );
function luzguzman_price_decoration(){
	echo '<div class="decoration_price"></div>';
}

add_action( 'woocommerce_after_add_to_cart_form', 'luzguzman_price_decoration', 10 );

/*Remover tabs de valoraciones*/
add_filter( 'woocommerce_product_tabs', 'luzaguzman_remover_tabs' , 11);
function luzaguzman_remover_tabs($tabs){
	unset($tabs['reviews']);
	return $tabs;
}

/*añadir Blog a product single*/
add_action( 'woocommerce_after_single_product_summary', 'luzaguzman_blog_product', 21 );
function luzaguzman_blog_product(){
	echo '<div class="col-md-12">';
	echo '<div class="bloga">';
	get_template_part('template-parts/content', 'blog');
	echo '</div>';
	echo '</div>';
}

function iconic_remove_sidebar( $is_active_sidebar, $index ) {
    if( $index !== "sidebar-1" ) {
        return $is_active_sidebar;
    }
 
    if( ! is_product() ) {
        return $is_active_sidebar;
    }
 
    return false;
}
 
add_filter( 'is_active_sidebar', 'iconic_remove_sidebar', 10, 2 );
add_action( 'init', 'jk_remove_wc_breadcrumbs' );
function jk_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}




/**
 * Add Cart icon and count to header if WC is active
 */
function my_wc_cart_count() {
 
    if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
 
        $count = WC()->cart->cart_contents_count;
        ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php
        if ( $count > 0 ) {
            ?>
            <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
            <?php
        }
                ?></a><?php
    }
 
}
add_action( 'your_theme_header_top', 'my_wc_cart_count' );
/**
 * Ensure cart contents update when products are added to the cart via AJAX
 */
function my_header_add_to_cart_fragment( $fragments ) {
 
    ob_start();
    $count = WC()->cart->cart_contents_count;
    ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php
    if ( $count > 0 ) {
        ?>
        <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
        <?php            
    }
        ?></a><?php
 
    $fragments['a.cart-contents'] = ob_get_clean();
     
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment' );


// Add the cart link to menu
function wpex_add_menu_cart_item_to_menus( $items, $args ) {

// Make sure your change 'wpex_main' to your Menu location !!!!
if ( $args->theme_location === 'menu-1' ) {

$css_class = 'menu-item menu-item-type-cart menu-item-type-woocommerce-cart';

if ( is_cart() ) {
$css_class .= ' current-menu-item';
}

$items .= '<li class="' . esc_attr( $css_class ) . '">';

$items .= wpex_menu_cart_item();

$items .= '</li>';

}

return $items;

}
add_filter( 'wp_nav_menu_items', 'wpex_add_menu_cart_item_to_menus', 10, 2 );

// Function returns the main menu cart link
function wpex_menu_cart_item() {

$output = '';

$cart_count = WC()->cart->cart_contents_count;

$css_class = 'wpex-menu-cart-total wpex-cart-total-'. intval( $cart_count );

if ( $cart_count ) {
$url  = WC()->cart->get_cart_url();
} else {
$url  = wc_get_page_permalink( 'shop' );
}

$html = $cart_extra = WC()->cart->get_cart_total();
$html = str_replace( 'amount', '', $html );

$output .= '<a href="'. esc_url( $url ) .'" class="' . esc_attr( $css_class ) . ' cart-contents">';

//$output .= '<span class="fa fa-shopping-bag2"></span>';

//$output .= wp_kses_post( $html );
$output .= '</a>';

return $output;
}


// Update cart link with AJAX
function wpex_main_menu_cart_link_fragments( $fragments ) {
$fragments['.wpex-menu-cart-total'] = wpex_menu_cart_item();
return $fragments;
}
add_filter( 'add_to_cart_fragments', 'wpex_main_menu_cart_link_fragments' );