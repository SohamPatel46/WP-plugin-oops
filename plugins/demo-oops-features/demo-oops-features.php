<?php
/**
 * Plugin Name: Demo_oops Features
 * Description: All backend functionality will take place in this plugin. Like, registering post type, taxonomy, widget and meta box.
 * Plugin URI:  https://rtcamp.com
 * Author:      rtCamp
 * Author URI:  https://rtcamp.com
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Version:     1.0
 * Text Domain: demo-oops-features
 *
 * @package demo-oops-features
 */

define( 'DEMO_OOPS_FEATURES_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'DEMO_OOPS_FEATURES_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );

// phpcs:disable WordPressVIPMinimum.Files.IncludingFile.UsingCustomConstant
require_once DEMO_OOPS_FEATURES_PATH . '/inc/helpers/autoloader.php';
require_once DEMO_OOPS_FEATURES_PATH . '/inc/helpers/custom-functions.php';
// phpcs:enable WordPressVIPMinimum.Files.IncludingFile.UsingCustomConstant

/**
 * To load plugin manifest class.
 *
 * @return void
 */
function demo_oops_features_plugin_loader() {
	\Demo_oops\Features\Inc\Plugin::get_instance();
}

demo_oops_features_plugin_loader();
