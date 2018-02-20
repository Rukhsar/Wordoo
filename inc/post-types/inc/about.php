<?php

function rukhsar_about_post_type() {
    register_post_type('about',
        array(
            'labels' => array(
                'name' => __( 'About', 'rukhsar' ),
                'singular_name' => __( 'About' , 'rukhsar'),
                'add_new' => __( 'Add New About', 'rukhsar' ),
                'add_new_item' => __( 'Add New About', 'rukhsar' ),
                'edit_item' => __( 'Edit About', 'rukhsar' ),
                'new_item' => __( 'Add New About', 'rukhsar' ),
                'view_item' => __( 'View About', 'rukhsar' ),
                'search_items' => __( 'Search About', 'rukhsar' ),
                'not_found' => __( 'No about us found', 'rukhsar' ),
                'not_found_in_trash' => __( 'No about us found in trash', 'rukhsar' )
            ),
            'public' => true,
            'supports' => array( 'title', 'editor', 'thumbnail','excerpt'),
            'capability_type' => 'post',
            'rewrite' => array("slug" => "about"), // Permalinks format
            'menu_position' => 5,
            'exclude_from_search' => true
        )
    );
}

add_action('init', 'rukhsar_about_post_type');