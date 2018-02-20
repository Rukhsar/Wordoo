<?php

add_action('admin_init', 'services_meta');

function services_meta() {

    $services_mb = array(
        'id'          => 'services_meta_box',
        'title'       => __( 'Services Setting', 'rukhsar' ),
        'desc'        => '',
        'pages'       => array( 'services' ),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
            array(
                'label'       => __( 'Services Subtitle', 'rukhsar' ),
                'id'          => 'sv_subs',
                'type'        => 'text',
                'desc'        => __( 'Input your services subtitle here', 'rukhsar' )
            ),
            array(
                'label'       => __( 'Services Bold Text', 'rukhsar' ),
                'id'          => 'sv_bold',
                'type'        => 'textarea-simple',
                'desc'        => __( 'Input your bold text here. Leave it blank if you don\'t need it.', 'rukhsar' )
            ),
            array(
                'label'       => __( 'Services Icon', 'rukhsar' ),
                'id'          => 'sv_icon',
                'type'        => 'text',
                'desc'        => __( 'Input services icon here.  You can check <a href="http://fontawesome.io/icons/" target="_blank">Here</a> for icon list. <br/>eg. fa-paw', 'rukhsar' )
            ),
            array(
                'label'       => __( 'Services Button Link', 'rukhsar' ),
                'id'          => 'sv_item_btn_link',
                'type'        => 'text',
                'desc'        => __( 'Insert your button link here. Leave it blank if you dont want it.', 'rukhsar' ),
            ),
            array(
                'label'       => __( 'Services Button Text', 'rukhsar' ),
                'id'          => 'sv_item_btn_text',
                'type'        => 'text',
                'desc'        => __( 'Insert your button text here. Leave it blank if you dont want it.', 'rukhsar' ),
            ),
        )
    );

    if ( function_exists( 'ot_register_meta_box' ) )
        ot_register_meta_box( $services_mb );
}