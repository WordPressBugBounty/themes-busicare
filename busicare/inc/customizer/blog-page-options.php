<?php
/**
 * Single Blog Options Customizer
 *
 * @package busicare
 */
function busicare_blog_page_options_customizer ( $wp_customize )
{
	// News section title
		$wp_customize->add_setting( 'blog_page_title_option',array(
		'capability'     => 'edit_theme_options',
		'default' => esc_html__('Home','busicare'),
		'sanitize_callback' => 'busicare_sanitize_text',
		));	
		$wp_customize->add_control( 'blog_page_title_option',array(
		'label'   => esc_html__('Main Title','busicare'),
		'section' => 'busicare_blog_section',
		'type' => 'text',
		'priority' => 1,
		));

}
add_action( 'customize_register', 'busicare_blog_page_options_customizer' );