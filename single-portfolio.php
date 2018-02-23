<?php 
/*
*single portfolio page
*/

get_header(); ?>
		<!--HEADER START-->
        <?php get_template_part( 'loop/other', 'menu' ); ?>
        <!--HEADER END-->

    	<div class="worksajax clearfix">
     		<div class="content clearfix">
                <div class="container work-content" >
                
                	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
						
						
						<!--if portfolio is standard-->
						<?php  if ( get_post_meta($post->ID, 'port_format', true) == 'port_standard'){ ?>
						<?php  if ( get_post_meta($post->ID, 'port_image_setting', true)!= ''){ ?>
						<img alt="" src="<?php echo esc_url( get_post_meta($post->ID, 'port_image_setting', true)); ?>">
						<!--show featured image if no big image-->
						<?php } else { the_post_thumbnail(); }?>
						
						 <!--if portfolio is gallery-->
						<?php } else if ( get_post_meta($post->ID, 'port_format', true) == 'port_gallery'){ 
						echo '<div class="portfolio-gallery clearboth clearfix">';
							$image_ids = get_post_meta(get_the_ID(), 'port_gallery_setting', true);
							$image_ids = explode( ',', $image_ids );
							foreach( $image_ids as $image_id ) {
								$image_title  = get_the_title( $image_id );
								$image_port = wp_get_attachment_image( $image_id, 'full' );
								$imageurl     = esc_url(wp_get_attachment_url( $image_id )); 
								echo '<div>
										<a class="popup-img" href="' . $imageurl . '">
											<span>
											<i class="fa fa-search"></i>
											</span>
											' . $image_port . '
										</a>
									</div>';
						} echo'</div>';
						
						//if portfolio is slider
						}else if ( get_post_meta($post->ID, 'port_format', true) == 'port_slider'){
							echo'<div class="slider">';
							$simage_ids = get_post_meta(get_the_ID(), 'port_slider_setting', true);
							$simage_ids = explode( ',', $simage_ids );
							foreach( $simage_ids as $simage_id ) {
								$simage_port = wp_get_attachment_image( $simage_id, 'full' );
								echo '<div class="slide">' . $simage_port . '</div>';
							}
							echo'</div>'; 
							
						//if portfolio video	
						} else if ( get_post_meta($post->ID, 'port_format', true) == 'port_video'){ 
						echo'<div class="video"><iframe width="570" height="300" 
						src="'.esc_url(get_post_meta($post->ID, 'port_video_setting', true)).'?wmode=opaque;rel=0;showinfo=0;controls=0;iv_load_policy=3"></iframe></div>';
						
						//if portfolio audio
						} else if ( get_post_meta($post->ID, 'port_format', true) == 'port_audio'){ 
						$audio = get_post_meta($post->ID, 'port_audio_setting', true); ?> 
						<div class="audio">
						<?php echo wp_kses( $audio, array( 
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
						
                    <div class="spacing40"></div>
                    
                    <div class="box-relative clearfix">
                        <i class="content-icon fa <?php echo esc_attr( get_post_meta($post->ID, 'port_icon', true)); ?>"></i>
                        <?php $taxonomy = 'portfolio_category'; $terms = wp_get_post_terms($post->ID,$taxonomy);  ?> 
						<p class="sub-title"><?php $cats = array();  foreach ( $terms as $term ) { $cats[] =   $term->name ;   } echo implode(', ', $cats);?></p>
                        <h3 class="big-title"><?php the_title(); ?></h3>
                    </div><!--/.box-relative-->
                    
                    <div class="spacing40 clearboth"></div>
                    <?php the_content(); ?>
                    <div class="spacing40"></div>
                    
                    <?php if ( get_post_meta($post->ID, 'port_item_btn_text', true) !='' && get_post_meta($post->ID, 'port_item_btn_link', true) != ''){?>
					<a class="go-btn" href="<?php echo  esc_url(get_post_meta($post->ID, 'port_item_btn_link', true)); ?>">
					<?php echo  esc_attr( get_post_meta($post->ID, 'port_item_btn_text', true)); ?> <i class="fa fa-long-arrow-right"></i>
					</a>
					<div class="spacing40"></div>	
					<?php } ?>
                        
                    <a class="close"><i class="fa fa-times"></i></a>
                    <div class="clearboth spacing40"></div>

						
					<?php endwhile; endif; ?>
                    

                    

                    
                </div><!--/.container-->
                
        	</div>
        </div><!--/.worksajax-->
   

 <?php  get_footer(); ?> 