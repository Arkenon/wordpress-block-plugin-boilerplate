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

use WP_Block;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Plugin_Name_Public {

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles(): void {

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

		wp_enqueue_style( "plugin-name-public-stles", PLUGIN_NAME_PLUGIN_URL . 'public/css/plugin-name-public.css', array(), PLUGIN_NAME_VERSION, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts(): void {

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

		wp_enqueue_script( "plugin-name-public-scripts", PLUGIN_NAME_PLUGIN_URL . 'public/js/plugin-name-public.js', array( 'jquery' ), PLUGIN_NAME_VERSION, false );

	}

	/**
	 * Html render for a block
	 *
	 * @param string $path Path for view page
	 * @param array $block_attributes Get block content
	 * @param string $content Get block content
	 * @param WP_Block|null $block Get block instance
	 *
	 * @return string Html output of a block
	 * @since    1.0.0
	 */
	public function get_rendered_block(string $path, array $block_attributes = [], string $content = '', WP_Block $block = null) : string  {

		//Return html output of the block
		return Plugin_Name_Helper::return_view( $path,  $block_attributes, $content, $block );

	}

}
