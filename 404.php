<?php
/*
* Search Page
*/

	get_header(); 
	//HEADER/MENU SECTION START
    get_template_part( 'loop/other', 'menu' );
    //HEADER/MENU SECTION END 
	?>
			<div class="clearfix content">
				<div class="container">
					<div class="row">
						<div class="col-md-7 news-list aligncenter">
							<h2 class="error-title"><?php esc_html_e('404', 'rukhsar'); ?></h2>
							<h3><?php esc_html_e('Oops..!!! Page not found!','rukhsar') ?></h3>
							<a class="go-btn" href="<?php echo esc_url ( home_url() ); ?>"><?php esc_html_e('Go Back Now!','rukhsar') ?></a>
						</div><!--/.col-md-8-->
						
						<?php get_sidebar(); ?>
					 </div><!--/.row-->
				</div><!--/.container-->
			</div><!--/.content-->
    
    

    
<?php get_footer(); ?> 