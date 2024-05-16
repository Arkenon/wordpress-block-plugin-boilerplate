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

use WP_Block;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

class Plugin_Name_Blocks {

	/**
	 * Loader function for blocks
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_name_blocks(): void {

		add_action( 'init', [ $this, 'register_plugin_name_blocks' ] );

	}

	/**
	 * Register Block Types
	 *
	 * @since    1.0.0
	 */
	public function register_plugin_name_blocks(): void {

		//First Block (or whatever your block name is)
		register_block_type(
			PLUGIN_NAME_PLUGIN_PATH . '/build/first-block',
			[
				//Callback function for your block (optional, use this callback if you want to make server side rendering)
				'render_callback' => [ $this, 'first_block_render_callback' ]
			]
		);

	}

	/**
	 * Callback function for the first block (or whatever your block name is)
	 *
	 * @param array $block_attributes Get block content
	 * @param string $content Get block content
	 * @param WP_Block $block Get block instance
	 *
	 * @return string First block template html
	 * @since    1.0.0
	 */
	public function first_block_render_callback( array $block_attributes, string $content, WP_Block $block ): string {

		Plugin_Name_Helper::using( 'public/class-plugin-name-public.php' );

		$public = new Plugin_Name_Public();

		return $public->get_rendered_block( 'public/partials/first-block-render.php', $block_attributes, $content, $block );

	}

}
