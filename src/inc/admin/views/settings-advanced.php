<?php
/**
 * Advanced settings view for the plugin
 *
 * @since 1.0.0
 */

use AkshitSethi\Plugins\MaintenanceMode\Config;

?>

<div class="as-tile" id="advanced">
	<form method="post" class="as-advanced-form">
		<div class="as-tile-body">
			<h2 class="as-tile-title"><?php esc_html_e( 'ADVANCED', 'maintenance-mode-coming-soon' ); ?></h2>
			<p><?php esc_html_e( 'You can add custom HTML & CSS in this section. Making wrong changes over here will affect the working of the plugin.', 'maintenance-mode-coming-soon' ); ?></p>

			<div class="as-section-content">
				<div class="as-form-group">
					<label for="<?php echo Config::PREFIX . 'disable'; ?>" class="as-strong"><?php esc_html_e( 'Use Custom HTML only', 'maintenance-mode-coming-soon' ); ?></label>
					<input type="checkbox" class="as-form-ios" name="<?php echo Config::PREFIX . 'disable'; ?>" value="1"<?php checked( true, esc_attr( $options['advanced']['disable_settings'] ) ); ?>>

					<p class="as-form-help-block"><?php esc_html_e( 'If you enable this option, the plugin will ignore everything except the HTML you provide.', 'maintenance-mode-coming-soon' ); ?></p>
					<p class="as-form-help-block"><?php esc_html_e( 'Basically, you will have a blank template which you can fill with your provided html content. Only basic css gets added by the plugin which does the task of browser styling reset. You should style your html content either inline or by inserting styling in the custom css section. In short, use this option only if you know what you are doing.', 'maintenance-mode-coming-soon' ); ?></p>
				</div>

				<div class="as-form-group">
					<label for="<?php echo Config::PREFIX . 'html'; ?>" class="as-strong"><?php esc_html_e( 'Custom HTML', 'maintenance-mode-coming-soon' ); ?></label>
					<div id="<?php echo Config::PREFIX . 'html_editor'; ?>" class="as-code-editor"></div>
					<textarea name="<?php echo Config::PREFIX . 'html'; ?>" id="<?php echo Config::PREFIX . 'html'; ?>" rows="8" placeholder="<?php esc_html_e( 'Custom HTML for the plugin', 'maintenance-mode-coming-soon' ); ?>"><?php echo esc_textarea( stripslashes( $options['advanced']['custom_html'] ) ); ?></textarea>

					<p class="as-form-help-block"><?php echo sprintf( esc_html__( 'Custom HTML for the plugin goes over here. Please note that %1$s[html], [head], [title], [meta], [body], and similar tags%2$s are not required. Only provide content HTML for the page.', 'maintenance-mode-coming-soon' ), '<i style="color: #f96773">', '</i>' ); ?></p>
					<p class="as-form-help-block"><?php echo sprintf( esc_html__( 'To insert subscription form anywhere in the html, simply use the placeholder %1$s and you are done.', 'maintenance-mode-coming-soon' ), '<i style="color: #f96773">{{form}}</i>' ); ?></p>
				</div>

				<div class="as-form-group">
					<label for="<?php echo Config::PREFIX . 'css'; ?>" class="as-strong"><?php esc_html_e( 'Custom CSS', 'maintenance-mode-coming-soon' ); ?></label>
					<div id="<?php echo Config::PREFIX . 'css_editor'; ?>" class="as-code-editor"></div>
					<textarea name="<?php echo Config::PREFIX . 'css'; ?>" id="<?php echo Config::PREFIX . 'css'; ?>" rows="8" placeholder="<?php esc_html_e( 'Custom CSS for the plugin', 'maintenance-mode-coming-soon' ); ?>"><?php echo esc_textarea( stripslashes( $options['advanced']['custom_css'] ) ); ?></textarea>

					<p class="as-form-help-block"><?php esc_html_e( 'Custom CSS for the plugin goes over here.', 'maintenance-mode-coming-soon' ); ?></p>
				</div>
			</div>
		</div>
	</form>
</div><!-- #advanced -->
