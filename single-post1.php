<?php
/**
 * Blog Post Main File.
 *
 * @package TALLINN
 * @author  Themecraze
 * @version 1.0
 */

get_header();
?>

<main id="primary" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'theme-fondfbr' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'theme-fondfbr' ) . '</span> <span class="nav-title">%title</span>',
				)
			);		

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
