<?php

add_action('widgets_init', 'busicare_widgets_init');

function busicare_widgets_init() {

    /* sidebar */

    register_sidebar(array(
        'name' => esc_html__('Sidebar widget area', 'busicare'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Sidebar widget area', 'busicare'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer widget', 'busicare') . ' 1',
        'id' => 'footer-sidebar-1',
        'description' => esc_html__('Footer widget area', 'busicare')  . ' 1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer widget', 'busicare')  . ' 2',
        'id' => 'footer-sidebar-2',
        'description' => esc_html__('Footer widget area', 'busicare')  . ' 2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer widget', 'busicare')  . ' 3',
        'id' => 'footer-sidebar-3',
        'description' => esc_html__('Footer widget area', 'busicare')  . ' 3',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer widget', 'busicare') . ' 4',
        'id' => 'footer-sidebar-4',
        'description' => esc_html__('Footer widget', 'busicare') . ' 4',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    // Footer Bar
    register_sidebar( array(
        'name' => esc_html__( 'Footer Bar', 'busicare' )  . ' 1',
        'id' => 'footer-bar-1',
        'description' => esc_html__( 'Footer Bar', 'busicare' )  . ' 1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    
    register_sidebar(array(
        'name' => esc_html__('WooCommerce sidebar widget area', 'busicare'),
        'id' => 'woocommerce',
        'description' => esc_html__('WooCommerce sidebar widget area', 'busicare'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
