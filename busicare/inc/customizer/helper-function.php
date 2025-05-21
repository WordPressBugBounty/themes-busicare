<?php 
/**
 * Helper functions.
 *
 * @package BusiCare
 */
/**
 * Get Footer widgets
 */
// 


if ( ! function_exists( 'busicare_posted_content' ) ) :
    /**
     * Content
     *
     */
    function busicare_posted_content() { 
      $blog_content  = get_theme_mod('busicare_blog_content','excerpt');
      $excerpt_length  = get_theme_mod('busicare_blog_content_length',30);

      if ( 'excerpt' == $blog_content ){
      $excerpt = busicare_the_excerpt( absint( $excerpt_length ) );
      if ( !empty( $excerpt ) ) : ?>

        
          <?php                   
          echo wp_kses_post( wpautop( $excerpt ) );
          ?>
        

      <?php endif; 
      } else{ ?>
      
        <?php the_content(); ?>
      
      <?php }
  ?>
    <?php }
endif;

if ( ! function_exists( 'busicare_the_excerpt' ) ) :

    /**
     * Generate excerpt.
     *
     */
    function busicare_the_excerpt( $length = 0, $post_obj = null ) {

        global $post;

        if ( is_null( $post_obj ) ) {
            $post_obj = $post;
        }

        $length = absint( $length );

        if ( 0 === $length ) {
            return;
        }

        $source_content = $post_obj->post_content;

        if ( ! empty( $post_obj->post_excerpt ) ) {
            $source_content = $post_obj->post_excerpt;
        }

        $source_content = preg_replace( '`\[[^\]]*\]`', '', $source_content );
        $trimmed_content = wp_trim_words( $source_content, $length, '&hellip;' );
        return $trimmed_content;

    }
endif;

if ( ! function_exists( 'busicare_button_title' ) ) :
  /**
   * Display Button on Archive/Blog Page 
   */
  function busicare_button_title() {  
    if(get_theme_mod('busicare_enable_blog_read_button',true)==true):
    $blog_button = get_theme_mod('busicare_blog_button_title','Read More');  

    if ( empty( $blog_button ) ){
      return;
    }
   if (is_rtl()) {
    echo '<a href = "'.esc_url(get_the_permalink()).'" class="more-link">'.esc_html( $blog_button ).'<i class="fa fa-long-arrow-left"></i></a>';
  }
  else{
     echo '<a href = "'.esc_url(get_the_permalink()).'" class="more-link">'.esc_html( $blog_button ).'<i class="fa fa-long-arrow-right"></i></a>';
  }
       
    endif;  
  }
endif;
 
function busicare_get_author_name( $post ){
  
  $user_id = $post->post_author;
  if( empty( $user_id ) ){
    return;
  }

  $user_info = get_userdata( $user_id );
  echo esc_html( $user_info->display_name );
}


function busicare_footer_section_hook()
{
?>
<footer class="site-footer">  
  <div class="container">
    <?php 
    if(is_active_sidebar('footer-sidebar-1') || is_active_sidebar('footer-sidebar-2') || is_active_sidebar('footer-sidebar-3') || is_active_sidebar('footer-sidebar-4')): ?>
    <div class="seprator-line"></div>   
      <?php get_template_part('sidebar','footer');
    endif;?>  
  </div>
  <?php if(get_theme_mod('ftr_bar_enable',true)==true):?>
  <div class="site-info text-center">
     <?php $busicare_footer_copyright = get_theme_mod('footer_copyright','<p>'. __('Proudly powered by', 'busicare') . ' ' . '<a href="https://wordpress.org">' . 'WordPress' . '</a>' . ' | '  . __("Theme","busicare") . ': ' .  '<a href="https://spicethemes.com/busicare-wordpress-theme/">' . 'BusiCare ' . '</a>' . __("by","busicare") .  '<a href="https://spicethemes.com/">' . ' SpiceThemes' . '</a></p>'); ?>  
     <?php echo wp_kses_post($busicare_footer_copyright);?> 
  </div>
 <style type="text/css">
    <?php
    if (get_theme_mod('testimonial_image_overlay', true) != false) {
        $testimonial_overlay_section_color = get_theme_mod('testimonial_overlay_section_color', 'rgba(1, 7, 12, 0.7)');
        ?>
        .testimonial .overlay {
            background-color:<?php echo esc_attr($testimonial_overlay_section_color); ?>;
        }
        
        <?php } ?>

    </style>
<?php endif;
$scrolltotop_setting_enable = get_theme_mod('scrolltotop_setting_enable', true);
if ($scrolltotop_setting_enable == true) {
    ?>
    <div class="scroll-up custom right"><a href="#totop"><i class="fa fa-arrow-up"></i></a></div>
<?php } ?>
</footer>
<?php  
}
add_action('busicare_footer_section_hook','busicare_footer_section_hook');


