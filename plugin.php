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

use PLUGIN_NAME\Activator;
use PLUGIN_NAME\Deactivator;
use PLUGIN_NAME\Core;
use PLUGIN_NAME\Helper;

//Get helper functions at first.
require plugin_dir_path( __FILE__ ) . 'inc/Helper.php';

// Get plugin data
$plugin_data = get_file_data(
	__FILE__,
	array(
		'version'     => 'Version'
	)
);

//Constants
define( 'PLUGIN_NAME_VERSION', $plugin_data['version'] );

/**
 * The code that runs during plugin activation.
 * This action is documented in inc/Activator.php
 * @since    1.0.0
 */
function activate_plugin_name() {

	Helper::using('inc/Activator.php');

	Activator::activate();

}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in inc/Deactivator.php
 * @since    1.0.0
 */
function deactivate_plugin_name() {

	Helper::using('inc/Deactivator.php');

	Deactivator::deactivate();

}

/**
 * Register activation and deactivation hooks
 * @since    1.0.0
 */
register_activation_hook( __FILE__, 'activate_plugin_name' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, public-facing site hooks and more...
 */
Helper::using('inc/Core.php');

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
$plugin = new Core();

$plugin->run();
