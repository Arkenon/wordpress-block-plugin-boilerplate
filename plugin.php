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


//Get helper functions at first.
require plugin_dir_path( __FILE__ ) . 'inc/helpers.php';

// Get plugin data
$plugin_data = get_file_data(
	__FILE__,
	array(
		'version'     => 'Version',
		'text_domain' => 'Text Domain'
	)
);

//Constants
define( 'PLUGIN_NAME_VERSION', $plugin_data['version'] );
define( 'PLUGIN_NAME_TEXT_DOMAIN', $plugin_data['text_domain'] );

/**
 * The code that runs during plugin activation.
 * This action is documented in inc/Activator.php
 * @since    1.0.0
 */
function activate_plugin_name() {

	using('inc/Activator.php');

	\PLUGIN_NAME\Activator::activate();

}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in inc/Deactivator.php
 * @since    1.0.0
 */
function deactivate_plugin_name() {

	using('inc/Deactivator.php');

	\PLUGIN_NAME\Deactivator::deactivate();

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
using('inc/Core.php');

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
$plugin = new \PLUGIN_NAME\Core();

$plugin->run();
