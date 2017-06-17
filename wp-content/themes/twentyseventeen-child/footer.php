<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-top">
				<div class="wrap">
					<div class="row">
						<div class="col-md-4">
							<div class="footer-about">
								<h2>About</h2>
								<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
							</div>
						</div>

						<div class="col-md-4">

							<div class="footer-quicklinks">
								<h2>Quick links</h2>
								<?php
						//get_template_part( 'template-parts/footer/footer', 'widgets' );

							if ( has_nav_menu( 'social' ) ) : ?>
								<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
									<?php
										wp_nav_menu( array(
											'theme_location' => 'social',
											'menu_class'     => 'social-links-menu',
											'depth'          => 1,
											'link_before'    => '<span class="screen-reader-text">',
											'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
										) );
									?>
								</nav><!-- .social-navigation -->
							<?php endif;
							?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="footer-address">
								<h2>Get in touch</h2>
								<p><strong>Compnay Name</strong><br>
								#545 Building, 45 floor <br>
								Manchester, United Kingdom <br>
								</p>
								<p>+44(0)123-456-7890</p>
								<p>email@domain.com</p>
							</div>
						</div>
					</div>
				</div><!-- .wrap -->
			</div>

			<div class="footer-bottom">
				<div class="wrap">
					<div class="row">
						<div class="col-md-12">
							<p>&copy; 2017 merarianalytics</p>
						</div>
					</div>
				</div>
			</div>
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
