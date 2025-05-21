<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BusiCare
 */
get_header();

if(get_theme_mod('blog_sidebar_layout','right')=='stretched') {
    $busicare_stretched_class='stretched';   
}
else {
    $busicare_stretched_class='';
}

?>
<section class="section-space-page blog <?php echo esc_attr($busicare_stretched_class);?>">
    <div class="container<?php echo esc_html(busicare_blog_post_container());?>">
        <div class="row">
            <?php
            if(get_theme_mod('blog_sidebar_layout','right')=='left'):
                echo '<div class="col-lg-4 col-md-5 col-sm-12"><div class="sidebar left-sidebar">';
                    dynamic_sidebar('sidebar-1'); 
                echo '</div></div>';
            endif;
            if(get_theme_mod('blog_sidebar_layout','right')=='right'|| get_theme_mod('blog_sidebar_layout','right')=='left'):        
                echo '<div class="col-lg-8 col-md-7 col-sm-12 standard-view">';
            else:
                echo '<div class="col-lg-12 col-md-12 col-sm-12 standard-view">';   
            endif; 
                if (have_posts()): 
                    while (have_posts()): the_post();
                        if(! function_exists( 'busicarep_activate' ) ){
                            get_template_part( 'template-parts/content', get_post_type() );
                        }
                        else{
                            include(BUSICAREP_PLUGIN_DIR.'/inc/template-parts/content.php' );
                        }
                    endwhile;
                else:
                    get_template_part('template-parts/content', 'none');
                endif;
                //pagination
                echo '<div class="row justify-content-center">';
                do_action('busicare_post_navigation');
                echo '</div>';
                //pagination
                ?> 
            </div>	
            <?php if(get_theme_mod('blog_sidebar_layout','right')=='right'):
                echo '<div class="col-lg-4 col-md-5 col-sm-12"><div class="sidebar s-l-space">';
                    dynamic_sidebar('sidebar-1');								
                echo '</div></div>';
            endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>