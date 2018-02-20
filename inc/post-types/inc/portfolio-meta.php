<?php

add_action('admin_init', 'portfolio_meta');

function portfolio_meta() {

    $portfolio_mb = array(
        'id'          => 'portfolio_meta_box',
        'title'       => __( 'Portfolio Setting', 'rukhsar' ),
        'desc'        => '',
        'pages'       => array( 'portfolio' ),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(

            array(
                'label'       => __( 'Portfolio Format Setting', 'rukhsar' ),
                'id'          => 'portfolio_format',
                'type'        => 'tab',
            ),
            array(
                'label'       => __( 'Choose Portfolio Format Here', 'rukhsar' ),
                'id'          => 'port_format',
                'type'        => 'select',
                'std'		 => 'port_standard',
                'choices'     => array(
                    array(
                        'value'       => 'port_standard',
                        'label'       => __( 'Portfolio Standard', 'rukhsar' )
                    ),
                    array(
                        'value'       => 'port_gallery',
                        'label'       => __( 'Portfolio Gallery', 'rukhsar' )
                    ),
                    array(
                        'value'       => 'port_slider',
                        'label'       => __( 'Portfolio Slider', 'rukhsar' )
                    ),
                    array(
                        'value'       => 'port_video',
                        'label'       => __( 'Portfolio Video', 'rukhsar' )
                    ),
                    array(
                        'value'       => 'port_audio',
                        'label'       => __( 'Portfolio Audio', 'rukhsar' )
                    ),
                )
            ),

            array(
                'label'       => __( 'Big Image Setting', 'rukhsar' ),
                'id'          => 'port_image_setting',
                'type'        => 'upload',
                'desc'        => __( 'Upload your image here. Leave it blank if you want to used featured image.', 'rukhsar' ),
                'condition'   => 'port_format:is(port_standard)'
            ),
            array(
                'label'       => __( 'Gallery Setting', 'rukhsar' ),
                'id'          => 'port_gallery_setting',
                'type'        => 'gallery',
                'desc'        => __( 'Create your portfolio gallery here. <br/>Try to use same ratio for each image.', 'rukhsar' ),
                'condition'   => 'port_format:is(port_gallery)'
            ),
            array(
                'label'       => __( 'Slider Setting', 'rukhsar' ),
                'id'          => 'port_slider_setting',
                'type'        => 'gallery',
                'desc'        => __( 'Create your portfolio Slider here.', 'rukhsar' ),
                'condition'   => 'port_format:is(port_slider)'
            ),
            array(
                'label'       => __( 'Video Setting', 'rukhsar' ),
                'id'          => 'port_video_setting',
                'type'        => 'text',
                'desc'        => __( 'Insert the link for video embed here.<br/> For video from youtube/vimeo just put the link without any attribute like ?wmode=opaque.<br/>eg: http://www.youtube.com/embed/nAuo7KEQHT4 or http://player.vimeo.com/video/64078587', 'rukhsar' ),
                'condition'   => 'port_format:is(port_video)'
            ),
            array(
                'label'       => __( 'Audio Setting', 'rukhsar' ),
                'id'          => 'port_audio_setting',
                'type'        => 'textarea',
                'rows'        => '3',
                'desc'        => __( 'Insert your iframe/embedded code for audio here.<br/>
		You can input iframe/embed code from youtube/vimeo here too, if you don\'t like the default style of portfolio video.', 'rukhsar' ),
                'condition'   => 'port_format:is(port_audio)'
            ),
            array(
                'label'       => __( 'Portfolio Icon', 'rukhsar' ),
                'id'          => 'port_icon',
                'type'        => 'text',
                'desc'        => __( 'Input portfolio icon here.  You can check <a href="http://fontawesome.io/icons/" target="_blank">Here</a> for icon list. <br/>eg. fa-paw', 'rukhsar' )
            ),
            array(
                'label'       => __( 'Portfolio Detail Setting', 'rukhsar' ),
                'id'          => 'port_detail_tab',
                'type'        => 'tab',
            ),

            array(
                'label'       => __( 'Portfolio Button Link', 'rukhsar' ),
                'id'          => 'port_item_btn_link',
                'type'        => 'text',
                'desc'        => __( 'Insert your button link here. Leave it blank if you dont want it.', 'rukhsar' ),
            ),
            array(
                'label'       => __( 'Portfolio Button Text', 'rukhsar' ),
                'id'          => 'port_item_btn_text',
                'type'        => 'text',
                'desc'        => __( 'Insert your button text here. Leave it blank if you dont want it.', 'rukhsar' ),
            ),
        )
    );

    /**
     * Register our meta boxes using the
     * ot_register_meta_box() function.
     */
    if ( function_exists( 'ot_register_meta_box' ) )
        ot_register_meta_box( $portfolio_mb );

}