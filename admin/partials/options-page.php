<?php
/**
 * Provide an admin options page view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @since      1.0.0
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin/partials
 */
?>

<div class="wrap">
	<h1>
		<?php echo esc_html_x( get_admin_page_title(), 'Admin page title', "plugin-name" ); ?>
	</h1>
	<form method="post" action="options.php">
		<?php settings_fields( 'plugin-name-settings-group' ); ?>
		<?php do_settings_sections( 'plugin-name-settings-group' ); ?>
		<table class="form-table">
			<tr>
				<th scope="row">
					<?php echo esc_html_x( 'Plugin settings one', 'plugin_settings_1_title', "plugin-name" ); ?>
				</th>
				<td>
					<input type="text" name="plugin_name_settings_one"
						   value="<?php echo esc_attr( get_option( 'plugin_name_settings_one' ) ); ?>"/>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<?php echo esc_html_x( 'Plugin settings two', 'plugin_settings_2_title', "plugin-name" ); ?>
				</th>
				<td>
					<input type="text" name="plugin_name_settings_two"
						   value="<?php echo esc_attr( get_option( 'plugin_name_settings_two' ) ); ?>"/>
				</td>
			</tr>
		</table>
		<?php submit_button(); ?>
	</form>
</div>


