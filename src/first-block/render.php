<?php
/**
 * Return html output of your blocks. This file will be used to render a block.
 * Server side rendering operation of a block.
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$first_attr = $attributes['firstAttr'] ?? false;
?>
<p <?php echo get_block_wrapper_attributes()?>>
	<?php
	if($first_attr){
		echo __("First Block: Hello from render.php / Attributes setted...");
	} else {
		echo __("First Block: Hello from render.php / Attributes not setted...");
	}
	?>
</p>

