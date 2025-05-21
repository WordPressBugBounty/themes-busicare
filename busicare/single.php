<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package BusiCare
 */
get_header();

if(get_theme_mod('single_post_sidebar_layout','right')=='stretched') {
    $busicare_stretched_class='stretched';   
}
else {
    $busicare_stretched_class='';
}

?>
<section class="section-module blog <?php echo esc_attr($busicare_stretched_class);?>">
	<div class="container<?php echo esc_html(busicare_single_post_container());?>">
		<div class="row">			
			<?php
			if(get_theme_mod('single_post_sidebar_layout','right')=='left'):
                echo '<div class="col-lg-4 col-md-5 col-sm-12"><div class="sidebar left-sidebar">';
                    dynamic_sidebar('sidebar-1'); 
                echo '</div></div>';
            endif;
            if(get_theme_mod('single_post_sidebar_layout','right')=='right'|| get_theme_mod('single_post_sidebar_layout','right')=='left'):        
                echo '<div class="col-lg-8 col-md-7 col-sm-12 standard-view blog-single">';
            else:
                echo '<div class="col-lg-12 col-md-12 col-sm-12 standard-view blog-single">';   
            endif;
				while(have_posts()): the_post();
					get_template_part('template-parts/content','single');	
				endwhile;
				if(function_exists( 'busicarep_activate' )):
					if(get_theme_mod('busicare_enable_related_post',true )===true ):
						include(BUSICAREP_PLUGIN_DIR.'/inc/template-parts/related-posts.php');
					endif;
				endif;
				if(get_theme_mod('busicare_enable_single_post_admin_details',true)===true):
					get_template_part('template-parts/auth-details');
				endif;	

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) : comments_template(); endif;?>
			</div>	

		 	<?php if(get_theme_mod('single_post_sidebar_layout','right')=='right'):
	            echo '<div class="col-lg-4 col-md-5 col-sm-12"><div class="sidebar s-l-space">';
	                dynamic_sidebar('sidebar-1');                               
	            echo '</div></div>';
        	endif; ?>
		</div>
	</div>
</section>
<?php get_footer();?>