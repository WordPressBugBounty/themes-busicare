<?php
$theme = wp_get_theme();
// Typography
$busicare_enable_header_typography = get_theme_mod('enable_header_typography', false);
$busicare_enable_slider_title_typography = get_theme_mod('enable_slider_title_typography', false);
$busicare_enable_section_title_typography = get_theme_mod('enable_section_title_typography', false);
$busicare_enable_content_typography = get_theme_mod('enable_content_typography', false);
$busicare_enable_post_typography = get_theme_mod('enable_post_typography', false);
$busicare_enable_shop_page_typography = get_theme_mod('enable_shop_page_typography', false);
$busicare_enable_sidebar_typography = get_theme_mod('enable_sidebar_typography', false);
$busicare_enable_footer_widget_typography = get_theme_mod('enable_footer_widget_typography', false);

/* Site title and tagline */
if ($busicare_enable_header_typography == true) {
    ?>
    <style>
        .site-title {
            font-size:<?php echo intval(get_theme_mod('site_title_fontsize', '36')) . 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('site_title_fontfamily', 'Open Sans')); ?> !important;
            line-height:<?php echo intval(get_theme_mod('site_title_line_height','39')).'px'; ?> !important;
        }

        .site-description {
            font-size:<?php echo intval(get_theme_mod('site_tagline_fontsize', '20')) . 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('site_tagline_fontfamily', 'Open Sans')); ?> !important;
            line-height:<?php echo intval(get_theme_mod('site_tagline_line_height','30')).'px'; ?> !important;
        }
        .navbar .nav > li > a {
            font-size:<?php echo intval(get_theme_mod('menu_title_fontsize', '15')) . 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('menu_title_fontfamily', 'Open Sans')); ?> !important;
            line-height:<?php echo intval(get_theme_mod('menu_line_height','30')).'px'; ?> !important;
        }

        .dropdown-menu .dropdown-item{
            font-size:<?php echo intval(get_theme_mod('submenu_title_fontsize', '15')) . 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('submenu_title_fontfamily', 'Open Sans')); ?> !important;
            line-height:<?php echo intval(get_theme_mod('submenu_line_height','30')).'px'; ?> !important;
        }
    </style>
    <?php
}

/* Section Title */
if ($busicare_enable_section_title_typography == true) {
    ?>
    <style>
        .section-header  h2:not(.cta-2-title), .contact .section-header h2 {
            font-size:<?php echo intval(get_theme_mod('section_title_fontsize', '36')) . 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('section_title_fontfamily', 'Open Sans')); ?> !important;
            line-height:<?php echo intval(get_theme_mod('section_title_line_height','54')).'px'; ?> !important;
    }
     

        .section-header .section-subtitle{
            font-size:<?php echo intval(get_theme_mod('section_subtitle_fontsize', '36')) . 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('section_subtitle_fontfamily', 'Open Sans')); ?> !important;
           line-height:<?php echo intval(get_theme_mod('section_description_line_height','30')).'px'; ?> !important;
    }
    </style>
    <?php
}

/* Slider Title */
if ($busicare_enable_slider_title_typography == true) {
    ?>
    <style>
        .slider-caption h2  {
            font-size:<?php echo intval(get_theme_mod('slider_title_fontsize', '50')) . 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('slider_title_fontfamily', 'Open Sans')); ?> !important;
            line-height:<?php echo intval(get_theme_mod('slider_line_height','85')).'px'; ?> !important;
        }
    </style>
    <?php
}


