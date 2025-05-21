<?php
/**
 * General Settings Customizer
 *
 * @package busicare
 */
function busicare_general_settings_customizer ( $wp_customize )
{
	$wp_customize->add_panel('busicare_general_settings',
		array(
			'priority' => 111,
			'capability' => 'edit_theme_options',
			'title' => esc_html__('General Settings','busicare')
		)
	);
	
	// Preloader
	$wp_customize->add_section(
        'preloader_section',
        array(
            'title' =>esc_html__('Preloader','busicare'),
			'panel'  => 'busicare_general_settings',
			'priority'   => 1,
			
			)
    );

     $wp_customize->add_setting('preloader_enable',
		array(
			'default' => false,
			'sanitize_callback' => 'busicare_sanitize_checkbox'
			)
	);

	$wp_customize->add_control(new Busicare_Toggle_Control( $wp_customize, 'preloader_enable',
		array(
			'label'    => esc_html__( 'Enable/Disable Preloader', 'busicare' ),
			'section'  => 'preloader_section',
			'type'     => 'toggle',
			'priority' => 1,
		)
	));

	// Sticky Header 
	$wp_customize->add_section(
        'sticky_header_section',
        array(
            'title' =>esc_html__('Sticky Header','busicare'),
			'panel'  => 'busicare_general_settings',
			'priority'   => 2,
			
			)
    );

     $wp_customize->add_setting('sticky_header_enable',
		array(
			'default' => false,
			'sanitize_callback' => 'busicare_sanitize_checkbox'
			)
	);

	$wp_customize->add_control(new Busicare_Toggle_Control( $wp_customize, 'sticky_header_enable',
		array(
			'label'    => esc_html__( 'Enable/Disable Sticky Header', 'busicare' ),
			'section'  => 'sticky_header_section',
			'type'     => 'toggle',
			'priority' => 1,
		)
	));
// add section to manage breadcrumb settings
	$wp_customize->add_section(
        'breadcrumb_setting_section',
        array(
            'title' =>__('Breadcrumb settings','busicare'),
			'panel'  => 'busicare_general_settings',
			'priority'   => 3,
			
			)
    );
	//Dropdown button or html option
	$wp_customize->add_setting(
    'busicare_breadcrumb_type',
    array(
        'default'           =>  'yoast',
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'busicare_sanitize_select',
    ));
	$wp_customize->add_control('busicare_breadcrumb_type', array(
		'label' => esc_html__('Breadcrumb type','busicare'),
		'description' => esc_html__( 'If you use other than "default" one you will need to install and activate respective plugins Breadcrumb','busicare') . ' NavXT, Yoast SEO ' . __('and','busicare') . ' Rank Math SEO',
        'section' => 'breadcrumb_setting_section',
		'setting' => 'busicare_breadcrumb_type',
		'type'    =>  'select',
		'choices' =>  array(
			'default' => __('Default(Blank)', 'busicare'),
            'yoast'  => 'Yoast SEO',
            'rankmath'  => 'Rank Math',
			'navxt'  => 'NavXT',
			)
	));
	// After Menu
	$wp_customize->add_section(
        'after_menu_setting_section',
        array(
            'title' =>esc_html__('After Menu','busicare'),
			'panel'  => 'busicare_general_settings',
			'priority'   => 3,
			)
    );

	//Dropdown button or html option
	$wp_customize->add_setting(
    'after_menu_multiple_option',
    array(
        'default'           =>  'none',
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'busicare_sanitize_select',
    ));
	$wp_customize->add_control('after_menu_multiple_option', array(
		'label' => esc_html__('After Menu','busicare'),
        'section' => 'after_menu_setting_section',
		'setting' => 'after_menu_multiple_option',
		'type'    =>  'select',
		'choices' =>  array(
			'none'		=>	esc_html__('None', 'busicare'),
			'menu_btn' 	=> esc_html__('Button', 'busicare'),
			'html' 		=> esc_html__('HTML', 'busicare'),
			)
	));

	//After Menu Button Text
	$wp_customize->add_setting(
    'after_menu_btn_txt',
    array(
        'default'           =>  '',
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'busicare_sanitize_text',
    ));
	$wp_customize->add_control('after_menu_btn_txt', array(
		'label' => esc_html__('Button Text','busicare'),
        'section' => 'after_menu_setting_section',
		'setting' => 'after_menu_btn_txt',
		'type' => 'text',
	));

	//After Menu Button Link
	$wp_customize->add_setting(
    'after_menu_btn_link',
    array(
        'default'           =>  '',
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'esc_url_raw',
    ));
	$wp_customize->add_control('after_menu_btn_link', array(
		'label' => esc_html__('Button Link','busicare'),
        'section' => 'after_menu_setting_section',
		'setting' => 'after_menu_btn_link',
		'type' => 'text',
	));

	//Open in new tab
	$wp_customize->add_setting(
    'after_menu_btn_new_tabl',
    array(
        'default'           =>  false,
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'busicare_sanitize_checkbox',
    ) );
	
	$wp_customize->add_control('after_menu_btn_new_tabl', array(
		'label' => esc_html__('Open link in a new tab','busicare'),
        'section' => 'after_menu_setting_section',
		'setting' => 'after_menu_btn_new_tabl',
		'type'    =>  'checkbox'
	));	

	//Border Radius
	$wp_customize->add_setting( 'after_menu_btn_border',
			array(
				'default' => 0,
				'transport' => 'postMessage',
				'sanitize_callback' => 'absint'
			)
		);
		$wp_customize->add_control( new Busicare_Slider_Custom_Control( $wp_customize, 'after_menu_btn_border',
			array(
				'label' => esc_html__( 'Button Border Radius', 'busicare' ),
				'section' => 'after_menu_setting_section',
				'input_attrs' => array(
					'min' => 0,
					'max' => 30,
					'step' => 1,),)
		));

	//After Menu HTML section
	$wp_customize->add_setting('after_menu_html', 
		array(
		'default'=>	'',
			'capability'        =>  'edit_theme_options',
			'sanitize_callback'=> 'busicare_sanitize_text',
		)
	);

	$wp_customize->add_control('after_menu_html', 
		array(
			'label'=> esc_html__('HTML','busicare'),
			'section'=> 'after_menu_setting_section',
			'type'=> 'textarea',
		)
	);

	//Enable / Disable Search Icon
    $wp_customize->add_setting('search_btn_enable',
		array(
			'default' => false,
			'sanitize_callback' => 'busicare_sanitize_checkbox'
			)
	);

	$wp_customize->add_control(new Busicare_Toggle_Control( $wp_customize, 'search_btn_enable',
		array(
			'label'    => esc_html__( 'Enable/Disable Search Icon', 'busicare' ),
			'section'  => 'after_menu_setting_section',
			'type'     => 'toggle',
		)
	));

	//Enable / Disable Cart Icon
    $wp_customize->add_setting('cart_btn_enable',
		array(
			'default' => false,
			'sanitize_callback' => 'busicare_sanitize_checkbox'
			)
	);

	$wp_customize->add_control(new Busicare_Toggle_Control( $wp_customize, 'cart_btn_enable',
		array(
			'label'    => esc_html__( 'Enable/Disable Cart Icon', 'busicare' ),
			'section'  => 'after_menu_setting_section',
			'type'     => 'toggle',
		)
	));	


	// Container Width
	$wp_customize->add_section(
        'container_width_section',
        array(
            'title' =>esc_html__('Container Width','busicare'),
			'panel'  => 'busicare_general_settings',
			'priority'   => 4,
			
			)
    );

    $wp_customize->add_setting( 'container_width',
			array(
				'default' => 1140,
				'transport' => 'postMessage',
				'sanitize_callback' => 'absint'
			)
		);
		$wp_customize->add_control( new Busicare_Slider_Custom_Control( $wp_customize, 'container_width',
			array(
				'label' => esc_html__( 'Container Width', 'busicare' ),
				'section' => 'container_width_section',
				'input_attrs' => array(
					'min' => 600,
					'max' => 1920,
					'step' => 1,),)
		));


	// Scroll to top
	$wp_customize->add_section(
        'scrolltotop_setting_section',
        array(
            'title' =>esc_html__('Scroll To Top','busicare'),
			'panel'  => 'busicare_general_settings',
			'priority'   => 5,
			
			)
    );
	
    $wp_customize->add_setting('scrolltotop_setting_enable',
		array(
			'default' => true,
			'sanitize_callback' => 'busicare_sanitize_checkbox'
			)
	);

	$wp_customize->add_control(new Busicare_Toggle_Control( $wp_customize, 'scrolltotop_setting_enable',
		array(
			'label'    => esc_html__( 'Enable/Disable Scroll to Top', 'busicare' ),
			'section'  => 'scrolltotop_setting_section',
			'type'     => 'toggle',
			'priority' => 1,
		)
	));


	// Sidebar Layout
	$wp_customize->add_section('sidebar_layout_setting_section',
        array(
            'title'     => esc_html__('Sidebar Layout','busicare' ),
            'panel'     => 'busicare_general_settings',
            'priority'   => 6
        )
    );
    /*Blog/Archive sidebar layout*/
    $wp_customize->add_setting( 'blog_sidebar_layout',
        array(
            'default'           => 'right',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'busicare_sanitize_select'
        )
    );

    $wp_customize->add_control( new Busicare_Image_Radio_Button_Custom_Control( $wp_customize, 'blog_sidebar_layout',
        array(
            'label'     => esc_html__( 'Blog/Archives', 'busicare'  ),
            'section'   => 'sidebar_layout_setting_section',
            'priority'  => 1,
            'choices'   => 
            array(
                'right' => array('image' => trailingslashit( get_template_directory_uri() ) . 'assets/images/right.jpg'),
                'left' => array('image' => trailingslashit( get_template_directory_uri() ) . 'assets/images/left.jpg'),
                'full' => array('image' => trailingslashit( get_template_directory_uri() ) . 'assets/images/full.jpg'),
                'stretched' => array('image' => trailingslashit( get_template_directory_uri() ) . 'assets/images/stretched.jpg')   
            )
        )
    ));

    /*Single post sidebar layout*/
    $wp_customize->add_setting( 'single_post_sidebar_layout',
        array(
            'default'           => 'right',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'busicare_sanitize_select'
        )
    );

    $wp_customize->add_control( new Busicare_Image_Radio_Button_Custom_Control( $wp_customize, 'single_post_sidebar_layout',
        array(
            'label'     => esc_html__( 'Single Post', 'busicare'  ),
            'section'   => 'sidebar_layout_setting_section',
            'priority'  => 2,
            'choices'   => 
            array(
                'right' => array('image' => trailingslashit( get_template_directory_uri() ) . 'assets/images/right.jpg'),
                'left' => array('image' => trailingslashit( get_template_directory_uri() ) . 'assets/images/left.jpg'),
                'full' => array('image' => trailingslashit( get_template_directory_uri() ) . 'assets/images/full.jpg'),
                'stretched' => array('image' => trailingslashit( get_template_directory_uri() ) . 'assets/images/stretched.jpg')   
            )
        )
    ));
    /*Page sidebar layout*/
    $wp_customize->add_setting( 'page_sidebar_layout',
        array(
            'default'           => 'right',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'busicare_sanitize_select'
        )
    );

    $wp_customize->add_control( new Busicare_Image_Radio_Button_Custom_Control( $wp_customize, 'page_sidebar_layout',
        array(
            'label'     => esc_html__( 'Page', 'busicare'  ),
            'section'   => 'sidebar_layout_setting_section',
            'priority'  => 3,
            'choices'   => 
            array(
                'right' => array('image' => trailingslashit( get_template_directory_uri() ) . 'assets/images/right.jpg'),
                'left' => array('image' => trailingslashit( get_template_directory_uri() ) . 'assets/images/left.jpg'),
                'full' => array('image' => trailingslashit( get_template_directory_uri() ) . 'assets/images/full.jpg'),
                'stretched' => array('image' => trailingslashit( get_template_directory_uri() ) . 'assets/images/stretched.jpg')   
            )
        )
    ));

	
	/******************** Footer Widgets *******************************/
	$wp_customize->add_section(
        'fwidgets_setting_section',
        array(
            'title' =>esc_html__('Footer Widgets','busicare'),
			'panel'  => 'busicare_general_settings',
			'priority'   => 7
			)
    );

	$wp_customize->add_setting( 'footer_widgets_section',
	array(
		'default' => 3,
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' => 'busicare_sanitize_select'
	));
	$wp_customize->add_control( new Busicare_Image_Radio_Button_Custom_Control( $wp_customize, 'footer_widgets_section',
	array(
		'label' => esc_html__( 'Footer Widgets', 'busicare' ),
		'section' => 'fwidgets_setting_section',
		'choices' => array(
			2 => array( 
				'image' => trailingslashit( get_template_directory_uri() ) . 'assets/images/2-col.png',
			),
			3 => array(
				'image' => trailingslashit( get_template_directory_uri() ) . 'assets/images/3-col.png',
			),
			4 => array(
				'image' => trailingslashit( get_template_directory_uri() ) . 'assets/images/4-col.png',
			)
		)
	)
) );

	}
add_action( 'customize_register', 'busicare_general_settings_customizer' );