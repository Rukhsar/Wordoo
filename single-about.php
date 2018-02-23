
<?php get_header(); ?>
		<!--HEADER START-->
        <?php get_template_part( 'loop/other', 'menu' ); ?>
        <!--HEADER END-->

    <div class="content blog-wrapper">  
        <div class="container clearfix">
				<div class="row">
     				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        
                    <div class="col-md-8">
                    	<!--if about is standard-->
						<?php  if ( get_post_meta($post->ID, 'abt_format', true) == 'abt_standard'){ ?>
						<?php  if ( get_post_meta($post->ID, 'abt_image_setting', true)!= ''){ ?>
						<img alt="" src="<?php echo esc_url( get_post_meta($post->ID, 'abt_image_setting', true)); ?>">
						<!--show featured image if no big image-->
						<?php } else { the_post_thumbnail(); }
						
						//if about is slider
						}else if ( get_post_meta($post->ID, 'abt_format', true) == 'abt_slider'){
							echo'<div class="slider post-slider clearfix" data-auto-play="8000">';
							$simage_ids = get_post_meta(get_the_ID(), 'abt_slider_setting', true);
							$simage_ids = explode( ',', $simage_ids );
							foreach( $simage_ids as $simage_id ) {
								$simage_port = wp_get_attachment_image( $simage_id, 'full' );
								echo '<div class="slide">' . $simage_port . '</div>';
							}
							echo'</div>'; 
							
						//if about video	
						} else if ( get_post_meta($post->ID, 'abt_format', true) == 'abt_video'){ 
						echo'<div class="video"><iframe width="570" height="300" 
						src="'.esc_url(get_post_meta($post->ID, 'abt_video_setting', true)).'?wmode=opaque;rel=0;showinfo=0;controls=0;iv_load_policy=3"></iframe></div>';
						
						//if about audio
						} else if ( get_post_meta($post->ID, 'abt_format', true) == 'abt_audio'){ 
						$audio = get_post_meta($post->ID, 'abt_audio_setting', true); ?> 
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
                        <div class="spacing30 clearboth"></div>
                    </div>
                    <div class="col-md-4">
                    	<div class="box-relative clearfix">
                        	<i class="content-icon fa <?php echo esc_attr( get_post_meta($post->ID, 'about_icon', true)); ?>"></i>
                            
                            <p class="sub-title"><?php echo esc_attr( get_post_meta($post->ID, 'about_small_title', true)); ?></p>
                            <h3 class="big-title"><?php the_title(); ?></h3>
                            <p class="sub-text"><?php echo esc_attr( get_post_meta($post->ID, 'about_bold', true)); ?></p>
                            
                            <?php the_content(); ?>
                            
                            <?php if ( get_post_meta($post->ID, 'abt_item_btn_text', true) !='' && get_post_meta($post->ID, 'abt_item_btn_link', true) != ''){?>
                            <a class="go-btn" href="<?php echo  esc_url(get_post_meta($post->ID, 'abt_item_btn_link', true)); ?>">
                            <?php echo  esc_attr( get_post_meta($post->ID, 'abt_item_btn_text', true)); ?> 
                            </a>
                            <div class="spacing30 clearboth"></div>	
                            <?php } ?>
                    
                        </div><!--/.box-relative-->
                    </div><!--/col-md-4-->
                    <?php endwhile; endif; ?>
                </div><!--/.row-->
        </div><!--/.container-->
	</div><!--/.blog-wrapper-->

    <?php  get_footer(); ?> 
