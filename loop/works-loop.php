<?php
/*
* Works Section
*/
?>

        <!--WORKS START-->
        <div id="works" class="content clearfix">
        	<div class="container">
            
            	<p class="opener-text">
                	<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'works_small_title' ) ) { 
					echo esc_attr( ot_get_option( 'works_small_title' ));} else {esc_html_e('Portfolio / Project','rukhsar'); } ?>
                </p>
                
            	<h2 class="content-title">
                	<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'works_big_title' ) ) { 
					echo esc_attr( ot_get_option( 'works_big_title' ));} else {esc_html_e('Chapter #1: Works','rukhsar'); } ?>
                </h2>
                
                <p class="content-subtitle">
                	<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'works_opening_text' ) ) { 
					echo esc_attr( ot_get_option( 'works_opening_text' ));}  ?>
                </p>
                
                <div class="content-border"></div>
                <div class="spacing30 clearboth"></div>
                <ul class="port-filter">
                	<li>
                        <a class="active" href="#" data-filter="*">
                        	<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'works_all' ) ) { 
							echo esc_attr( ot_get_option( 'works_all' ));} else {esc_html_e('All','rukhsar'); } ?>
                        </a>
                    </li>
							<?php
							$rukhsar_taxonomy = 'portfolio_category';
							$rukhsar_terms = get_terms($rukhsar_taxonomy); // Get all terms of a taxonomy
							if ( $rukhsar_terms && !is_wp_error( $rukhsar_terms ) ) :
								foreach ( $rukhsar_terms as $rukhsar_term ) { ?>
										<li><a data-filter=".<?php echo  strtolower(preg_replace('/[^a-zA-Z]+/', '-', $rukhsar_term->name)); ?>" href="#">
										<?php echo esc_attr( $rukhsar_term->name); ?></a></li>
									<?php } 
							endif;?>
                </ul>
                <div class="spacing40"></div>
                
                <div class="row">
                	<div class="portfolio-body clearfix">
                    
                    		<?php  
									$rukhsar_ports = new WP_Query(array(
											'post_type' =>  'portfolio',  
											'posts_per_page'  =>'-1'  
										)  
									);  
									
									if ($rukhsar_ports->have_posts()) : while  ($rukhsar_ports->have_posts()) : $rukhsar_ports->the_post();
							?>
							<?php $rukhsar_terms = get_the_terms( get_the_ID(), 'portfolio_category' ); ?>
							<div class="col-md-4 col-sm-6 port-item <?php foreach ($rukhsar_terms as $rukhsar_term) { echo  strtolower(preg_replace('/[^a-zA-Z]+/', '-', $rukhsar_term->name)). ' '; } ?>
							<?php $rukhsar_allClasses = get_post_class(); foreach ($rukhsar_allClasses as $rukhsar_class) { echo esc_attr( $rukhsar_class . " "); } ?>" id="post-<?php the_ID(); ?>">
								<a class="port-ajax" href="#" data-link="<?php the_permalink(); ?>">
                                
                                	<div class="port-hov">
                                        <i class="fa fa-chain"></i>	
                                    </div><!--/.port-hov-->
                                    <?php the_post_thumbnail(); ?>
								</a>
                                
                                <div class="port-content">
                                    <i class="fa <?php echo esc_attr( get_post_meta($post->ID, 'port_icon', true)); ?>"></i>
                                    <h3><?php the_title(); ?></h3>
                                    <?php $rukhsar_taxonomy = 'portfolio_category'; $rukhsar_taxs = wp_get_post_terms($post->ID,$rukhsar_taxonomy);  ?>
									<p class="port-cat"><?php $rukhsar_cats = array();  foreach ( $rukhsar_taxs as $rukhsar_tax ) { $rukhsar_cats[] =   $rukhsar_tax->name ;   }
									echo implode(', ', $rukhsar_cats);?></p>
                                </div><!--/.port-content-->
                                <div class="spacing30"></div>
							</div>
							
							<?php endwhile; endif; wp_reset_postdata(); ?>

                        
                	</div><!--/.portfolio-body-->
                </div><!--/.row-->
                
            </div><!--/.container-->
            
            <div id="worksajax" class="worksajax clearfix"></div><!--portfolio detail here-->
        </div><!--about-->
        <!--WORKS END-->