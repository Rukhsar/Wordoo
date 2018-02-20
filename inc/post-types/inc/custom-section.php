<?php

function rukhsar_custom_section_post_type() {

    register_post_type( 'custom-section',
        array(
            'labels' => array(
                'name' => __( 'Custom Section', 'rukhsar' ),
                'singular_name' => __( 'Custom Section' , 'rukhsar'),
                'add_new' => __( 'Add New Custom Section', 'rukhsar' ),
                'add_new_item' => __( 'Add New Custom Section', 'rukhsar' ),
                'edit_item' => __( 'Edit Custom Section', 'rukhsar' ),
                'new_item' => __( 'Add New Custom Section', 'rukhsar' ),
                'view_item' => __( 'View Custom Section', 'rukhsar' ),
                'search_items' => __( 'Search Custom Section', 'rukhsar' ),
                'not_found' => __( 'No Custom Section found', 'rukhsar' ),
                'not_found_in_trash' => __( 'No Custom Section found in trash', 'rukhsar' )
            ),
            'public' => true,
            'supports' => array( 'title', 'editor', 'thumbnail','excerpt'),
            'capability_type' => 'post',
            'rewrite' => array("slug" => "custom-section"), // Permalinks format
            'menu_position' => 5,
            'exclude_from_search' => true
        )
    );
}

add_action('init', 'rukhsar_custom_section_post_type');