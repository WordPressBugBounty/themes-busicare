<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package BusiCare
 */
get_header();?>
<section class="error-page">
	<div class="container<?php echo esc_html(busicare_container());?> justify-content-center">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<div class="text-center justify-content-center">
                    <h2 class="title"><?php echo '4';?><img src="<?php echo esc_url(BUSICARE_TEMPLATE_DIR_URI.'/assets/images/coffee.png'); ?>" class="img-fluid" alt="<?php echo esc_attr('cup-tea','busicare') ?>"><?php echo '4';?></h2>
					<h2 class="contact-title" ><?php esc_html_e("Oops, Page Not Found!","busicare");?></h2>
                                        <h4 class="contact-subtitle"><?php esc_html_e("The page you're looking for doesn't exist.","busicare");?></h4>
					<div class="not-found-btn">
						<a class="search-submit" href="<?php echo esc_url( home_url( '/' ) ); ?>" ><?php esc_html_e('Go Back','busicare');?></a>
					</div>
				</div>
			</div>
		</div>			
	</div>
</section>
<?php if(function_exists( 'busicarep_activate' )) :
	do_action('busicare_plus_client_section_hook');
endif;
get_footer();
?>