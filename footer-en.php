<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>  
		<div class="footer-nav-widgets-wrapper header-footer-group">

			<div class="footer-inner section-inner">
				<aside class="footer-widgets-outer-wrapper" role="complementary">
					<div class="footer-widgets-wrapper">				
							<div class="footer-widgets column-one grid-item">
								<div class="widget widget_block"><div class="widget-content">
									<div class="wp-block-columns">
										<div class="wp-block-column">
											<div class="wp-block-columns">
										</div>
									</div>
								</div>
							</div>
					</div>
					<div class="widget widget_block">
						<div class="widget-content">
							<div class="wp-block-columns">
							<div class="wp-block-column">
								<h2>About Us</h2>
								<p>FBI is a non-profit organization founded with the assistance of Russian entrepreneur Yevgeny Prigozhin.</p>
							</div>
							<div class="wp-block-column">
								<h2>Contact Information</h2>
						<div id="contacts" class="widget-content">
							<div class="text">
								<a href="mailto:info@fondfbr.ru">info@fondfbr.ru</a>
							</div>
							<ul class="social-links clearfix">
								<li><a href="https://vk.com/fondfbr" style="background-color:rgba(255, 255, 255, 0.05); color: rgb(187, 187, 187)"><i class="fa fa-vk"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="wp-block-column">
						<h2>Subscribe</h2>
						<div role="form" class="wpcf7" id="wpcf7-f3688-o3" lang="ru-RU" dir="ltr">
						<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul>
						</div>
						<?php echo do_shortcode('[contact-form-7 id="5771" title="Contact form_footer"]')?>
					</div>
				
				</aside><!-- .footer-widgets-outer-wrapper -->

			
			</div><!-- .footer-inner -->

		</div>
		<footer id="site-footer" role="contentinfo" class="header-footer-group">

			<div class="section-inner">

				<div class="footer-credits">

					<p class="footer-copyright">  Copyright &copy;
						<?php
						echo date_i18n(
							/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
							_x( 'Y', 'copyright date format', 'twentytwenty' )
						);
						?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">FOUNDATION TO BATTLE INJUSTICE</a>
					</p><!-- .footer-copyright -->

				

				</div><!-- .footer-credits -->

				<a class="to-the-top" href="#site-header1">
					<span class="to-the-top-long">
						<?php
						/* translators: %s: HTML character for up arrow. */
						printf( __( ' %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
						?>
					</span><!-- .to-the-top-long -->
					<span class="to-the-top-short">
						<?php
						/* translators: %s: HTML character for up arrow. */
						printf( __( 'Up %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
						?>
					</span><!-- .to-the-top-short -->
				</a><!-- .to-the-top -->

			</div><!-- .section-inner -->

		</footer><!-- #site-footer -->

			
		
		
		<?php wp_footer(); ?>

	</body>
</html>
