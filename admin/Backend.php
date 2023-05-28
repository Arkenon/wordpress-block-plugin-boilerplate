<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @since      1.0.0
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 */

namespace PLUGIN_NAME;

// Exit if accessed directly.
defined( 'ABSPATH' ) or die;

class Backend {
	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run_plugin() function
		 * defined in Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( PLUGIN_NAME_TEXT_DOMAIN, plugin_dir_url( __FILE__ ) . 'css/admin.css', array(), PLUGIN_NAME_VERSION, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run_plugin() function
		 * defined in Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( PLUGIN_NAME_TEXT_DOMAIN, plugin_dir_url( __FILE__ ) . 'js/admin.js', array( 'jquery' ), PLUGIN_NAME_VERSION, false );

	}

	/**
	 * Print admin panel options page.
	 *
	 * @since    1.0.0
	 */
	public function get_options_page()  {

		//Include options page html template from options_page.php
		Helper::print_view('admin/partials/options-page.php');

	}
}
