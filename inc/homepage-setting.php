<?php 
function rukhsar_homepage_script() {
	if ( is_page_template( 'homepage-slider.php' ) 
	|| is_page_template( 'homepage-custom-layout.php' ) && function_exists( 'ot_get_option' ) && ot_get_option( 'home_setting') == 'slider_bg_home' ){
		wp_enqueue_script( 'rukhsar_imagebg', get_template_directory_uri() . '/assets/js/imagebg.js',array(),'', 'in_footer');
	} 
}

