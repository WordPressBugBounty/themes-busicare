<?php 
get_header();
		if('page' == get_option('show_on_front')){ get_template_part('index');}
		elseif(is_home()){ get_template_part('index');}
		elseif ( ! function_exists( 'busicarep_activate' ) ){ get_template_part('index');}
		elseif (function_exists( 'busicarep_activate' ) )
		{
		$busicare_front_page = get_theme_mod('front_page_data','cta1,services,cta2,portfolio,fun,news,testimonial,wooproduct,team,client');
		do_action( 'busicare_before_slider_section_hook', false);
		do_action( 'busicare_slider_action' , false);		
		do_action( 'busicare_after_slider_section_hook', false);
	    
	    $busicare_data =is_array($busicare_front_page) ? $busicare_front_page : explode(",",$busicare_front_page);			
		if($busicare_data) 
		{
			foreach($busicare_data as $key=>$value)
			{	
                do_action( 'busicare_before_'.$value.'_section_hook', false);
				
				do_action( 'busicare_'.$value.'_action', false);
				
				do_action( 'busicare_after_'.$value.'_section_hook', false);

			}
		}
	}
get_footer();