/* Content */
if ($busicare_enable_content_typography == true) {
    ?>
    <style>
        /* Heading H1 */
        .about h1, body:not(.woocommerce-page) .entry-content h1, .service h1, .contact h1, .error-page h1, .cta_main h1 {
            font-size:<?php echo intval(get_theme_mod('h1_typography_fontsize', '36')) . 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('h1_typography_fontfamily', 'Open Sans')); ?> !important;
            line-height:<?php echo intval(get_theme_mod('h1_line_height','54')).'px'; ?> !important;;
        }

        /* Heading H2 */
        body:not(.woocommerce-page) .entry-content h2:not(.section-title), .about h2, .service h2, .contact h2, .cta-2 h2, .section-module.about h2{
            font-size:<?php echo intval(get_theme_mod('h2_typography_fontsize', '30')) . 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('h2_typography_fontfamily', 'Open Sans')); ?> !important;
            line-height:<?php echo intval(get_theme_mod('h2_line_height','45')).'px'; ?> !important;
    
        }

        .error-page h2{
            font-size:<?php echo intval(get_theme_mod('h2_typography_fontsize', '30')) . 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('h2_typography_fontfamily', 'Open Sans')); ?> !important;
            line-height:<?php echo intval(get_theme_mod('h2_line_height','45')).'px'; ?> !important;    
        }

        /* Heading H3 */
        body:not(.woocommerce-page) .entry-content h3, .related-posts h3, .about h3, .service h3, .contact h3, .contact-form-map .title h3, .section-module.about h3, .comment-form .comment-respond h3, .home-blog .entry-header h3.entry-title a {
            font-size:<?php echo intval(get_theme_mod('h3_typography_fontsize', '24')) . 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('h3_typography_fontfamily', 'Open Sans')); ?> !important;
            line-height:<?php echo intval(get_theme_mod('h3_line_height','36')).'px'; ?> !important;
    
        }
        .comment-title h3{
            font-size:<?php echo intval(get_theme_mod('h3_typography_fontsize', '24') + 4 ). 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('h3_typography_fontfamily', 'Open Sans')); ?> !important;
            line-height:<?php echo intval(get_theme_mod('h3_line_height','36')).'px'; ?> !important;
        }

        /* Heading H4 */
        .entry-content h4, .entry-header h4, .team-grid h4, .entry-header h4 a, .contact-widget h4, .about h4, .testimonial .testmonial-block .name, .service h4, .contact h4, .portfolio h4, .section-module.about h4, #related-posts-carousel .entry-header h4 a, .blog-author h4.name, .error-page h4 {

            font-size:<?php echo intval(get_theme_mod('h4_typography_fontsize', '20')) . 'px'; ?> !important;
            line-height:<?php echo intval(get_theme_mod('h4_line_height','30')).'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('h4_typography_fontfamily', 'Open Sans')); ?> !important;
            
        }

        /* Heading H5 */
        .product-price h5, .blog-author h5, .comment-detail h5, .entry-content h5, .about h5, .service h5, .services h5:not(.section-subtitle), .services h5:not(.section-subtitle) a, .contact h5, .section-module.about h5 {
            font-size:<?php echo intval(get_theme_mod('h5_typography_fontsize', '18')) . 'px'; ?> !important;
            line-height:<?php echo intval(get_theme_mod('h5_line_height','24')).'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('h5_typography_fontfamily', 'Open Sans')); ?> !important;
           
        }

        /* Heading H6 */
        .entry-content h6, .about h6, .service h6, .contact h6, .section-module.about h6 {
            font-size:<?php echo intval(get_theme_mod('h6_typography_fontsize', '14')) . 'px'; ?> !important;
            line-height:<?php echo intval(get_theme_mod('h6_line_height','21')).'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('h6_typography_fontfamily', 'Open Sans')); ?> !important;
            
        }

        /* Paragraph */
        .entry-content p, .about-content p, .funfact p, .woocommerce-product-details__short-description p, .wpcf7 .wpcf7-form p label, .testimonial .testmonial-block .designation, .about p, .entry-content li, .contact address, .contact p, .service p, .contact p, .sponsors p, .cta-2 p,.team-grid .card-body p{
            font-size:<?php echo intval(get_theme_mod('p_typography_fontsize', '15')) . 'px'; ?> !important;
            line-height:<?php echo intval(get_theme_mod('p_line_height','30')).'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('p_typography_fontfamily', 'Open Sans')); ?> !important;
            
        }
        .slider-caption p{
            font-size:<?php echo intval(get_theme_mod('p_typography_fontsize', '15')) . 'px'; ?> !important;
            line-height:<?php echo intval(get_theme_mod('p_line_height','30')).'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('p_typography_fontfamily', 'Open Sans')); ?> !important;
            
        }

        .portfolio .tab a, .portfolio li a{
            font-size:<?php echo intval(get_theme_mod('p_typography_fontsize', '15')) . 'px'; ?> !important;
            line-height:<?php echo intval(get_theme_mod('p_line_height','30')).'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('p_typography_fontfamily', 'Open Sans')); ?> !important;
            
        }


        /* Button Text */
        .btn-combo a, .mx-auto a, .pt-3 a, .wpcf7-form .wpcf7-submit,  .woocommerce .button, .btn-default, .btn-light, .sidebar .woocommerce button[type="submit"], .site-footer .woocommerce button[type="submit"], .sidebar .widget .search-submit, #commentform input[type="submit"], .woocommerce .added_to_cart,.busicare_header_btn,.search-submit,.wp-block-button__link,.more-link {
            font-size:<?php echo intval(get_theme_mod('button_text_typography_fontsize', '15')) . 'px'; ?> !important;
            line-height:<?php echo intval(get_theme_mod('button_line_height','30')).'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('button_text_typography_fontfamily', 'Open Sans')); ?> !important;
            
        }
    </style>
    <?php
}

