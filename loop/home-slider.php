<?php
/*
* Homepage Slider 
*/
?>

		
			<!--SLIDER HOME START-->
			<div class="slider-box clearfix">
            
                <div class="slider home-slider clearfix" data-auto-play="<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'slider_delay' ) ) { echo esc_attr( ot_get_option( 'slider_delay') );} 
                else {echo '6000';}?>">
                    <?php
              
                      /* get the slider array */
                      $ridianur_slides = ot_get_option( 'slider_list', array() );
                      
                      if ( ! empty( $ridianur_slides ) ) {
                        foreach( $ridianur_slides as $ridianur_slide ) { ?>
                        
                          
                          <div class="slide img-bg" data-background="<?php echo esc_attr( $ridianur_slide['slider_image'] ); ?>">
                                <div class="slider-mask"></div>
                                <div class="row">
										<div class="col-md-10 col-md-offset-1">
											<div class="caption-box clearfix">
                                    
                                                <h3>
                                                <?php $ridianur_slide_title = $ridianur_slide['title'];
                                                echo wp_kses( $ridianur_slide_title, array( 
                                                        'i' => array(
                                                                'class' => array(),
                                                            ),
                                                        'p' => array(),
                                                        'br' => array(),
                                                        'span' => array(),
                                                        'a' => array(
                                                                'href' => array(),
                                                            ),
                                                        'strong' => array(),
                                                    ) ); 
                                                ?>
                                                </h3>
                                                
                                                <div class="slider-border"></div>
                                                <p><?php echo esc_attr( $ridianur_slide['bottom_text'] );  ?></p>
                                                
                                                <?php if ( ($ridianur_slide['slider_link'] != '') && ($ridianur_slide['slider_link_text'] != '') ) { ?>
                                					<a class="spc-btn slide-btn" href="<?php echo esc_url( $ridianur_slide['slider_link']);   ?>">
														<?php echo esc_attr( $ridianur_slide['slider_link_text'] );  ?>
                                                    </a>
                               			 		<?php } ?>
                                                <div class="spacing20 clearboth"></div>
                                                
                                			</div><!--/.caption-box-->
                                    
                                		</div><!--/.col-md-10-->
                                </div><!--/.row-->
                          </div><!--/.slider-->
                        <?php }
                      } ?>
                </div><!--/.slider-->
                
            </div><!--/.slider-box-->  
			<!--SLIDER HOME END-->