<?php

/**
 * Single Blog Options Customizer
 *
 * @package BusiCare
 */
function busicare_single_blog_customizer($wp_customize) {
    
    $wp_customize->add_section('busicare_single_blog_section',
            array(
                'title' => esc_html__('Single Post', 'busicare'),
                'panel' => 'busicare_theme_panel',
                'priority' => 5
    ));


    /*     * *********************** Meta Hide Show ******************************** */

    $wp_customize->add_setting('busicare_enable_single_post_category',
            array(
                'default' => true,
                'sanitize_callback' => 'busicare_sanitize_checkbox',
            )
    );
    $wp_customize->add_control(new Busicare_Toggle_Control($wp_customize, 'busicare_enable_single_post_category',
                    array(
                'label' => esc_html__('Hide/Show Category', 'busicare'),
                'type' => 'toggle',
                'section' => 'busicare_single_blog_section',
                'priority' => 4,
                    )
    ));

    $wp_customize->add_setting('busicare_enable_single_post_date',
            array(
                'default' => true,
                'sanitize_callback' => 'busicare_sanitize_checkbox',
            )
    );
    $wp_customize->add_control(new Busicare_Toggle_Control($wp_customize, 'busicare_enable_single_post_date',
                    array(
                'label' => esc_html__('Hide/Show Date', 'busicare'),
                'type' => 'toggle',
                'section' => 'busicare_single_blog_section',
                'priority' => 6,
                    )
    ));    
    $wp_customize->add_setting('busicare_enable_single_post_admin',
            array(
                'default' => true,
                'sanitize_callback' => 'busicare_sanitize_checkbox',
            )
    );
    $wp_customize->add_control(new Busicare_Toggle_Control($wp_customize, 'busicare_enable_single_post_admin',
                    array(
                'label' => esc_html__('Hide/Show Author Name', 'busicare'),
                'type' => 'toggle',
                'section' => 'busicare_single_blog_section',
                'priority' => 5,
                    )
    ));

    $wp_customize->add_setting('busicare_enable_single_post_tag',
            array(
                'default' => true,
                'sanitize_callback' => 'busicare_sanitize_checkbox',
            )
    );
    $wp_customize->add_control(new Busicare_Toggle_Control($wp_customize, 'busicare_enable_single_post_tag',
                    array(
                'label' => esc_html__('Hide/Show Tag', 'busicare'),
                'type' => 'toggle',
                'section' => 'busicare_single_blog_section',
                'priority' => 8,
                    )
    ));
    $wp_customize->add_setting('busicare_enable_single_post_admin_details',
            array(
                'default' => true,
                'sanitize_callback' => 'busicare_sanitize_checkbox',
            )
    );
    $wp_customize->add_control(new Busicare_Toggle_Control($wp_customize, 'busicare_enable_single_post_admin_details',
                    array(
                'label' => esc_html__('Hide/Show Author Details', 'busicare'),
                'type' => 'toggle',
                'section' => 'busicare_single_blog_section',
                'priority' => 9,
                    )
    ));

    /******************** Logo Length *******************************/
    $wp_customize->add_setting( 'busicare_logo_length',
            array(
                'default' => 225,
                'transport' => 'postMessage',
                'sanitize_callback' => 'absint'
            )
        );
        $wp_customize->add_control( new Busicare_Slider_Custom_Control( $wp_customize, 'busicare_logo_length',
            array(
                'label' => esc_html__( 'Logo Width', 'busicare' ),
                'priority' => 50,
                'section' => 'title_tagline',
                'input_attrs' => array(
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ),
            )
        ) );

}

add_action('customize_register', 'busicare_single_blog_customizer');