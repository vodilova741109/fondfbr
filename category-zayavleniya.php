<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme_Fondfbr
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				
			</header><!-- .page-header -->
        	<div class="container">	

			<section>
				<div>
				
				<h3><?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?></h3>
					<div class="wrapper-block">
						<div class="row repression-row zayavleniya-row">
						<?php
						$index=0;
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							?>  
							<div class="repression-box<?php if ($index % 2 == 0 ) echo ' two'; ?>">
								
								<figure class="image image-repress zayavleniya">
								<iframe src="<?php the_field('link_video'); ?>" width="720" height="360" frameborder="0" allowfullscreen="allowfullscreen"></iframe><br />	
								</figure>
								
								<div class="content-text">
								<!-- <h4><?php the_field('subtitle'); ?></h4> -->
								<h3><?php the_title(); ?></h3>								
								<p><?php the_excerpt()?></p>
									
									<a href="<?php echo get_permalink( $page->ID); ?>" class="read-more-slider"><?php pll_e('Подробнее', 'fondfbr'); ?></a>			
								</div>
							</div>													
																					
							<?php 
							
							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							// get_template_part( 'template-parts/content', get_post_type() );
						$index++;		
						endwhile;

						the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
																
						</div>		
					</div>
				</div>
			</section>

		

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
