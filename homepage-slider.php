<?php
/*
* Template Name: Homepage Slider
* Description: Homepage style with slider background
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
		
		<!--WORKS START-->
		<?php get_template_part( 'loop/works', 'loop' ); ?>
		<!--WORKS END-->	

		<!--ABOUT START-->
		<?php get_template_part( 'loop/about', 'loop' ); ?>
		<!--ABOUT END-->

		<!--SERVICES START-->
		<?php get_template_part( 'loop/services', 'loop' ); ?>
		<!--SERVICES END-->

		<!--CONTACT START-->
		<?php get_template_part( 'loop/contact', 'loop' ); ?>
		<!--CONTACT END-->
        

    <?php  get_footer(); ?> 