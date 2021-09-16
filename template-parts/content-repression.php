<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>


<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

           
	<div class="container">
		<div class="auto-container">
			<div class="sec-title first-title">
				<div class="floated-text">
				<?php echo get_field("name");?>
				</div>
				<h1 class="page-title"><?php echo get_field("name");?>&nbsp;<span class="bold"><?php echo get_field("surname"); ?></span></h1>
		
			</div>
		</div>		
		<div class="wrapper-header">
			<div class="image-post">
				<figure class="image-box">
											
				</figure>
			</div>
		
		</div>
		<div class="content content-repression">
		<div class="sp_image_block">
			<a href=""><?php echo get_the_post_thumbnail( $page->ID); ?></a>	
			<div class="sp_image_block_title">
				<h3 class="page-title"><?php echo get_field("name");?>&nbsp;<span class="bold"><?php echo get_field("surname"); ?></span></h3>
				<h4><?php echo get_field("subtitle");?></h4>
			</div>
		</div>	
		

			<p><?php the_content()?></p>
		</div>	
		
		<div class="block-top other-block">
				<?php		
					global $post;
					$query = new WP_Query([
						'posts_per_page' => 6,
						'category_name' => 'repression, facts-of-repression',		
						'post__not_in' => array($post->ID),		
						
						// 'tag' => 'slide',						
					]);
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							?>
								<div class="inner-box slider-item item">
									<figure class="image-box">
									<a href=""><?php echo get_the_post_thumbnail( $page->ID, 'medium'); ?></a>								
									</figure>
										
									<div class="lower-content more_articles">
										<div class="subtitle">
											<?php echo get_field("subtitle"); ?>
										</div>
										<div >
										<h2 class="page-title"><?php echo get_field("name");?>&nbsp;<span class="bold"><?php echo get_field("surname"); ?></span></h2>
										</div>	
									
										<div>
										<div class="text"> <?php the_excerpt()?> </div>
										</div>										
										<a href="<?php echo get_permalink( $page->ID); ?>" class="read-more-slider"><?php pll_e('Подробнее', 'fondfbr'); ?></a>									
									</div>
								</div>
							<?php 
						}
					} else {
						// Постов не найдено
					}
					wp_reset_postdata(); // Сбрасываем $post
					?>
					
			</div>				
	</div>




</article><!-- .post -->
