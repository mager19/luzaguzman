<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package desarrollos
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<?php
							wp_nav_menu( array(
								'theme_location' => 'social-networks',
								'menu_id'        => 'social-networks',
							) );
						?>
					<p>luzaguzman.com</p>
					<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-footer',
								'menu_id'        => 'footer-menu',
							) );
						?>
					<div class="site-info">
						<h6>
						<a href="<?php echo esc_url( __( 'https://nyxent.com/', 'desarrollos' ) ); ?>"><?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( 'Proudly powered by %s', 'desarrollos' ), 'NYXENT' );
						?></a>
						</h6>
					</div><!-- .site-info -->
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
