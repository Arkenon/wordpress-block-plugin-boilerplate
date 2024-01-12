<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * An instance of this class should be passed to the run_plugin() function
 * defined in Loader as all of the hooks are defined
 * in that particular class.
 *
 * The Loader will then create the relationship
 * between the defined hooks and the functions defined in this class.
 *
 * @since      1.0.0
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 */

namespace PLUGIN_NAME;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Plugin_Name_Admin {
	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles(): void {

		wp_enqueue_style( "plugin-name-admin-styles", PLUGIN_NAME_PLUGIN_URL . 'admin/css/plugin-name-admin.css', array(), PLUGIN_NAME_VERSION, 'all' );

	}

	/**
	 * Register the stylesheets for the block editor (Common styles).
	 *
	 * @since    1.0.0
	 */
	public function editor_styles(): void {

		add_editor_style( array( PLUGIN_NAME_PLUGIN_URL . 'admin/css/plugin-name-editor.css' ) );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts(): void {


		wp_enqueue_script( "plugin-name-admin-scripts", PLUGIN_NAME_PLUGIN_URL . 'admin/js/plugin-name-admin.js', array( 'jquery' ), PLUGIN_NAME_VERSION, false );

	}

	/**
	 * Print admin panel options page.
	 *
	 * @since    1.0.0
	 */
	public function get_options_page(): void {

		//Include options page html template from options_page.php
		Plugin_Name_Helper::print_view( 'admin/partials/options-page.php' );

	}
}
