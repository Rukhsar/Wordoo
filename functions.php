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
    add_action('wp_enqueue_scripts','rukhsar_homepage_script' );
    // Register sidebar
    add_action( 'widgets_init', 'rukhsar_sidebar' );

    //custom comment styles
    add_filter('comment_form_default_fields','rukhsar_modify_comment_form_fields');
    add_action( 'wp_enqueue_scripts', 'rukhsar_color_scheme' );

}

//custom comment form
function rukhsar_modify_comment_form_fields($fields){
    $req = get_option('require_name_email');
    $commenter = wp_get_current_commenter();
    $aria_req = ( $req ? " aria-required='true'" : '' );

    $fields['author'] = '<p class="comment-form-author">' . '<label for="author">' . esc_html__( 'Name', 'rukhsar' ) . '</label> ' .

        ( $req ? '' : '' ) .

        '<input id="author" name="author" type="text" placeholder="'. esc_html__('Your Name ...','rukhsar').'" value="' .

        esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>';

    $fields['email'] = '<p class="comment-form-email"><label for="email">' . esc_html__( 'Email', 'rukhsar' ) . '</label> ' .

        ( $req ? '' : '' ) .

        '<input id="email" name="email" type="text" placeholder="'. esc_html__('Your Email ...','rukhsar') .'"  value="' .

        esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>';

    $fields['url'] = '<p class="comment-form-url"><label for="url">' . esc_html__( 'Website', 'rukhsar' ) . '</label>' .

        '<input id="url" name="url" type="text" placeholder="'. esc_html__('Your Website ...','rukhsar').'" value="' .

        esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>';

    return $fields;
}

function rukhsar_register_menu() {
    register_nav_menu('rukhsar-homepage-menu', esc_html__('Menu in Homepage Template', 'rukhsar'));
}

function rukhsar_register_menu_blog() {
    register_nav_menu('rukhsar-blog-menu', esc_html__('Menu in Blog and Other Templates', 'rukhsar'));
}

function rukhsar_sidebar() {

    register_sidebar(array(
        'name' => esc_html__('Default Sidebar', 'rukhsar' ),
        'id' => 'default-sidebar',
        'description' => esc_html__('Appears as the sidebar on blog and pages', 'rukhsar' ),
        'before_widget' => '<div  id="%1$s" class="widget %2$s clearfix">','after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',));
}

// Include Theme Scripts

include ( get_template_directory().'/inc/theme-styles.php');
include ( get_template_directory().'/inc/theme-scripts.php');

include ( get_template_directory().'/inc/plugin-install.php');
include ( get_template_directory().'/inc/post-types/post-types.php');
include ( get_template_directory().'/inc/post-meta.php');
include( get_template_directory().'/inc/color-schemes.php');
include( get_template_directory().'/inc/pagination.php');
include( get_template_directory().'/inc/homepage-setting.php');
include( get_template_directory().'/inc/comment-template.php');

// Adding OptionTree into themes
/**
 * Optional: set 'ot_show_pages' filter to false.
 * This will hide the settings & documentation pages.
 */
    add_filter( 'ot_show_pages', '__return_false' );
/**
 * Optional: set 'ot_show_new_layout' filter to false.
 * This will hide the "New Layout" section on the Theme Options page.
 */
    add_filter( 'ot_show_new_layout', '__return_false' );
/**
 * Required: set 'ot_theme_mode' filter to true.
 */
    add_filter( 'ot_theme_mode', '__return_true' );
/**
 * Required: include OptionTree.
 */
    load_template( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
/**
 * Theme Options
 */
    load_template( trailingslashit( get_template_directory() ) . 'inc/theme-options.php' );
