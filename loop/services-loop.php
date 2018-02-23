<?php
/*
* Services Section
*/
?>

		
        <!--SERVICES START-->
        <div id="services" class="content clearfix">
        	<div class="container">
            	<p class="opener-text">
                	<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'services_open_text' ) ) { 
					echo esc_attr( ot_get_option( 'services_open_text' ));} else {esc_html_e('Talent / ability','rukhsar'); } ?>
                </p>
            	<h2 class="content-title">
                	<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'services_big_title' ) ) { 
					echo esc_attr( ot_get_option( 'services_big_title' ));} else {esc_html_e('Chapter #3: Services','rukhsar'); } ?>
                </h2>
                <p class="content-subtitle">
                	<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'services_sub_text' ) ) { 
					echo esc_attr( ot_get_option( 'services_sub_text' ));}  ?>
                </p>
                <div class="content-border"></div>
                <div class="spacing30 clearboth"></div>
                
                <div class="slider post-slider clearfix" data-auto-play="8000">
                     <?php  /* get the services array */
						if ( function_exists( 'ot_get_option' )&& ot_get_option( 'services_list' ) ) { 
							$rukhsar_services = ot_get_option( 'services_list', array() );
							  
							if ( ! empty( $rukhsar_services ) ) {
							foreach( $rukhsar_services as $rukhsar_service ) { ?>
							<div class="slide">
								<img alt="<?php echo esc_attr( $rukhsar_service['title']); ?>" src="<?php echo esc_url( $rukhsar_service['sliderservice_image']); ?>">
								<div class="spacing30 clearboth"></div>
							</div>
							<?php }
						}
					} ?>
                          
                </div><!--/.post-slider-->
                       
                <div class="spacing30 clearboth"></div>
                <div class="spacing30 clearboth"></div>  
                     
                <div class="row">
                	<?php  
						$rukhsar_svc = new WP_Query(array(
								'post_type' =>  'services',  
								'posts_per_page'  =>'-1'  
							)  
						);  
						if ($rukhsar_svc ->have_posts()) : while  ($rukhsar_svc ->have_posts()) : $rukhsar_svc ->the_post();
					?>
                        
                    <div class="col-md-4">
                    	<div class="box-relative clearfix">
                        	<i class="content-icon fa <?php echo esc_attr( get_post_meta($post->ID, 'sv_icon', true)); ?>"></i>
                            
                            <p class="sub-title"><?php echo esc_attr( get_post_meta($post->ID, 'sv_subs', true)); ?></p>
                            <h3 class="big-title"><?php the_title(); ?> </h3>
                            <p class="sub-text"><?php echo esc_attr( get_post_meta($post->ID, 'sv_bold', true)); ?></p>
                            
                            <?php the_content(); ?>
                            
                            <?php if ( get_post_meta($post->ID, 'sv_item_btn_text', true) !='' && get_post_meta($post->ID, 'sv_item_btn_link', true) != ''){?>
                            <a class="go-btn" href="<?php echo  esc_url(get_post_meta($post->ID, 'sv_item_btn_link', true)); ?>">
                            <?php echo  esc_attr( get_post_meta($post->ID, 'sv_item_btn_text', true)); ?> 
                            </a>
                            <?php } ?>
                            <div class="spacing30 clearboth"></div>
                        </div><!--/.box-relative-->
                    </div><!--/col-md-4-->
                    
					<?php endwhile; endif; wp_reset_postdata();?>
                    
                </div><!--/.row-->
            </div><!--/team-->
        </div><!--services-->
        <!--SERVICES END-->