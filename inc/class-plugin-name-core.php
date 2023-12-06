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

Plugin_Name_Helper::using('inc/class-plugin-name-loader.php');

class Plugin_Name_Core extends Plugin_Name_Loader {

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
		
		//Load internationalization functionality (required)
		self::set_locale();
		
		//Load admin options functionality (optional)
		self::set_options();

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
	private function load_required_dependencies(): void {

		/**
		 * The class responsible for registering block types
		 * side of the site.
		 */
		Plugin_Name_Helper::using('inc/class-plugin-name-blocks.php');
		
		/**
		 * The class responsible for defining internationalization functionality
		 */
		Plugin_Name_Helper::using('inc/class-plugin-name-i18n.php');

	}

	/**
	 * Get admin dashboard options page
	 *
	 * Creates a menu item in admin dashboard and prints an options page
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_options(): void {

		/**
		 * The class responsible for admin options.
		 */
		Plugin_Name_Helper::using('inc/class-plugin-name-options.php');

		$plugin_options = new Plugin_Name_Options();

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
	private function set_block_types(): void {

		$plugin_options = new Plugin_Name_Blocks();

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
	private function set_locale(): void {

		/**
		 * The class responsible for defining internationalization functionality
		 */

		$plugin_i18n = new Plugin_Name_I18n();

		self::add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_name_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks(): void {

		/**
		 * The class responsible for defining all actions that occur in the admin area and block editor
		 * Editor styles for only common css rules of blocks.
		 */
		Plugin_Name_Helper::using('admin/class-plugin-name-admin.php');

		$plugin_admin = new Plugin_Name_Admin();

		self::add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		self::add_action( 'init', $plugin_admin, 'editor_styles' );
		self::add_action( 'pre_get_posts', $plugin_admin, 'editor_styles' );
		self::add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );

	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks(): void {

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 */
		Plugin_Name_Helper::using('public/class-plugin-name-public.php');
		$plugin_public = new Plugin_Name_Public();

		self::add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		self::add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run(): void {

		self::run_plugin();

	}

}
