<?php

add_action('after_setup_theme', 'rukhsar_theme_setup');

function rukhsar_theme_setup() {

    // Add Thumbnail Support
    add_theme_support('post-thumbnails');
    // Add Custom Background Support
    add_theme_support('custom-background');
    // Add Title Support
    add_theme_support('title-tag');
    // Add Automatic Feed Support
    add_theme_support( 'automatic-feed-links' );

    // Add menu for homepage and blog
    add_action('init', 'rukhsar_register_menu');
    add_action('init', 'rukhsar_register_menu_blog');

    //width content
    if ( ! isset( $content_width ) )$content_width = 1170;

    // Theme default scripts and styles
    add_action('wp_enqueue_scripts', 'rukhsar_theme_scripts');
    add_action('wp_enqueue_scripts', 'rukhsar_theme_styles');

}

function rukhsar_register_menu() {
    register_nav_menu('rukhsar-homepage-menu', esc_html__('Menu in Homepage Template', 'rukhsar'));
}

function rukhsar_register_menu_blog() {
    register_nav_menu('rukhsar-blog-menu', esc_html__('Menu in Blog and Other Templates', 'rukhsar'));
}

// Include Theme Scripts

include ( get_template_directory().'/inc/theme-styles.php');
include ( get_template_directory().'/inc/theme-scripts.php');

include ( get_template_directory().'/inc/plugin-install.php');