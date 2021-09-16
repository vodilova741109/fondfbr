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
				
				<h2><?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?></h2>
					<div class="wrapper-block">
						<div class="row">
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							?>  
							<div class="facts-box">
								
								<figure class="image image-facty">
								<a href=""><?php echo get_the_post_thumbnail( $page->ID); ?></a>	
								</figure>
								
								<div class="content-text">
								<h3><?php the_title(); ?></h3>
								<div class="lower-content">
														<div >
															<b><?php pll_e('Имя', 'fondfbr'); ?></b>
															<?php the_field('name'); ?>
														</div>	
														<div>
															<b><?php pll_e('Страна', 'fondfbr'); ?></b>
															<?php the_field('country'); ?>
														</div>
														<div>
															<b><?php pll_e('Нарушение прав', 'fondfbr'); ?></b>
															<?php the_field('violations'); ?>
														</div>										
														<a href="<?php echo get_permalink( $page->ID); ?>" class="read-more-slider"><?php pll_e('Подробнее', 'fondfbr'); ?></a>									
													</div>	
								</div>
							</div>													
																					
							<?php 
							
							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							// get_template_part( 'template-parts/content', get_post_type() );

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
