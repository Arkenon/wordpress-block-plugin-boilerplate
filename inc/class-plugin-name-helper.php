<?php

/**
 * Helper functions.
 *
 * This class has helper functions to develop our plugin easier.
 *
 * @since 1.0.0
 * @package    Plugin_Name
 * @subpackage Plugin_Name/inc
 */

namespace PLUGIN_NAME;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Plugin_Name_Helper {

	/**
	 * Secures $_POST and $_GET operation
	 *
	 * @param string $name $_POST['name'] or $_GET['name']
	 *
	 * @return mixed|null $_POST['name']/$_GET['name'] or null when !isset($_POST['name']/$_GET['name'])
	 * @since 1.0.0
	 */
	public static function sanitize( string $name, string $method, string $type = "" ) {

		$value = '';

		if ($method == 'post') {
			if (isset($_POST[$name])) {
				$value = sanitize_text_field($_POST[$name]);
			}
		} else {
			if (isset($_GET[$name])) {
				$value = sanitize_text_field($_GET[$name]);
			}
		}

		if ( isset( $value ) ) {
			switch ( $type ) {
				case "title":
					return sanitize_title( $value );
					break;
				case "id":
					return absint( $value );
					break;
				case "textarea":
					return sanitize_textarea_field( $value );
					break;
				case "url":
					return esc_url_raw( $value );
					break;
				case "email":
					return sanitize_email( $value );
					break;
				case "username":
					return sanitize_user( $value );
					break;
				default:
					return $value;
			}
		}

		return null;

	}

	/**
	 * Print a php page as a view
	 * To return a view uses include_once() function
	 *
	 * @param string $path Path for view page
	 *
	 * @since 1.0.0
	 */
	public static function print_view( string $path ) : void {

		include_once PLUGIN_NAME_PLUGIN_PATH . $path;

	}

	/**
	 * Returns an html variable as a view
	 * To return a view uses include_once() function
	 *
	 * @param string $path Path for view page
	 * @param array $block_attributes Get block attributes from block-name/edit.js
	 *
	 * @return string $view
	 * @var string $view html output
	 * @since 1.0.0
	 *
	 */
	public static function return_view( string $path, array $block_attributes = [] ): string {

		$view = "";

		//Get attributes
		extract($block_attributes);

		//Include php file which has a variable named $view and equals to html output
		include_once PLUGIN_NAME_PLUGIN_PATH . $path;

		return $view;

	}

	/**
	 * Includes a class or function.
	 *
	 * @param string $path Path for view page
	 *
	 * @since 1.0.0
	 */
	public static function using( string $path ) : void {

		require_once PLUGIN_NAME_PLUGIN_PATH . $path;

	}

}