/* Blog / Archive / Single Post */
if ($busicare_enable_post_typography == true) {
    ?>
    <style>
        .entry-header h2 a, .entry-header h3.entry-title a:not(.home-blog-title){
            font-size:<?php echo intval(get_theme_mod('post-title_fontsize', '36')) . 'px'; ?> !important;
            line-height:<?php echo intval(get_theme_mod('post-title_line_height','54')).'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('post-title_fontfamily', 'Open Sans')); ?> !important;
            
        }
    </style>
    <?php
}


/* Shop Page */
if ($busicare_enable_shop_page_typography == true) {
    ?>
    <style>
        /* Heading H1 */
        .woocommerce div.product h1.product_title{
            font-size:<?php echo intval(get_theme_mod('shop_h1_typography_fontsize', '36')) . 'px'; ?> !important;
            line-height:<?php echo intval(get_theme_mod('shop_h1_line_height','54')).'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('shop_h1_typography_fontfamily', 'Open Sans')); ?> !important;
        }

        /* Heading H2 */
        .woocommerce .products h2, .woocommerce .cart_totals h2, .woocommerce-Tabs-panel h2, .woocommerce .cross-sells h2, .woocommerce div.product h2.product_title{
            font-size:<?php echo intval(get_theme_mod('shop_h2_typography_fontsize', '18')) . 'px'; ?> !important;
            line-height:<?php echo intval(get_theme_mod('shop_h2_line_height','30')).'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('shop_h2_typography_fontfamily', 'Open Sans')); ?> !important;
            
        }

        /* Heading H3 */
        .woocommerce .checkout h3 {
            font-size:<?php echo intval(get_theme_mod('shop_h3_typography_fontsize', '24')) . 'px'; ?> !important;
            line-height:<?php echo intval(get_theme_mod('shop_h3_line_height','36')).'px'; ?> !important;
           font-family:<?php echo esc_attr(get_theme_mod('shop_h3_typography_fontfamily', 'Open Sans')); ?> !important;
           
        }
    </style>
    <?php
}


/* Sidebar widgets */
if ($busicare_enable_sidebar_typography == true) {
    ?>
    <style>
        .sidebar .widget-title, .sidebar .widget h2,body .sidebar .widget.widget_block h1,body .sidebar .widget.widget_block h2,body .sidebar .widget.widget_block h3,body .sidebar .widget.widget_block h4,body .sidebar .widget.widget_block h5,body .sidebar .widget.widget_block h6{
            font-size:<?php echo intval(get_theme_mod('sidebar_fontsize', '24')) . 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('sidebar_fontfamily', 'Open Sans')); ?> !important;
            line-height:<?php echo intval(get_theme_mod('sidebar_line_height','36')).'px'; ?> !important;
        }
        /* Sidebar Widget Content */
        .sidebar .widget_recent_entries a, .sidebar a, .sidebar p {
            font-size:<?php echo intval(get_theme_mod('sidebar_widget_content_fontsize', '15') ). 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('sidebar_widget_content_fontfamily', 'Open Sans')); ?> !important;
             line-height:<?php echo intval(get_theme_mod('sidebar_widget_content_line_height','30')).'px'; ?> !important;
        }
    </style>
    <?php
}


