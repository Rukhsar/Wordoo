<?php

add_action('admin_init', 'rukhsar_post_meta');

function rukhsar_post_meta() {

    $postMeta = array(
        'id'          => 'post_meta_box',
        'title'       => esc_html__( 'Post Setting', 'rukhsar' ),
        'desc'        => '',
        'pages'       => array( 'post' ),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
            array(
                'label'       => esc_html__( 'Choose Post Format Here', 'rukhsar' ),
                'id'          => 'post_format',
                'type'        => 'select',
                'std'		 => 'post_standard',
                'choices'     => array(
                    array(
                        'value'       => 'post_standard',
                        'label'       => esc_html__( 'Post Standard', 'rukhsar' )
                    ),
                    array(
                        'value'       => 'post_gallery',
                        'label'       => esc_html__( 'Post Gallery', 'rukhsar' )
                    ),
                    array(
                        'value'       => 'post_slider',
                        'label'       => esc_html__( 'Post Slider', 'rukhsar' )
                    ),
                    array(
                        'value'       => 'post_video',
                        'label'       => esc_html__( 'Post Video', 'rukhsar' )
                    ),
                    array(
                        'value'       => 'post_audio',
                        'label'       => esc_html__( 'Post Audio', 'rukhsar' )
                    ),
                )
            ),
            array(
                'label'       => esc_html__( 'Big Image Setting', 'rukhsar' ),
                'id'          => 'post_image_setting',
                'type'        => 'upload',
                'desc'        => esc_html__( 'Upload your image here. Leave it blank if you want to used featured image.', 'rukhsar' ),
                'condition'   => 'post_format:is(post_standard)'
            ),
            array(
                'label'       => esc_html__( 'Gallery Setting', 'rukhsar' ),
                'id'          => 'post_gallery_setting',
                'type'        => 'gallery',
                'desc'        => esc_html__( 'Create your Post gallery here. <br/>Try to use same ratio for each image.', 'rukhsar' ),
                'condition'   => 'post_format:is(post_gallery)'
            ),
            array(
                'label'       => esc_html__( 'Slider Setting', 'rukhsar' ),
                'id'          => 'post_slider_setting',
                'type'        => 'gallery',
                'desc'        => esc_html__( 'Create your Post Slider here.', 'rukhsar' ),
                'condition'   => 'post_format:is(post_slider)'
            ),
            array(
                'label'       => esc_html__( 'Video Setting', 'rukhsar' ),
                'id'          => 'post_video_setting',
                'type'        => 'text',
                'desc'        => esc_html__( 'Insert the link for video embed here.<br/> For video from youtube/vimeo just put the link without any attribute like ?wmode=opaque.<br/>eg: http://www.youtube.com/embed/nAuo7KEQHT4 or http://player.vimeo.com/video/64078587', 'rukhsar' ),
                'condition'   => 'post_format:is(post_video)'
            ),
            array(
                'label'       => esc_html__( 'Audio Setting', 'rukhsar' ),
                'id'          => 'post_audio_setting',
                'type'        => 'textarea',
                'rows'        => '3',
                'desc'        => esc_html__( 'Insert your iframe/embedded code for audio here.<br/>
		You can input iframe/embed code from youtube/vimeo here too, if you don\'t like the default style of Post video.', 'rukhsar' ),
                'condition'   => 'post_format:is(post_audio)'
            )
        )
    );

    /**
     * Register our meta boxes using the
     * ot_register_meta_box() function.
     */
    if ( function_exists( 'ot_register_meta_box' ) )
        ot_register_meta_box( $postMeta );
}