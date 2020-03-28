<?php
/**
 * Basic settings view for the plugin
 *
 * @since 1.0.0
 */

use AkshitSethi\Plugins\MaintenanceMode\Config;

?>

<div class="as-tile" id="basic">
	<div class="as-tile-body">
		<h2 class="as-tile-title"><?php esc_html_e( 'BASIC', 'classic-coming-soon-maintenance-mode' ); ?></h2>
		<p><?php esc_html_e( 'Configure the core settings. Make sure you configure these options carefully as they are important for the working of the plugin.', 'classic-coming-soon-maintenance-mode' ); ?></p>

		<div class="as-section-content">
			<div class="as-double-group as-clearfix">
				<div class="as-form-group">
					<label for="signals_csmm_status" class="as-strong"><?php esc_html_e( 'Enable Maintenance Mode?', 'classic-coming-soon-maintenance-mode' ); ?></label>
					<input type="checkbox" class="as-form-ios" name="signals_csmm_status" value="1"<?php checked( '1', $options['status'] ); ?>>

					<p class="as-form-help-block"><?php esc_html_e( 'Set the plugin status. Do you want to enable <strong>Maintenance Mode</strong> for your website?', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>

				<div class="as-form-group">
					<label for="signals_csmm_title" class="as-strong"><?php esc_html_e( 'Page Title', 'classic-coming-soon-maintenance-mode' ); ?></label>
					<input type="text" name="signals_csmm_title" id="signals_csmm_title" value="<?php echo esc_attr_e( stripslashes( $options['title'] ) ); ?>" placeholder="<?php esc_attr_e( 'Please provide a Page Title', 'classic-coming-soon-maintenance-mode' ); ?>" class="as-form-control">

					<p class="as-form-help-block"><?php esc_html_e( 'Provide title for the maintenance page.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>
			</div>

			<div class="as-double-group as-clearfix">
				<div class="as-form-group">
					<label for="signals_csmm_header" class="as-strong"><?php esc_html_e( 'Header Text', 'classic-coming-soon-maintenance-mode' ); ?></label>
					<textarea name="signals_csmm_header" id="signals_csmm_header" rows="3" placeholder="<?php esc_attr_e( 'Header text for the maintenance page', 'classic-coming-soon-maintenance-mode' ); ?>"><?php echo esc_textarea( stripslashes( $options['header_text'] ) ); ?></textarea>

					<p class="as-form-help-block"><?php esc_html_e( 'Provide header text for the maintenance page. It is not recommended to leave this blank.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>

				<div class="as-form-group">
					<label for="signals_csmm_secondary" class="as-strong"><?php esc_html_e( 'Secondary Text', 'classic-coming-soon-maintenance-mode' ); ?></label>
					<textarea name="signals_csmm_secondary" id="signals_csmm_secondary" rows="3" placeholder="<?php esc_attr_e( 'Secondary text for the maintenance page', 'classic-coming-soon-maintenance-mode' ); ?>"><?php echo esc_textarea( stripslashes( $options['secondary_text'] ) ); ?></textarea>

					<p class="as-form-help-block"><?php esc_html_e( 'Provide secondary text for the maintenance page. It is not recommended to leave this blank.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>
			</div>

			<div class="as-double-group as-clearfix">
				<div class="as-form-group">
					<label for="signals_csmm_antispam" class="as-strong"><?php esc_html_e( 'Anti Spam Text', 'classic-coming-soon-maintenance-mode' ); ?></label>
					<input type="text" name="signals_csmm_antispam" id="signals_csmm_antispam" value="<?php echo esc_attr_e( stripslashes( $options['antispam_text'] ) ); ?>" placeholder="<?php esc_attr_e( 'Please provide a Anti-spam Text', 'classic-coming-soon-maintenance-mode' ); ?>" class="as-form-control">

					<p class="as-form-help-block"><?php esc_html_e( 'Provide anti-spam text for the maintenance page.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>

				<div class="as-form-group">
					<label for="signals_csmm_custom_login" class="as-strong"><?php esc_html_e( 'Custom login URL', 'classic-coming-soon-maintenance-mode' ); ?></label>
					<input type="text" name="signals_csmm_custom_login" id="signals_csmm_custom_login" value="<?php echo esc_attr_e( $options['custom_login_url'] ); ?>" placeholder="<?php esc_attr_e( 'Custom login URL', 'classic-coming-soon-maintenance-mode' ); ?>" class="as-form-control">

					<p class="as-form-help-block"><?php esc_html_e( 'In case you are using any plugin for custom login, provide your custom login URL over here. This plugin should be able to detect your custom login automatically in most of the situations. In case it fails to do so, you can provide the custom login URL over here.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>
			</div>

			<div class="as-double-group as-clearfix">
				<div class="as-form-group">
					<label for="signals_csmm_showlogged" class="as-strong"><?php esc_html_e( 'Show normal website to logged in users?', 'classic-coming-soon-maintenance-mode' ); ?></label>
					<input type="checkbox" class="as-form-ios" name="signals_csmm_showlogged" value="1"<?php checked( '1', $options['show_logged_in'] ); ?>>

					<p class="as-form-help-block"><?php esc_html_e( 'Enable this option if you want logged in users to view the website normally while visitors see the maintenance page.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>

				<div class="as-form-group">
					<label for="signals_csmm_excludese" class="as-strong"><?php esc_html_e( 'Exclude Search Engines?', 'classic-coming-soon-maintenance-mode' ); ?></label>
					<input type="checkbox" class="as-form-ios" name="signals_csmm_excludese" value="1"<?php checked( '1', $options['exclude_se'] ); ?>>

					<p class="as-form-help-block"><?php esc_html_e( 'Do you want to exclude search engines from viewing maintenance page? This will enable search engines to view your regular website and not the Maintenance Mode page even if the plugin is enabled.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>
			</div>
		</div>
	</div>
</div><!-- #basic -->