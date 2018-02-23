<?php 
//color scheme
function rukhsar_color_scheme() {
		$general =  ot_get_option( 'color_general' );
        $color_general = "
		.team-post,.sl-btn,.port-hov > span,.icon-port,.para-box i,.go-btn ,.team-social li a,.services-icon,.pricing-btn:hover,.special .pricing-btn,.wpcf7-submit,.address-list i
		,.tagcloud a,.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, 
		.pagination > .active > span:focus,#searchform #searchsubmit,#about .small-title > span,#services .small-title i,.p-table .pricing-btn,
		.p-top.social-list a:hover,.footer-icon a:hover,.post-detail i,.form-submit #submit,#wp-calendar caption,.slide-btn:hover,.port-filter .active, 
		.port-filter a:hover,.post.sticky .go-btn:hover{background-color:$general;}

		.box-content i,.team-social i:hover,#home .slide-nav:hover,.blog-wrapper .slide-nav:hover,.work-content:hover .slide-nav:hover{color:$general;}
		
		.p-table a,.team-social i ,.footer-icon a:hover,.go-btn{color:#fff;}
		
		.p-left {background-color: rgba(255, 255, 255, 0.2);}
		.team-social li a,.go-btn,.sl-btn,.tagcloud a,.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, 
		.pagination > .active > a:focus, .pagination > .active > span:focus,.bordering{border-color:$general;}
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'color_general' )) {           
        wp_add_inline_style( 'rukhsar-theme-style', $color_general );
		}
		
		$hovers =  ot_get_option( 'custom_hovers' );
        $custom_hovers = "a:hover{color:$hovers;}
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'custom_hovers' )) {           
        wp_add_inline_style( 'rukhsar-theme-style', $custom_hovers );
		}
		
        $color =  ot_get_option( 'color_scheme' );
        $custom_css = "
		a{color:$color;}
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'color_scheme' )) {           
        wp_add_inline_style( 'rukhsar-theme-style', $custom_css );
		}
		
		$hovers =  ot_get_option( 'custom_hovers' );
        $custom_hovers = "a:hover{color:$hovers;}
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'custom_hovers' )) {           
        wp_add_inline_style( 'rukhsar-theme-style', $custom_hovers );
		}
		
		$heading =  ot_get_option( 'heading_color' );
        $heading_color = "
		h1, h2, h3, h4, h5, h6{color:$heading;} 
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'heading_color' )) {           
        wp_add_inline_style( 'rukhsar-theme-style', $heading_color );
		}
		
		$general =  ot_get_option( 'general_color' );
        $general_color = "
		body{color:$general;}
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'general_color' )) {           
        wp_add_inline_style( 'rukhsar-theme-style', $general_color );
		}
		
		$footer =  ot_get_option( 'footer_color' );
        $footer_color = "
		.footer{background-color:$footer;}
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'footer_color' )) {           
        wp_add_inline_style( 'rukhsar-theme-style', $footer_color );
		}
 

		$menu =  ot_get_option( 'color_menu' );
        $color_menu = "
		.blog-header,.is-sticky .for-sticky{background-color: $menu;}
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'color_menu' )) {           
        wp_add_inline_style( 'rukhsar-theme-style', $color_menu );
		}
		 
}

		