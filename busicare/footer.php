<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BusiCare
 */
if ( ! function_exists( 'busicarep_activate' ) ){
	do_action('busicare_footer_section_hook');
}else{
	do_action('busicare_plus_footer_section_hook');
}
?>
</div>
</div>
</div>
<?php wp_footer(); ?>	
</body>
</html>