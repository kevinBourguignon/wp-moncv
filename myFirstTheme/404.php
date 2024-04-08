<?php
get_header();
?>
<section class="section-404">
		<div class="nt-container">
			<div class="nt-columns-area">
				<div class="nt-column-6 mx-auto">
					<div class="card-404">
						<h1><?php esc_html_e('4'); ?><span><?php esc_html_e('0'); ?></span><?php esc_html_e('4'); ?></h1> 
						
						<h6 class="not-found"><?php esc_html_e('Oops! Page Not Found...'); ?></h6>
													
						<p><?php esc_html_e('Oops! The page you are looking for does not exist.');?> </p>
					
						<a href="<?php echo esc_url(home_url( '/' ) ); ?>" class="main-btn"><?php esc_html_e('Back To Home'); ?><i class="fa fa-home"></i></a>
						
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>