function busicare_comment($comment, $args, $depth) {
        $tag       = 'div';
        $add_below = 'comment';
   ?>
    <div class="media comment-box">
      <span class="pull-left-comment">
                <?php echo get_avatar( $comment,100, null,'comments user', array( 'class' => array( 'img-fluid comment-img') )); ?>
              </span>
        <div class="media-body">
                <div class="comment-detail">
                  <h5 class="comment-detail-title"><?php esc_html(comment_author()); ?> <time class="comment-date"><?php printf( esc_html__('%1$s  %2$s','busicare'), esc_html(get_comment_date()),  esc_html(get_comment_time()) ); ?></time></h5>
                  <?php comment_text(); ?>
                  
                  <div class="reply">
                  <?php comment_reply_link (array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                </div>
              </div>
              
                
              </div>      
        
    </div>
    <?php
}
if ( ! function_exists( 'busicare_custom_navigation' ) ) :
    function busicare_custom_navigation() {
      echo '<div class="row justify-content-center">';
        if (!is_rtl()) {
            the_posts_pagination(array(
                'prev_text' => '<i class="fa fa-angle-double-left"></i>',
                'next_text' => '<i class="fa fa-angle-double-right"></i>',
            ));
        } else {
            the_posts_pagination(array(
                'prev_text' => '<i class="fa fa-angle-double-right"></i>',
                'next_text' => '<i class="fa fa-angle-double-left"></i>',
            ));
        }
        echo '</div>';
    }
endif;
add_action( 'busicare_post_navigation', 'busicare_custom_navigation' );

if ( ! function_exists( 'busicarep_activate' ) ):

//Container Setting For Page
function busicare_container()
{
 
$container_width= "";
return $container_width;
}

//Container Setting For Blog Post
function busicare_blog_post_container()
{

$container_width= "";
return $container_width;
}

//Conainer Setting For Single Post

function busicare_single_post_container()
{
$container_width= "";
return $container_width;
}

//Preloader feature section function
function busicare_preloader_feaure_section_fn(){
if(get_theme_mod('preloader_enable',false)==true):?>
  <div id="preloader1" class="hp-loader">
        <div class="hp-preloader-cube">
        <div class="hp-cube1 hp-cube"></div>
        <div class="hp-cube2 hp-cube"></div>
        <div class="hp-cube4 hp-cube"></div>
        <div class="hp-cube3 hp-cube"></div>
    </div> </div>
  <?php endif;
}
add_action('busicare_preloader_feaure_section_hook','busicare_preloader_feaure_section_fn');

//Admin customizer preview
if ( ! function_exists( 'busicare_customizer_preview_scripts' ) ) {
    function busicare_customizer_preview_scripts() {
        wp_enqueue_script( 'busiprof-customizer-preview', trailingslashit( get_template_directory_uri() ) . 'inc/customizer/customizer-slider/js/customizer-preview.js', array( 'customize-preview', 'jquery' ) );
    }
}
add_action( 'customize_preview_init', 'busicare_customizer_preview_scripts' );


endif;