
<?php get_header(); ?>
		<!--HEADER START-->
        <?php get_template_part( 'loop/other', 'menu' ); ?>
        <!--HEADER END-->


       <?php while (have_posts()) : the_post(); 

						 if (get_post_meta($post->ID, 'cs_format', true) == 'cs_default') { ?>
						<div id="<?php echo strtolower(preg_replace('/\s+/', '-',$rukhsar_section['title'])); ?>" class="custom-section content clearfix">
 							<div class="container">
                                <p class="opener-text"><?php echo esc_attr(get_post_meta($post->ID, 'cs_open_text', true)); ?></p>
                                <h2 class="content-title"><?php the_title(); ?></h2>
                                <p class="content-subtitle"><?php echo esc_attr(get_post_meta($post->ID, 'cs_detail_text', true)); ?></p>
                                <div class="content-border"></div>
                                <div class="spacing30 clearboth"></div>     
                                <?php if ( has_post_thumbnail() ) {
									the_post_thumbnail();
									echo '<div class="spacing30 clearboth"></div> ';
								}  
								the_content(); ?>                  
                        	</div><!--/container-->
						</div>

		
        	
						
						
						
						<?php } else  { ?>
						
						<div id="<?php echo strtolower(preg_replace('/\s+/', '-',$rukhsar_section['title'])); ?>" class="custom-section bg <?php echo strtolower(preg_replace('/\s+/', '-',$rukhsar_section['title'])); ?> clearfix">
							<div class="bg-mask"></div>
							<div class="para-img team-bg para-bg" data-background="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>"></div>
                            
                           	<div class="container big-text">
                                <h3 class="bg-title"><?php the_title(); ?></h3>
                                
                                <div class="clearfix clearboth"></div>
                                <div class="slider-border"></div>
                                <i class="bg-icon fa <?php echo esc_attr(get_post_meta($post->ID, 'cs_icon', true)); ?>"></i>
                                <div class="bg-text">
                                	<?php the_content(); ?>
                                </div>
                                <div class="spacing40 clearboth"></div>
                            </div><!--/.big-text-->
                
                
						</div><!--/.bg-->
						
						<?php }                  
		endwhile; ?>

    <?php  get_footer(); ?> 
