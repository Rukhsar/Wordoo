<?php

function rukhsar_services_post_type() {

    register_post_type( 'services',
        array(
            'labels' => array(
                'name' => __( 'Services', 'rukhsar' ),
                'singular_name' => __( 'Service' , 'rukhsar'),
                'add_new' => __( 'Add New Service', 'rukhsar' ),
                'add_new_item' => __( 'Add New Service', 'rukhsar' ),
                'edit_item' => __( 'Edit Service', 'rukhsar' ),
                'new_item' => __( 'Add New Service', 'rukhsar' ),
                'view_item' => __( 'View Service', 'rukhsar' ),
                'search_items' => __( 'Search Service', 'rukhsar' ),
                'not_found' => __( 'No Services Post found', 'rukhsar' ),
                'not_found_in_trash' => __( 'No Service found in trash', 'rukhsar' )
            ),
            'public' => true,
            'supports' => array( 'title', 'editor', 'thumbnail','excerpt'),
            'capability_type' => 'post',
            'rewrite' => array("slug" => "services"), // Permalinks format
            'menu_position' => 5,
            'menu_icon'           => 'dashicons-lightbulb',
            'exclude_from_search' => true
        )
    );
}

add_action( 'init', 'rukhsar_services_post_type' );