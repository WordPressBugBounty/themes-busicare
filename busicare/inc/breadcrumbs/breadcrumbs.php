<?php

// theme sub header breadcrumb functions
if( !function_exists('busicare_breadcrumbs') ):
	function busicare_breadcrumbs() 
	{ 
		global $post;
		$hide_show_banner = get_theme_mod('banner_enable',true);
		if($hide_show_banner == true)
		{
	?>
<section class="page-title-section" <?php if ( get_header_image() ){ ?> style="background:url('<?php header_image(); ?>')"  <?php } ?>>		
	<?php
        if(get_theme_mod('breadcrumb_image_overlay',true)==true){
            $breadcrumb_overlay=get_theme_mod('breadcrumb_overlay_section_color','rgba(0,0,0,0.6)');
        }else{
            $breadcrumb_overlay= 'none';
        }
	?>
	<style type="text/css">
		.page-title-section .overlay
		{

		    background-color: <?php echo esc_attr($breadcrumb_overlay);?>;
		}
	</style>
		<div class="breadcrumb-overlay overlay">	
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
                          <?php 
                          include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
                          if (is_home() || is_front_page()) { 
                          	 	if(get_option('show_on_front')=='posts')
                          	 	{
                          	 	?>
                          	 	<div class="page-title">
									<h1><?php echo wp_kses_post(get_theme_mod('blog_page_title_option', __('Home', 'busicare'))); ?></h1>
                                        </div> 
                          	 	<?php
                          	 	}
                          	 	else
                          	 	{
                          	 	?>
                          	 		<div class="page-title">
									<h1><?php echo esc_html(get_the_title( get_option('page_for_posts', true) )); ?> </h1>
                                                </div> 
                          	 		<?php
                          	 	}
                          	 	
                          	
						 } 
						else 
						{ ?>                   
							<div class="page-title text-center text-white">
								<?php
								if (is_search())
								{
									echo '<h1>'. get_search_query() .'</h1>';
								}
								else if(is_404())
								{
									echo '<h1>'. esc_html__('Error','busicare') . ' 404' .'</h1>';	
								}
								else if(is_category())
								{
									echo '<h1>'. ( esc_html__('Category','busicare') . ': ' . single_cat_title( '', false ) ) .'</h1>';		
								}
								else if ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() )
								{ 
									if ( class_exists( 'WooCommerce' ) ) 
									{
	                        			if(is_shop())
	                        			{ ?>
	                        				<h1><?php woocommerce_page_title(); ?></h1>
	                    				<?php 
	                    				}   
	                   				 }
		                		}
		                		elseif( is_tag() )
		                		{
		                			echo '<h1>'. ( esc_html__('Tag','busicare') . ': ' . single_tag_title( '', false ) ) .'</h1>';
		                		}
		                		else if(is_archive())
								{	
								the_archive_title( '<h1>', '</h1>' ); 
								}
			                    else
			                    { ?>
			                    	<h1><?php the_title(''); ?></h1>
			                    <?php 
			                	}
			                	global $template;
			                	if(basename($template)=="taxonomy-portfolio_categories.php")
			                	{
			                		the_archive_title( '<h1 >', '</h1>' ); 
			                	}
			                    ?>
			                </div>	
						<?php } 
						$busicare_breadcrumb_type = get_theme_mod('busicare_breadcrumb_type','yoast');
					       if($busicare_breadcrumb_type == 'yoast') {
							if ( function_exists('yoast_breadcrumb') ) {
								$wpseo_titles=get_option('wpseo_titles');
								if($wpseo_titles['breadcrumbs-enable']==true){

								echo '<ul class="page-breadcrumb text-center">';
									echo '<li>';
									echo '</li>';
								$breadcrumbs = yoast_breadcrumb("","",false);
								echo wp_kses_post($breadcrumbs);
								echo '</ul>';
								}	
							}
						   }
							elseif($busicare_breadcrumb_type == 'navxt')
                                    {
                                        if( function_exists( 'bcn_display' ) )
                                        {
											echo '<nav class="text-center navxt-breadcrumb">';
                                            bcn_display();
											echo '</nav>';
                                        }
                                        
                                    }
                          elseif($busicare_breadcrumb_type == 'rankmath')
                                    {
                                        if( function_exists( 'rank_math_the_breadcrumbs' ) )
                                        {
                                            rank_math_the_breadcrumbs();
                                        } 
                                    }
						?>
                        </div>
					</div>
				</div>	
                                </div>
		</section>
<div class="page-seperate"></div>
        <?php }else{?><div class="page-seperate"></div><?php }
        }
endif; ?>