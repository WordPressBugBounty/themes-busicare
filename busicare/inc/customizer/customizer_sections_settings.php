<?php

/**
 * Customize for taxonomy with dropdown, extend the WP customizer
 */
if (!class_exists('WP_Customize_Control'))
    return NULL;

function busicare_home_page_sanitize_text($input) {
    return wp_kses_post(force_balance_tags($input));
}

/* * *********************** Theme Customizer with Sanitize function ******************************** */

function busicare_theme_option($wp_customize) {

    function busicare_sanitize_text($input) {
        return wp_kses_post(force_balance_tags($input));
    }   

    function busicare_sanitize_checkbox($checked) {
        // Boolean check.
        return ( ( isset($checked) && true == $checked ) ? true : false );
    }

    function busicare_sanitize_select($input, $setting) {

        //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
        $input = sanitize_key($input);

        //get the list of possible radio box options 
        $choices = $setting->manager->get_control($setting->id)->choices;

        //return input if valid or return default option
        return ( array_key_exists($input, $choices) ? $input : $setting->default );
    }

    if (!function_exists('busicare_sanitize_number_range')) :

        /**
         * Sanitize number range.
         *
         * @since 1.0.0
         *
         * @see absint() https://developer.wordpress.org/reference/functions/absint/
         *
         * @param int  $input Number to check within the numeric range defined by the setting.
         * @param WP_Customize_Setting $setting WP_Customize_Setting instance.
         * @return int|string The number, if it is zero or greater and falls within the defined range; otherwise, the setting default.
         */
        function busicare_sanitize_number_range($input, $setting) {

            // Ensure input is an absolute integer.
            $input = absint($input);

            // Get the input attributes associated with the setting.
            $atts = $setting->manager->get_control($setting->id)->input_attrs;

            // Get min.
            $min = ( isset($atts['min']) ? $atts['min'] : $input );

            // Get max.
            $max = ( isset($atts['max']) ? $atts['max'] : $input );

            // Get Step.
            $step = ( isset($atts['step']) ? $atts['step'] : 1 );

            // If the input is within the valid range, return it; otherwise, return the default.
            return ( $min <= $input && $input <= $max && is_int($input / $step) ? $input : $setting->default );
        }

    endif;

    $wp_customize->add_panel('busicare_theme_panel',
            array(
                'priority' => 2,
                'capability' => 'edit_theme_options',
                'title' => esc_html__('Blog Options', 'busicare')
            )
    );

    function busicare_sanitize_array($value) {
        if (is_array($value)) {
            foreach ($value as $key => $subvalue) {
                $value[$key] = esc_attr($subvalue);
            }
            return $value;
        }
        return esc_attr($value);
    }
}

add_action('customize_register', 'busicare_theme_option');

if (isset($wp_customize->selective_refresh)) {
    $wp_customize->selective_refresh->add_partial(
            'blogname',
            array(
                'selector' => '.site-title a',
                'settings' => 'blogname',
                'render_callback' => 'busicare_customize_partial_blogname',
            )
    );
    $wp_customize->selective_refresh->add_partial(
            'blogdescription',
            array(
                'selector' => '.site-description',
                'settings' => 'blogdescription',
                'render_callback' => 'busicare_customize_partial_blogdescription',
            )
    );
}

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function busicare_customize_partial_blogname() {
    return get_theme_mod('blogname');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function busicare_customize_partial_blogdescription() {
    return get_theme_mod('blogdescription');
}

function busicare_sanitize_radio($input, $setting) {

    //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
    $input = sanitize_key($input);

    //get the list of possible radio box options 
    $choices = $setting->manager->get_control($setting->id)->choices;

    //return input if valid or return default option
    return ( array_key_exists($input, $choices) ? $input : $setting->default );
}