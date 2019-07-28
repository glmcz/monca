	<!-- Hero Area -->
	<?php
	$banner_enable = get_theme_mod( 'travel_company_banner_enable', '1' );
	$banner_search_form_enable = get_theme_mod( 'travel_company_banner_advance_search_enable', '1' );
	$banner_title =  get_theme_mod( 'travel_company_banner_title_text', __( 'Simply the Best', 'travel-company' ) );
	$banner_description =  get_theme_mod( 'travel_company_banner_description_text', __( '# 1 MOST LOVED BY EVERYONE', 'travel-company' ) );
	if($banner_enable):
		?>
						<div class="uvodni-motivator" style='width: 100%; height: 650px'>
								
								<?php
								$url = "http://vnitrnirozvoj.cz/wp-content/uploads/2019/05/1-FAVErFxcxwFSNWY6fj0tWA.jpeg";
								$attachment_id = attachment_url_to_postid( $url );
								$img_src = wp_get_attachment_image_url( $attachment_id, 'large' );
								$img_srcset = wp_get_attachment_image_srcset( $attachment_id, 'full' );
								$img_alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ); ?>
							<?php echo rwp_picture( $attachment_id, array(
	'sizes' => array( 'medium', 'large', 'full' )) ); 
								?>
							<figure class="hero-inner">					
									<figcaption>
												<div>
													<!-- Welcome Text -->
													<div class="welcome-text">	
														<p><?php echo esc_html($banner_description);?></p>
														<h1><?php echo esc_html($banner_title);?></h1>
													</div>
													<!--/ End Welcome Text -->
													<!-- Search Form -->
													<?php if($banner_search_form_enable):
														get_template_part('template-parts/content','trips-search');
													endif;?>
													<!--/ End Search Form -->
												</div>		
										</figcaption>
								</figure>
									</div>
		<!--/ End Hero Area -->
		<?php endif;?>    