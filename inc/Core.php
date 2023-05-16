<?php
/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks and more.
 *
 *
 * @since      1.0.0
 * @package    Plugin_Name
 * @subpackage Plugin_Name/inc
 */

namespace PLUGIN_NAME;

// Exit if accessed directly.
defined( 'ABSPATH' ) or die;

using('inc/Loader.php');

class Core extends Loader {

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct( ) {

		/** Run the constructor of parent class (Loader) **/
		parent::__construct();

		//Include required files (required)
		self::load_required_dependencies();

		//Load block types (required)
		self::set_block_types();

		//Load admin options functionality (optional)
		self::set_options();

		//Load internationalization functionality (optional)
		self::set_locale();

		//Defines all hooks for the admin area (optional)
		self::define_admin_hooks();

		//Defines all hooks for the public area (optional)
		self::define_public_hooks();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_required_dependencies() {

		/**
		 * The class responsible for registering block types
		 * side of the site.
		 */
		using('inc/Blocks.php');

	}

	/**
	 * Get admin dashboard options page
	 *
	 * Creates a menu item in admin dashboard and prints an options page
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_options() {

		/**
		 * The class responsible for admin options.
		 */
		using('inc/Options.php');

		$plugin_options = new \PLUGIN_NAME\Options();

		self::add_action( 'plugins_loaded', $plugin_options, 'load_plugin_name_options' );

	}

	/**
	 * Get block types
	 *
	 * Block types registered at class \PLUGIN_NAME\Blocks
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_block_types() {

		$plugin_options = new \PLUGIN_NAME\Blocks();

		self::add_action( 'plugins_loaded', $plugin_options, 'load_plugin_name_blocks' );

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Plugin_Name_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		/**
		 * The class responsible for defining internationalization functionality
		 */
		using('inc/I18n.php');

		$plugin_i18n = new \PLUGIN_NAME\I18n();

		self::add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_name_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		using('admin/Backend.php');

		$plugin_admin = new \PLUGIN_NAME\Backend();

		self::add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		self::add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );

	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 */
		using('public/Frontend.php');

		$plugin_public = new \PLUGIN_NAME\Frontend();

		self::add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		self::add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {

		self::run_plugin();

	}

}
