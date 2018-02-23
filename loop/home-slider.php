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
                      $rukhsar_slides = ot_get_option( 'slider_list', array() );
                      
                      if ( ! empty( $rukhsar_slides ) ) {
                        foreach( $rukhsar_slides as $rukhsar_slide ) { ?>
                        
                          
                          <div class="slide img-bg" style="background-image: <?php echo esc_attr( $rukhsar_slide['slider_image'] ); ?>">
                                <div class="slider-mask"></div>
                                <div class="row">
										<div class="col-md-10 col-md-offset-1">
											<div class="caption-box clearfix">
                                    
                                                <h3>
                                                <?php $rukhsar_slide_title = $rukhsar_slide['title'];
                                                echo wp_kses( $rukhsar_slide_title, array(
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
                                                <p><?php echo esc_attr( $rukhsar_slide['bottom_text'] );  ?></p>
                                                
                                                <?php if ( ($rukhsar_slide['slider_link'] != '') && ($rukhsar_slide['slider_link_text'] != '') ) { ?>
                                					<a class="spc-btn slide-btn" href="<?php echo esc_url( $rukhsar_slide['slider_link']);   ?>">
														<?php echo esc_attr( $rukhsar_slide['slider_link_text'] );  ?>
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