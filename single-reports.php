<?php
/*
Template Name: Шаблон записи reports

Template Post Type: post
*/

// … остальной код шаблона

get_header();
?>


	<main id="primary" class="site-main"> 
	   

	
		
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-reports', get_post_type() );

		
			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
