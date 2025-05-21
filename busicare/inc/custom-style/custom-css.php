<?php

// define function for custom color setting
function busicare_custom_light() {

    $link_color = get_theme_mod('link_color');
    list($r, $g, $b) = sscanf($link_color, "#%02x%02x%02x");
    $r = $r - 50;
    $g = $g - 25;
    $b = $b - 40;

    if ($link_color != '#ff0000') :
        ?>
        <style type="text/css">
            .title span {
                color: <?php echo esc_attr($link_color); ?>;
            }

            a:hover {color: <?php echo esc_attr($link_color); ?>;}
            .entry-meta a:hover {color: <?php echo esc_attr($link_color); ?>;}

            dl dd a, dl dd a:hover, dl dd a:focus, ul li a:focus { color: <?php echo esc_attr($link_color); ?>; }

            button,
            input[type="button"],
            input[type="submit"] {
                background-color: <?php echo esc_attr($link_color); ?>;
            }

            .btn-default {
                background: <?php echo esc_attr($link_color); ?>;
                border: 1px solid <?php echo esc_attr($link_color); ?>; 
            }

            .btn-light:hover, .btn-light:focus {
                background: <?php echo esc_attr($link_color); ?>; 
                border: 1px solid <?php echo esc_attr($link_color); ?>; 
            }

            .btn-default-dark { background: <?php echo esc_attr($link_color); ?>; }

            .btn-border {
                border: 2px solid <?php echo esc_attr($link_color); ?>;
            }


            .btn-border:hover, .btn-border:focus {
                border: 2px solid <?php echo esc_attr($link_color); ?>;
            }


            a:focus { 
                color: <?php echo esc_attr($link_color); ?>;       
            }

            .custom-social-icons li > a:focus {
                background-color: <?php echo esc_attr($link_color); ?>;
            }

            .custom-social-icons li > a {
                color: <?php echo esc_attr($link_color); ?>;
            }

            .contact .custom-social-icons li > a:hover, .contact .custom-social-icons li > a:focus {
                background-color: <?php echo esc_attr($link_color); ?>;
            }

            .custom-social-icons li > a:hover, 
            .custom-social-icons li > a:focus {
                background-color: <?php echo esc_attr($link_color); ?>;
            }

            #searchbar_fullscreen .btn {
                background-color: <?php echo esc_attr($link_color); ?>;
            }
            
            .screen-reader-text:focus {
                color: <?php echo esc_attr($link_color); ?>;
            }

            .cart-header {
                background-color: <?php echo esc_attr($link_color); ?>;
            }

            .cart-header > a .cart-total {
                background: <?php echo esc_attr($link_color); ?>;
            }

            <?php
            if (!is_rtl()) {
                ?> 
                .slider-caption .heading {
                    border-left: 4px solid <?php echo esc_attr($link_color); ?>;
                }
            <?php } else {
                ?>
                .slider-caption .heading {
                    border-right: 4px solid <?php echo esc_attr($link_color); ?>;
                }
                <?php
            }
            ?>

            .slider-caption .heading {
                border-left: 4px solid <?php echo esc_attr($link_color); ?>;
            }

            .pointer-scroll {
                background: <?php echo esc_attr($link_color); ?>;
            }

            .owl-carousel .owl-prev:hover, 
            .owl-carousel .owl-prev:focus { 
                background-color: <?php echo esc_attr($link_color); ?>;
            }

            .owl-carousel .owl-next:hover, 
            .owl-carousel .owl-next:focus { 
                background-color: <?php echo esc_attr($link_color); ?>;
            }

            .cta_content, .cta_main {background-color: <?php echo esc_attr($link_color); ?>; }

            .cta_content .btn-light {
                color: <?php echo esc_attr($link_color); ?>;
            }

            .cta_content a:after {
                color: <?php echo esc_attr($link_color); ?>;
            }

            .text-default { color: <?php echo esc_attr($link_color); ?>; }

            .entry-header .entry-title a:focus {
                color: <?php echo esc_attr($link_color); ?> !important; 
            }

            .services .post:hover .post-thumbnail i.fa {
                border: 1px solid <?php echo esc_attr($link_color); ?>;
                background-color: <?php echo esc_attr($link_color); ?>;
            }

            .filter-tabs .nav-item.active{
                background-color: <?php echo esc_attr($link_color); ?>;
            }

            .filter-tabs li:focus, .filter-tabs li:hover{background-color: <?php echo esc_attr($link_color); ?>;}

            .filter-tabs .nav-link:focus, .filter-tabs .nav-link:hover {
                background-color: <?php echo esc_attr($link_color); ?>;
            }

            .funfact-icon .fa{
                color: <?php echo esc_attr($link_color); ?>;
            }

            .page-breadcrumb li a:hover{
                color:<?php echo esc_attr($link_color); ?>;
            }

            .blog .post .entry-date a {
                background-color: <?php echo esc_attr($link_color); ?>;
            }

            .entry-meta a :hover{
                color:<?php echo esc_attr($link_color); ?>;
            }

            .sidebar .widget .widget-title{
                background-color:<?php echo esc_attr($link_color); ?>; 
            }

            .sidebar .input-group .form-control {
                border-color: <?php echo esc_attr($link_color); ?> ;
            }

            .navbar .nav .nav-item a:focus{
                color: <?php echo esc_attr($link_color); ?>;
            }

            .sidebar .widget_categories li::before , 
            .sidebar .widget_archive li::before ,
            .sidebar .widget_recent_entries li::before ,
            .sidebar .widget_meta li::before,
            .sidebar .widget_recent_comments li::before 
            {
                color: <?php echo esc_attr($link_color); ?>;
            }
            
            .sidebar .widget_categories li a:hover , 
            .sidebar .widget_archive li a:hover ,
            .sidebar .widget_recent_entries li a:hover ,
            .sidebar .widget_meta li a:hover,
            .sidebar .widget_recent_comments li a:hover,
            .sidebar .widget li a:focus,
            .dropdown-item a:focus{
                color: <?php echo esc_attr($link_color); ?>;
            }

            .testmonial-block .avatar img {
                box-shadow: <?php echo esc_attr($link_color); ?> 0px 0px 0px 1px; 
            }

            .products .onsale {
                background: <?php echo esc_attr($link_color); ?>;
                border: 2px solid <?php echo esc_attr($link_color); ?>;
            }
            
            /*product page & product detail*/
            .added_to_cart.wc-forward:hover, .woocommerce .posted_in a:hover{
                color: <?php echo esc_attr($link_color); ?>;
            }

            .woocommerce-loop-product__title:hover {color:<?php echo esc_attr($link_color); ?>;}
            
            .woocommerce ul.product_list_widget li a:hover{
                        color: <?php echo esc_attr($link_color); ?>;
            }
            
            .site-footer .woocommerce ul.product_list_widget li a{
                        color: <?php echo esc_attr($link_color); ?>;
            }
            
            .sidebar .woocommerce ul.product_list_widget .star-rating{
                color: <?php echo esc_attr($link_color); ?>;
            }

            .dropdown-menu li.active a{color:<?php echo esc_attr($link_color); ?>; }
            .dropdown-menu li.active ul li.active a{color: <?php echo esc_attr($link_color); ?>;}
            .dropdown-menu li.active ul li a:hover{color: <?php echo esc_attr($link_color); ?>;}

            .sidebar .wp-block-search .wp-block-search__label,.sidebar .widget.widget_block h1,.sidebar .widget.widget_block h2,.sidebar .widget.widget_block h3,.sidebar .widget.widget_block h4,.sidebar .widget.widget_block h5,.sidebar .widget.widget_block h6{background-color: <?php echo esc_attr($link_color); ?>;}

            .widget .wp-block-search .wp-block-search__input {border-color: <?php echo esc_attr($link_color); ?>;}

            .widget .wp-block-search .wp-block-search__button {background-color: <?php echo esc_attr($link_color); ?>;}

            .sidebar .widget li:before {color: <?php echo esc_attr($link_color); ?>;}

            .widget .wp-block-tag-cloud a:hover{background-color: <?php echo esc_attr($link_color); ?>;}

            .footer-sidebar .wp-block-search .wp-block-search__label,.footer-sidebar .widget.widget_block h1,.footer-sidebar .widget.widget_block h2,.footer-sidebar .widget.widget_block h3,.footer-sidebar .widget.widget_block h4,.footer-sidebar .widget.widget_block h5,.footer-sidebar .widget.widget_block h6{  color: <?php echo esc_attr($link_color); ?>;}
            
            .sidebar .widget li a:hover,.footer-sidebar .widget li a:hover{color:<?php echo esc_attr($link_color); ?>;}

            .add-to-cart a {
                background: <?php echo esc_attr($link_color); ?>;
            }

            .team-grid .position { 
                color: <?php echo esc_attr($link_color); ?>; 
            }

            .team-grid .custom-social-icons li > a:hover {
                background-color: <?php echo esc_attr($link_color); ?>;
            }

            .title_seprater {
                background-color: <?php echo esc_attr($link_color); ?>;
            }

            .section-header .section-title-two span
            {
                color: <?php echo esc_attr($link_color); ?>;
            }

            .footer-sidebar li:hover a{color:<?php echo esc_attr($link_color); ?>;}

            .footer-sidebar address a:focus {color:<?php echo esc_attr($link_color); ?>;}

            .footer-sidebar .widget .widget-title {
                color:<?php echo esc_attr($link_color); ?>;
            }

            .site-info{
                background-color: <?php echo esc_attr($link_color); ?>;
            }

            .footer-sidebar .widget li:hover::before{color:<?php echo esc_attr($link_color); ?>}

            .blog .pagination a.active {
                background-color: <?php echo esc_attr($link_color); ?>;
            }

            .blog .pagination a:hover:not(.active),
            .blog .pagination a:focus:not(.active) {background-color:<?php echo esc_attr($link_color); ?>;}

            .portfolio .pagination a.active {
                background-color: <?php echo esc_attr($link_color); ?>;
            }

            .portfolio .pagination a:hover:not(.active),
            .portfolio .pagination a:focus:not(.active) {background-color:<?php echo esc_attr($link_color); ?>;}

            .portfolio .post:hover .click-view{
                background-color: <?php echo esc_attr($link_color); ?>;
            }

            .contact .title h4{
                background-color: <?php echo esc_attr($link_color); ?>;
            }

            .sidebar .contact .widget-cont-title {
                background-color: <?php echo esc_attr($link_color); ?>;
            }
            input[type="text"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="password"]:focus, input[type="search"]:focus, input[type="number"]:focus, input[type="tel"]:focus, input[type="range"]:focus, input[type="date"]:focus, input[type="month"]:focus, input[type="week"]:focus, input[type="time"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="color"]:focus, textarea:focus {
                border-color: <?php echo esc_attr($link_color); ?>;
            }

            .cont address > i.fa {
                color: <?php echo esc_attr($link_color); ?>;
            }

            .cont a:hover, .cont a:focus {
                color: <?php echo esc_attr($link_color); ?>;
            }

            .error-page .title {
                color: <?php echo esc_attr($link_color); ?>;
            }

            .error-page h4 {
                color: <?php echo esc_attr($link_color); ?>;
            }

            .error-page .not-found-btn a {
                background-color: <?php echo esc_attr($link_color); ?>;
            }

            .scroll-up a {
                background: <?php echo esc_attr($link_color); ?>;
            }

            .scroll-up a:hover,
            .scroll-up a:active {
                background:<?php echo esc_attr($link_color); ?>;
            }

            /*SmartMenu Bootstrap*/
            .navbar .nav .nav-item:hover .nav-link, 
            .navbar .nav .nav-item.active .nav-link {
                color: <?php echo esc_attr($link_color); ?>;
            }

            /*slider dot*/
            .owl-theme .owl-dots .owl-dot.active span {
                background-color: <?php echo esc_attr($link_color); ?>;
            }


            /*WooCommerce Style*/
            .woocommerce-loop-product__title a{color:<?php echo esc_attr($link_color); ?>;}
            .woocommerce ul.products li.product .onsale, .products span.onsale
            {
                background: <?php echo esc_attr($link_color); ?>;
                border: 2px solid <?php echo esc_attr($link_color); ?>;
            }
            .woocommerce ul.products li.product .onsale, .woocommerce span.onsale{
                background: <?php echo esc_attr($link_color); ?> !important;
            }

            .woocommerce ul.products li.product .button, .owl-item .item .cart .add_to_cart_button {
                background: <?php echo esc_attr($link_color); ?>;
            }

            .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current {
                background: <?php echo esc_attr($link_color); ?> !important;
            }

            .woocommerce div.product form.cart .button, .woocommerce a.button, .woocommerce a.button:hover, .woocommerce a.button, .woocommerce .woocommerce-Button, .woocommerce .cart input.button, .woocommerce input.button.alt, .woocommerce button.button, .woocommerce #respond input#submit, .woocommerce .cart input.button:hover, .woocommerce .cart input.button:focus, .woocommerce input.button.alt:hover, .woocommerce input.button.alt:focus, .woocommerce input.button:hover, .woocommerce input.button:focus,  .woocommerce button.button:focus, .woocommerce #respond input#submit:focus, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button {
                background: <?php echo esc_attr($link_color); ?>;
            }
            .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce input.button.alt:hover {
                background: <?php echo esc_attr($link_color); ?>;
            }
            .woocommerce-message, .woocommerce-info {
                border-top-color: <?php echo esc_attr($link_color); ?>;
            }
            .woocommerce-message::before, .woocommerce-info::before {
                color: <?php echo esc_attr($link_color); ?>;
            }
            .woocommerce div.product .stock {
                color: <?php echo esc_attr($link_color); ?>;
            }
            .woocommerce p.stars a {
                color: <?php echo esc_attr($link_color); ?>;
            }
            .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt {
                background: <?php echo esc_attr($link_color); ?>;
            }
            /*Woocommerce style*/

            /*Contact SideBar*/
            .sidebar_contact .contact_search .widget-cont-title {
                background-color: <?php echo esc_attr($link_color); ?>;
            }
            /*Contact SideBar*/

            .filter-tabs .nav-item.show .nav-link, .filter-tabs .nav-link.active, .filter-tabs .nav-link:hover {
                background-color: <?php echo esc_attr($link_color); ?>;
            }

            /*Menu Search Effect*/
            .search-form input[type="submit"] {
                background: <?php echo esc_attr($link_color); ?> repeat scroll 0 0;
                border: 1px solid <?php echo esc_attr($link_color); ?>;
            }

            .navbar .search-box-outer .dropdown-menu {
                border-top: solid 1px <?php echo esc_attr($link_color); ?>;
            }

            .btn-primary {
                background-color: <?php echo esc_attr($link_color); ?>;
                border-color: <?php echo esc_attr($link_color); ?>;
            }

            .btn-primary:hover {
                background-color: <?php echo esc_attr($link_color); ?>;
                border-color: <?php echo esc_attr($link_color); ?>;
            }

            .btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show>.btn-primary.dropdown-toggle,.btn-primary:focus {
                background-color: <?php echo esc_attr($link_color); ?>;
                border-color: <?php echo esc_attr($link_color); ?>;
            }

            .pagination .nav-links .page-numbers.current {
                background-color: <?php echo esc_attr($link_color); ?>;
            }

            .sidebar .widget_meta li a:hover{
                color: <?php echo esc_attr($link_color); ?>;
            }

            .dropdown-item a:focus{
                color: <?php echo esc_attr($link_color); ?>;
            }

            /*menu*/
            .dropdown-item.active, .dropdown-item:active,.dropdown-item:hover {
                background-color: transparent;
                color:<?php echo esc_attr($link_color); ?>;
            }

            body .product-price h5 > a{
                color:<?php echo esc_attr($link_color); ?>;
            }
            
            .related-posts .entry-title a:hover{
                color: <?php echo esc_attr($link_color); ?>;
            }
            
            .section-space.services .entry-header .entry-title a:hover{
                        color: <?php echo esc_attr($link_color); ?>;
            }
            
            .sidebar .widget_product_search .search-field , .site-footer .widget_product_search .search-field{
                border-color: <?php echo esc_attr($link_color); ?>;
            }
            
            .sidebar .widget_nav_menu li a:hover ,
            .sidebar .widget_pages li a:hover ,
            .sidebar .widget_product_categories li a:hover ,
            .sidebar .widget_links li a:hover {
                color: <?php echo esc_attr($link_color); ?>;
            }
            
            .sidebar .widget_nav_menu li::before ,
            .sidebar .widget_pages li::before ,
            .sidebar .widget_product_categories li::before ,
            .sidebar .widget_links li::before {
                color: <?php echo esc_attr($link_color); ?>;
            }
            .sidebar .widget .custom-social-icons li > a:hover {background-color: <?php echo esc_attr($link_color); ?>;}
            .sidebar .widget .head-contact-info a:hover {color: <?php echo esc_attr($link_color); ?>;}
            
            .sidebar .widget .tagcloud a:hover, .site-footer .widget .tagcloud a:hover{
                background-color: <?php echo esc_attr($link_color); ?>;
            }
            

            .widget_nav_menu li a:hover , 
            .widget_pages li a:hover ,
            .widget_product_categories li a:hover ,
            .widget_links li a:hover ,
            .widget_categories li a:hover , 
            .widget_archive li a:hover ,
            .widget_recent_entries li a:hover ,
            .widget_meta li a:hover,
            .widget_recent_comments li a:hover,
            .widget li a:focus,
            .dropdown-item a:focus,
            .navbar .nav .nav-item a:focus
            {
                color: <?php echo esc_attr($link_color); ?>;
            }
            .widget_nav_menu li::before , 
            .widget_pages li::before ,
            .widget_product_categories li::before ,
            .widget_links li::before ,
            .widget_categories li::before , 
            .widget_archive li::before ,
            .widget_recent_entries li::before ,
            .widget_meta li::before,
            .widget_recent_comments li::before 
            {
                color: <?php echo esc_attr($link_color); ?>;
            }

            .widget .input-group .form-control ,.woocommerce-product-search .search-field {
                border-color: <?php echo esc_attr($link_color); ?>;
            }
            
            .woocommerce .widget_price_filter .ui-slider .ui-slider-range {background-color: <?php echo esc_attr($link_color); ?>;}
            .woocommerce .widget_price_filter .ui-slider .ui-slider-handle {background-color: <?php echo esc_attr($link_color); ?>;}

            .blog .post .entry-content a{
                color: <?php echo esc_attr($link_color); ?>;
            }
            .comment-section .media-body a,.textwidget a{color:<?php echo esc_attr($link_color); ?>;} 
            .blog.page blockquote:before{
                color: <?php echo esc_attr($link_color);?>26;
                border-left: 4px solid <?php echo esc_attr($link_color); ?>;
            }
            .blog .post .entry-content a.more-link:hover{
                color: <?php echo esc_attr($link_color); ?>;
            }
            .dark .blog .post .entry-content a.more-link.btn-ex-small.btn-border:hover{color: <?php echo esc_attr($link_color); ?>;}
            .dark .sticky .entry-meta a:hover{color: <?php echo esc_attr($link_color); ?>;}
            .home-blog h3 a:hover{color:<?php echo esc_attr($link_color); ?>;}
            .busicare_header_btn { background-color: <?php echo esc_attr($link_color); ?>;}
            .navbar .nav .nav-item.html a:hover{color: <?php echo esc_attr($link_color); ?>;}
            .dark .navbar.navbar5 .nav .dropdown-menu .text-dark {color:<?php echo esc_attr($link_color); ?> !important; }
            .hp-preloader-cube .hp-cube:before {background: <?php echo esc_attr($link_color); ?>;}
        </style>
        <?php
    endif;
}
?>
