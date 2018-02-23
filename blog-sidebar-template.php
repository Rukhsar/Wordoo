<?php
/*
* Template Name: Blog with Sidebar
* Description: Blog page style with sidebar
*/

	get_header(); ?>
		
		<!--HEADER START-->
		<?php get_template_part( 'loop/other', 'menu' ); ?>
		<!--HEADER END-->
        	

		<div class="content blog-wrapper">  
			<div class="container clearfix">
				 <div class="row clearfix">
				 	<div class="col-md-7 blog-content">
						
						<!--BLOG POST START-->
						<?php $rukhsar_post_per_page = get_option('posts_per_page');
                              $rukhsar_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                              $rukhsar_args = array(
								  'posts_per_page' => $rukhsar_post_per_page,
								  'paged' => $rukhsar_paged,
								  'post_type' => 'post'
								); 
								query_posts($rukhsar_args);
						
						while (have_posts()) : the_post(); ?>
								
						<article id="post-<?php  the_ID(); ?>" <?php  post_class('clearfix blog-post'); ?>>
							 
							 <!--if post is standard-->
							 <?php  if ( get_post_meta($post->ID, 'post_format', true) == ''){ the_post_thumbnail(); }?>
							 <?php  if ( get_post_meta($post->ID, 'post_format', true) == 'post_standard'){ ?>
								 <?php  if ( get_post_meta($post->ID, 'post_image_setting', true)!= ''){ ?>
								 <?php $post_img = get_post_meta($post->ID, 'post_image_setting', true); ?>
								 <img alt="" src="<?php echo esc_url ($post_img); ?>">
								 <!--show featured image if no big image-->
								 <?php } else {  the_post_thumbnail(); }?>
								<!--if post is gallery-->
								<?php } else if ( get_post_meta($post->ID, 'post_format', true) == 'post_gallery'){ 
								echo '<div class="portfolio-gallery clearboth clearfix">';
									$rukhsar_image_ids = get_post_meta(get_the_ID(), 'post_gallery_setting', true);
									$rukhsar_image_ids = explode( ',', $rukhsar_image_ids );
									foreach( $rukhsar_image_ids as $rukhsar_image_id ) {
										$rukhsar_image_title  = get_the_title( $rukhsar_image_id );
										$rukhsar_image_port = wp_get_attachment_image( $rukhsar_image_id, 'full' );
										$rukhsar_imageurl     =  esc_url( wp_get_attachment_url( $rukhsar_image_id )); 
										echo '<div>
												<a class="popup-img" href="' . $rukhsar_imageurl . '">
													<span>
													<i class="fa fa-search"></i>
													</span>
													' . $rukhsar_image_port . '
												</a>
											</div>';
								} echo'</div>';
								
								//if post is slider
								}else if ( get_post_meta($post->ID, 'post_format', true) == 'post_slider'){
									echo'<div class="blog-slider owl-carousel owl-theme" data-auto-play="7000">';
									$rukhsar_simage_ids = get_post_meta(get_the_ID(), 'post_slider_setting', true);
									$rukhsar_simage_ids = explode( ',', $rukhsar_simage_ids );
									foreach( $rukhsar_simage_ids as $rukhsar_simage_id ) {
										$rukhsar_simage_port = wp_get_attachment_image( $rukhsar_simage_id, 'full' );
										echo '<div class="slide">' . $rukhsar_simage_port . '</div>';
									}
									echo'</div>'; 
									
								//if post video	
								} else if ( get_post_meta($post->ID, 'post_format', true) == 'post_video'){ 
								echo'<div class="video"><iframe width="570" height="300" 
								src="'.esc_attr( get_post_meta($post->ID, 'post_video_setting', true)).'?wmode=opaque;rel=0;showinfo=0;controls=0;iv_load_policy=3"></iframe></div>';
								
								//if post audio
								} else if ( get_post_meta($post->ID, 'post_format', true) == 'post_audio'){ ?>
								<div class="audio">
								<?php $rukhsar_audio =get_post_meta($post->ID, 'post_audio_setting', true);
								echo wp_kses( $rukhsar_audio, array( 
									'iframe' => array(
											'src' => array(),
											'width' => array(),
											'height' => array(),
											'scrolling' => array(),
											'frameborder' => array(),
										),
								) ); ?>
								</div>
								<?php }?>
							 
							 <div class="spacing10 clearfix"></div>
                             <a href="<?php the_permalink(); ?>"><h2 class="blog-title"><?php the_title(); ?></h2></a>
                             
							 <ul class="post-detail">
							 	<li><i class="fa fa-archive"></i> <?php the_category(', '); ?></li>
								
								<?php if(get_the_tag_list()) { ?> 
									<li><i class="fa fa-tags"></i>
										<?php the_tags('', ', '); ?>
									</li>
								<?php }?>
								<li><i class="fa fa-calendar-o"></i> <?php echo get_the_date();  ?> </li>
							  </ul>
							 <div class="spacing40 clearfix"></div>
							 
							 
							 <?php the_excerpt(); ?>
							 <div class="spacing20 clearfix"></div>
							 <a class="go-btn" href="<?php the_permalink(); ?>"><?php esc_html_e('View Post','rukhsar') ?> <i class="fa fa-arrow-circle-right"></i></a>
							 <div class="border-post clearfix"></div>
							 <div class="clearboth spacing40"></div>
						</article><!--/.blog-post-->
						<!--BLOG POST END-->	
						
								
						<?php endwhile; ?>
						
						
						
						
						 <?php  rukhsar_pagination(); ?>
						<div class="spacing40 clearfix"></div>
					</div><!--/.col-md-7-->
					
					<?php get_sidebar(); ?>
                    
				 </div><!--/.row-->
			</div><!--/.container-->
		</div><!--/.blog-wrapper-->


               
    <?php  get_footer(); ?>