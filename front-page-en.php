<?php
/*
Template Name: Шаблон английской версии
Template Post Type:  page
*/

// … остальной код шаблона

get_header();
?>
  	<div class="top-slider" >
	  <div class="preview"></div> 
      <div class="slider-wrapper" id="slider-1">
	
		<div class="block">				
			<div class="banner"></div>
			<div class="banner2"></div>
			<div class="banner3"></div>
			<div class="banner4"></div>
			<div class="banner5"></div>

			<div class="banner6"></div>
			<div class="banner7"></div>          
		</div>
		<div class="slider-container" >				
			<div class="slider-track">

				<?php		
					wp_reset_postdata();

					global $post;

					$query = new WP_Query([
				
						'tag' => 'slide-an',
						
					]);
                
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							?>
								<div class="inner-box slider-item">
								<picture class = "wrapper-img">
								
									<figure class="image-box skip-lazy">
									<a href=""><div class="aki"><?php echo get_the_post_thumbnail( $page->ID, 'post-thumbnails'); ?></div></a>								
									</figure>
								</picture>	
									<div class="lower-content">
							
										<div class="wrapper">
											<p class="header-slider"></p>
										</div>
										<div class="header">
											<!-- <b>СТРАНА</b>  -->
											<?php the_field('subtitle'); ?>
											
										</div>
										<div >												
											<h1><?php the_title(); ?></h1>												
										</div>	
										<!-- <div>
											<b>СТРАНА</b>
											<?php the_field('country'); ?>
										</div> -->
										<div>
											
											<?php the_field('violations'); ?>
										</div>										
										<a href="<?php echo get_permalink( $page->ID); ?>" class="read-more">READ MORE</a>									
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
		
		<div class="slider-buttons">
				<button class="btn-prev"></button>	
				<button class="btn-next"></button>			
		</div>		
		<ul class="slider-dots">
				<li class="dot dot-active"></li>
				<li class="dot"></li>
				<li class="dot"></li>
				<li class="dot"></li>
				<li class="dot"></li>
				<li class="dot"></li>
				<li class="dot"></li>
				<li class="dot"></li>
				<li class="dot"></li>
				<li class="dot"></li>
				<li class="dot"></li>				
		</ul>			
</div>	

</div>

