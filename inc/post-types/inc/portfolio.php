<?php

function rukhsar_portfolio_post_type() {

    register_post_type( 'portfolio',
        array(
            'labels' => array(
                'name' => __( 'Portfolio', 'rukhsar' ),
                'singular_name' => __( 'Portfolio' , 'rukhsar'),
                'add_new' => __( 'Add New Portfolio', 'rukhsar' ),
                'add_new_item' => __( 'Add New Portfolio', 'rukhsar' ),
                'edit_item' => __( 'Edit Portfolio', 'rukhsar' ),
                'new_item' => __( 'Add New Portfolio', 'rukhsar' ),
                'view_item' => __( 'View Portfolio', 'rukhsar' ),
                'search_items' => __( 'Search Portfolio', 'rukhsar' ),
                'not_found' => __( 'No Portfolio found', 'rukhsar' ),
                'not_found_in_trash' => __( 'No Portfolio found in trash', 'rukhsar' )
            ),
            'public' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'comments' , 'excerpt'),
            'capability_type' => 'post',
            'rewrite' => array("slug" => "portfolio"), // Permalinks format
            'menu_position' => 5,
            'exclude_from_search' => true
        )
    );
}

add_action('init', 'rukhsar_portfolio_post_type');

function rukhsar_portfolio_taxonomies() {

    $labels = array(
        'name'              => _x( 'Portfolio Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Portfolio Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Portfolio Categories' ),
        'all_items'         => __( 'All Portfolio Categories' ),
        'parent_item'       => __( 'Parent Portfolio Category' ),
        'parent_item_colon' => __( 'Parent Portfolio Category:' ),
        'edit_item'         => __( 'Edit Portfolio Category' ),
        'update_item'       => __( 'Update Portfolio Category' ),
        'add_new_item'      => __( 'Add New Portfolio Category' ),
        'new_item_name'     => __( 'New Portfolio Category' ),
        'menu_name'         => __( 'Portfolio Categories' ),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
    );

    register_taxonomy('portfolio_category', 'portfolio', $args);

}

add_action('init', 'rukhsar_portfolio_taxonomies');