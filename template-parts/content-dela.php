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
				№<?php echo get_field("nomer_dela_v_tope"); ?>
				</div>
				<h1 class="page-title"><?php echo get_field("name");?>&nbsp;<span class="bold"><?php echo get_field("surname"); ?></span></h1>
		
			</div>
		</div>		
		<div class="wrapper-header">
			<div class="image-post">
				<figure class="image-box">
				<a href=""><?php echo get_the_post_thumbnail( $page->ID); ?></a>								
				</figure>
			</div>
			<div class="content-summary">	
				<div class="title-delo">
					<b> <?php pll_e('ДЕЛО №', 'fondfbr'); ?><?php echo get_field("nomer_dela_v_tope"); ?></b>
				</div>
				<div class="text-image-delo">
					<div class="dela_text_header">			
						<b><?php pll_e('Имя', 'fondfbr'); ?>: </b><span><?php echo get_field("name");?>
					<?php echo get_field("surname"); ?></span>
					</div>			
					<div><b><?php pll_e('Страна', 'fondfbr'); ?>: </b><?php echo get_field("country");?></div>
					<div><b><?php pll_e('Нарушение прав', 'fondfbr'); ?>: </b><?php echo get_field("violations");?></div>
					<div><b><?php pll_e('Год', 'fondfbr'); ?>: </b><?php echo get_the_date('Y'); ?></div>
					<div><b><?php pll_e('Информация о деле', 'fondfbr'); ?>: </b></div>
				</div>		
			</div>
		</div>
		<div class="content">
			<p><?php the_content()?></p>
			<div class="sec-title first-title">
				<div class="floated-text">
				<?php pll_e('СМИ', 'fondfbr'); ?>
				</div>
				<h2 class="page-title"><?php pll_e('СМИ О ДЕЛЕ', 'fondfbr'); ?>: </h2>
			</div>
			<div class="smiaabout_block">
				<div><?php echo get_field("smi_about_block");?></div>
			</div>
			<div class="sec-title first-title">
				<div class="floated-text">
				<?php pll_e('ФАЙЛЫ', 'fondfbr'); ?>
				</div>
				<h2 class="page-title"><?php pll_e('СТАТУС ДЕЛА', 'fondfbr'); ?>: </h2>
			</div>	
				
				<div><?php echo get_field("status_dela");?></div>
		
		</div>
		<div class="doc_block">
			<div class="swiper-container doc-container">
				<div class="swiper-wrapper">
					<div class="">
						<?php		
						// переменная группы
						$files = get_field('files');

						if($files && $files['file']): ?>
							<div id="files">
								<a target="_blank" href="<?php echo $files['file'];?>">
								<img src="/wp-content/uploads/2021/04/doc.svg" width="157" height="60" /><?php echo $files['title']; ?></a>		
							</div>	
						<?php endif; 
						?>
					</div>
					<div class="">
						<?php							
                         
						if($files && $files['file2']): ?>
							<div id="files2">
								<a target="_blank" href="<?php echo $files['file2'];?>">
								<img src="/wp-content/uploads/2021/04/doc.svg" width="157" height="60" /><?php echo $files['title2']; ?></a>		
							</div>	
						<?php endif; 
						?>
					</div> 		
					<div class="">
						<?php							
                         
						if($files && $files['file3']): ?>
							<div id="files3">
								<a target="_blank" href="<?php echo $files['file3'];?>">
								<img src="/wp-content/uploads/2021/04/doc.svg" width="157" height="60" /><?php echo $files['title3']; ?></a>		
							</div>	
						<?php endif; 
						?>
					</div> 	
					<div class="">
						<?php							
                         
						if($files && $files['file4']): ?>
							<div id="files4">
								<a target="_blank" href="<?php echo $files['file4'];?>">
								<img src="/wp-content/uploads/2021/04/doc.svg" width="157" height="60" /><?php echo $files['title4']; ?></a>		
							</div>	
						<?php endif; 
						?>
					</div> 	
					<div class="">
						<?php							
                         
						if($files && $files['file5']): ?>
							<div id="files5">
								<a target="_blank" href="<?php echo $files['file5'];?>">
								<img src="/wp-content/uploads/2021/04/doc.svg" width="157" height="60" /><?php echo $files['title5']; ?></a>		
							</div>	
						<?php endif; 
						?>
					</div> 	
			</div>	
		</div>
		
		<div class="block-top other-block">
				<?php		
					global $post;
					$query = new WP_Query([
						'posts_per_page' => 6,
						'category_name' => 'dela, cases',		
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
									<div class="lower-content">
										<div >
											<b><?php pll_e('ИМЯ', 'fondfbr'); ?></b>
											<?php the_field('name'); ?>
										</div>	
										<div>
											<b><?php pll_e('СТРАНА', 'fondfbr'); ?></b>
											<?php the_field('country'); ?>
										</div>
										<div>
											<b><?php pll_e('НАРУШЕНИЕ ПРАВ', 'fondfbr'); ?></b>
											<?php the_field('violations'); ?>
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
