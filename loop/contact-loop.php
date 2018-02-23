<?php
/*
* Contact Section
*/
?>

        <!--CONTACT START-->
		<div id="contact" class="content clearfix">
			<div class="container">
            
				<p class="opener-text">
                	<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'contact_small_title' ) ) { 
					echo esc_attr( ot_get_option( 'contact_small_title' ));} else {esc_html_e('Communication / relationship','rukhsar'); } ?>
                </p>
            	<h2 class="content-title">
                	<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'contact_big_title' ) ) { 
					echo esc_attr( ot_get_option( 'contact_big_title' ));} else {esc_html_e('Chapter #4: Contact','rukhsar'); } ?>
                </h2>
                <p class="content-subtitle">
                	<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'contact_sub_title' ) ) { 
					echo esc_attr( ot_get_option( 'contact_sub_title' ));}  ?>
                </p>
                <div class="content-border"></div>
                <div class="spacing30 clearboth"></div>
                <div class="row">
                
                	
                    
                    <div class="col-md-8">
						<?php  
							$rukhsar_contacts = new WP_Query(array(
									'post_type' =>  'contact',  
									'posts_per_page'  =>'1'  
								)  
							);  
							
							if ($rukhsar_contacts->have_posts()) : while  ($rukhsar_contacts->have_posts()) : $rukhsar_contacts->the_post();
						?>
							<?php the_content(); ?>	
							<div class="spacing30"></div>
						<?php endwhile; endif; wp_reset_postdata();?>
                    </div>
                    
                    <div class="col-md-4 contact-box">
                    
                    	<?php if ( ot_get_option( 'map_address' ) != '' ) { ?>
                        <div class="box-relative clearfix">
                            <p class="sub-title"> 
                            <?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'tx_address' ) ) { echo esc_attr( ot_get_option( 'tx_address' ));} else { _e('Address', 'rukhsar'); }?>
                            </p>
                            <div class="spacing10"></div>
                            <p>
                            <?php $rukhsar_address = ot_get_option( 'map_address' );
                            if  ( function_exists( 'ot_get_option' ) && ot_get_option( 'map_address' )) { 
                            echo wp_kses( $rukhsar_address, array(
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
                                ) ); }
                            ?>
                            </p>
                            <div class="spacing30"></div>
						</div><!--/.box-relative-->
						<?php  } ?>
                        
                        <?php if ( ot_get_option( 'map_phone' ) != '' ) { ?>
						<div class="box-relative clearfix">
                            <p class="sub-title"> 
							<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'tx_phone' ) ) { echo esc_attr( ot_get_option( 'tx_phone' ));} else { _e('Phone', 'rukhsar'); }?>
                            </p>
                            <div class="spacing10"></div>
                            <p>
                            <?php $rukhsar_phone = ot_get_option( 'map_phone' );
                            if  ( function_exists( 'ot_get_option' ) && ot_get_option( 'map_phone' )) { 
                            echo wp_kses( $rukhsar_phone, array(
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
                                ) ); }
                            ?>
                            </p>
                            <div class="spacing30"></div>
						</div><!--/.box-relative-->
						<?php  } ?>
                        
                       	<?php if ( ot_get_option( 'map_email' ) != '' ) { ?>
						<div class="box-relative clearfix">
                            <p class="sub-title">
							<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'tx_email' ) ) { echo esc_attr( ot_get_option( 'tx_email' ));} else { _e('Email', 'rukhsar'); }?>
                            </p>
                                <div class="spacing10"></div>
                            <p><a href="mailto:<?php echo esc_attr (ot_get_option( 'map_email' )); ?>"><?php echo esc_attr ( ot_get_option( 'map_email' )); ?></a></p>
							<div class="spacing30"></div>
                        </div><!--/.box-relative-->
						<?php  } ?>
                       
                        
                        
                    </div>
                    
                </div><!--/.row-->
            </div><!--/container-->
        </div><!--/contact-->
        <!--CONTACT END-->