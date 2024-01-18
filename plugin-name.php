<?php
/**
 * Plugin Name:       Block Plugin Boilerplate
 * Plugin URI:        https://#
 * Description:       Plugin description.
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Version:           1.0.0
 * Author:            Plugin Author
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       plugin-name
 * Domain Path:       /languages
 * @package           Plugin_Name
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) or die;

use PLUGIN_NAME\Plugin_Name_Activator;
use PLUGIN_NAME\Plugin_Name_Deactivator;
use PLUGIN_NAME\Plugin_Name_Core;
use PLUGIN_NAME\Plugin_Name_Helper;

// Define constants
$plugin_data = get_file_data( __FILE__, array( 'version' => 'Version' ) );
define( 'PLUGIN_NAME_VERSION', $plugin_data['version'] );
define( 'PLUGIN_NAME_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'PLUGIN_NAME_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

//Get helper functions at first.
require PLUGIN_NAME_PLUGIN_PATH . 'inc/class-plugin-name-helper.php';


/**
 * The code that runs during plugin activation.
 * This action is documented in inc/Activator.php
 * @since    1.0.0
 */
function plugin_name_activate() {

	Plugin_Name_Helper::using( 'inc/class-plugin-name-activator.php' );

	Plugin_Name_Activator::activate();

}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in inc/Deactivator.php
 * @since    1.0.0
 */
function plugin_name_deactivate() {

	Plugin_Name_Helper::using( 'inc/class-plugin-name-deactivator.php' );

	Plugin_Name_Deactivator::deactivate();

}

/**
 * Register activation and deactivation hooks
 * @since    1.0.0
 */
register_activation_hook( __FILE__, 'plugin_name_activate' );
register_deactivation_hook( __FILE__, 'plugin_name_deactivate' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, public-facing site hooks and more...
 */
Plugin_Name_Helper::using( 'inc/class-plugin-name-core.php' );

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
$plugin = new Plugin_Name_Core();

$plugin->run();
