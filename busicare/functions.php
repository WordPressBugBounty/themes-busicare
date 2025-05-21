<?php
define('BUSICARE_TEMPLATE_DIR_URI',get_template_directory_uri()); 
define('BUSICARE_TEMPLATE_DIR',get_template_directory());
define('BUSICARE_THEME_FUNCTIONS_PATH',BUSICARE_TEMPLATE_DIR.'/functions');

// Global variables define
if ( ! function_exists( 'wp_body_open' ) ) {

	function wp_body_open() {
		/**
		 * Triggered after the opening <body> tag.
		 */
		do_action( 'wp_body_open' );
	}
}

// Theme functions file including
require( BUSICARE_TEMPLATE_DIR . '/inc/font/font.php');
require( BUSICARE_TEMPLATE_DIR . '/inc/scripts/script.php');
require( BUSICARE_TEMPLATE_DIR . '/inc/menu/default_menu_walker.php');
require( BUSICARE_TEMPLATE_DIR . '/inc/menu/busicare_nav_walker.php');
require( BUSICARE_TEMPLATE_DIR . '/inc/customizer/custom-control.php');
require( BUSICARE_TEMPLATE_DIR . '/inc/customizer/customizer_sections_settings.php');
require( BUSICARE_TEMPLATE_DIR . '/inc/customizer/helper-function.php');
require( BUSICARE_TEMPLATE_DIR . '/inc/customizer/single-blog-options.php');
require( BUSICARE_TEMPLATE_DIR . '/inc/widgets/sidebars.php');
require( BUSICARE_TEMPLATE_DIR . '/inc/customizer/blog-options.php');
require_once BUSICARE_TEMPLATE_DIR . '/class-tgm-plugin-activation.php';
require_once BUSICARE_TEMPLATE_DIR . '/inc/customizer/customizer-slider/customizer-slider.php';
require_once BUSICARE_TEMPLATE_DIR . '/inc/customizer/customizer-image-radio/customizer-image-radio.php';
if ( ! function_exists( 'busicarep_activate' ) ):
require( BUSICARE_TEMPLATE_DIR . '/inc/breadcrumbs/breadcrumbs.php');
require( BUSICARE_TEMPLATE_DIR . '/inc/customizer/customizer-pro-feature.php');
require( BUSICARE_TEMPLATE_DIR . '/inc/customizer/general-settings.php');
require( BUSICARE_TEMPLATE_DIR . '/inc/customizer/customizer_theme_style.php');
require( BUSICARE_TEMPLATE_DIR . '/inc/customizer/blog-page-options.php');
require( BUSICARE_TEMPLATE_DIR . '/inc/custom-style/custom-css.php');
require( BUSICARE_TEMPLATE_DIR . '/inc/customizer/customizer-recommended-plugin.php');
require( BUSICARE_TEMPLATE_DIR . '/inc/customizer/customizer_color_back_settings.php');
require( BUSICARE_TEMPLATE_DIR . '/inc/customizer/customizer_typography.php');
endif;



if (!function_exists('busicare_theme_setup')) :

    function busicare_theme_setup() {

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         */

        load_theme_textdomain('busicare', BUSICARE_TEMPLATE_DIR . '/languages');

        // Add default posts and comments RSS feed links to head.

        add_theme_support('automatic-feed-links');


        //Add selective refresh for sidebar widget
        add_theme_support('customize-selective-refresh-widgets');

        /*
         * Let WordPress manage the document title.
         */
        add_theme_support('title-tag');


        // supports featured image
        add_theme_support('post-thumbnails');



        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus(array(
            'busicare-primary' => esc_html__('Primary Menu', 'busicare')
        ));


        // woocommerce support
        add_theme_support('woocommerce');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');

        //Custom background support
        add_theme_support('custom-background');
        

        //Custom logo
        add_theme_support('custom-logo', array(
            'height' => 31,
            'width' => 156,
            'flex-width' => true,
            'flex-height' => true,
            'header-text' => array('site-title', 'site-description'),
        ));

        //About Theme
        if(!function_exists( 'busicarep_activate' )) :
        $busicare_theme = wp_get_theme(); // gets the current theme
        if ( 'BusiCare' == $busicare_theme->name) 
        {
            if ( is_admin() ) 
            {
                require BUSICARE_TEMPLATE_DIR . '/admin/admin-init.php';
            }
        }
        endif;
        /**
         * Set the content width in pixels, based on the theme's design and stylesheet.
         *
         * Priority 0 to make it available to lower priority callbacks.
         *
         * @global int $content_width
         */
        function busicare_content_width() {

            $GLOBALS['content_width'] = apply_filters( 'busicare_content_width', 696 );
        }
        add_action( 'after_setup_theme', 'busicare_content_width', 0 );
    }

endif;
add_action('after_setup_theme', 'busicare_theme_setup');


function busicare_logo_class($html) {
    $html = str_replace('custom-logo-link', 'navbar-brand custom-logo', $html);
    return $html;
}
add_filter('get_custom_logo', 'busicare_logo_class');

function busicare_new_content_more($more) {
    global $post;
    return '<p><a href="' . esc_url(get_permalink()) . "#more-{$post->ID}\" class=\"more-link btn-ex-small btn-border\">" . esc_html__('Read More', 'busicare') . "</a></p>";
}
add_filter('the_content_more_link', 'busicare_new_content_more');

add_action( 'admin_init', 'busicare_customizer_css' );
function busicare_customizer_css(){
    wp_enqueue_style( 'busicare-pro-info', BUSICARE_TEMPLATE_DIR_URI . '/css/pro-details.css' );
}
if ( ! function_exists( 'busicarep_activate' ) ):
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function busicare_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		 // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => false,
        ),
        array(
            'name'      => 'Spice Box',
            'slug'      => 'spicebox',
            'required'  => false,
        ),
        array(
                'name'      => 'Unique Headers',
                'slug'      => 'unique-headers',
                'required'  => false,
        ),
        array(
                'name'      => 'Yoast SEO',
                'slug'      => 'wordpress-seo',
                'required'  => false,
        ),
        array(
                'name'      => 'WooCommerce',
                'slug'      => 'woocommerce',
                'required'  => false,
        ),
        array(
                'name'      => 'Spice Post Slider',
                'slug'      => 'spice-post-slider',
                'required'  => false,
        ),
        array(
           'name'     => 'Spice Social Share',
           'slug'     => 'spice-social-share',
           'required'  => false,
        ),
        array(
            'name'     => 'Seo Optimized Images',
            'slug'     => 'seo-optimized-images',
            'required'  => false,
            )		
		
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'busicare_register_required_plugins' );
endif;