
<?php get_header(); ?>
		<!--HEADER START-->
        <?php get_template_part( 'loop/other', 'menu' ); ?>
        <!--HEADER END-->

    <div class="content blog-wrapper">  
        <div class="container clearfix">
             <div class="row clearfix">
             		<?php while (have_posts()) : the_post(); ?>
             	    <div class="col-md-4 col-md-offset-4">
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
					<?php endwhile; ?>
             </div><!--/.row-->
        </div><!--/.container-->
	</div><!--/.blog-wrapper-->

    <?php  get_footer(); ?> 
