<?php

add_action('admin_init', 'custom_section_meta');

function custom_section_meta() {

    $csection_mb = array(
        'id'          => 'custom_section_meta_box',
        'title'       => __( 'Post Setting', 'rukhsar' ),
        'desc'        => '',
        'pages'       => array( 'custom-section' ),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(

            array(
                'label'       => __( 'Choose Custom Section Format Here', 'rukhsar' ),
                'id'          => 'cs_format',
                'type'        => 'select',
                'std'		 => 'cs_default',
                'choices'     => array(
                    array(
                        'value'       => 'cs_default',
                        'label'       => __( 'Default/White Background Section', 'rukhsar' )
                    ),
                    array(
                        'value'       => 'cs_para',
                        'label'       => __( 'Parallax Section', 'rukhsar' )
                    ),
                )
            ),
            array(
                'label'       => __( 'Parallax Detail', 'rukhsar' ),
                'id'          => 'cs_p_text',
                'type'        => 'textblock-titled',
                'desc'        => __( '<b>Title of post</b> will be parallax <b>title</b>.<br/> <b>Post content</b> will be parallax <b>text</b>.<br/><b>Featured Image</b> will be parallax <b>background image</b>.', 'rukhsar' ),
                'condition'   => 'cs_format:is(cs_para)'
            ),
            array(
                'label'       => __( 'Section Small Title', 'rukhsar' ),
                'id'          => 'cs_open_text',
                'type'        => 'text',
                'rows'		 => '3',
                'desc'        => __( 'Insert section small title text here.', 'rukhsar' ),
                'condition'   => 'cs_format:not(cs_para)'
            ),
            array(
                'label'       => __( 'Section Detail Text', 'rukhsar' ),
                'id'          => 'cs_detail_text',
                'type'        => 'textarea-simple',
                'rows'		 => '3',
                'desc'        => __( 'Insert section detail text here.', 'rukhsar' ),
                'condition'   => 'cs_format:not(cs_para)'
            ),
            array(
                'label'       => __( 'Section Icon', 'rukhsar' ),
                'id'          => 'cs_icon',
                'type'        => 'text',
                'rows'		 => '3',
                'desc'        => __( 'Insert section icon here. <br /> You can check <a target="_blank" href="http://fontawesome.io/icons/">Here</a> for icon list. eg. fa-github', 'rukhsar' ),
                'condition'   => 'cs_format:is(cs_para)'
            ),


        )
    );

    /**
     * Register our meta boxes using the
     * ot_register_meta_box() function.
     */
    if ( function_exists( 'ot_register_meta_box' ) )
        ot_register_meta_box( $csection_mb );
    
}