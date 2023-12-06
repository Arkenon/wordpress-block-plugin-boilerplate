<?php

namespace PLUGIN_NAME;

// Exit if accessed directly.
defined( 'ABSPATH' ) or die;

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Plugin_Name
 * @subpackage Plugin_Name/inc
 */
class Plugin_Name_I18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_name_textdomain(): void {

		load_plugin_textdomain(
			"plugin-name",
			false,
			PLUGIN_NAME_PLUGIN_PATH . 'languages/'
		);

	}

}
