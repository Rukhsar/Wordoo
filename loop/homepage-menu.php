<?php
/*
* Homepage menu 
*/
?>
			<!--HEADER START-->
			<nav class="header home-section clearfix ">
            		<div class="top-logo hidden-sm hidden-xs clearfix">
                    	<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<img alt="logo" class="logo1" src="<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'logo_top_img' ) ) { echo esc_url ( ot_get_option( 'logo_top_img' )); } 
								else { echo get_template_directory_uri(); ?>/images/top-logo.png <?php } ?>"><!--logo-->
								</a>
                    </div>
					<div class="for-sticky">
						<div class="container nav-box">
							<div class="logo">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<img alt="logo" class="logo1" src="<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'logo_img' ) ) { echo esc_url ( ot_get_option( 'logo_img' )); } 
								else { echo get_template_directory_uri(); ?>/images/logo.png <?php } ?>"><!--logo-->
								</a>
							</div>
							<div class="menu-box hidden-xs hidden-sm">
								<?php wp_nav_menu( array( 'items_wrap' => '<ul id="%1$s" class="home-nav navigation %2$s">%3$s</ul>', 'theme_location' => 'rukhsar-homepage-menu' ) ); ?>
							</div><!--/.menu-box-->
							<div class="box-mobile hidden-lg hidden-md">
								<div class="menu-btn" data-toggle="collapse" data-target=".nav-collapse">
									<span class="fa fa-bars"></span>
								</div>
								<ul class="nav-collapse mobile-menu hidden-lg hidden-md"></ul>
							</div><!--/.box-mobile-->	
						</div><!--/.container-->
					</div><!--/.for-sticky-->
			</nav><!--/.header-->
			<!--HEADER END-->
