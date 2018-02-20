<?php

add_action('admin_init', 'about_meta');

function about_meta() {

    /**
     * Create a custom meta boxes array that we pass to
     * the OptionTree Meta Box API Class.
     */
    $about_mb = array(
        'id'          => 'about_meta_box',
        'title'       => __( 'Post Setting', 'rukhsar' ),
        'desc'        => '',
        'pages'       => array( 'about' ),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
            array(
                'label'       => __( 'About Detail Setting', 'rukhsar' ),
                'id'          => 'abt_detail_tab',
                'type'        => 'tab',
            ),
            array(
                'label'       => __( 'Subtitle', 'rukhsar' ),
                'id'          => 'about_small_title',
                'type'        => 'text',
                'desc'        => __( 'Input your subtitle/small title here.', 'rukhsar' )
            ),
            array(
                'label'       => __( 'About Bold Text', 'rukhsar' ),
                'id'          => 'about_bold',
                'type'        => 'textarea-simple',
                'desc'        => __( 'Input your bold text here. Leave it blank if you don\'t need it.', 'rukhsar' )
            ),
            array(
                'label'       => __( 'About Icon', 'rukhsar' ),
                'id'          => 'about_icon',
                'type'        => 'text',
                'desc'        => __( 'Input your about icon here.<br/> You can check <a href="http://fontawesome.io/icons/" target="_blank">Here</a> for icon list. eg. fa-github', 'rukhsar' )
            ),
            array(
                'label'       => __( 'About Format Setting', 'rukhsar' ),
                'id'          => 'about_format',
                'type'        => 'tab',
            ),
            array(
                'label'       => __( 'Choose About Format Here', 'rukhsar' ),
                'desc'        => __( 'This will appear on the left side of the about us content.', 'rukhsar' ),
                'id'          => 'abt_format',
                'type'        => 'select',
                'std'		 => 'abt_standard',
                'choices'     => array(
                    array(
                        'value'       => 'abt_standard',
                        'label'       => __( 'About Standard', 'rukhsar' )
                    ),
                    array(
                        'value'       => 'abt_slider',
                        'label'       => __( 'About Slider', 'rukhsar' )
                    ),
                    array(
                        'value'       => 'abt_video',
                        'label'       => __( 'About Video', 'rukhsar' )
                    ),
                    array(
                        'value'       => 'abt_audio',
                        'label'       => __( 'About Audio', 'rukhsar' )
                    ),
                )
            ),

            array(
                'label'       => __( 'Big Image Setting', 'rukhsar' ),
                'id'          => 'abt_image_setting',
                'type'        => 'upload',
                'desc'        => __( 'Upload your image here. Leave it blank if you want to used featured image.', 'rukhsar' ),
                'condition'   => 'abt_format:is(abt_standard)'
            ),
            array(
                'label'       => __( 'Gallery Setting', 'rukhsar' ),
                'id'          => 'abt_gallery_setting',
                'type'        => 'gallery',
                'desc'        => __( 'Create your about gallery here. <br/>Try to use same ratio for each image.', 'rukhsar' ),
                'condition'   => 'abt_format:is(abt_gallery)'
            ),
            array(
                'label'       => __( 'Slider Setting', 'rukhsar' ),
                'id'          => 'abt_slider_setting',
                'type'        => 'gallery',
                'desc'        => __( 'Create your about Slider here.', 'rukhsar' ),
                'condition'   => 'abt_format:is(abt_slider)'
            ),
            array(
                'label'       => __( 'Video Setting', 'rukhsar' ),
                'id'          => 'abt_video_setting',
                'type'        => 'text',
                'desc'        => __( 'Insert the link for video embed here.<br/> For video from youtube/vimeo just put the link without any attribute like ?wmode=opaque.<br/>eg: http://www.youtube.com/embed/nAuo7KEQHT4 or http://player.vimeo.com/video/64078587', 'rukhsar' ),
                'condition'   => 'abt_format:is(abt_video)'
            ),
            array(
                'label'       => __( 'Audio Setting', 'rukhsar' ),
                'id'          => 'abt_audio_setting',
                'type'        => 'textarea',
                'rows'        => '3',
                'desc'        => __( 'Insert your iframe/embedded code for audio here.<br/>
		You can input iframe/embed code from youtube/vimeo here too, if you don\'t like the default style of about video.', 'rukhsar' ),
                'condition'   => 'abt_format:is(abt_audio)'
            ),



            array(
                'label'       => __( 'About Button Link', 'rukhsar' ),
                'id'          => 'abt_item_btn_link',
                'type'        => 'text',
                'desc'        => __( 'Insert your button link here. Leave it blank if you dont want it.', 'rukhsar' ),
            ),
            array(
                'label'       => __( 'About Button Text', 'rukhsar' ),
                'id'          => 'abt_item_btn_text',
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
        ot_register_meta_box( $about_mb );

}