/* Footer Widget */
if ($busicare_enable_footer_widget_typography == true) {
    ?>
    <style>
        /* Footer Widget Title */
        .site-footer .widget-title, .site-footer .widget h2  {
            font-size:<?php echo intval(get_theme_mod('footer_widget_title_fontsize', '24')) . 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('footer_widget_title_fontfamily', 'Open Sans')); ?> !important;            
            line-height:<?php echo intval(get_theme_mod('footer_widget_title_line_height','36')).'px'; ?> !important;
        }
        /* Footer Widget Content */
        .footer-sidebar .widget_recent_entries a, .footer-sidebar.footer-typo a, .footer-sidebar.footer-typo p, .footer-sidebar  .textwidget, .footer-sidebar  .head-contact-info li, .footer-sidebar .head-contact-info li a, .footer-sidebar em  {
            font-size:<?php echo intval(get_theme_mod('footer_widget_content_fontsize', '15')) . 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('footer_widget_content_fontfamily', 'Open Sans')); ?> !important;
           line-height:<?php echo intval(get_theme_mod('footer_widget_content_line_height','30')).'px'; ?> !important;
        }

        .footer-sidebar .custom-social-icons li > a {
            width: <?php echo intval(get_theme_mod('footer_widget_content_fontsize', '15')) + 12 . 'px'; ?> !important;
            height: <?php echo intval(get_theme_mod('footer_widget_content_fontsize', '15') )+ 12 . 'px'; ?> !important;
            line-height:<?php echo intval(get_theme_mod('footer_widget_content_fontsize', '15') )+ 12 . 'px'; ?> !important;
        }
    </style>
<?php } ?>



<?php
// -----------------Colors & Background----------------------
?>

