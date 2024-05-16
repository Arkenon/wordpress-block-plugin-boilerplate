<?php
/**
 * Return html output of your blocks. This file will be used to render a block.
 * Server side rendering operation of a block.
 *
 * @since      1.0.0
 * @package    Plugin_Name
 * @subpackage Plugin_Name/public/partials
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

$first_attr = $block_attributes['firstAttr'] ?? false;

$view = '<p ' . get_block_wrapper_attributes() . '>';
if($first_attr){
	$view .= __( "First Block: Hello from server side rendering callback function. / Attributes setted." );
} else {
	$view .= __( "First Block: Hello from server side rendering callback function. / Attributes not setted." );
}
$view .= __( "First Block: Hello from server side rendering callback function. / Attributes not setted." );
$view .= '</p>';
