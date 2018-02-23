<?php
/*
* Template Name: Homepage Custom Layout
* Description: Homepage style with custom layout
*/

	get_header(); ?>

		<!--HOME START-->
		<div id="home" class="clearfix">
        
			<!--HEADER START-->
			<?php get_template_part( 'loop/homepage', 'menu' ); ?>
			<!--HEADER END-->
		
		
			<!--SLIDER START-->
			<?php get_template_part( 'loop/home', 'slider' ); ?>
    		<!--SLIDER END-->
                
		</div><!--/home end-->
		<!--HOME END-->
        
    <?php //BUILDER START
	if ( function_exists( 'ot_get_option' ) ) {
      
      /* get the slider array */
      $rukhsar_sections = ot_get_option( 'custom_layout', array() );
      
      if ( ! empty( $rukhsar_sections ) ) {
        foreach( $rukhsar_sections as $rukhsar_section ) {
            if ( $rukhsar_section['section_type'] == 'about_content' ) {
               get_template_part( 'loop/about', 'loop' ); 
            } else
			if ( $rukhsar_section['section_type'] == 'services_content' ) {
               get_template_part( 'loop/services', 'loop' ); 
            } else
			if ( $rukhsar_section['section_type'] == 'portfolio_content' ) {
               get_template_part( 'loop/works', 'loop' ); 
            } else
			if ( $rukhsar_section['section_type'] == 'para1_content' ) {
               get_template_part( 'loop/parallax', 'one' ); 
            } else
			if ( $rukhsar_section['section_type'] == 'para2_content' ) {
               get_template_part( 'loop/parallax', 'two' ); 
            } else
			if ( $rukhsar_section['section_type'] == 'para3_content' ) {
               get_template_part( 'loop/parallax', 'three' ); 
            } else

			if ( $rukhsar_section['section_type'] == 'contact_content' ) {
               get_template_part( 'loop/contact', 'loop' ); 
            } else
			if ( $rukhsar_section['section_type'] == 'custom_content' ) {
               		$rukhsar_customsec = new WP_Query(array(  
							'post_type' =>  'custom-section',  
							'posts_per_page'  =>'1' ,
							'p' => $rukhsar_section['custom_section']
						)  
					);  
					
					if ($rukhsar_customsec->have_posts()) : while  ($rukhsar_customsec->have_posts()) : $rukhsar_customsec->the_post(); 
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
					endwhile; endif; wp_reset_postdata(); 	
			} 
        }
      }
      
    }
    //BUILDER END
  
  	get_footer(); ?> 