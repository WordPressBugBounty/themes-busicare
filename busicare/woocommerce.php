<?php
get_header();
global $woocommerce;

if(get_theme_mod('page_sidebar_layout','right')=='stretched') {
    $busicare_stretched_class='stretched';   
}
else {
    $busicare_stretched_class='';
}

if(get_theme_mod('page_sidebar_layout','right')=='right'|| get_theme_mod('page_sidebar_layout','right')=='left') {
    $busicare_page_column =  '<div class="col-lg-8 col-md-8 col-sm-12">';
}
else {
    $busicare_page_column =  '<div class="col-lg-12 col-md-12 col-sm-12">';   
}
?>
<div class="clearfix"></div>
<section class="section-module blog woocommerce section-space-page <?php echo esc_attr($busicare_stretched_class);?>">
	<div class="container<?php echo esc_html(busicare_container());?>">
		<div class="row">
			<?php
			if(get_theme_mod('page_sidebar_layout','right')=='left'):
                if (is_active_sidebar('woocommerce')) {
                    get_sidebar('woocommerce');
                }
            endif;	
			echo  $busicare_page_column;
			woocommerce_content(); ?>
		</div>	
        <?php
        if(get_theme_mod('page_sidebar_layout','right')=='right'):
            if (is_active_sidebar('woocommerce')) {
                get_sidebar('woocommerce');
            }
        endif;
            ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>