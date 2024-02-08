<?php
/*
Plugin Name: WPCD Saas Course Custom Functions For Tenant Sites
Plugin URI: https://wpclouddeploy.com
Description: Handles support functions needed for template/tenant sites
Version: 1.0.0
Item Id:
Requires PHP: 8.0
Author: WPCloudDeploy & OpenSaaS.io
Author URI: https://wpclouddeploy.com
*/

require_once ABSPATH . 'wp-admin/includes/plugin.php';

class Wpcd_Saas_Course_Tenant {
	
	/**
	 * Constructor function.
	 */
	public function __construct() {
		
		$plugin_data = get_plugin_data( __FILE__ );

		if ( ! defined( 'WPMT_CF_URL' ) ) {
			define( 'WPMT_CF_URL', plugin_dir_url( __FILE__ ) );
			define( 'WPMT_CF_PATH', plugin_dir_path( __FILE__ ) );
			define( 'WPMT_CF_PLUGIN', plugin_basename( __FILE__ ) );
			define( 'WPMT_CF_EXTENSION', $plugin_data['Name'] );
			define( 'WPMT_CF_VERSION', $plugin_data['Version'] );
			define( 'WPMT_CF_TEXTDOMAIN', 'wpcd' );
			define( 'WPMT_CF_REQUIRES', '5.6.0' );
			define( 'WPMT_VERSION', $plugin_data['Version'] );
			define( 'WPMT_REST_VERSION', '1' );

			// Define a variable that can be used for versioning scripts - required to force multisite to use different version numbers for each site.
			if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
				define( 'WPMT_SCRIPTS_VERSION', (string) time() );
			} else {
				define( 'WPMT_SCRIPTS_VERSION', (string) WPMT_VERSION );
			}		
		}		

	}
	
}

// Initialize the Class.
$wpcd_saas_course_tenant_throwaway = new Wpcd_Saas_Course_Tenant();

