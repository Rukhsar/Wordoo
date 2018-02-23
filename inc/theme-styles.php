<?php

function rukhsar_theme_styles() {

    wp_register_style
    ('bootstrap',
        get_template_directory_uri() . '/assets/css/bootstrap.min.css',
        array(),
        '1',
        'all' );
    wp_register_style
    ('font_awesome',
        get_template_directory_uri() . '/assets/css/font-awesome.min.css',
        array(),
        '1',
        'all' );

    wp_register_style
    ('rukhsar-theme-style',
        get_stylesheet_directory_uri() . '/style.css',
        array(),
        '1',
        'all' );

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('font_awesome');
    wp_enqueue_style( 'rukhsar-theme-style' );
}

function rukhsar_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'rukhsar' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Open Sans:400,700,600,800&subset=latin,cyrillic-ext,greek-ext,greek,cyrillic,latin-ext,vietnamese|Rubik:400,500,700&subset=cyrillic,hebrew,latin-ext|Playfair Display:400,400i,700,700i,900,900i&subset=cyrillic,latin-ext|Cormorant Garamond:400,400i,500,500i,600,600i,700,700i&subset=cyrillic,latin-ext,vietnamese' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}
/*
Enqueue scripts and styles.
*/
function rukhsar_fonts_style() {
    wp_enqueue_style( 'rukhsar-fonts', rukhsar_fonts_url(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'rukhsar_fonts_style' );
