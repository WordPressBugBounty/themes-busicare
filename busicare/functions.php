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

        // html5 support
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style'
        ) );

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
		 // Custom header.
	 add_theme_support( 'custom-header', array(
    'default-image'      => '',
    'width'              => 0,
    'height'             => 0,
    'flex-width'         => true,
    'flex-height'        => true,
    'uploads'            => true,
    'header-text'        => false,
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

//Edit link 
if (!function_exists('busicare_edit_link')) :
    function busicare_edit_link($view = 'default')
    {
        global $post;
            edit_post_link(
                sprintf(
                    wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                        __('Edit <span class="screen-reader-text">%s</span>', 'busicare'),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    get_the_title()
                ),
                '<span class="edit-link"><i class="fa fa-edit"></i>',
                '</span>'
            );
    } 
endif;


/* ---------------------------------------------- /*
 * Single Post Navigation
/* ---------------------------------------------- */

function busicare_single_posts_nav(){

    $next_post = get_next_post();
    $prev_post = get_previous_post();

    if(function_exists( 'busicarep_activate' )){
        $class = "bs-pagination-single bs-pagi-design bs-pro";
    } else {
        $class = "bs-pagination-single bs-pagi-design";
    }

    if ( $next_post || $prev_post ) : ?>

        <!-- Pagination -->       
        <article class="<?php echo esc_attr($class);?>">
            <?php if ( ! empty( $prev_post ) ) : ?>
            <div class="bs-post-previous">

                <a href="<?php echo esc_url(get_permalink( $prev_post )); ?>" class="bs_prvs_arrow" title="<?php esc_attr_e('Previous post arrow','busicare'); ?>"><i class="fa-solid fa-arrow-left-long"></i></a>

                <div class="bs-post-content">
                    <a class="bs_prvs_post" href="<?php echo esc_url(get_permalink( $prev_post )); ?>" title="<?php esc_attr_e('Previous post','busicare'); ?>"><?php esc_html_e('Previous post','busicare');?></a>
                    <h4 class="bs-entry-title">
                    <a class="bs-title" href="<?php echo esc_url(get_permalink( $prev_post )); ?>" title="<?php echo esc_attr(get_the_title( $prev_post )); ?>"><?php echo esc_html(get_the_title( $prev_post )); ?></a>
                    </h4>
                </div>
                <?php if(function_exists( 'busicarep_activate' )){ 
                 if ( get_the_post_thumbnail( $prev_post ) ) : ?>
                    <figure class="bs-post-thumbnail">
                        <?php echo wp_kses_post( get_the_post_thumbnail( $prev_post->ID, 'full', array('class' => 'img-fluid') ) ); ?>
                    </figure>
                <?php endif;  } ?>
            </div>
            <?php endif; 
            if ( ! empty( $next_post ) ) : ?>
            <div class="bs-post-next">
                <?php if(function_exists( 'busicarep_activate' )){ 
                 if ( get_the_post_thumbnail( $next_post ) ) : ?>
                    <figure class="bs-post-thumbnail">
                        <?php echo wp_kses_post( get_the_post_thumbnail( $next_post->ID, 'full', array('class' => 'img-fluid') ) ); ?>
                    </figure>
                <?php endif;  } ?>
                 <div class="bs-post-content">
                    <a class="bs_nxt_post" href="<?php echo esc_url(get_permalink( $next_post )); ?>" title="<?php esc_attr_e('Next post','busicare'); ?>"><?php esc_html_e('Next post','busicare');?></a>
                    <h4 class="bs-entry-title">
                        <a class="bs-title" href="<?php echo esc_url(get_permalink( $next_post )); ?>" title="<?php echo esc_attr(get_the_title( $next_post )); ?>"><?php echo esc_html(get_the_title( $next_post )); ?></a>
                    </h4>
                </div>
                <a href="<?php echo esc_url(get_permalink( $next_post )); ?>" class="bs_nxt_arrow" title="<?php esc_attr_e('Next post arrow','busicare'); ?>"><i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <?php endif; ?>
        </article>
      <!-- /Pagination -->       
    <?php endif;
}

/* =============================================================
    *                    Related Post
  ================================================================ */

function busicare_single_post_related() {

    $busicare_related_post_title = get_theme_mod('busicare_related_post_title',__('Related Posts','busicare'));

    if(get_theme_mod('busicare_enable_related_post',true) == true):

    // Get the current post's ID
    $current_post_id = get_the_ID();
    // Get the categories of the current post
    $categories = get_the_category($current_post_id);
    if ($categories!=null) {
        $category_ids = array();
        foreach ($categories as $category) {
            $category_ids[] = $category->term_id;
        }
    }
    
    $args = array(
        'ignore_sticky_posts' => 1,
        'post__not_in' => array($current_post_id), // Exclude the current post
        'category__in' => $category_ids, // Include posts from the same categories
        'posts_per_page' => 3,
    );

    $query_args = new WP_Query($args); 
    if ($query_args->have_posts())  { ?>

<article class="related-posts bs-design">
   <?php
   if(!empty($busicare_related_post_title)):?>
   <div class="comment-title">
      <h3><?php echo esc_html(get_theme_mod('busicare_related_post_title',__('Related Posts','busicare')));?></h3>
   </div>
<?php endif;?>

   <div class="row">
         <?php

         while ($query_args->have_posts()) : $query_args->the_post(); ?>

         <div class="col-lg-4 col-md-6 col-sm-12">
            <article class="post">
               <figure class="post-thumbnail">
                   <?php
                        if(has_post_thumbnail()):?>
                        <a href="<?php the_permalink();?>"><?php the_post_thumbnail('full',array('class'=>'img-fluid'));?></a>
                     <?php endif;?>                   
                </figure>
                <div class="post-content">
                    <div class="entry-date ">
                        <a href="<?php echo esc_url( home_url('/') ); ?>/<?php echo esc_html(date( 'Y/m' , strtotime( get_the_date() )) ); ?>"><time><?php echo esc_html(get_the_date()); ?></time>
                        </a>
                    </div>
                    <header class="entry-header">
                        <h4 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                    </header>
                  <?php
                  if(has_category()):?>
                    <div class="entry-meta">
                        <span class="cat-links">
                            <?php the_category( ', ' );?>
                        </span>
                    </div>
               <?php endif;?>
                 
               </div>
            </article>
         </div>
         <?php endwhile;  wp_reset_postdata();?>
     
   </div>
</article>
<?php }
 endif;
}
add_action('busicare_single_post_hook','busicare_single_post_related');