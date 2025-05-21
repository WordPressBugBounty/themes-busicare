<?php
/**
 * Getting started template
 */
$busicare_name = wp_get_theme();
?>
<div id="getting_started" class="busicare-tab-pane active">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1 class="busicare-info-title text-center"><?php 
				/* translators: %s: theme name */
				printf( esc_html__('%s Theme Configuration','busicare'), esc_html($busicare_name) ); ?>
				</h1>
			</div>
		</div>
		<div class="row" style="margin-top: 20px;">
			<div class="col-md-12">
			    <div class="busicare-page" style="border: none;box-shadow: none;">
					<div class="mockup">
			    		<img src="<?php echo BUSICARE_TEMPLATE_DIR_URI.'/admin/assets/img/mockup-lite.png';?>"  width="100%">
			    	</div>
				</div>	
			</div>	
		</div>
		<div class="row" style="margin-top: 20px;">
			<div class="col-md-6"> 
				<div class="busicare-page">
					<div class="busicare-page-top"><?php 
						/* translators: %s: theme name */
						printf( esc_html__('Additional features in %s Plus','busicare'), esc_html($busicare_name) ); ?>
					</div>
					<div class="busicare-page-content">
						<ul class="busicare-page-list-flex">
							<li>
								<?php echo esc_html__('Unlimited Slides','busicare'); ?>
							</li>
							<li>
								<?php echo esc_html__('Unlimited Services','busicare'); ?>
							</li>					
							<li>
								<?php echo esc_html__('Header Presets','busicare'); ?>
							</li>
							<li>
								<?php echo esc_html__('Portfolio Section','busicare'); ?>
							</li>
							<li>
								<?php echo esc_html__('Funfact Section','busicare'); ?>
							</li>
							<li>
								<?php echo esc_html__('Google Maps Section','busicare'); ?>
							</li>
							<li>
								<?php echo esc_html__('Client Section','busicare'); ?>
							</li>
							<li>
								<?php echo esc_html__('Multiple Blog Templates','busicare'); ?>
							</li>
							<li>
								<?php echo esc_html__('Post Navigation Styles','busicare'); ?>
							</li>
							<li>
								<?php echo esc_html__('Drag and drop section orders','busicare'); ?>
							</li>
							<li>
								<?php echo esc_html__('Team section with grid effect','busicare'); ?>
							</li>
							<li>
								<?php echo esc_html__('Shop section with unlimited items','busicare'); ?>
							</li>
							<li>
								<?php echo esc_html__('Shop section with carousel effect','busicare'); ?>
							</li>
							<li>
								<?php echo esc_html__('Testimonial section with grid effect','busicare'); ?>
							</li>
							<li>
								<?php echo esc_html__('Homepage Sections Before/After Hooks','busicare'); ?>
							</li>
							<li>
								<?php echo esc_html__('One Click Demo Import','busicare'); ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6"> 
				<div class="busicare-page">
					<div class="busicare-page-top"><?php esc_html_e( 'Links to Customizer Settings', 'busicare' ); ?></div>
					<div class="busicare-page-content">
						<ul class="busicare-page-list-flex">
							<li>
								<a class="busicare-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=title_tagline' ) ); ?>" target="_blank"><?php esc_html_e('Site Logo','busicare'); ?></a>
							</li>
							<li>
								<a class="busicare-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=busicare_theme_panel' ) ); ?>" target="_blank"><?php esc_html_e('Blog Options','busicare'); ?></a>
							</li>
							<li>
								<a class="busicare-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=widgets' ) ); ?>" target="_blank"><?php esc_html_e('Footer Widgets','busicare'); ?></a>
							</li>
							<li>
								<a class="busicare-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=section_settings' ) ); ?>" target="_blank"><?php esc_html_e('Homepage Sections','busicare'); ?></a>
							</li>
							<li>
								<a class="busicare-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=busicare_general_settings' ) ); ?>" target="_blank"><?php esc_html_e('General Settings','busicare'); ?></a>
							</li>
							<li>
								<a class="busicare-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=colors_back_settings' ) ); ?>" target="_blank"><?php esc_html_e('Colors & Background','busicare'); ?></a>
							</li>
							<li>
								<a class="busicare-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=busicare_typography_setting' ) ); ?>" target="_blank"><?php esc_html_e('Typography Settings','busicare'); ?></a>
							</li>
							<li>
								<a class="busicare-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=theme_style' ) ); ?>" target="_blank"><?php esc_html_e('Theme Style Settings','busicare'); ?></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="busicare-page">
					<div class="busicare-page-top"><?php esc_html_e( 'Useful Links', 'busicare' ); ?></div>
					<div class="busicare-page-content">
						<ul class="busicare-page-list-flex">
							<li>
								<a class="busicare-page-quick-setting-link" href="<?php echo esc_url('https://busicare.spicethemes.com/'); ?>" target="_blank">
									<?php printf( esc_html__('%s Demo','busicare'), esc_html($busicare_name) ); ?>
								</a>
							</li>
							<li>
								<a class="busicare-page-quick-setting-link" href="<?php echo esc_url('https://busicare-pro.spicethemes.com/'); ?>" target="_blank">
									<?php printf( esc_html__('%s Plus Demo','busicare'), esc_html($busicare_name) ); ?>
								</a>
							</li>
							<li>
								<a class="busicare-page-quick-setting-link" href="<?php echo esc_url('https://wordpress.org/support/theme/busicare/'); ?>" target="_blank">
									<?php printf( esc_html__('%s Theme Support','busicare'), esc_html($busicare_name) ); ?>
								</a>
							</li>							
						    <li> 
								<a class="busicare-page-quick-setting-link" href="<?php echo esc_url('https://wordpress.org/support/theme/busicare/reviews/#new-post'); ?>" target="_blank"><?php echo esc_html__('Your feedback is valuable to us','busicare'); ?></a>
							</li>
							<li>
								<a class="busicare-page-quick-setting-link" href="<?php echo esc_url('https://spicethemes.com/busicare-plus'); ?>" target="_blank">
									<?php printf( esc_html__('%s Plus Details','busicare'), esc_html($busicare_name) ); ?>
								</a>
							</li>
						    <li> 
								<a class="busicare-page-quick-setting-link" href="<?php echo esc_url('https://spicethemes.com/contact/'); ?>" target="_blank"><?php echo esc_html__('Pre-sales enquiry','busicare'); ?></a>
							</li> 
							<li> 
								<a class="busicare-page-quick-setting-link" href="<?php echo esc_url('https://spicethemes.com/busicare-free-vs-pro/'); ?>" target="_blank"><?php echo esc_html__('Free vs Plus','busicare'); ?></a>
							</li> 
							<li> 
								<a class="busicare-page-quick-setting-link" href="<?php echo esc_url('https://spicethemes.com/busicare-changelog/'); ?>" target="_blank"><?php echo esc_html__('Changelog','busicare'); ?></a>
							</li> 
						</ul>
					</div>
				</div>
			</div>		
		</div>
	</div>
</div>