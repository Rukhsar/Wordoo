				<!--SIDEBAR START-->
                <div class="col-md-4 col-md-offset-1 sidebar">
                	<?php  if ( function_exists('dynamic_sidebar') ){ 
						if ( is_active_sidebar( 'default-sidebar' ) ) { dynamic_sidebar( 'default-sidebar' );}
						} ?>
                </div><!--/.sidebar-->
                <!--SIDEBAR END-->