<?php
/**
 * Design settings view for the plugin
 *
 * @since 1.0.0
 */

use AkshitSethi\Plugins\MaintenanceMode\Config;

?>

<div class="as-tile" id="design">
	<div class="as-tile-body">
		<h2 class="as-tile-title"><?php esc_html_e( 'DESIGN', 'classic-coming-soon-maintenance-mode' ); ?></h2>
		<p><?php esc_html_e( 'Design settings for the plugin. You have the option to modify every aspect of the maintenance page design as per your requirements.', 'classic-coming-soon-maintenance-mode' ); ?></p>

		<div class="as-section-content">
			<div class="as-upload-group as-clearfix">
				<div class="as-form-group border-fix">
					<div class="as-upload-element">
						<label class="as-strong"><?php esc_html_e( 'Logo', 'classic-coming-soon-maintenance-mode' ); ?></label>

						<?php if ( ! empty( $options['logo'] ) ) : // If the image url is present, show the image. Else, show the default upload text ?>
							<span class="as-preview-area"><img src="<?php echo esc_attr( $options['logo'] ); ?>" /></span>
						<?php else : ?>
							<span class="as-preview-area"><?php esc_html_e( 'Select or upload via WP native uploader', 'classic-coming-soon-maintenance-mode' ); ?></span>
						<?php endif; ?>

						<input type="hidden" name="signals_csmm_logo" id="signals_csmm_logo" value="<?php esc_attr_e( $options['logo'] ); ?>">
						<button type="button" name="signals_logo_upload" id="signals_logo_upload" class="as-btn as-upload" style="margin-top: 4px"><?php esc_html_e( 'Select', 'classic-coming-soon-maintenance-mode' ); ?></button>

						<span class="as-upload-append">
							<?php if ( ! empty( $options['logo'] ) ) : ?>
								&nbsp;<a href="javascript: void(0);" class="as-remove-image"><?php esc_html_e( 'Remove', 'classic-coming-soon-maintenance-mode' ); ?></a>
							<?php endif; ?>
						</span>
					</div>
				</div>

				<div class="as-form-group border-fix">
					<div class="as-upload-element">
						<label class="as-strong"><?php esc_html_e( 'Favicon', 'classic-coming-soon-maintenance-mode' ); ?></label>

						<?php if ( ! empty( $options['favicon'] ) ) : // If the image url is present, show the image. Else, show the default upload text ?>
							<span class="as-preview-area"><img src="<?php echo esc_attr( $options['favicon'] ); ?>" /></span>
						<?php else : ?>
							<span class="as-preview-area"><?php esc_html_e( 'Select or upload via WP native uploader', 'classic-coming-soon-maintenance-mode' ); ?></span>
						<?php endif; ?>

						<input type="hidden" name="signals_csmm_favicon" id="signals_csmm_favicon" value="<?php esc_attr_e( $options['favicon'] ); ?>">
						<button type="button" name="signals_favicon_upload" id="signals_favicon_upload" class="as-btn as-upload" style="margin-top: 4px"><?php esc_html_e( 'Select', 'classic-coming-soon-maintenance-mode' ); ?></button>

						<span class="as-upload-append">
							<?php if ( ! empty( $options['favicon'] ) ) : ?>
								&nbsp;<a href="javascript: void(0);" class="as-remove-image"><?php esc_html_e( 'Remove', 'classic-coming-soon-maintenance-mode' ); ?></a>
							<?php endif; ?>
						</span>
					</div>
				</div>

				<div class="as-form-group border-fix">
					<div class="as-upload-element">
						<label class="as-strong"><?php esc_html_e( 'Background Cover Image', 'classic-coming-soon-maintenance-mode' ); ?></label>

						<?php if ( ! empty( $options['bg_cover'] ) ) : // If the image url is present, show the image. Else, show the default upload text ?>
							<span class="as-preview-area"><img src="<?php echo esc_attr( $options['bg_cover'] ); ?>" /></span>
						<?php else : ?>
							<span class="as-preview-area"><?php esc_html_e( 'Select or upload via WP native uploader', 'classic-coming-soon-maintenance-mode' ); ?></span>
						<?php endif; ?>

						<input type="hidden" name="signals_csmm_bg" id="signals_csmm_bg" value="<?php esc_attr_e( $options['bg_cover'] ); ?>">
						<button type="button" name="signals_bg_upload" id="signals_bg_upload" class="as-btn as-upload" style="margin-top: 4px"><?php esc_html_e( 'Select', 'classic-coming-soon-maintenance-mode' ); ?></button>

						<span class="as-upload-append">
							<?php if ( ! empty( $options['bg_cover'] ) ) : ?>
								&nbsp;<a href="javascript: void(0);" class="as-remove-image"><?php esc_html_e( 'Remove', 'classic-coming-soon-maintenance-mode' ); ?></a>
							<?php endif; ?>
						</span>
					</div>
				</div>
			</div>

			<div class="as-form-group">
				<label for="signals_csmm_overlay" class="as-strong"><?php esc_html_e( 'Content Overlay', 'classic-coming-soon-maintenance-mode' ); ?></label>
				<input type="checkbox" class="as-form-ios" name="signals_csmm_overlay" value="1"<?php checked( '1', $options['content_overlay'] ); ?>>

				<p class="as-form-help-block"><?php esc_html_e( 'If enabled, applies transparent background to the content section of the maintenance page.', 'classic-coming-soon-maintenance-mode' ); ?></p>
			</div>

			<div class="as-double-group as-clearfix">
				<div class="as-form-group">
					<label for="signals_csmm_width" class="as-strong"><?php esc_html_e( 'Content Width (in px)', 'classic-coming-soon-maintenance-mode' ); ?></label>
					<input type="text" name="signals_csmm_width" id="signals_csmm_width" value="<?php esc_attr_e( $options['content_width'] ); ?>" placeholder="<?php esc_html_e( 'Set content width for the page', 'classic-coming-soon-maintenance-mode' ); ?>" class="as-form-control">

					<p class="as-form-help-block"><?php esc_html_e( 'Set maximum width of the content (in pixels) for the maintenance page. Provide only numeric value. Example: Entering 400 will set the width of the content to 400px. Defaults to 440px.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>

				<div class="as-form-group">
					<label for="signals_csmm_color" class="as-strong"><?php esc_html_e( 'Background Color', 'classic-coming-soon-maintenance-mode' ); ?></label>
					<input type="text" name="signals_csmm_color" id="signals_csmm_color" value="<?php esc_attr_e( $options['bg_color'] ); ?>" placeholder="<?php esc_html_e( 'Background color for the page', 'classic-coming-soon-maintenance-mode' ); ?>" class="as-form-control color {required:false}">

					<p class="as-form-help-block"><?php esc_html_e( 'Select background color for the page. If the background cover image is set, this option will be ignored.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>
			</div>

			<div class="as-double-group as-clearfix">
				<div class="as-form-group">
					<label for="signals_csmm_position" class="as-strong"><?php esc_html_e( 'Content Position', 'classic-coming-soon-maintenance-mode' ); ?></label>
					<select name="signals_csmm_position" id="signals_csmm_position">
						<option value="left"<?php selected( 'left', $options['content_position'] ); ?>><?php esc_html_e( 'Left', 'classic-coming-soon-maintenance-mode' ); ?></option>
						<option value="center"<?php selected( 'center', $options['content_position'] ); ?>><?php esc_html_e( 'Center', 'classic-coming-soon-maintenance-mode' ); ?></option>
						<option value="right"<?php selected( 'right', $options['content_position'] ); ?>><?php esc_html_e( 'Right', 'classic-coming-soon-maintenance-mode' ); ?></option>
					</select>

					<p class="as-form-help-block"><?php esc_html_e( 'For the position of the content on the maintenance page. Does not work if the width is set to maximum which is 1170px.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>

				<div class="as-form-group">
					<label for="signals_csmm_alignment" class="as-strong"><?php esc_html_e( 'Content Alignment', 'classic-coming-soon-maintenance-mode' ); ?></label>
					<select name="signals_csmm_alignment" id="signals_csmm_alignment">
						<option value="left"<?php selected( 'left', $options['content_alignment'] ); ?>><?php esc_html_e( 'Left', 'classic-coming-soon-maintenance-mode' ); ?></option>
						<option value="center"<?php selected( 'center', $options['content_alignment'] ); ?>><?php esc_html_e( 'Center', 'classic-coming-soon-maintenance-mode' ); ?></option>
						<option value="right"<?php selected( 'right', $options['content_alignment'] ); ?>><?php esc_html_e( 'Right', 'classic-coming-soon-maintenance-mode' ); ?></option>
					</select>

					<p class="as-form-help-block"><?php esc_html_e( 'For the alignment of the text on the maintenance page. Make it left, center, or right.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>
			</div>

			<div class="as-double-group as-clearfix">
				<div class="as-form-group">
					<label for="signals_csmm_header_font" class="as-strong"><?php esc_html_e( 'Header Font', 'classic-coming-soon-maintenance-mode' ); ?></label>

					<select name="signals_csmm_header_font" id="signals_csmm_header_font" class="as-google-fonts">
						<option value="Arial"<?php selected( 'Arial', $options['header_font'] ); ?>><?php esc_html_e( 'Arial', 'classic-coming-soon-maintenance-mode' ); ?></option>
						<option value="Helvetica"<?php selected( 'Helvetica', $options['header_font'] ); ?>><?php esc_html_e( 'Helvetica', 'classic-coming-soon-maintenance-mode' ); ?></option>
						<option value="Georgia"<?php selected( 'Georgia', $options['header_font'] ); ?>><?php esc_html_e( 'Georgia', 'classic-coming-soon-maintenance-mode' ); ?></option>
						<option value="Times New Roman"<?php selected( 'Times New Roman', $options['header_font'] ); ?>><?php esc_html_e( 'Times New Roman', 'classic-coming-soon-maintenance-mode' ); ?></option>
						<option value="Tahoma"<?php selected( 'Tahoma', $options['header_font'] ); ?>><?php esc_html_e( 'Tahoma', 'classic-coming-soon-maintenance-mode' ); ?></option>
						<option value="Verdana"<?php selected( 'Verdana', $options['header_font'] ); ?>><?php esc_html_e( 'Verdana', 'classic-coming-soon-maintenance-mode' ); ?></option>
						<option value="Geneva"<?php selected( 'Geneva', $options['header_font'] ); ?>><?php esc_html_e( 'Geneva', 'classic-coming-soon-maintenance-mode' ); ?></option>
						<option disabled>-- via google --</option>
						<?php

							// Listing fonts from the array
							foreach ( $signals_google_fonts as $signals_font ) {
								echo '<option value="' . $signals_font . '"' . selected( $signals_font, $options['header_font'] ) . '>' . $signals_font . '</option>' . "\n";
							}

						?>
					</select>

					<h3><?php esc_html_e( 'This is how this font is going to look!', 'classic-coming-soon-maintenance-mode' ); ?></h3>
					<p class="as-form-help-block"><?php esc_html_e( 'Font for the header text. Listing a total of 668 Google web fonts.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>

				<div class="as-form-group">
					<label for="signals_csmm_secondary_font" class="as-strong"><?php esc_html_e( 'Secondary Font', 'classic-coming-soon-maintenance-mode' ); ?></label>

					<select name="signals_csmm_secondary_font" id="signals_csmm_secondary_font" class="as-google-fonts">
						<option value="Arial"<?php selected( 'Arial', $options['secondary_font'] ); ?>><?php esc_html_e( 'Arial', 'classic-coming-soon-maintenance-mode' ); ?></option>
						<option value="Helvetica"<?php selected( 'Helvetica', $options['secondary_font'] ); ?>><?php esc_html_e( 'Helvetica', 'classic-coming-soon-maintenance-mode' ); ?></option>
						<option value="Georgia"<?php selected( 'Georgia', $options['secondary_font'] ); ?>><?php esc_html_e( 'Georgia', 'classic-coming-soon-maintenance-mode' ); ?></option>
						<option value="Times New Roman"<?php selected( 'Times New Roman', $options['secondary_font'] ); ?>><?php esc_html_e( 'Times New Roman', 'classic-coming-soon-maintenance-mode' ); ?></option>
						<option value="Tahoma"<?php selected( 'Tahoma', $options['secondary_font'] ); ?>><?php esc_html_e( 'Tahoma', 'classic-coming-soon-maintenance-mode' ); ?></option>
						<option value="Verdana"<?php selected( 'Verdana', $options['secondary_font'] ); ?>><?php esc_html_e( 'Verdana', 'classic-coming-soon-maintenance-mode' ); ?></option>
						<option value="Geneva"<?php selected( 'Geneva', $options['secondary_font'] ); ?>><?php esc_html_e( 'Geneva', 'classic-coming-soon-maintenance-mode' ); ?></option>
						<option disabled>-- via google --</option>
						<?php

							// Listing fonts from the array
							foreach ( $signals_google_fonts as $signals_font ) {
								echo '<option value="' . $signals_font . '"' . selected( $signals_font, $options['secondary_font'] ) . '>' . $signals_font . '</option>' . "\n";
							}

						?>
					</select>

					<h3><?php esc_html_e( 'This is how this font is going to look!', 'classic-coming-soon-maintenance-mode' ); ?></h3>
					<p class="as-form-help-block"><?php esc_html_e( 'Font for the secondary text. Listing a total of 668 Google web fonts.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>
			</div>

			<div class="as-double-group as-clearfix">
				<div class="as-form-group">
					<label for="signals_csmm_header_size" class="as-strong"><?php esc_html_e( 'Header Text Size', 'classic-coming-soon-maintenance-mode' ); ?></label>

					<select name="signals_csmm_header_size" id="signals_csmm_header_size">
						<?php

							// Loading font sizes with the help of a loop
							for ( $i = 11; $i < 41; $i++ ) {
								echo '<option value="' . $i . '"' . selected( $options['header_font_size'], $i ) . '>' . $i . __( 'px', 'classic-coming-soon-maintenance-mode' ) . '</option>';
							}

						?>
					</select>

					<p class="as-form-help-block"><?php esc_html_e( 'Font size for the header text.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>

				<div class="as-form-group">
					<label for="signals_csmm_secondary_size" class="as-strong"><?php esc_html_e( 'Secondary Text Size', 'classic-coming-soon-maintenance-mode' ); ?></label>

					<select name="signals_csmm_secondary_size" id="signals_csmm_secondary_size">
						<?php

							// Loading font sizes with the help of a loop
							for ( $i = 11; $i < 41; $i++ ) {
								echo '<option value="' . $i . '"' . selected( $options['secondary_font_size'], $i ) . '>' . $i . __( 'px', 'classic-coming-soon-maintenance-mode' ) . '</option>';
							}

						?>
					</select>

					<p class="as-form-help-block"><?php esc_html_e( 'Font size for the secondary text.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>
			</div>

			<div class="as-double-group as-clearfix">
				<div class="as-form-group">
					<label for="signals_csmm_header_color" class="as-strong"><?php esc_html_e( 'Header Text Color', 'classic-coming-soon-maintenance-mode' ); ?></label>
					<input type="text" name="signals_csmm_header_color" id="signals_csmm_header_color" value="<?php esc_attr_e( $options['header_font_color'] ); ?>" placeholder="<?php esc_html_e( 'Font color for the Header text', 'classic-coming-soon-maintenance-mode' ); ?>" class="as-form-control color {required:false}">

					<p class="as-form-help-block"><?php esc_html_e( 'Select font color for the header text.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>

				<div class="as-form-group">
					<label for="signals_csmm_secondary_color" class="as-strong"><?php esc_html_e( 'Secondary Text Color', 'classic-coming-soon-maintenance-mode' ); ?></label>
					<input type="text" name="signals_csmm_secondary_color" id="signals_csmm_secondary_color" value="<?php esc_attr_e( $options['secondary_font_color'] ); ?>" placeholder="<?php esc_html_e( 'Font color for the Secondary text', 'classic-coming-soon-maintenance-mode' ); ?>" class="as-form-control color {required:false}">

					<p class="as-form-help-block"><?php esc_html_e( 'Select font color for the secondary text.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>
			</div>

			<div class="as-double-group as-clearfix">
				<div class="as-form-group">
					<label for="signals_csmm_antispam_size" class="as-strong"><?php esc_html_e( 'Antispam Text Size', 'classic-coming-soon-maintenance-mode' ); ?></label>

					<select name="signals_csmm_antispam_size" id="signals_csmm_antispam_size">
						<?php

							// Loading font sizes with the help of a loop
							for ( $i = 10; $i < 21; $i++ ) {
								echo '<option value="' . $i . '"' . selected( $options['antispam_font_size'], $i ) . '>' . $i . __( 'px', 'classic-coming-soon-maintenance-mode' ) . '</option>';
							}

						?>
					</select>

					<p class="as-form-help-block"><?php esc_html_e( 'Font size for the antispam text.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>

				<div class="as-form-group">
					<label for="signals_csmm_antispam_color" class="as-strong"><?php esc_html_e( 'Antispam Text Color', 'classic-coming-soon-maintenance-mode' ); ?></label>
					<input type="text" name="signals_csmm_antispam_color" id="signals_csmm_antispam_color" value="<?php esc_attr_e( $options['antispam_font_color'] ); ?>" placeholder="<?php esc_html_e( 'Font color for the Antispam text', 'classic-coming-soon-maintenance-mode' ); ?>" class="as-form-control color {required:false}">

					<p class="as-form-help-block"><?php esc_html_e( 'Select font color for the antispam text.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>
			</div>
		</div>
	</div>
</div><!-- #design -->