<style>
     <?php if (get_theme_mod('header_clr_enable', false) == true) : ?>
        /* Site Title & Tagline */
        .site-title a{
            color: <?php echo esc_attr(get_theme_mod('site_title_link_color', '#061018')); ?>;
        }
        .dark .site-title a {
            color: <?php echo esc_attr(get_theme_mod('site_title_link_color', '#061018')); ?>;
        }
        .site-title a:hover{
            color: <?php echo esc_attr(get_theme_mod('site_title_link_hover_color', '#22a2c4')); ?>;
        }
        .dark .site-title a:hover {
            color: <?php echo esc_attr(get_theme_mod('site_title_link_hover_color', '#22a2c4')); ?>;
        }
        .site-description{
            color: <?php echo esc_attr(get_theme_mod('site_tagline_text_color', '#1c314c')); ?> !important;
        }
        .site-description:hover{
            color: <?php echo esc_attr(get_theme_mod('site_tagline_hover_color', '#22a2c4')); ?> !important;
        }
    <?php endif; ?>

    
    /* Primary Menu */
    <?php if (get_theme_mod('apply_menu_clr_enable', false) == true) : ?>
        body .navbar.custom .nav .nav-item.active .nav-link,body .navbar .nav .nav-item .nav-link{
            color: <?php echo esc_attr(get_theme_mod('menus_link_color', '#22a2c4')); ?>;
        }
        body.dark .navbar5.navbar .nav .nav-item .nav-link
        {
        color: <?php echo esc_attr(get_theme_mod('menus_link_color', '#22a2c4')); ?>;
        }
        .navbar.custom .nav .nav-item:hover .nav-link, .navbar.custom .nav .nav-item.active .nav-link:hover {
            color: <?php echo esc_attr(get_theme_mod('menus_link_hover_color', '#22a2c4')); ?>;
        }
        body.dark .navbar5.navbar .nav .nav-item:hover .nav-link
        {
            color: #ffffff;
        background: <?php echo esc_attr(get_theme_mod('menus_link_hover_color', '#22a2c4')); ?>;
        }
        body .navbar.custom .nav .nav-item.active .nav-link {
            color: <?php echo esc_attr(get_theme_mod('menus_link_active_color', '#22a2c4')); ?>;
        }
         body.dark .navbar5.navbar .nav .nav-item.active .nav-link {
        color: #ffffff;
        background: <?php echo esc_attr(get_theme_mod('menus_link_active_color', '#22a2c4')); ?>;
        }
        /* Submenus */
        .nav.navbar-nav .dropdown-item, .nav.navbar-nav .dropdown-menu {
            background-color: <?php echo esc_attr(get_theme_mod('submenus_background_color', '#ffffff')); ?>;
        }
        body.dark .nav.navbar-nav .dropdown-item, body.dark .nav.navbar-nav .dropdown-menu {
        background-color: <?php echo esc_attr(get_theme_mod('submenus_background_color', '#ffffff')); ?>;
    }
        .nav.navbar-nav .dropdown-item {
            color: <?php echo esc_attr(get_theme_mod('submenus_link_color', '#212529')); ?>;
        }
        body.dark .nav.navbar-nav .dropdown-item {
            color: <?php echo esc_attr(get_theme_mod('submenus_link_color', '#212529')); ?>;
        }
        .nav.navbar-nav .dropdown-item:hover {
            color: <?php echo esc_attr(get_theme_mod('submenus_link_hover_color', '#22a2c4')); ?>;
        }
        body.dark .navbar.navbar5 .nav .dropdown-menu .text-dark {color:<?php echo esc_attr(get_theme_mod('submenus_link_hover_color', '#22a2c4')); ?> !important; }
        body.dark .nav.navbar-nav .dropdown-item:hover {
            color: <?php echo esc_attr(get_theme_mod('submenus_link_hover_color', '#22a2c4')); ?>;
        }
        .nav.navbar-nav .dropdown-item:focus, .nav.navbar-nav .dropdown-item:hover
        {
            background-color: transparent;
        }

    <?php endif; ?>

    /* Banner */
    .page-title h1{
        color: <?php echo esc_attr(get_theme_mod('banner_text_color', '#fff')); ?>!important;
    }

     /* Breadcrumb */
    <?php
    $enable_brd_link_clr_setting = get_theme_mod('enable_brd_link_clr_setting', false);
    if ($enable_brd_link_clr_setting == true):
        ?>
         .page-breadcrumb.text-center span a,nav.rank-math-breadcrumb a, .navxt-breadcrumb.text-center span a {		 
            color: <?php echo esc_attr(get_theme_mod('breadcrumb_title_link_color', '#ffffff')); ?> !important;
        }
        .page-breadcrumb.text-center span a:hover, nav.rank-math-breadcrumb a:hover,.navxt-breadcrumb.text-center span a:hover { 
            color: <?php echo esc_attr(get_theme_mod('breadcrumb_title_link_hover_color', '#22a2c4')); ?> !important;
        }
		.navxt-breadcrumb { color: <?php echo esc_attr(get_theme_mod('breadcrumb_title_link_color','#ffffff'));?> !important; }
    <?php endif; ?>
   
    /* Content */
    body h1 {
        color: <?php echo esc_attr(get_theme_mod('h1_color', '#1c314c')); ?> ;
    }
    body.dark h1
    {
        color: <?php echo esc_attr(get_theme_mod('h1_color', '#ffffff')); ?> ;
    }
    body .section-header h2:not(.section-title), body h2:not(.section-title){
        color: <?php echo esc_attr(get_theme_mod('h2_color', '#1c314c')); ?>;
    }
    body.dark h2
    {
        color: <?php echo esc_attr(get_theme_mod('h2_color', '#ffffff')); ?> ;
    }
    body h3,.home-blog h3 a{
        color: <?php echo esc_attr(get_theme_mod('h3_color', '#1c314c')); ?>;
    }
    body.dark h3
    {
        color: <?php echo esc_attr(get_theme_mod('h3_color', '#ffffff')); ?> ;
    }
    body .entry-header h4 > a:not(.single-post .entry-header .entry-title > a), body h4 {
        color: <?php echo esc_attr(get_theme_mod('h4_color', '#1c314c')); ?>;
    }
    body.dark h4
    {
        color: <?php echo esc_attr(get_theme_mod('h4_color', '#ffffff')); ?> ;
    }
    body .blog-author h5, body .comment-detail h5, body h5:not(.section-subtitle), .section-space.services .entry-title a  {
        color: <?php echo esc_attr(get_theme_mod('h5_color', '#1c314c')); ?>;
    }
    body.dark h5
    {
        color: <?php echo esc_attr(get_theme_mod('h5_color', '#ffffff')); ?> ;
    }
    body .product-price h5 > a{
        color: <?php echo esc_attr(get_theme_mod('h5_color', '#22a2c4')); ?>;
    }

    body h6 {
        color: <?php echo esc_attr(get_theme_mod('h6_color', '#1c314c')); ?>;
    }
    body.dark h6
    {
        color: <?php echo esc_attr(get_theme_mod('h6_color', '#ffffff')); ?> ;
    }
    p:not(.woocommerce-mini-cart__total,.site-description) {
        color: <?php echo esc_attr(get_theme_mod('p_color', '#777777')); ?>;
    }
    .dark .entry-content p {
    color: <?php echo esc_attr(get_theme_mod('p_color', '#999999')); ?>;
    }
     .dark .entry-content table {
    color: <?php echo esc_attr(get_theme_mod('p_color', '#999999')); ?>;
    }
     .dark .entry-content dl {
    color: <?php echo esc_attr(get_theme_mod('p_color', '#999999')); ?>;
    }
    .dark .wp-block-image figcaption {
    color: <?php echo esc_attr(get_theme_mod('p_color', '#999999')); ?>;
    }
    .dark .entry-content ul, .dark .entry-content ol {
    color: <?php echo esc_attr(get_theme_mod('p_color', '#999999')); ?>;
    }
    .dark .entry-content address {
    color: <?php echo esc_attr(get_theme_mod('p_color', '#999999')); ?>;
    }

    /* Sidebar */
    <?php if (get_theme_mod('apply_sibar_link_hover_clr_enable', false) == true): ?>
        body .sidebar .widget .widget-title, body .sidebar .widget .wp-block-search__label, body .sidebar .widget h2 , body.dark .sidebar .widget h2,body .sidebar .widget.widget_block h1,body .sidebar .widget.widget_block h2,body .sidebar .widget.widget_block h3,body .sidebar .widget.widget_block h4,body .sidebar .widget.widget_block h5,body .sidebar .widget.widget_block h6{
            color: <?php echo esc_attr(get_theme_mod('sidebar_widget_title_color', '#ffffff')); ?>;
        }
        body .sidebar p {
            color: <?php echo esc_attr(get_theme_mod('sidebar_widget_text_color', '#777777')); ?>!important;
        }
        body .sidebar a {
            color: <?php echo esc_attr(get_theme_mod('sidebar_widget_link_color', '#777777')); ?> !important;
        }
        body .sidebar.s-l-space .sidebar a:hover, body .sidebar .widget a:hover, body .sidebar .widget a:focus {
            color: <?php echo esc_attr(get_theme_mod('sidebar_widget_link_hover_color', '#22a2c4')); ?> !important;
        }
    <?php endif; ?>

    /* Footer Widgets */
    .footer-sidebar .widget_text p{
        color: #ffffff;
    }
    <?php if (get_theme_mod('apply_ftrsibar_link_hover_clr_enable', false) == true) { ?>
        body .site-footer {
            background-color: <?php echo esc_attr(get_theme_mod('footer_widget_background_color', '#21202e')); ?>;
        }
        body .site-footer .widget-title,  body .site-footer .widget h2{
            color: <?php echo esc_attr(get_theme_mod('footer_widget_title_color', '#22a2c4')); ?> !important;
        }
        body .footer-sidebar.footer-typo p,  body .footer-sidebar.footer-typo .widget:not(.widget_calendar), .footer-sidebar.footer-typo .widget_text p {
            color: <?php echo esc_attr(get_theme_mod('footer_widget_text_color', '#ffffff')); ?>!important;
        }
        body .footer-sidebar .widget:not(.widget_calendar) a, body .footer-sidebar .widget_recent_entries .post-date, body .footer-sidebar .widget:not(.widget_calendar) li  {
            color: <?php echo esc_attr(get_theme_mod('footer_widget_link_color', '#ffffff')); ?>;
        }
        body .footer-sidebar .widget:not(.widget_calendar) a:hover, body .footer-sidebar .widget:not(.widget_calendar) li:hover{
            color: <?php echo esc_attr(get_theme_mod('footer_widget_link_hover_color', '#22a2c4')); ?>;
        }
    <?php } else { ?>
        .site-footer p {
            color: #fff;
        }
    <?php } ?>
