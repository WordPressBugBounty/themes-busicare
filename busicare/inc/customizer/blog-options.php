<?php
/**
 * Blog Options Customizer
 *
 * @package BusiCare
 */

function busicare_blog_customizer ( $wp_customize )
{

$wp_customize->add_section('busicare_blog_section', 
	array(
	'title' => esc_html__('Blog Page' , 'busicare'),
	'panel' => 'busicare_theme_panel',
	'priority' => 4,
));

/******************** Blog Content *******************************/
$wp_customize->add_setting('busicare_blog_content', 
	array(
		'default' 			=> 'excerpt',
		'sanitize_callback' => 'busicare_sanitize_select'
		)
	);

$wp_customize->add_control('busicare_blog_content', 
	array(		
		'label' 	=> esc_html__('Choose Options', 'busicare'),		
		'section' 	=> 'busicare_blog_section',
		'type' 		=> 'radio',
		'priority' => 2,
		'choices' 	=>  array(
			'excerpt' 	=> esc_html__('Excerpt', 'busicare'),
			'content' 	=> esc_html__('Full Content', 'busicare'),
			)
		)
	);

/******************** Blog Length *******************************/
$wp_customize->add_setting( 'busicare_blog_content_length',
	array(
		'default'           => 30,
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'busicare_sanitize_number_range',
		)
);
$wp_customize->add_control( 'busicare_blog_content_length',
	array(
		'label'       => esc_html__( 'Excerpt Length', 'busicare' ),
		'section'     => 'busicare_blog_section',
		'type'        => 'number',
		'priority' => 2,
		'input_attrs' => array( 'min' => 10, 'max' => 200, 'step' => 1, 'style' => 'width: 200px;' ),
	)
);

/************************* Blog Meta Rearrange*********************************/
$default = array( 'blog_author', 'blog_category');

$choices = array(
        'blog_author' => esc_html__( 'Author', 'busicare' ),
        'blog_category' => esc_html__( 'Category', 'busicare' ),
    );
    
$wp_customize->add_setting( 'busicare_blog_meta_sort', 
    array(
        'capability'  => 'edit_theme_options',
        'sanitize_callback' => 'busicare_sanitize_array',
        'default'     => $default
    ) );

$wp_customize->add_control( new Busicare_Control_Sortable( $wp_customize, 'busicare_blog_meta_sort', 
    array(
        'label' => esc_html__( 'Drag And Drop To Rearrange', 'busicare' ),
        'section' => 'busicare_blog_section',
        'settings' => 'busicare_blog_meta_sort',
        'type'=> 'sortable',
        'choices'     => $choices
    ) ) );
}
add_action( 'customize_register', 'busicare_blog_customizer' );