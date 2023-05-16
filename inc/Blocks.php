<?php
/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 *
 * @since      1.0.0
 * @package    Plugin_Name
 * @subpackage Plugin_Name/inc
 */

namespace PLUGIN_NAME;

// Exit if accessed directly.
defined( 'ABSPATH' ) or die;

class Blocks {

	/**
	 * Loader function for blocks
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_name_blocks() {

		add_action( 'init', [ $this, 'register_plugin_name_blocks' ] );

	}

	/**
	 * Register Block Types
	 *
	 * @since    1.0.0
	 */
	public function register_plugin_name_blocks() {

		//First Block
		register_block_type(
			plugin_dir_path( dirname( __FILE__ ) ). '/build/first-block'
			/*,
			[
				//Callback function for your block (optional)
				'render_callback' => [ $this, 'first_block_render_callback' ]
			]*/
		);

	}

	/**
	 * Callback function for first block
	 *
	 * @return string First block template html
	 * @since    1.0.0
	 */
	public function first_block_render_callback(): string {
		return "<p>This is first block...</p>";
	}

}
