<?php
/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @since      1.0.0
 * @package    Plugin_Name
 * @subpackage Plugin_Name/public
 */

namespace PLUGIN_NAME;

// Exit if accessed directly.
defined( 'ABSPATH' ) or die;

class Frontend {

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( "plugin-name-public-css", plugin_dir_url( __FILE__ ) . 'css/public.css', array(), PLUGIN_NAME_VERSION, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( "plugin-name-public-js", plugin_dir_url( __FILE__ ) . 'js/public.js', array( 'jquery' ), PLUGIN_NAME_VERSION, false );

	}

	/**
	 * Html render for a block
	 *
	 * @param array $path Path of .php file which has html output
	 * @param array $block_attributes Get block attributes from block-name/edit.js
	 *
	 * @return string Block's html output
	 * @since    1.0.0
	 */
	public function first_block_render(string $path, array $block_attributes) : string  {

		//Return html output of the block
		return Helper::return_view( $path, $block_attributes );

	}

}