.custom-logo{width: <?php echo intval(get_theme_mod('busicare_logo_length','225'));?>px; height: auto;}
.busicare_header_btn{ -webkit-border-radius: <?php echo intval(get_theme_mod('after_menu_btn_border',0));?>px;border-radius: <?php echo intval(get_theme_mod('after_menu_btn_border',0));?>px;}
   #content .container{max-width: <?php echo intval(get_theme_mod('container_width','1140'));?>px;}
   #wrapper .site-footer .container{max-width: 1140px;}
</style>

<?php
if(get_theme_mod('blog_sidebar_layout','right')=='stretched') { ?>
    <style>
        body #content .section-space-page.blog.stretched .container {
            max-width: 100%;
            padding: 0;
            margin: 0;
        }
        
    </style>
<?php 
}

if(get_theme_mod('single_post_sidebar_layout','right')=='stretched') { ?>
    <style>
        body.single-post #content .section-module.blog.stretched .container {
            max-width: 100%;
            padding: 0;
            margin: 0;
        }
    </style>
<?php }

if(get_theme_mod('page_sidebar_layout','right')=='stretched') { ?>
    <style>
        body #content .section-space-page.page.stretched .container {
            max-width: 100%;
            padding: 0;
            margin: 0;
        }
        body #content .section-module.blog.woocommerce.section-space-page.stretched .container {
            max-width: 100%;
            padding: 0;
            margin: 0;
        }
    </style>
<?php } ?>