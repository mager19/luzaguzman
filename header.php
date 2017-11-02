<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package desarrollos
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.png" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="contenedorall">
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-xs-7 col-sm-7 col-md-4">
					<div class="site-branding">
						<?php
						the_custom_logo();
						/*if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
						endif;

						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php
						//endif; ?>
					</div><!-- .site-branding -->					
				</div>
				<!-- nav -->
				<div class="col-xs-5 col-md-8">
					<nav id="site-navigation" class="main-navigation pull-right">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span></button>
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
						?>

					</nav><!-- #site-navigation -->
					
				</div>
			</div>
		</div>
	</header>

	