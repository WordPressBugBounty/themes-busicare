<?php 
/**
 * Template Name: Business Template
 */
get_header();

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

// For Free Version
if ( ! function_exists( 'busicarep_activate' ) ):

	if ( function_exists( 'spiceb_activate' ) ):
		$theme = wp_get_theme();
		do_action( 'spiceb_busicare_slider_action' , false);
		do_action( 'spiceb_busicare_services_action', false);
		if ($theme->name == 'BusiCare') 
    	{
    	do_action( 'spiceb_busicare_news_action' ,false);
    	do_action( 'spiceb_busicare_testimonial_action' ,false);
    	do_action( 'spiceb_busicare_team_action' ,false);
    	}
    	else
    	{
    	do_action( 'spiceb_busicare_team_action' ,false);
    	do_action( 'spiceb_busicare_testimonial_action' ,false);
    	do_action( 'spiceb_busicare_news_action' ,false);
    	}			
		
	else:
	?>
	<p class="alert alert-warning text-center" role="alert">
	<?php echo esc_html__('This template shows the homepage sections, and to show these sections you have to activate the companion plugin.','busicare');?>
	</p>
	<?php
	endif;

endif;

// For Pro Version
if ( function_exists( 'busicarep_activate' ) ):
		$busicare_front_page = get_theme_mod('front_page_data','cta1,services,cta2,portfolio,fun,news,testimonial,wooproduct,team,client');
		do_action( 'busicare_plus_before_slider_section_hook', false);
		do_action( 'busicare_plus_slider_action' , false);		
		do_action( 'busicare_plus_after_slider_section_hook', false);
	    
	    $busicare_data =is_array($busicare_front_page) ? $busicare_front_page : explode(",",$busicare_front_page);			
		if($busicare_data) 
		{
			foreach($busicare_data as $key=>$value)
			{	
                do_action( 'busicare_plus_before_'.$value.'_section_hook', false);
				
				do_action( 'busicare_plus_'.$value.'_action', false);
				
				do_action( 'busicare_plus_after_'.$value.'_section_hook', false);

			}
		}

endif;

get_footer();