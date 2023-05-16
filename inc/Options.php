<?php
/**
 * Class for plugin settings.
 *
 * This is used to register settings, create an options page at admin dashboard.
 *
 * @since      1.0.0
 * @package    Plugin_Name
 * @subpackage Plugin_Name/inc
 */

namespace PLUGIN_NAME;

// Exit if accessed directly.
defined( 'ABSPATH' ) or die;

class Options {

	/**
	 * Load options page
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_name_options() {

		// Register the options menu page
		add_action( 'admin_menu', [ $this, 'plugin_name_options_page' ] );

		// Register the options with their default values
		add_action( 'admin_init', [ $this, 'plugin_name_register_settings' ] );

	}

	/**
	 * Add a menu page into admin dashboard
	 *
	 * @since    1.0.0
	 */
	public function plugin_name_options_page() {

		add_menu_page(
				'Block plugin boilerplate options',
				'Block plugin boilerplate',
				'manage_options',
				'block-plugin-boilerplate',
				[ $this, 'plugin_name_settings_page_html' ],
				'dashicons-admin-generic'
		);
	}

	/**
	 * Register settings for options page
	 *
	 * @since    1.0.0
	 */
	public function plugin_name_register_settings() {

		// Register settings group for Logout operation
		register_setting( 'plugin-name-settings-group', 'plugin_name_settings_one', 'sanitize_text_field' );

		// Register settings group for Login operation
		register_setting( 'plugin-name-settings-group', 'plugin_name_settings_two', 'sanitize_text_field' );

	}

	/**
	 * Define the options page markup
	 *
	 * @since    1.0.0
	 */
	public function plugin_name_settings_page_html() {

		$backend = new \PLUGIN_NAME\Backend();

		//Get options page html output from Backend class
		$backend->get_options_page();

	}

}

