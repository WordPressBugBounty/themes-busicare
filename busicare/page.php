<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BusiCare
 */
get_header();

if(get_theme_mod('page_sidebar_layout','right')=='stretched') {
    $busicare_stretched_class='stretched';   
}
else {
    $busicare_stretched_class='';
}

if(get_theme_mod('page_sidebar_layout','right')=='right'|| get_theme_mod('page_sidebar_layout','right')=='left') {
    $busicare_page_column =  '<div class="col-lg-8 col-md-7 col-sm-12 standard-view">';
}
else {
    $busicare_page_column =  '<div class="col-lg-12 col-md-12 col-sm-12 standard-view">';   
}
?>
<section class="section-space-page page <?php echo esc_attr($busicare_stretched_class);?>">
    <div class="container<?php echo esc_html(busicare_container());?>">
        <div class="row">	
            <?php
            if(get_theme_mod('page_sidebar_layout','right')=='left') {
                if (class_exists('WooCommerce')) {
                    if (is_account_page() || is_cart() || is_checkout()) {
                        if(get_theme_mod('page_sidebar_layout','right')=='left'):
                            if (is_active_sidebar('woocommerce')) {
                                get_sidebar('woocommerce');
                            }
                        endif;
                    }
                    else {
                        echo '<div class="col-lg-4 col-md-5 col-sm-12"><div class="sidebar left-sidebar">';
                            dynamic_sidebar('sidebar-1'); 
                        echo '</div></div>';
                    }
                }
                else {
                    echo '<div class="col-lg-4 col-md-5 col-sm-12"><div class="sidebar left-sidebar">';
                        dynamic_sidebar('sidebar-1'); 
                    echo '</div></div>';
                }
            }
            if (class_exists('WooCommerce')) {

                if (is_account_page() || is_cart() || is_checkout()) {
                    echo $busicare_page_column;
                } else {

                    echo $busicare_page_column;
                }
            } else {
                echo $busicare_page_column;
            }
            ?>
            <?php
            if (class_exists('WooCommerce')) {

                if (is_account_page() || is_cart() || is_checkout()) {

                    while (have_posts()) : the_post();
                        get_template_part('template-parts/content', 'page');
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                    endwhile;
                } else {
                    while (have_posts()) : the_post();
                        get_template_part('template-parts/content', 'page');
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                    endwhile;
                }
            } else {
                while (have_posts()) : the_post();
                    get_template_part('template-parts/content', 'page');
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                endwhile;
            }
            ?>
        </div>	
            <?php
            if (class_exists('WooCommerce')) {

                if (is_account_page() || is_cart() || is_checkout()) {
                    if(get_theme_mod('page_sidebar_layout','right')=='right'):
                        if (is_active_sidebar('woocommerce')) {
                            get_sidebar('woocommerce');
                        }
                    endif;
                } else {
                    if(get_theme_mod('page_sidebar_layout','right')=='right'):
                        echo '<div class="col-lg-4 col-md-5 col-sm-12"><div class="sidebar s-l-space">';
                            dynamic_sidebar('sidebar-1');                               
                        echo '</div></div>';
                    endif;
                }
            } else {
                if(get_theme_mod('page_sidebar_layout','right')=='right'):
                    echo '<div class="col-lg-4 col-md-5 col-sm-12"><div class="sidebar s-l-space">';
                        dynamic_sidebar('sidebar-1');                               
                    echo '</div></div>';
                endif;
            }
            ?>
    </div>
</section>
        <?php get_footer(); ?>