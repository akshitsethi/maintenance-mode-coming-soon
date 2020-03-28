<?php
/**
 * Advanced settings view for the plugin
 *
 * @since 1.0.0
 */

use AkshitSethi\Plugins\MaintenanceMode\Config;

?>

<div class="as-tile" id="advanced">
	<div class="as-tile-body">
		<h2 class="as-tile-title"><?php esc_html_e( 'ADVANCED', 'classic-coming-soon-maintenance-mode' ); ?></h2>
		<p><?php esc_html_e( 'You can add custom HTML & CSS in this section. Making wrong changes over here will affect the working of the plugin.', 'classic-coming-soon-maintenance-mode' ); ?></p>

		<div class="as-section-content">
			<div class="as-form-group">
				<label for="signals_csmm_disable" class="as-strong"><?php esc_html_e( 'Use Custom HTML only', 'classic-coming-soon-maintenance-mode' ); ?></label>
				<input type="checkbox" class="as-form-ios" name="signals_csmm_disable" value="1"<?php checked( '1', $options['disable_settings'] ); ?>>

				<p class="as-form-help-block"><?php esc_html_e( 'If you enable this option, the plugin will ignore everything except the HTML you provide.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				<p class="as-form-help-block"><?php esc_html_e( 'Basically, you will have a blank template which you can fill with your provided html content. Only basic css gets added by the plugin which does the task of browser styling reset. You should style your html content either inline or by inserting styling in the custom css section. In short, use this option only if you know what you are doing.', 'classic-coming-soon-maintenance-mode' ); ?></p>
			</div>

			<div class="as-form-group">
				<label for="signals_csmm_html" class="as-strong"><?php esc_html_e( 'Custom HTML', 'classic-coming-soon-maintenance-mode' ); ?></label>
				<div id="signals_csmm_html_editor"></div>
				<textarea name="signals_csmm_html" id="signals_csmm_html" rows="8" placeholder="<?php esc_html_e( 'Custom HTML for the plugin', 'classic-coming-soon-maintenance-mode' ); ?>"><?php echo stripslashes( $options['custom_html'] ); ?></textarea>

				<p class="as-form-help-block"><?php echo __( 'Custom HTML for the plugin goes over here. Please note that ', 'classic-coming-soon-maintenance-mode' ) . '<i style="color: #f96773">' . __( '[html], [head], [title], [meta], [body], and similar tags', 'classic-coming-soon-maintenance-mode' ) . '</i>' . __( ' are not required. Only provide content HTML for the page.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				<p class="as-form-help-block"><?php esc_html_e( 'To insert subscription form anywhere in the html, simply use the placeholder <strong>{{form}}</strong> and you are done.', 'classic-coming-soon-maintenance-mode' ); ?></p>
			</div>

			<div class="as-form-group">
				<label for="signals_csmm_css" class="as-strong"><?php esc_html_e( 'Custom CSS', 'classic-coming-soon-maintenance-mode' ); ?></label>
				<div id="signals_csmm_css_editor"></div>
				<textarea name="signals_csmm_css" id="signals_csmm_css" class="Signals_csmm_Block" rows="8" placeholder="<?php esc_html_e( 'Custom CSS for the plugin', 'classic-coming-soon-maintenance-mode' ); ?>"><?php echo stripslashes( $options['custom_css'] ); ?></textarea>

				<p class="as-form-help-block"><?php esc_html_e( 'Custom CSS for the plugin goes over here.', 'classic-coming-soon-maintenance-mode' ); ?></p>
			</div>
		</div>
	</div>
</div><!-- #advanced -->
