<?php //Pro Details
function busicare_pro_feature_customizer( $wp_customize ) {
    class WP_Pro__Feature_Customize_Control extends WP_Customize_Control {
        public $type = 'new_menu';
        /**
        * Render the control's content.
        */
        public function render_content() {
        ?>
        <div class="busicare-pro-features-customizer">
            <ul class="busicare-pro-features">
                <li>
                    <span class="busicare-pro-label"><?php esc_html_e( 'PRO','busicare' ); ?></span>
                    <?php esc_html_e( 'Advanced Hook Settings','busicare' ); ?>
                </li>
                <li>
                    <span class="busicare-pro-label"><?php esc_html_e( 'PRO','busicare' ); ?></span>
                    <?php esc_html_e( 'Multiple Page Templates','busicare' ); ?>
                </li>   
                <li>
                    <span class="busicare-pro-label"><?php esc_html_e( 'PRO','busicare' ); ?></span>
                    <?php esc_html_e( 'Portfolio Management','busicare' ); ?>
                </li>
                <li>
                    <span class="busicare-pro-label"><?php esc_html_e( 'PRO','busicare' ); ?></span>
                    <?php esc_html_e( 'Slide Variations','busicare' ); ?>
                </li>
              <li>
                    <span class="busicare-pro-label"><?php esc_html_e( 'PRO','busicare' ); ?></span>
                    <?php esc_html_e( 'Create Unlimited Services','busicare' ); ?>
                </li>
                 <li>
                    <span class="busicare-pro-label"><?php esc_html_e( 'PRO','busicare' ); ?></span>
                    <?php esc_html_e( 'Callout Section','busicare' ); ?>
                </li>
              <li>
                    <span class="busicare-pro-label"><?php esc_html_e( 'PRO','busicare' ); ?></span>
                    <?php esc_html_e( 'Manage Contact Details','busicare' ); ?>
                </li>
                <li>
                    <span class="busicare-pro-label"><?php esc_html_e( 'PRO','busicare' ); ?></span>
                    <?php esc_html_e( 'Testimonial Variations','busicare' ); ?>
                </li>
                <li>
                    <span class="busicare-pro-label"><?php esc_html_e( 'PRO','busicare' ); ?></span>
                    <?php esc_html_e( 'Client Section','busicare' ); ?>
                </li>
              <li>
                    <span class="busicare-pro-label"><?php esc_html_e( 'PRO','busicare' ); ?></span>
                    <?php esc_html_e( 'Team Variations','busicare' ); ?>
                </li>
              <li>
                    <span class="busicare-pro-label"><?php esc_html_e( 'PRO','busicare' ); ?></span>
                    <?php esc_html_e( 'Multiple Header Variations','busicare' ); ?>
                </li>
              <li>
                    <span class="busicare-pro-label"><?php esc_html_e( 'PRO','busicare' ); ?></span>
                    <?php esc_html_e( 'Section Reordering','busicare' ); ?>
                </li>
                <li>
                    <span class="busicare-pro-label"><?php esc_html_e( 'PRO','busicare' ); ?></span>
                    <?php esc_html_e( 'Quality Support','busicare' ); ?>
                </li>
            </ul>
            <a target="_blank" href="<?php echo esc_url('https://spicethemes.com/busicare-plus/');?>" class="busicare-pro-button button-primary"><?php esc_html_e( 'UPGRADE TO PRO','busicare' ); ?></a>
            <hr>
        </div>
        <?php
        }
    }
    $wp_customize->add_section( 'busicare_pro_feature_section' , array(
    		'title'      => esc_html__('View PRO Details', 'busicare'),
    		'priority'   => 1,
       	) );
    $wp_customize->add_setting(
        'upgrade_pro_feature',
        array(
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        )	
    );
    $wp_customize->add_control( new WP_Pro__Feature_Customize_Control( $wp_customize, 'upgrade_pro_feature', array(
    		'section' => 'busicare_pro_feature_section',
    		'setting' => 'upgrade_pro_feature',
        ))
    );
    class WP_Feature_document_Customize_Control extends WP_Customize_Control {
        public $type = 'new_menu';
        /**
        * Render the control's content.
        */
        public function render_content() {
        ?>
       
         <div class="busicare-pro-content">
            <ul class="busicare-pro-des">
                    <li> <?php esc_html_e('With individual hook settings, you can insert html or php code according to your needs.','busicare');?></li>
                    <li> <?php esc_html_e('Theme comes with multiple page settings like multiple blog, portfolio 2/3/4 column, about us etc.','busicare');?></li>
                    <li> <?php esc_html_e('Create a professional-looking portfolio.','busicare');?></li>
                    <li> <?php esc_html_e('PRO version comes with slide variation options, so you can adjust your content through text alignment.','busicare');?></li>
                    <li> <?php esc_html_e('Add as many services as you like. You can even display each service on a separate page.','busicare');?></li>     
                    <li> <?php esc_html_e('Theme comes with a beautifully designed section where you can manage your contact details.','busicare');?></li>
                    <li> <?php esc_html_e('Show all your team members, clients, testimonials on front page.','busicare');?></li>
                    <li> <?php esc_html_e('There are various header variations with logo placing.','busicare');?></li>
                    <li> <?php esc_html_e('The layout manager will help you rearrange all sections.','busicare');?></li>
                    <li> <?php esc_html_e('Translation-ready, the theme supports popular plugins','busicare'); echo ' WPML '; esc_html_e('and','busicare'); echo ' Polylang'; ?></li>
                    <li> <?php echo '24/7 '; esc_html_e('professional support for','busicare'); echo ' Google Maps'; ?></li>
                    <li> <?php esc_html_e('Dedicated support, widget and sidebar management.','busicare');?></li>
                </ul>
         </div>
        <?php
        }
    }

    $wp_customize->add_setting(
        'busicare_pro_feature',
        array(
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        )	
    );
    $wp_customize->add_control( new WP_Feature_document_Customize_Control( $wp_customize, 'busicare_pro_feature', array(	
    		'section' => 'busicare_pro_feature_section',
    		'setting' => 'busicare_pro_feature',
        ))
    );

}
add_action( 'customize_register', 'busicare_pro_feature_customizer' );
?>