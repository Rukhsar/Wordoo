<?php

function rukhsar_contact_post_type() {

    register_post_type( 'contact',
        array(
            'labels' => array(
                'name' => __( 'Contacts', 'rukhsar' ),
                'singular_name' => __( 'Contact' , 'rukhsar'),
                'add_new' => __( 'Add New Contact', 'rukhsar' ),
                'add_new_item' => __( 'Add New Contact', 'rukhsar' ),
                'edit_item' => __( 'Edit Contact', 'rukhsar' ),
                'new_item' => __( 'Add New Contact', 'rukhsar' ),
                'view_item' => __( 'View Contact', 'rukhsar' ),
                'search_items' => __( 'Search Contacts', 'rukhsar' ),
                'not_found' => __( 'No Contact found', 'rukhsar' ),
                'not_found_in_trash' => __( 'No Contact found in trash', 'rukhsar' )
            ),
            'public' => true,
            'supports' => array( 'title', 'editor', 'thumbnail','excerpt'),
            'capability_type' => 'post',
            'rewrite' => array("slug" => "contact"), // Permalinks format
            'menu_position' => 5,
            'menu_icon'           => 'dashicons-testimonial',
            'exclude_from_search' => true
        )
    );
}

add_action('init', 'rukhsar_contact_post_type');