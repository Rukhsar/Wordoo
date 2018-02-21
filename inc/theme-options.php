<?php

add_action('admin_init', 'rukhsar_custom_theme_options');

function rukhsar_custom_theme_options() {

    /* OptionTree is not loaded yet */
    if ( ! function_exists( 'ot_settings_id' ) )
        return false;

    /**
     * Get a copy of the saved settings array.
     */
    $saved_settings = get_option( ot_settings_id(), array() );

    /**
     * Custom settings array that will eventually be
     * passes to the OptionTree Settings API Class.
     */

    $custom_settings = array(
        'contextual_help' => array(
            'sidebar'       => ''
        ),
        'sections'        => array(
            array(
                'id'          => 'general',
                'title'       => esc_html__('General Setting', 'rukhsar' )
            ),
            array(
                'id'          => 'slider_sectio',
                'title'       => esc_html__('Slider Setting', 'rukhsar' )
            ),
            array(
                'id'          => 'video_bg_setting_section',
                'title'       => esc_html__('Video Background Setting', 'rukhsar' )
            ),
            array(
                'id'          => 'yt_bg_setting_section',
                'title'       => esc_html__('Youtube Background Setting', 'rukhsar' )
            ),
            array(
                'id'          => 'sections_setting',
                'title'       => esc_html__('Sections Setting', 'rukhsar' )
            ),
            array(
                'id'          => 'parallax_section_big_background_image',
                'title'       => esc_html__('Parallax Section/Big Background Image', 'rukhsar' )
            ),
            array(
                'id'          => 'footer_section',
                'title'       => esc_html__('Footer Setting', 'rukhsar' )
            ),

            array(
                'id'          => 'custom_layout_sec',
                'title'       => esc_html__('Homepage Custom Layout', 'rukhsar' )
            ),

        ),
        'settings'        => array(

            array(
                'id'          => 'style_tab',
                'label'       => esc_html__('Style Setting', 'rukhsar' ),
                'desc'        => '',
                'std'         => '',
                'type'        => 'tab',
                'section'     => 'general',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'color_general',
                'label'       => esc_html__('Color Scheme', 'rukhsar' ),
                'desc'        => esc_html__('Pick your color scheme. Default color is black #000000', 'rukhsar' ),
                'std'         => '',
                'type'        => 'colorpicker',
                'section'     => 'general',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'color_scheme',
                'label'       => esc_html__('Hyperlink Color', 'rukhsar' ),
                'desc'        => esc_html__('Pick your color for hyperlink. Default color is black #aaaaaa', 'rukhsar' ),
                'std'         => '',
                'type'        => 'colorpicker',
                'section'     => 'general',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'custom_hovers',
                'label'       => esc_html__('Hyperlink color on hover state', 'rukhsar' ),
                'desc'        => esc_html__('Pick your color for hover state in hyperlink. Default color is black/grey #000000', 'rukhsar' ),
                'std'         => '',
                'type'        => 'colorpicker',
                'section'     => 'general',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'heading_color',
                'label'       => esc_html__('Color on Heading', 'rukhsar' ),
                'desc'        => esc_html__('Pick your color for heading text. Default color is black #000000', 'rukhsar' ),
                'std'         => '',
                'type'        => 'colorpicker',
                'section'     => 'general',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'general_color',
                'label'       => esc_html__('Color on General Paragraph', 'rukhsar' ),
                'desc'        => esc_html__('Pick your color for general paragraph text. Default color is black #7d7d7d', 'rukhsar' ),
                'std'         => '',
                'type'        => 'colorpicker',
                'section'     => 'general',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),

            array(
                'id'          => 'footer_color',
                'label'       => esc_html__('Footer Background color', 'rukhsar' ),
                'desc'        => esc_html__('Pick your background color for footer. Default color is black #000000', 'rukhsar' ),
                'std'         => '',
                'type'        => 'colorpicker',
                'section'     => 'general',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'color_menu',
                'label'       => esc_html__('Menu Background color', 'rukhsar' ),
                'desc'        => esc_html__('Pick your background color for menu. Default color is black #ffffff', 'rukhsar' ),
                'std'         => '',
                'type'        => 'colorpicker',
                'section'     => 'general',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'stick_menu',
                'label'       => esc_html__('Sticky Menu Background color', 'rukhsar' ),
                'desc'        => esc_html__('Pick your background color for sticky menu. Default color is black #ffffff', 'rukhsar' ),
                'std'         => '',
                'type'        => 'colorpicker',
                'section'     => 'general',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'custom_css_box',
                'label'       => esc_html__('Custom Css Box', 'rukhsar' ),
                'desc'        => esc_html__('Insert your own css/style code here.', 'rukhsar' ),
                'std'         => '',
                'type'        => 'css',
                'section'     => 'general',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'logo_tab',
                'label'       => esc_html__('Logo', 'rukhsar' ),
                'desc'        => '',
                'std'         => '',
                'type'        => 'tab',
                'section'     => 'general',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'logo_img',
                'label'       => esc_html__('Logo Upload', 'rukhsar' ),
                'desc'        => esc_html__('Upload your logo here.<br> Recommended size 185x60px', 'rukhsar' ),
                'std'         => '',
                'type'        => 'upload',
                'section'     => 'general',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'logo_top_img',
                'label'       => esc_html__('Top Logo Upload', 'rukhsar' ),
                'desc'        => esc_html__('Upload your top logo here.<br> Recommended size 64x74px', 'rukhsar' ),
                'std'         => '',
                'type'        => 'upload',
                'section'     => 'general',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),

            array(
                'id'          => 'favicon_logo',
                'label'       => esc_html__('Favicon Logo', 'rukhsar' ),
                'desc'        => esc_html__('Upload your favicon here. Recommended size 30x30px', 'rukhsar' ),
                'std'         => '',
                'type'        => 'upload',
                'section'     => 'general',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'touch_logo',
                'label'       => esc_html__('Touch Logo', 'rukhsar' ),
                'desc'        => esc_html__('Upload your touch logo here. Recommended size 129x129px', 'rukhsar' ),
                'std'         => '',
                'type'        => 'upload',
                'section'     => 'general',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'preload_tab',
                'label'       => esc_html__('Preloader', 'rukhsar' ),
                'desc'        => '',
                'std'         => '',
                'type'        => 'tab',
                'section'     => 'general',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'preloader_set',
                'label'       => esc_html__('Preloader Setting', 'rukhsar' ),
                'desc'        => esc_html__('Choose Loader setting', 'rukhsar' ),
                'std'         => '',
                'type'        => 'select',
                'section'     => 'general',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and',
                'choices'     => array(
                    array(
                        'value'       => 'show_home',
                        'label'       => esc_html__('Show in Homepage only', 'rukhsar' ),
                        'src'         => ''
                    ),
                    array(
                        'value'       => 'show_all',
                        'label'       => esc_html__('Show in All pages', 'rukhsar' ),
                        'src'         => ''
                    ),
                    array(
                        'value'       => 'hide_in_all',
                        'label'       => esc_html__('Hide in All Pages', 'rukhsar' ),
                        'src'         => ''
                    )
                )
            ),
            array(
                'id'          => 'loader_logo',
                'label'       => esc_html__('Preloader Logo Image', 'rukhsar' ),
                'desc'        => esc_html__('Insert preloader logo image here.', 'rukhsar' ),
                'std'         => '',
                'type'        => 'upload',
                'section'     => 'general',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'loader_image',
                'label'       => esc_html__('Preloader Image', 'rukhsar' ),
                'desc'        => esc_html__('Upload your preloader image here<br />
Recommended size 128x128px', 'rukhsar' ),
                'std'         => '',
                'type'        => 'upload',
                'section'     => 'general',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'loader_color',
                'label'       => esc_html__('Preloader Background Color', 'rukhsar' ),
                'desc'        => esc_html__('Choose your background color for preloader', 'rukhsar' ),
                'std'         => '',
                'type'        => 'colorpicker',
                'section'     => 'general',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),


            array(
                'id'          => 'slider_list',
                'label'       => esc_html__('Homepage Slider List', 'rukhsar' ),
                'desc'        => esc_html__('Create your slider list for main/homepage slider.<br/> For homepage with video/youtube background <b>the slider images will appear on touch devices</b> (replacing the video/youtube video).', 'rukhsar' ),
                'std'         => '',
                'type'        => 'list-item',
                'section'     => 'slider_sectio',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and',
                'settings'    => array(
                    array(
                        'id'          => 'slider_image',
                        'label'       => esc_html__('Slider Image', 'rukhsar' ),
                        'desc'        => esc_html__('Upload your slider image here. You can leave it blank if you are using homepage background video template.', 'rukhsar' ),
                        'std'         => '',
                        'type'        => 'upload',
                        'rows'        => '',
                        'post_type'   => '',
                        'taxonomy'    => '',
                        'min_max_step'=> '',
                        'class'       => '',
                        'condition'   => '',
                        'operator'    => 'and'
                    ),
                    array(
                        'id'          => 'bottom_text',
                        'label'       => esc_html__('Slider bottom text', 'rukhsar' ),
                        'desc'        => esc_html__('Input your slider small text here.', 'rukhsar' ),
                        'std'         => '',
                        'type'        => 'textarea-simple',
                        'rows'        => '',
                        'post_type'   => '',
                        'taxonomy'    => '',
                        'min_max_step'=> '',
                        'class'       => '',
                        'condition'   => '',
                        'operator'    => 'and'
                    ),
                    array(
                        'id'          => 'slider_link',
                        'label'       => esc_html__( 'Slider Link Button', 'rukhsar' ),
                        'desc'        => esc_html__( 'Input your slider button link here( leave it blank if you don\'t want it)', 'rukhsar' ),
                        'std'         => '',
                        'type'        => 'text',
                        'rows'        => '',
                        'post_type'   => '',
                        'taxonomy'    => '',
                        'min_max_step'=> '',
                        'class'       => '',
                        'condition'   => '',
                        'operator'    => 'and'
                    ),
                    array(
                        'id'          => 'slider_link_text',
                        'label'       => esc_html__( 'Slider Link Text', 'rukhsar' ),
                        'desc'        => esc_html__( 'Input your slider text link here( leave it blank if you don\'t want it)', 'rukhsar' ),
                        'std'         => '',
                        'type'        => 'text',
                        'rows'        => '',
                        'post_type'   => '',
                        'taxonomy'    => '',
                        'min_max_step'=> '',
                        'class'       => '',
                        'condition'   => '',
                        'operator'    => 'and'
                    )

                )
            ),
            array(
                'id'          => 'slider_delay',
                'label'       => esc_html__('Homepage Slider Delay', 'rukhsar' ),
                'desc'        => esc_html__('Set your slider delay here.', 'rukhsar' ),
                'std'         => '10000',
                'type'        => 'numeric-slider',
                'section'     => 'slider_sectio',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '1,10000,1',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),

            array(
                'id'          => 'fot_text_tab',
                'label'       => esc_html__('Footer Text', 'rukhsar' ),
                'std'         => '',
                'type'        => 'tab',
                'section'     => 'footer_section',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'fot_text',
                'label'       => esc_html__('Footer Text', 'rukhsar' ),
                'desc'        => esc_html__('Input footer text here. You can use HTML tag here.', 'rukhsar' ),
                'std'         => '',
                'type'        => 'textarea-simple',
                'rows'        => '3',
                'section'     => 'footer_section',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'fot_soc_tab',
                'label'       => esc_html__('Footer Social Icon', 'rukhsar' ),
                'std'         => '',
                'type'        => 'tab',
                'section'     => 'footer_section',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'fb_foot',
                'label'       => esc_html__('Facebook Link', 'rukhsar' ),
                'desc'        => esc_html__('Input facebook link here', 'rukhsar' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'footer_section',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'gp_foot',
                'label'       => esc_html__('Google Plus Link', 'rukhsar' ),
                'desc'        => esc_html__('Input google plus link here', 'rukhsar' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'footer_section',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'twit_foot',
                'label'       => esc_html__('Twitter Link', 'rukhsar' ),
                'desc'        => esc_html__('Input twitter link here', 'rukhsar' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'footer_section',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'pint_foot',
                'label'       => esc_html__('Pinterest Link', 'rukhsar' ),
                'desc'        => esc_html__('Input pinterest link here', 'rukhsar' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'footer_section',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'insta_link',
                'label'       => esc_html__('Instagram Link', 'rukhsar' ),
                'desc'        => esc_html__('Input instagram link here', 'rukhsar' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'footer_section',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'xing_foot',
                'label'       => esc_html__('Xing Link', 'rukhsar' ),
                'desc'        => esc_html__('Input xing link here', 'rukhsar' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'footer_section',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'foot_as_icon',
                'label'       => esc_html__('Another Social Icon', 'rukhsar' ),
                'desc'        => esc_html__('Create list for another social icon.', 'rukhsar' ),
                'std'         => '',
                'type'        => 'list-item',
                'section'     => 'footer_section',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and',
                'settings'    => array(
                    array(
                        'id'          => 'foot_soc_icon',
                        'label'       => esc_html__('Social Icon', 'rukhsar' ),
                        'desc'        => esc_html__('Input your social icon here. <br /> You can check <a target="_blank" href="http://fontawesome.io/icons/">Here</a> for icon list. eg. fa-github', 'rukhsar' ),
                        'std'         => '',
                        'type'        => 'text',
                        'rows'        => '',
                        'post_type'   => '',
                        'taxonomy'    => '',
                        'min_max_step'=> '',
                        'class'       => '',
                        'condition'   => '',
                        'operator'    => 'and'
                    ),
                    array(
                        'id'          => 'foot_as_link',
                        'label'       => esc_html__('Social Icon Link', 'rukhsar' ),
                        'desc'        => esc_html__('Input social icon link here', 'rukhsar' ),
                        'std'         => '',
                        'type'        => 'text',
                        'rows'        => '',
                        'post_type'   => '',
                        'taxonomy'    => '',
                        'min_max_step'=> '',
                        'class'       => '',
                        'condition'   => '',
                        'operator'    => 'and'
                    )
                )
            ),
            array(
                'id'          => 'home_setting',
                'label'       => esc_html__('Home Section Background Setting', 'rukhsar'),
                'desc'        => esc_html__('You can set the slider/video background at slider and video background settings.', 'rukhsar'),
                'std'         => 'slider_bg_home',
                'type'        => 'select',
                'section'     => 'custom_layout_sec',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'choices'     => array(
                    array(
                        'value'       => 'slider_bg_home',
                        'label'       => esc_html__('Slider Background', 'rukhsar'),
                        'src'         => ''
                    ),
                    array(
                        'value'       => 'video_bg_home',
                        'label'       => esc_html__('Video Background', 'rukhsar'),
                        'src'         => ''
                    ),
                    array(
                        'value'       => 'youtube_bg_home',
                        'label'       => esc_html__('Youtube Video Background', 'rukhsar'),
                        'src'         => ''
                    )
                ),
            ),
            array(
                'id'          => 'text_block_video_section',
                'label'       => esc_html__('THE SETTING ONLY FOR VIDEO BACKGROUND IN HOMEPAGE VIDEO TEMPLATE', 'rukhsar' ),
                'desc'        => esc_html__('You can set your video here. This is only affect on homepage with <strong> Homepage Video</strong> template', 'rukhsar' ),
                'std'         => '',
                'type'        => 'textblock-titled',
                'section'     => 'video_bg_setting_section',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'video_link',
                'label'       => esc_html__('Video Source', 'rukhsar' ),
                'desc'        => esc_html__('Insert your video source here (only directlink). eg. http://yoursite.com/video.mp4', 'rukhsar' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'video_bg_setting_section',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'video_mute',
                'label'       => esc_html__('Video Mute', 'rukhsar' ),
                'desc'        => esc_html__('You can turn on/off video audio (mute)', 'rukhsar' ),
                'std'         => '',
                'type'        => 'on-off',
                'section'     => 'video_bg_setting_section',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),

            array(
                'id'          => 'home_setting_box',
                'label'       => 'box text home setting',
                'desc'        => esc_html__('THIS SETTING ONLY APPLIES ON PAGE WITH  "HOMEPAGE CUSTOM LAYOUT" TEMPLATE','rukhsar'),
                'std'         => '',
                'type'        => 'textblock',
                'section'     => 'custom_layout_sec',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => ''
            ),
            array(
                'id'          => 'custom_layout',
                'label'       => esc_html__('Section List','rukhsar'),
                'desc'        => esc_html__('Create your sections list here.<br/> Noted: <b>The title</b> on custom section will be the <b>id/anchor</b> to put in your homepage menu. <br/>
		Make sure <b>the title</b> doesn\'t have <b>space/white area</b> or <b>any special character</b>.','rukhsar'),
                'std'         => '',
                'type'        => 'list-item',
                'section'     => 'custom_layout_sec',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'settings'    => array(
                    array(
                        'id'          => 'section_type',
                        'label'       => esc_html__('Select Section','rukhsar'),
                        'desc'        => esc_html__('Select the section that you want to add in homepage','rukhsar'),
                        'std'         => '',
                        'type'        => 'select',
                        'rows'        => '',
                        'post_type'   => '',
                        'taxonomy'    => '',
                        'min_max_step'=> '',
                        'class'       => '',
                        'choices'     => array(
                            array(
                                'value'       => 'about_content',
                                'label'       => esc_html__('About & Team Section', 'rukhsar'),
                                'src'         => ''
                            ),
                            array(
                                'value'       => 'portfolio_content',
                                'label'       => esc_html__('Works Section', 'rukhsar'),
                                'src'         => ''
                            ),
                            array(
                                'value'       => 'services_content',
                                'label'       => esc_html__('Services Section', 'rukhsar'),
                                'src'         => ''
                            ),
                            array(
                                'value'       => 'contact_content',
                                'label'       => esc_html__('Contact Section', 'rukhsar'),
                                'src'         => ''
                            ),
                            array(
                                'value'       => 'para1_content',
                                'label'       => esc_html__('Parallax One/Testimonial Section', 'rukhsar'),
                                'src'         => ''
                            ),
                            array(
                                'value'       => 'para2_content',
                                'label'       => esc_html__('Parallax Two/Client Section', 'rukhsar'),
                                'src'         => ''
                            ),
                            array(
                                'value'       => 'para3_content',
                                'label'       => esc_html__('Parallax Three/Pricing Table Section', 'rukhsar'),
                                'src'         => ''
                            ),
                            array(
                                'value'       => 'custom_content',
                                'label'       => esc_html__('Custom Section', 'rukhsar'),
                                'src'         => ''
                            ),
                        ),
                    ),
                    array(
                        'id'          => 'custom_section',
                        'label'       => esc_html__('Custom Section', 'rukhsar' ),
                        'desc'        => esc_html__('Choose your custom section post here.', 'rukhsar' ),
                        'std'         => '',
                        'type'        => 'custom-post-type-select',
                        'section'     => 'custom_layout_sec',
                        'rows'        => '',
                        'post_type'   => 'custom-section',
                        'taxonomy'    => '',
                        'min_max_step'=> '',
                        'class'       => '',
                        'condition'   => 'section_type:is(custom_content)',
                        'operator'    => 'and'
                    ),
                )
            ),
            array(
                'id'          => 'section_block_title',
                'label'       => esc_html__('SECTION SETTINGS', 'rukhsar' ),
                'desc'        => esc_html__('You can set up each section in homepage here.', 'rukhsar' ),
                'std'         => '',
                'type'        => 'textblock-titled',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),

            array(
                'id'          => 'works_portfolio_setting_tab',
                'label'       => esc_html__('Works', 'rukhsar' ),
                'desc'        => '',
                'std'         => '',
                'type'        => 'tab',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'port_block',
                'label'       => esc_html__('You can create each portfolio item in portfolio post.', 'rukhsar' ),
                'desc'        => esc_html__('For creating new portfolio item, go to left menu Portfolio -> Add New Portfolio', 'rukhsar' ),
                'std'         => '',
                'type'        => 'textblock-titled',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'works_small_title',
                'label'       => esc_html__('Works Small Title', 'rukhsar' ),
                'desc'        => esc_html__('Insert your small title for works section here. eg. Portfolio / Project', 'rukhsar' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),

            array(
                'id'          => 'works_big_title',
                'label'       => esc_html__('Works Big Title', 'rukhsar' ),
                'desc'        => esc_html__('Insert your big title for works section here. eg. The Works', 'rukhsar' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'works_opening_text',
                'label'       => esc_html__('Works Detail Text', 'rukhsar' ),
                'desc'        => esc_html__('Insert your detail text for works section here', 'rukhsar' ),
                'std'         => '',
                'type'        => 'textarea-simple',
                'section'     => 'sections_setting',
                'rows'        => '3',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'works_all',
                'label'       => esc_html__('Works Filter for all categories', 'rukhsar' ),
                'desc'        => esc_html__('Insert your text for works filter for all categories. The default text is "All"', 'rukhsar' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'sections_setting',
                'rows'        => '3',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),

            array(
                'id'          => 'about_section_tab',
                'label'       => esc_html__('About', 'rukhsar' ),
                'desc'        => '',
                'std'         => '',
                'type'        => 'tab',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'about_block',
                'label'       => esc_html__('You can create about post in About Us.', 'rukhsar' ),
                'desc'        => esc_html__('For creating about post, go to left menu About Us -> Add New About Us. <br>Only 1 about post will appear in homepage.', 'rukhsar' ),
                'std'         => '',
                'type'        => 'textblock-titled',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'about_small_title',
                'label'       => esc_html__('About Small Title', 'rukhsar' ),
                'desc'        => esc_html__('Insert your small title for about section here. eg. History / journey', 'rukhsar' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'about_big_title',
                'label'       => esc_html__('About Big Title', 'rukhsar' ),
                'desc'        => esc_html__('Insert your big title for about section here. eg. The Story', 'rukhsar' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'about_subtitle',
                'label'       => esc_html__('About Detail Text', 'rukhsar' ),
                'desc'        => esc_html__('Insert your detail text for about section here', 'rukhsar' ),
                'std'         => '',
                'type'        => 'textarea-simple',
                'section'     => 'sections_setting',
                'rows'        => '3',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'team_block',
                'label'       => esc_html__('You can create each team post in Team Posts.', 'rukhsar' ),
                'desc'        => esc_html__('For creating new team post, go to left menu Team Posts -> Add New Team Post', 'rukhsar' ),
                'std'         => '',
                'type'        => 'textblock-titled',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),


            array(
                'id'          => 'client_list_tab',
                'label'       => esc_html__('Client List', 'rukhsar' ),
                'desc'        => '',
                'std'         => '',
                'type'        => 'tab',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'client_title',
                'label'       => esc_html__('Title for client list', 'rukhsar' ),
                'desc'        => esc_html__('Insert the title for client list here. eg. Our Recent Client', 'rukhsar' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),

            array(
                'id'          => 'client_list',
                'label'       => esc_html__('Client List', 'rukhsar' ),
                'desc'        => esc_html__('Create your client list here.', 'rukhsar' ),
                'std'         => '',
                'type'        => 'list-item',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and',
                'settings'    => array(
                    array(
                        'id'          => 'client_image',
                        'label'       => esc_html__('Client Image', 'rukhsar' ),
                        'desc'        => esc_html__('Upload your client images here.', 'rukhsar' ),
                        'std'         => '',
                        'type'        => 'upload',
                        'rows'        => '',
                        'post_type'   => '',
                        'taxonomy'    => '',
                        'min_max_step'=> '',
                        'class'       => '',
                        'condition'   => '',
                        'operator'    => 'and'
                    )
                )
            ),
            array(
                'id'          => 'client_list_column',
                'label'       => esc_html__('Client List Column', 'rukhsar' ),
                'desc'        => esc_html__('Select how many columns you want to use for client list. Default is 4 columns.', 'rukhsar' ),
                'std'         => '',
                'type'        => 'select',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and',
                'choices'     => array(
                    array(
                        'value'       => 'col_4',
                        'label'       => esc_html__('4 Columns', 'rukhsar' ),
                        'src'         => ''
                    ),
                    array(
                        'value'       => 'col_3',
                        'label'       => esc_html__('3 Columns', 'rukhsar' ),
                        'src'         => ''
                    ),
                    array(
                        'value'       => 'col_2',
                        'label'       => esc_html__('2 Columns', 'rukhsar' ),
                        'src'         => ''
                    )
                )
            ),

            array(
                'id'          => 'services_section_tab',
                'label'       => esc_html__('Services', 'rukhsar' ),
                'desc'        => '',
                'std'         => '',
                'type'        => 'tab',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'services_block',
                'label'       => esc_html__('You can create services list in services post.', 'rukhsar' ),
                'desc'        => esc_html__('For creating new services list, go to left menu Services Posts -> Add New Services Post', 'rukhsar' ),
                'std'         => '',
                'type'        => 'textblock-titled',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'services_open_text',
                'label'       => esc_html__('Services Small Title', 'rukhsar' ),
                'desc'        => esc_html__('Insert your small title for services section here.', 'rukhsar' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'sections_setting',
                'rows'        => '3',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'services_big_title',
                'label'       => esc_html__('Services Big Title', 'rukhsar' ),
                'desc'        => esc_html__('Insert your big title for services section here. eg. The Expertise', 'rukhsar' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'services_sub_text',
                'label'       => esc_html__('Services Detail Text', 'rukhsar' ),
                'desc'        => esc_html__('Insert your detail text for services section here.', 'rukhsar' ),
                'std'         => '',
                'type'        => 'textarea-simple',
                'section'     => 'sections_setting',
                'rows'        => '3',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'services_list',
                'label'       => esc_html__('Services Slider', 'rukhsar' ),
                'desc'        => esc_html__('Create your services slider  here.', 'rukhsar' ),
                'std'         => '',
                'type'        => 'list-item',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and',
                'settings'    => array(
                    array(
                        'id'          => 'sliderservice_image',
                        'label'       => esc_html__('Slider Image', 'rukhsar' ),
                        'desc'        => esc_html__('Upload your slider images here.', 'rukhsar' ),
                        'std'         => '',
                        'type'        => 'upload',
                        'rows'        => '',
                        'post_type'   => '',
                        'taxonomy'    => '',
                        'min_max_step'=> '',
                        'class'       => '',
                        'condition'   => '',
                        'operator'    => 'and'
                    )
                )
            ),

            array(
                'id'          => 'pricing_table_tab',
                'label'       => esc_html__('Pricing Table', 'rukhsar' ),
                'desc'        => '',
                'std'         => '',
                'type'        => 'tab',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'pt_block',
                'label'       => esc_html__('You can create pricing table list in pricing table post. ', 'rukhsar' ),
                'desc'        => esc_html__('For creating pricing table list, go to left menu Pricing Table -> Add New Pricing Table<br>You can upload the background image for pricing table section in Parallax Section/Big Background Image', 'rukhsar' ),
                'std'         => '',
                'type'        => 'textblock-titled',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'pt_big_title',
                'label'       => esc_html__('Pricing Table Big Title', 'rukhsar' ),
                'desc'        => esc_html__('Insert your big title for pricing table section here. eg. The Price', 'rukhsar' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),


            array(
                'id'          => 'pt_col',
                'label'       => esc_html__('Pricing Table Column', 'rukhsar' ),
                'desc'        => esc_html__('Select how many columns you want to use for pricing table. Default is 3 columns.', 'rukhsar' ),
                'std'         => '',
                'type'        => 'select',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and',
                'choices'     => array(
                    array(
                        'value'       => 'col_3',
                        'label'       => esc_html__('3 Columns', 'rukhsar' ),
                        'src'         => ''
                    ),
                    array(
                        'value'       => 'col_4',
                        'label'       => esc_html__('4 Columns', 'rukhsar' ),
                        'src'         => ''
                    ),
                )
            ),

            array(
                'id'          => 'contact_section_tab',
                'label'       => __( 'Contact', 'rukhsar' ),
                'desc'        => '',
                'std'         => '',
                'type'        => 'tab',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'contact_block',
                'label'       => __( 'You can create contact post in contact post.', 'rukhsar' ),
                'desc'        => __( 'For creating contact post or inserting contact form 7 shortcode, go to left menu Contact Posts -> Add New Contact Post', 'rukhsar' ),
                'std'         => '',
                'type'        => 'textblock-titled',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'contact_small_title',
                'label'       => __( 'Contact Small Title', 'rukhsar' ),
                'desc'        => __( 'Insert your small title for contact section here.', 'rukhsar' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'contact_big_title',
                'label'       => __( 'Contact Big Title', 'rukhsar' ),
                'desc'        => __( 'Insert your big title for contact section here. eg. The Contact', 'rukhsar' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'contact_sub_title',
                'label'       => __( 'Contact Detail Text', 'rukhsar' ),
                'desc'        => __( 'Insert your detail text for contact section here. eg. The Contact', 'rukhsar' ),
                'std'         => '',
                'type'        => 'textarea-simple',
                'section'     => 'sections_setting',
                'rows'        => '3',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),


            array(
                'id'          => 'tx_address',
                'label'       => __( 'Insert Text for Address', 'rukhsar' ),
                'desc'        => __( 'Insert text for address here. The default text is Address', 'rukhsar' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),

            array(
                'id'          => 'map_address',
                'label'       => __( 'Address', 'rukhsar' ),
                'desc'        => __( 'Insert your address here. <br/>Leave it blank if you don\'t need it', 'rukhsar' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),

            array(
                'id'          => 'tx_phone',
                'label'       => __( 'Insert Text for Phone', 'rukhsar' ),
                'desc'        => __( 'Insert text for phone here. The default text is Phone', 'rukhsar' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'map_phone',
                'label'       => __( 'Phone', 'rukhsar' ),
                'desc'        => __( 'Insert your phone here. <br/>Leave it blank if you don\'t need it', 'rukhsar' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'tx_email',
                'label'       => __( 'Insert Text for Email', 'rukhsar' ),
                'desc'        => __( 'Insert text for email here. The default text is Email', 'rukhsar' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),

            array(
                'id'          => 'map_email',
                'label'       => __( 'Email', 'rukhsar' ),
                'desc'        => __( 'Insert your email here. <br/>Leave it blank if you don\'t need it', 'rukhsar' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'sections_setting',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),




            // array(
            //     'id'          => 'parallax_one',
            //     'label'       => esc_html__('Parallax One/Testimonial Setting', 'rukhsar' ),
            //     'desc'        => '',
            //     'std'         => '',
            //     'type'        => 'tab',
            //     'section'     => 'parallax_section_big_background_image',
            //     'rows'        => '',
            //     'post_type'   => '',
            //     'taxonomy'    => '',
            //     'min_max_step'=> '',
            //     'class'       => '',
            //     'condition'   => '',
            //     'operator'    => 'and'
            // ),
            array(
                'id'          => 'parallax_image_one',
                'label'       => esc_html__('Parallax Image', 'rukhsar' ),
                'desc'        => esc_html__('Upload your background image for parallax one/testimonial section here.', 'rukhsar' ),
                'std'         => '',
                'type'        => 'upload',
                'section'     => 'parallax_section_big_background_image',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'testimonial_list',
                'label'       => esc_html__('Testimonial List', 'rukhsar' ),
                'desc'        => esc_html__('Create your testimonial list here.<br>
Title in the list is for testimonial author.', 'rukhsar' ),
                'std'         => '',
                'type'        => 'list-item',
                'section'     => 'parallax_section_big_background_image',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and',
                'settings'    => array(
                    array(
                        'id'          => 'testi_position',
                        'label'       => esc_html__('Author position/job', 'rukhsar' ),
                        'desc'        => esc_html__('Insert your the author position/job here.', 'rukhsar' ),
                        'std'         => '',
                        'type'        => 'text',
                        'rows'        => '',
                        'post_type'   => '',
                        'taxonomy'    => '',
                        'min_max_step'=> '',
                        'class'       => '',
                        'condition'   => '',
                        'operator'    => 'and'
                    ),
                    array(
                        'id'          => 'testi_text',
                        'label'       => esc_html__('Testimonial Text', 'rukhsar' ),
                        'desc'        => esc_html__('Insert your testimonial text here.', 'rukhsar' ),
                        'std'         => '',
                        'type'        => 'textarea-simple',
                        'rows'        => '',
                        'post_type'   => '',
                        'taxonomy'    => '',
                        'min_max_step'=> '',
                        'class'       => '',
                        'condition'   => '',
                        'operator'    => 'and'
                    ),
                )
            ),


            array(
                'id'          => 'parallax_two',
                'label'       => esc_html__('Parallax Two/Client List Setting', 'rukhsar' ),
                'desc'        => '',
                'std'         => '',
                'type'        => 'tab',
                'section'     => 'parallax_section_big_background_image',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'para2_block',
                'label'       => esc_html__('You can create client list in Section Settings (theme options)', 'rukhsar' ),
                'desc'        => esc_html__('For creating client list, go to left menu Theme Options ->Section Settings ->Client List', 'rukhsar' ),
                'std'         => '',
                'type'        => 'textblock-titled',
                'section'     => 'parallax_section_big_background_image',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'parallax_image_two',
                'label'       => esc_html__('Parallax Image', 'rukhsar' ),
                'desc'        => esc_html__('Upload your background image for parallax two/client list here.', 'rukhsar' ),
                'std'         => '',
                'type'        => 'upload',
                'section'     => 'parallax_section_big_background_image',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),


            array(
                'id'          => 'parallax_three',
                'label'       => esc_html__('Parallax Three/Pricing Table Setting', 'rukhsar' ),
                'desc'        => '',
                'std'         => '',
                'type'        => 'tab',
                'section'     => 'parallax_section_big_background_image',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'para3_block',
                'label'       => esc_html__('You can create Pricing Table list in Pricing Table post.', 'rukhsar' ),
                'desc'        => esc_html__('For creating pricing table, go to left menu Pricing Table ->Add New Pricing Table', 'rukhsar' ),
                'std'         => '',
                'type'        => 'textblock-titled',
                'section'     => 'parallax_section_big_background_image',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'parallax_image_three',
                'label'       => esc_html__('Parallax Image', 'rukhsar' ),
                'desc'        => esc_html__('Upload your background image for parallax three here.', 'rukhsar' ),
                'std'         => '',
                'type'        => 'upload',
                'section'     => 'parallax_section_big_background_image',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),



            array(
                'id'          => 'text_block_yt_section_rec',
                'label'       => esc_html__('THE SETTING ONLY FOR YOUTUBE VIDEO BACKGROUND IN HOMEPAGE YOUTUBE TEMPLATE', 'rukhsar' ),
                'desc'        => esc_html__('You set your video here. This is only affect on homepage with <strong> Homepage Youtube</strong>', 'rukhsar' ),
                'std'         => '',
                'type'        => 'textblock-titled',
                'section'     => 'yt_bg_setting_section',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'yt_id',
                'label'       => esc_html__('Youtube Id', 'rukhsar' ),
                'desc'        => esc_html__('Input your youtube ID here. <br /><strong>Remember only input the ID!</strong>. eg. c9MnSeYYtYY', 'rukhsar' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'yt_bg_setting_section',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'yt_qt',
                'label'       => esc_html__('Youtube Video Quality', 'rukhsar' ),
                'desc'        => esc_html__('Insert your youtube video quality here. <br>You can input <b>small</b>, <b>medium</b>, <b>large</b>, <b>hd720</b>, <b>hd1080</b>, <b>highres</b>.
		<br> Default value is large', 'rukhsar' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'yt_bg_setting_section',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'yt_mute',
                'label'       => esc_html__('Youtube Video Mute', 'rukhsar' ),
                'desc'        => esc_html__('You can turn on/off youtube video audio (mute)', 'rukhsar' ),
                'std'         => '',
                'type'        => 'on-off',
                'section'     => 'yt_bg_setting_section',
                'rows'        => '',
                'post_type'   => '',
                'taxonomy'    => '',
                'min_max_step'=> '',
                'class'       => '',
                'condition'   => '',
                'operator'    => 'and'
            ),
        )
    );

    /* allow settings to be filtered before saving */
    $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );

    /* settings are not the same update the DB */
    if ( $saved_settings !== $custom_settings ) {
        update_option( ot_settings_id(), $custom_settings );
    }

    /* Lets OptionTree know the UI Builder is being overridden */
    global $ot_has_custom_theme_options;
    $ot_has_custom_theme_options = true;
}