</div>

		<div class="container">

		    <section class="wrapper">
				<div class="content-text">
					<h2>The mission of the «Foundation to battle injustice»</h2>
					<div class="bold-text">FBI is a non-profit organization founded with the assistance of Russian entrepreneur Yevgeny Prigozhin.</div>
					<p>The «Foundation to battle injustice» works worldwide to address human rights violations, support civil activists, provide legal assistance and financial support to victims of judicial injustice, police brutality, and political persecution. The Foundation's activities will be focused on providing informational, legal and other assistance to those who have faced injustice on the part of any state representatives. </p>
				</div>
				<section class="image-with_stamp-section">
					<figure class="image"><img src="<?php echo get_template_directory_uri() ?>/assets/images/69630c087529e363fb15704a1a056901.png" ></figure>
				</section>
				<div class="img-paper">	</div>
			</section>
			<h2>Are you a victim of police brutality or political persecution?</h2>
			<section class="wrapper">
			
			
			<?php echo do_shortcode('[contact-form-7 id="5124" title="Contact form"]'); ?>
			
			</section>

			<section>
				<div>
					
				<?php		
					global $post;

					$query = new WP_Query([
						'posts_per_page' => 1,
						'category_name' => 'statements',										
						
						
					]);

					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							?>  
							<h2><?php the_title(); ?></h2>

							<p><?php the_excerpt()?></p>		

							<iframe src="<?php the_field('link_video'); ?>" width="720" height="360" frameborder="0" allowfullscreen="allowfullscreen"></iframe><br />

																	
							<?php 
						}
					} else {
						// Постов не найдено
					}

					wp_reset_postdata(); // Сбрасываем $post
					?>
	
				</div>
			</section>
			<section>
				<div class="imag"> 
					<h2>THE FOUNDATION COOPERATES WITH THE FOLLOWING HUMAN RIGHTS ORGANIZATIONS </h2>
					<img width='1141' height='639' src="<?php echo get_template_directory_uri()?>/assets/images/Human_Rights_Organizations_USA-01.jpg" >	
					<img width='1141' height='639' src="<?php echo get_template_directory_uri()?>/assets/images/Human_Rights_Organizations_USA-02.jpg" >		
					<img width='1141' height='639' src="<?php echo get_template_directory_uri()?>/assets/images/Human_Rights_Organizations_USA-03.jpg" >						
						
				</div>
			</section>
			<section>
				<div>
					<?php		
					global $post;

					$query = new WP_Query([
						'posts_per_page' => 1,
						'category_name' => 'terror-en',
											
					]);	
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							?>  
							<h2><?php the_title(); ?></h2>							

							<iframe src="<?php the_field('link_video'); ?>" width="640" height="320" frameborder="0" allowfullscreen="allowfullscreen"></iframe><br />
							<p><?php the_excerpt()?></p>	

							<a href="<?php echo get_category_link(258); ?>" class="link-button">OTHER TESTIMONIES OF REPRESSION</a>
																	
							<?php 
						}
					} else {
						// Постов не найдено
					}

					wp_reset_postdata(); // Сбрасываем $post
					?>
					
						
				</div>
			</section>
			<section class="letters">  
					<?php		
						global $post;

						$query = new WP_Query([
							'posts_per_page' => 1,
							'cat' => 171,							
						]);	
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
								?>  

								<div >
									
									<h2><?php echo the_category() ?></h2> 
									<h3><?php the_title(); ?></h3>
									<p><?php the_content()?>
									</p>
									
								</div>
								<div>				
								<!-- <img src="<?php echo get_template_directory_uri() ?> /assets/images/Pismo_v_Sovet_po_pravam_cheloveka.png" >	 -->
								<a href="<?php echo get_permalink( $page->ID); ?> "  target="blank"><?php echo get_the_post_thumbnail( $page->ID); ?></a>	
								</div>							
																		
								<?php 
							}
						} else {
							// Постов не найдено
						}

						wp_reset_postdata(); // Сбрасываем $post
						?>	
			</section>

			<section>
				<div>
				
					<h2>Cases</h2>
					<div class="slider-wrapper" id="slider-2">
						<div class="slider-container" >
							
							<div class="slider-track">

								<?php		
									global $post;

									$query = new WP_Query([
										// 'posts_per_page' => 10,
										// 'cat' => 5,										
										// 'orderby'        => 'comment_count',
										'tag' => 'slide-an',
										
									]);
									// debug
									// echo '<pre>';
									// print_r($query);
									// echo '</pre>';

									if ( $query->have_posts() ) {
										while ( $query->have_posts() ) {
											$query->the_post();
											?>
												<div class="inner-box slider-item">
													<figure class="image-box">
													<a href=""><?php echo get_the_post_thumbnail( $page->ID, 'medium'); ?></a>								
													</figure>
													<div class="lower-content">
														<div >
															<b>NAME:</b>
															<?php the_field('name'); ?>
														</div>	
														<div>
															<b>COUNTRY:</b>
															<?php the_field('country'); ?>
														</div>
														<div>
															<b>Rights violation:</b>
															<?php the_field('violations'); ?>
														</div>										
														<a href="<?php echo get_permalink( $page->ID); ?>" class="read-more-slider">READ MORE</a>									
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
						<div class="slider-buttons">
								<button class="btn-prev"></button>	
								<button class="btn-next"></button>							
						</div>					
					</div>


				
				</div>
			</section>
			</section>
					
			<section>  
			<h2>NEWS ABOUT US</h2> 
				<div class="about">
					<?php		
						global $post;

						$query = new WP_Query([
							'posts_per_page' => 12,
							'cat' => 11,
							'order' => 	'ASC'								
						]);	
					?>					
					
					<?php
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
						?>  

						<div class="item"> 
							<a href="<?php the_field('link_video'); ?>" target="blank"><h3><?php the_title(); ?></h3></a>								
							<a href="<?php the_field('link_video'); ?>" target="blank"><?php echo get_the_post_thumbnail( $page->ID); ?></a>
							<a href="<?php the_field('link_video'); ?>" target="blank"><p><?php the_field('subtitle'); ?></p></a>
						</div>							
																		
						<?php 
							}
						} else {
							// Постов не найдено
						}

						wp_reset_postdata(); // Сбрасываем $post
					?>
				</div>

			</section>
			<section>
		</div>
			<!-- <section class="tasks">
				<div class="container">		
					<div class="floated-text">Задачи</div>		
					<h2>Задачи «Фонда борьбы с репрессиями»</h2>
					<div class="block-tasks">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon-vesy"></span>
							</div>
							<h3><a href="">Юридическое содействие</a></h3>				
							<div class="text">Юридическое содействие лицам и организациям, которым причинен ущерб государством (и/или подконтрольными ему субъектами) и необходима правовая защита;</div>	
							
						</div>
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon-lupa"></span>
							</div>
							<h3><a href="">Выявление прецедентов</a></h3>				
							<div class="text">Выявление конкретных прецедентов ущемления прав и свобод человека со стороны государственных органов различных стран по политическим и иным причинам;</div>	
							
						</div>					
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon-hands"></span>
							</div>
							<h3><a href="">Установление контактов</a></h3>				
							<div class="text">Установление контактов и налаживание взаимодействия между правозащитными организациями для оказания помощи пострадавшим от произвола государства;</div>	
							
						</div>
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon-warning"></span>
							</div>
							<h3><a href="">Привлечение внимания</a></h3>				
							<div class="text">Привлечение общественного внимания к случаям нарушений прав человека и гражданина государством, судебными и полицейскими структурами;</div>	
							
						</div>
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon-megafon"></span>
							</div>
							<h3><a href="">Медиа-поддержка</a></h3>				
							<div class="text">Медиа-поддержка пострадавших от действий полицейских и судебных органов;</div>	
							
						</div>					
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon-ruble"></span>
							</div>
							<h3><a href="">Финансовая помощь</a></h3>				
							<div class="text">Финансовая помощь (сбор и передача денежных средств) для покрытия юридического, физического и морального ущерба гражданам, испытавшим притеснения со стороны государственных органов и должностных лиц.</div>	
							
						</div>		
						
									
					</div>				
				</div>
			</section>
		 -->
		<div class="container">	
				<section class="fact">					
					<div class="floated-text-fact">fight against repression</div>	
						<h2>FACTS OF REPRESSION</h2>
						<div class="wrapper-block">
							<div class="row">
							<?php		
										global $post;

									
										$query = new WP_Query([
											'posts_per_page' => 4,
											'cat' => 250,
											// 'category_name' => 'dela'							
										]);	
										if ( $query->have_posts() ) {
											while ( $query->have_posts() ) {
												$query->the_post();
												?>  

												<div class="facts-box">
													
													<figure class="image image-facty">
													<a href="<?php echo get_permalink( $page->ID); ?>"><?php echo get_the_post_thumbnail( $page->ID); ?></a>	
													</figure>
													
													<div class="content-text">
													<h3><?php the_title(); ?></h3>
														<div class="text"> <?php the_excerpt()?> </div>
														<a href="<?php echo get_permalink( $page->ID); ?>" class="read-more">READ MORE</a>			
													</div>
												</div>

																		
																						
												<?php 
											}
										} else {
											// Постов не найдено
										}

										wp_reset_postdata(); // Сбрасываем $post
										?>
							<div class="auto-container">
								<a href="<?php echo get_category_link(250); ?>">SHOW MORE + </a>
							</div>			
																
							</div>

							
							
						</div>

						<p></p>
						<img src="" alt="">
					</div>
				</section>

				
			<!-- <section>
				<div>
					<h2></h2>
					<p></p>
					<img src="" alt="">
				</div>
			</section>
			<section>
				<div>
					<h2></h2>
					<p></p>
					<img src="" alt="">
				</div>
			</section> -->
		</div>



<?php
get_footer('en');

