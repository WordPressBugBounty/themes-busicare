<?php
/**
 * This file implements custom requirements for the SpiceBox Plugin.
 * It can be used as-is in themes (drop-in).
 *
 */

$busicare_hide_install = get_option('busicare_hide_customizer_companion_notice', false);
if (!function_exists('spicethemes_companion') && !$busicare_hide_install) {
	if (class_exists('WP_Customize_Section') && !class_exists('Busicare_companion_installer_Section')) {
		/**
		 *
		 * @see WP_Customize_Section
		 */
		class Busicare_companion_installer_Section extends WP_Customize_Section {
			/**
			 * Customize section type.
			 *
			 * @access public
			 * @var string
			 */
			public $type = 'busicare_companion_installer';

			public function __construct($manager, $id, $args = array()) {
				parent::__construct($manager, $id, $args);

				add_action('customize_controls_enqueue_scripts', 'Busicare_companion_installer_Section::enqueue');
			}

			/**
			 * enqueue styles and scripts
			 *
			 *
			 **/
			public static function enqueue() {
				wp_enqueue_script('plugin-install');
				wp_enqueue_script('updates');
				wp_enqueue_script('busicare-companion-install', BUSICARE_TEMPLATE_DIR_URI . '/admin/assets/js/plugin-install.js', array('jquery'));
				wp_localize_script('busicare-companion-install', 'busicare_companion_install',
					array(
						'installing' => esc_html__('Installing', 'busicare'),
						'activating' => esc_html__('Activating', 'busicare'),
						'error'      => esc_html__('Error', 'busicare'),
						'ajax_url'   => esc_url(admin_url('admin-ajax.php')),
					)
				);
			}
			/**
			 * Render the section.
			 *
			 * @access protected
			 */
			protected function render() {
				// Determine if the plugin is not installed, or just inactive.
				$plugins   = get_plugins();
				$installed = false;
				foreach ($plugins as $plugin) {
					if ('SpiceBox' === $plugin['Name']) {
						$installed = true;
					}
				}
				$slug = 'spicebox';
				// Get the plugin-installation URL.
				$classes            = 'cannot-expand accordion-section control-section-companion control-section control-section-themes control-section-' . $this->type;
				?>
				<li id="accordion-section-<?php echo esc_attr($this->id); ?>" class="<?php echo esc_attr($classes); ?>">
					<span class="spicethemes-customizer-notification-dismiss" id="companion-install-dismiss" href="#companion-install-dismiss"> <i class="fa fa-times"></i></span>
					<?php if (!$installed): ?>
					<?php 
						$plugin_install_url = add_query_arg(
							array(
								'action' => 'install-plugin',
								'plugin' => $slug,
							),
							self_admin_url('update.php')
						);
						$plugin_install_url = wp_nonce_url($plugin_install_url, 'install-plugin_spicethemes-companion');
					 ?>
						<p><?php esc_html_e("To take advantage of this theme's features in the customizer you need to install the SpiceBox plugin.", "busicare");?></p>
						<a class="spicethemes-plugin-install install-now button-secondary button" data-slug="spicebox" href="<?php echo esc_url($plugin_install_url); ?>" aria-label="<?php esc_attr_e('Install SpiceBox Now', 'busicare');?>" data-name="<?php esc_attr_e('SpiceBox', 'busicare'); ?>">
							<?php esc_html_e('Install and activate', 'busicare');?>
						</a>
					<?php else: ?>
						<?php 
							$plugin_link_suffix = $slug . '/' . $slug . '.php';
							$plugin_activate_link = add_query_arg(
								array(
									'action'        => 'activate',
									'plugin'        => rawurlencode( $plugin_link_suffix ),
									'plugin_status' => 'all',
									'paged'         => '1',
									'_wpnonce'      => wp_create_nonce( 'activate-plugin_' . $plugin_link_suffix ),
								), self_admin_url( 'plugins.php' )
							);
						?>
						<p><?php esc_html_e("You have installed the Spice Box plugin. To take advantage of this theme's features in the customizer, you need to activate it.", "busicare");?></p>
						<a class="spicethemes-plugin-activate activate-now button-primary button" data-slug="spicebox" href="<?php echo esc_url($plugin_activate_link); ?>" aria-label="<?php esc_attr_e('Activate SpiceBox now', 'busicare');?>" data-name="<?php esc_attr_e('SpiceBox', 'busicare'); ?>">
							<?php esc_html_e('Activate now', 'busicare');?>
						</a>
					<?php endif;?>
				</li>
				<?php
			}
		}
	}

	if (!function_exists('busicare_companion_installer_register')) {
		/**
		 * Registers the section, setting & control for the SpiceBox installer.
		 *
		 * @param object $wp_customize The main customizer object.
		 */
		function busicare_companion_installer_register($wp_customize) {
			$wp_customize->add_section(new Busicare_companion_installer_Section($wp_customize, 'busicare_companion_installer', array(
				'title'      => '',
				'capability' => 'install_plugins',
				'priority'   => 0,
			)));

		}
		add_action('customize_register', 'busicare_companion_installer_register');
	}
}

function busicare_hide_customizer_companion_notice(){
	update_option('busicare_hide_customizer_companion_notice', true);
	echo true;
	wp_die();
}
add_action('wp_ajax_busicare_hide_customizer_companion_notice', 'busicare_hide_customizer_companion_notice');