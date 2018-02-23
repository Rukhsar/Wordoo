<?php

function rukhsar_theme_scripts() {

    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.js',array('jquery'), false, '2.7.0', false);
    wp_enqueue_script( 'jquery');

    wp_register_script( 'boostrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',array(),'', 'in_footer');
    wp_enqueue_script('boostrap');
    wp_enqueue_script( 'jquery-effects-core');
    wp_enqueue_script( 'jquery-isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.js',array(),'', 'in_footer');
    wp_enqueue_script( 'jquery-superfish', get_template_directory_uri() . '/assets/js/superfish.js',array(),'', 'in_footer');
    wp_enqueue_script( 'jquery-fitvids', get_template_directory_uri() . '/assets/js/jquery.fitvids.js',array(),'', 'in_footer');
    wp_enqueue_script( 'jquery-magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js',array(),'', 'in_footer');
    wp_enqueue_script( 'jquery-nav', get_template_directory_uri() . '/assets/js/jquery.nav.js',array(),'', 'in_footer');
    wp_enqueue_script( 'jquery-scrollto', get_template_directory_uri() . '/assets/js/jquery.scrollTo.js',array(),'', 'in_footer');
    wp_enqueue_script( 'jquery-sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js',array(),'', 'in_footer');
//    wp_enqueue_script( 'imagesloaded');
    wp_enqueue_script( 'jquery-owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js',array(),'', 'in_footer');
    wp_enqueue_script( 'jquery-ticker', get_template_directory_uri() . '/assets/js/ticker.js',array(),'', 'in_footer');
    wp_enqueue_script( 'rukhsar_customscript', get_template_directory_uri() . '/assets/js/script.js',array(),'', 'in_footer');
    // Load the html5 shiv.
    wp_enqueue_script( 'rukhsar-html5','https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js', array(), '3.7.3' );
    wp_script_add_data( 'rukhsar-html5', 'conditional', 'lt IE 9' );

}