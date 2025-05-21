<?php

function busicare_enqueue_script() {

    $suffix = ( defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ) ? '' : '.min';

    wp_enqueue_style('bootstrap', BUSICARE_TEMPLATE_DIR_URI . '/css/bootstrap' . $suffix . '.css', array(), '4.0.0');
    wp_style_add_data('bootstrap', 'rtl', 'replace');

    wp_enqueue_style('busicare-style', get_stylesheet_uri());
    wp_style_add_data('busicare-style', 'rtl', 'replace');
    wp_enqueue_style('jquery-starrtment', BUSICARE_TEMPLATE_DIR_URI . '/css/jquery.smartmenus.bootstrap-4.css');
    wp_style_add_data('jquery-starrtment', 'rtl', 'replace');
    wp_enqueue_style('busicare-font-awesome', BUSICARE_TEMPLATE_DIR_URI . '/css/font-awesome/css/all' . $suffix . '.css', array(), '');
   wp_enqueue_style('owl', BUSICARE_TEMPLATE_DIR_URI . '/css/owl.carousel.css');

    if ( ! function_exists( 'busicarep_activate' ) ):
    require_once('custom_style.php');
    if (get_theme_mod('custom_color_enable') == true) {
        add_action('wp_footer', 'busicare_custom_light');
    } 
    
    wp_enqueue_style('busicarep-default', BUSICARE_TEMPLATE_DIR_URI . '/css/default.css');    
    wp_enqueue_script('busicare-custom-js', BUSICARE_TEMPLATE_DIR_URI . '/js/custom.js', array('jquery'), '', true);
    endif;
        
    //js file 
    wp_enqueue_script('busicare-video-slider-js', BUSICARE_TEMPLATE_DIR_URI . '/js/jquery.mb.YTPlayer.js');    
   
    wp_enqueue_script('owl', BUSICARE_TEMPLATE_DIR_URI. '/js/owl.carousel' . $suffix . '.js', array('jquery'), '', true);
    wp_enqueue_script('bootstrap', BUSICARE_TEMPLATE_DIR_URI . '/js/bootstrap' . $suffix . '.js', array('jquery'), '', true);
    wp_enqueue_script('jquery-menu', BUSICARE_TEMPLATE_DIR_URI . '/js/smartmenus/jquery.smartmenus.js', array('jquery'), '', true);
    wp_enqueue_script('jquery-menu-bootstrap', BUSICARE_TEMPLATE_DIR_URI . '/js/smartmenus/jquery.smartmenus.bootstrap-4.js', array('jquery'), '', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'busicare_enqueue_script');

/**
* Added skip link focus
*/
    function busicare_skip_link_fn() {
    ?>
    <script>
    /(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
    </script>
    <?php
    }
    add_action( 'wp_print_footer_scripts', 'busicare_skip_link_fn' );


/**
* Added Close toggle after last menu's link focus
*/
function busicare_close_toggle_link_fn() {?>
    <script>

    jQuery('a,input').bind('focus', function() {
             if(!jQuery(this).closest(".menu-item").length ) {
                jQuery("li.dropdown ul").css("display", "none");
            }
    });  
       
    jQuery('a,input').bind('focus', function() {
    if(!jQuery(this).closest(".menu-item").length && !jQuery(this).closest(".search-box-outer").length && ( jQuery(window).width() <= 992) ) {
                jQuery('.navbar-collapse').removeClass('show');
        }
    })
    </script>
<?php
}
add_action( 'wp_print_footer_scripts', 'busicare_close_toggle_link_fn' );

if ( ! function_exists( 'busicarep_activate' ) ):

    function busicare_enqueue_scripts(){
    wp_enqueue_style('busicare-customize-css', BUSICARE_TEMPLATE_DIR_URI . '/css/busicare-customize.css');
    }
    add_action( 'admin_enqueue_scripts', 'busicare_enqueue_scripts' );


    //Load script at admin side
    function busicare_admin_scripts() {
        wp_enqueue_script( 'busicare-admin-script', BUSICARE_TEMPLATE_DIR_URI . '/js/admin.js', array('jquery'));
    }
    add_action( 'customize_controls_enqueue_scripts', 'busicare_admin_scripts');
    
endif;
?>