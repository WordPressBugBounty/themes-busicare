<?php
/* Notifications in customizer */
if ( ! function_exists( 'busicarep_activate' ) ):
	require BUSICARE_TEMPLATE_DIR . '/inc/customizer-notify/busicare-customizer-notify.php';

	function busicare_customizer_notify_setup() {
		$busicare_config_customizer = array(
			'recommended_plugins'       => array(
				'spicebox' => array(
					'recommended' => true,
					'description' => sprintf( esc_html__( 'Install and activate the %s plugin to take full advantage of all the features this theme has to offer.', 'busicare' ), sprintf( '<strong>%s</strong>', 'Spicebox' ) ),
				),
			),
			'recommended_actions'       => array(),
			'recommended_actions_title' => esc_html__( 'Recommended Actions', 'busicare' ),
			'recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'busicare' ),
			'install_button_label'      => esc_html__( 'Install and Activate', 'busicare' ),
			'activate_button_label'     => esc_html__( 'Activate', 'busicare' ),
			'deactivate_button_label'   => esc_html__( 'Deactivate', 'busicare' ),
		);
		BusiCare_Customizer_Notify::init( apply_filters( 'busicare_customizer_notify_array', $busicare_config_customizer ) );
	}
	add_action( 'init', 'busicare_customizer_notify_setup' );
endif;