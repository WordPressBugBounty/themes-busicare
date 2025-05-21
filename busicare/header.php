<?php
/**
 * The header for our theme
 *
 * @package BusiCare
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
   <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <?php if (is_singular() && pings_open(get_queried_object())) : 
             echo '<link rel="pingback" href=" '.esc_url(get_bloginfo( 'pingback_url' )).' ">';
        endif;?>
        <?php wp_head(); ?>   
    </head>
    <?php
    $busicare_layout_selector = get_theme_mod('busicare_layout_style', 'wide');
    if ($busicare_layout_selector == "boxed") {
        $busicare_class = "boxed";
    } else {
        $busicare_class = "wide";
    }
    ?>
<body <?php body_class($busicare_class." ".get_theme_mod('hp_color_skin','light')); ?> >
<?php wp_body_open(); ?>
<div id="page" class="site">
      <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'busicare' ); ?></a>
       <div id="wrapper">
        <?php        
        if ( function_exists( 'busicarep_activate' ) ):
            do_action('busicare_plus_preloader_feaure_section_hook');
            do_action('busicare_plus_header_feaure_section_hook');
            global $template;
            global $woocommerce;
            if(basename($template)!='template-business.php'):
                busicare_breadcrumbs();
            endif;
        else:
         do_action('busicare_preloader_feaure_section_hook');
         get_template_part('inc/header/header-nav');
            global $template;
            global $woocommerce;
            if(basename($template)!='template-business.php'):
                busicare_breadcrumbs();
                endif;
        endif;?>
            <div id="content">
       