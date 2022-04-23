<?php
/**
 * Design settings view for the plugin
 *
 * @since 1.0.0
 */

use AkshitSethi\Plugins\MaintenanceMode\Config;

?>

<div class="as-tile" id="design">
	<form method="post" class="as-design-form">
		<div class="as-tile-body">
			<h2 class="as-tile-title"><?php esc_html_e( 'DESIGN', 'maintenance-mode-coming-soon' ); ?></h2>
			<p><?php esc_html_e( 'Design settings for the plugin. You have the option to modify every aspect of the maintenance page design as per your requirements.', 'maintenance-mode-coming-soon' ); ?></p>

			<div class="as-section-content">
				<div class="as-upload-group as-clearfix">
					<div class="as-form-group border-fix">
						<div class="as-upload-element">
							<label class="as-strong"><?php esc_html_e( 'Logo', 'maintenance-mode-coming-soon' ); ?></label>

							<?php if ( ! empty( $options['design']['logo'] ) ) : ?>
								<span class="as-preview-area"><img src="<?php echo esc_attr( $options['design']['logo'] ); ?>" /></span>
							<?php else : ?>
								<span class="as-preview-area"><?php esc_html_e( 'Select or upload via WP native uploader', 'maintenance-mode-coming-soon' ); ?></span>
							<?php endif; ?>

							<input type="hidden" name="<?php echo Config::PREFIX . 'logo'; ?>" id="<?php echo Config::PREFIX . 'logo'; ?>" value="<?php echo esc_attr( $options['design']['logo'] ); ?>">
							
							<div class="as-flex">
								<button type="button" name="<?php echo Config::PREFIX . 'logo_upload'; ?>" id="<?php echo Config::PREFIX . 'logo_upload'; ?>" class="as-btn as-upload"><?php esc_html_e( 'Select', 'maintenance-mode-coming-soon' ); ?></button>
								<span class="as-upload-append">
									<?php if ( ! empty( $options['design']['logo'] ) ) : ?>
										&nbsp;<a href="javascript:;" class="as-remove-image"><?php esc_html_e( 'Remove', 'maintenance-mode-coming-soon' ); ?></a>
									<?php endif; ?>
								</span>
							</div>
						</div>
					</div>

					<div class="as-form-group border-fix">
						<div class="as-upload-element">
							<label class="as-strong"><?php esc_html_e( 'Favicon', 'maintenance-mode-coming-soon' ); ?></label>

							<?php if ( ! empty( $options['design']['favicon'] ) ) : ?>
								<span class="as-preview-area"><img src="<?php echo esc_attr( $options['design']['favicon'] ); ?>" /></span>
							<?php else : ?>
								<span class="as-preview-area"><?php esc_html_e( 'Select or upload via WP native uploader', 'maintenance-mode-coming-soon' ); ?></span>
							<?php endif; ?>

							<input type="hidden" name="<?php echo Config::PREFIX . 'favicon'; ?>" id="<?php echo Config::PREFIX . 'favicon'; ?>" value="<?php echo esc_attr( $options['design']['favicon'] ); ?>">
							
							<div class="as-flex">
								<button type="button" name="<?php echo Config::PREFIX . 'favicon_upload'; ?>" id="<?php echo Config::PREFIX . 'favicon_upload'; ?>" class="as-btn as-upload"><?php esc_html_e( 'Select', 'maintenance-mode-coming-soon' ); ?></button>
								<span class="as-upload-append">
									<?php if ( ! empty( $options['design']['favicon'] ) ) : ?>
										&nbsp;<a href="javascript:;" class="as-remove-image"><?php esc_html_e( 'Remove', 'maintenance-mode-coming-soon' ); ?></a>
									<?php endif; ?>
								</span>
							</div>
						</div>
					</div>

					<div class="as-form-group border-fix">
						<div class="as-upload-element">
							<label class="as-strong"><?php esc_html_e( 'Background Cover Image', 'maintenance-mode-coming-soon' ); ?></label>

							<?php if ( ! empty( $options['design']['bg_cover'] ) ) : ?>
								<span class="as-preview-area"><img src="<?php echo esc_attr( $options['design']['bg_cover'] ); ?>" /></span>
							<?php else : ?>
								<span class="as-preview-area"><?php esc_html_e( 'Select or upload via WP native uploader', 'maintenance-mode-coming-soon' ); ?></span>
							<?php endif; ?>

							<input type="hidden" name="<?php echo Config::PREFIX . 'bg'; ?>" id="<?php echo Config::PREFIX . 'bg'; ?>" value="<?php echo esc_attr( $options['design']['bg_cover'] ); ?>">

							<div class="as-flex">
								<button type="button" name="<?php echo Config::PREFIX . 'bg_upload'; ?>" id="<?php echo Config::PREFIX . 'bg_upload'; ?>" class="as-btn as-upload"><?php esc_html_e( 'Select', 'maintenance-mode-coming-soon' ); ?></button>
								<span class="as-upload-append">
									<?php if ( ! empty( $options['design']['bg_cover'] ) ) : ?>
										&nbsp;<a href="javascript:;" class="as-remove-image"><?php esc_html_e( 'Remove', 'maintenance-mode-coming-soon' ); ?></a>
									<?php endif; ?>
								</span>
							</div>
						</div>
					</div>
				</div>

				<div class="as-double-group as-clearfix">
					<div class="as-double-group as-clearfix">
						<div class="as-form-group">
							<label for="<?php echo Config::PREFIX . 'content_margin'; ?>" class="as-strong"><?php esc_html_e( 'Content Margin', 'maintenance-mode-coming-soon' ); ?> <span class="px">PX</span></label>
							<input type="number" name="<?php echo Config::PREFIX . 'content_margin'; ?>" id="<?php echo Config::PREFIX . 'content_margin'; ?>" value="<?php echo esc_attr( $options['design']['content_margin'] ); ?>" placeholder="<?php esc_html_e( 'Margin for the content section', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control">

							<p class="as-form-help-block"><?php esc_html_e( 'Set margin for the content section.', 'maintenance-mode-coming-soon' ); ?></p>
						</div>

						<div class="as-form-group">
							<label for="<?php echo Config::PREFIX . 'content_padding'; ?>" class="as-strong"><?php esc_html_e( 'Content Padding', 'maintenance-mode-coming-soon' ); ?> <span class="px">PX</span></label>
							<input type="number" name="<?php echo Config::PREFIX . 'content_padding'; ?>" id="<?php echo Config::PREFIX . 'content_padding'; ?>" value="<?php echo esc_attr( $options['design']['content_padding'] ); ?>" placeholder="<?php esc_html_e( 'Padding for the content section', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control">

							<p class="as-form-help-block"><?php esc_html_e( 'Set padding for the content section. Any value between 15px to 45px seems good.', 'maintenance-mode-coming-soon' ); ?></p>
						</div>
					</div>
				</div>

				<div class="as-double-group as-clearfix">
					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'overlay'; ?>" class="as-strong"><?php esc_html_e( 'Content Overlay', 'maintenance-mode-coming-soon' ); ?></label>
						<input type="checkbox" class="as-form-ios" name="<?php echo Config::PREFIX . 'overlay'; ?>" value="1"<?php checked( true, esc_attr( $options['design']['content_overlay'] ) ); ?>>

						<p class="as-form-help-block"><?php esc_html_e( 'If enabled, applies transparent background to the content section of the maintenance page.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>

					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'overlay_opacity'; ?>" class="as-strong"><?php esc_html_e( 'Content Overlay Opacity', 'maintenance-mode-coming-soon' ); ?></label>
						<select name="<?php echo Config::PREFIX . 'overlay_opacity'; ?>" id="<?php echo Config::PREFIX . 'overlay_opacity'; ?>">
							<?php

								// Loading font sizes with the help of a loop
							for ( $i = 0.05; $i < 1; $i += 0.05 ) {
								echo '<option value="' . $i . '"' . selected( esc_attr( $options['design']['content_bg_opacity'] ), $i ) . '>' . str_pad( $i, 4, '0', STR_PAD_RIGHT ) . '</option>';
							}

								// Option for NO opacity
								echo '<option value="1"' . selected( esc_html( $options['design']['content_bg_opacity'] ), '1' ) . '>1.00</option>';

							?>
						</select>

						<p class="as-form-help-block"><?php esc_html_e( 'Background opacity for the content overlay.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>
				</div>

				<div class="as-double-group as-clearfix">
					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'overlay_color'; ?>" class="as-strong"><?php esc_html_e( 'Content Overlay Background Color', 'maintenance-mode-coming-soon' ); ?></label>
						<input type="text" name="<?php echo Config::PREFIX . 'overlay_color'; ?>" id="<?php echo Config::PREFIX . 'overlay_color'; ?>" value="<?php echo esc_attr( $options['design']['content_bg'] ); ?>" placeholder="<?php esc_html_e( 'Background color for the content overlay', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control jscolor {required:false}">

						<p class="as-form-help-block"><?php esc_html_e( 'Select background color for the content overlay.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>

					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'overlay_border_color'; ?>" class="as-strong"><?php esc_html_e( 'Content Border Color', 'maintenance-mode-coming-soon' ); ?></label>
						<input type="text" name="<?php echo Config::PREFIX . 'overlay_border_color'; ?>" id="<?php echo Config::PREFIX . 'overlay_border_color'; ?>" value="<?php echo esc_attr( $options['design']['content_border'] ); ?>" placeholder="<?php esc_html_e( 'Border color for the content overlay', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control jscolor {required:false}">

						<p class="as-form-help-block"><?php esc_html_e( 'Select border color for the content section.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>
				</div>

				<div class="as-double-group as-clearfix">
					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'overlay_border_width'; ?>" class="as-strong"><?php esc_html_e( 'Content Border Width', 'maintenance-mode-coming-soon' ); ?></label>
						<select name="<?php echo Config::PREFIX . 'overlay_border_width'; ?>" id="<?php echo Config::PREFIX . 'overlay_border_width'; ?>">
							<?php

								// Loading font sizes with the help of a loop
							for ( $i = 1; $i < 21; $i++ ) {
								echo '<option value="' . $i . '"' . selected( esc_attr( $options['design']['content_border_width'] ), $i ) . '>' . $i . esc_html__( 'px', 'maintenance-mode-coming-soon' ) . '</option>';
							}

							?>
						</select>

						<p class="as-form-help-block"><?php esc_html_e( 'Border size for the content section.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>

					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'overlay_border_radius'; ?>" class="as-strong"><?php esc_html_e( 'Content Border Radius', 'maintenance-mode-coming-soon' ); ?></label>
						<select name="<?php echo Config::PREFIX . 'overlay_border_radius'; ?>" id="<?php echo Config::PREFIX . 'overlay_border_radius'; ?>">
							<?php

								// Loading font sizes with the help of a loop
							for ( $i = 0; $i < 41; $i++ ) {
								echo '<option value="' . $i . '"' . selected( esc_attr( $options['design']['content_border_radius'] ), $i ) . '>' . $i . esc_html__( 'px', 'maintenance-mode-coming-soon' ) . '</option>';
							}

							?>
						</select>

						<p class="as-form-help-block"><?php esc_html_e( 'Border radius for the content section.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>
				</div>

				<div class="as-double-group as-clearfix">
					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'width'; ?>" class="as-strong"><?php esc_html_e( 'Content Width', 'maintenance-mode-coming-soon' ); ?> <span class="px">PX</span></label>
						<input type="number" name="<?php echo Config::PREFIX . 'width'; ?>" id="<?php echo Config::PREFIX . 'width'; ?>" value="<?php echo esc_attr( $options['design']['content_width'] ); ?>" placeholder="<?php esc_html_e( 'Set content width for the page', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control">

						<p class="as-form-help-block"><?php esc_html_e( 'Set maximum width of the content (in pixels) for the maintenance page. Provide only numeric value. Example: Entering 400 will set the width of the content to 400px. Defaults to 440px.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>

					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'color'; ?>" class="as-strong"><?php esc_html_e( 'Background Color', 'maintenance-mode-coming-soon' ); ?></label>
						<input type="text" name="<?php echo Config::PREFIX . 'color'; ?>" id="<?php echo Config::PREFIX . 'color'; ?>" value="<?php echo esc_attr( $options['design']['bg_color'] ); ?>" placeholder="<?php esc_html_e( 'Background color for the page', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control jscolor {required:false}">

						<p class="as-form-help-block"><?php esc_html_e( 'Select background color for the page. If the background cover image is set, this option will be ignored.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>
				</div>

				<div class="as-double-group as-clearfix">
					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'position'; ?>" class="as-strong"><?php esc_html_e( 'Content Position', 'maintenance-mode-coming-soon' ); ?></label>
						<select name="<?php echo Config::PREFIX . 'position'; ?>" id="<?php echo Config::PREFIX . 'position'; ?>">
							<option value="left"<?php selected( 'left', esc_attr( $options['design']['content_position'] ) ); ?>><?php esc_html_e( 'Left', 'maintenance-mode-coming-soon' ); ?></option>
							<option value="center"<?php selected( 'center', esc_attr( $options['design']['content_position'] ) ); ?>><?php esc_html_e( 'Center', 'maintenance-mode-coming-soon' ); ?></option>
							<option value="right"<?php selected( 'right', esc_attr( $options['design']['content_position'] ) ); ?>><?php esc_html_e( 'Right', 'maintenance-mode-coming-soon' ); ?></option>
						</select>

						<p class="as-form-help-block"><?php esc_html_e( 'For the position of the content on the maintenance page. Does not work if the width is set to maximum which is 1170px.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>

					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'alignment'; ?>" class="as-strong"><?php esc_html_e( 'Content Alignment', 'maintenance-mode-coming-soon' ); ?></label>
						<select name="<?php echo Config::PREFIX . 'alignment'; ?>" id="<?php echo Config::PREFIX . 'alignment'; ?>">
							<option value="left"<?php selected( 'left', esc_attr( $options['design']['content_alignment'] ) ); ?>><?php esc_html_e( 'Left', 'maintenance-mode-coming-soon' ); ?></option>
							<option value="center"<?php selected( 'center', esc_attr( $options['design']['content_alignment'] ) ); ?>><?php esc_html_e( 'Center', 'maintenance-mode-coming-soon' ); ?></option>
							<option value="right"<?php selected( 'right', esc_attr( $options['design']['content_alignment'] ) ); ?>><?php esc_html_e( 'Right', 'maintenance-mode-coming-soon' ); ?></option>
						</select>

						<p class="as-form-help-block"><?php esc_html_e( 'For the alignment of the text on the maintenance page. Make it left, center, or right.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>
				</div>

				<div class="as-double-group as-clearfix">
					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'header_font'; ?>" class="as-strong"><?php esc_html_e( 'Header Font', 'maintenance-mode-coming-soon' ); ?></label>
						<select name="<?php echo Config::PREFIX . 'header_font'; ?>" id="<?php echo Config::PREFIX . 'header_font'; ?>" class="as-google-fonts">
							<?php

								// Default fonts
							foreach ( Config::DEFAULT_FONTS as $font ) {
								echo '<option value="' . $font . '"' . selected( $font, esc_attr( $options['design']['header_font'] ) ) . '>' . $font . '</option>' . "\n";
							}

								echo '<option disabled>-- ' . esc_html__( 'Google Fonts', 'maintenance-mode-coming-soon' ) . ' --</option>' . "\n";

								// Listing fonts from the array
							foreach ( Config::GOOGLE_FONTS as $font ) {
								echo '<option value="' . $font . '"' . selected( $font, esc_attr( $options['design']['header_font'] ) ) . '>' . $font . '</option>' . "\n";
							}

							?>
						</select>

						<h3><?php esc_html_e( 'This is how this font is going to look!', 'maintenance-mode-coming-soon' ); ?></h3>
						<p class="as-form-help-block"><?php esc_html_e( 'Font for the header text. Listing a total of 668 Google web fonts.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>

					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'secondary_font'; ?>" class="as-strong"><?php esc_html_e( 'Secondary Font', 'maintenance-mode-coming-soon' ); ?></label>
						<select name="<?php echo Config::PREFIX . 'secondary_font'; ?>" id="<?php echo Config::PREFIX . 'secondary_font'; ?>" class="as-google-fonts">
							<?php

								// Default fonts
							foreach ( Config::DEFAULT_FONTS as $font ) {
								echo '<option value="' . $font . '"' . selected( $font, esc_attr( $options['design']['secondary_font'] ) ) . '>' . $font . '</option>' . "\n";
							}

								echo '<option disabled>-- ' . esc_html__( 'Google Fonts', 'maintenance-mode-coming-soon' ) . ' --</option>' . "\n";

								// Google fonts
							foreach ( Config::GOOGLE_FONTS as $font ) {
								echo '<option value="' . $font . '"' . selected( $font, esc_attr( $options['design']['secondary_font'] ) ) . '>' . $font . '</option>' . "\n";
							}

							?>
						</select>

						<h3><?php esc_html_e( 'This is how this font is going to look!', 'maintenance-mode-coming-soon' ); ?></h3>
						<p class="as-form-help-block"><?php esc_html_e( 'Font for the secondary text. Listing a total of 668 Google web fonts.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>
				</div>

				<div class="as-double-group as-clearfix">
					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'header_size'; ?>" class="as-strong"><?php esc_html_e( 'Header Text Size', 'maintenance-mode-coming-soon' ); ?></label>
						<select name="<?php echo Config::PREFIX . 'header_size'; ?>" id="<?php echo Config::PREFIX . 'header_size'; ?>">
							<?php

								// Loading font sizes with the help of a loop
							for ( $i = 6; $i < 81; $i++ ) {
								echo '<option value="' . $i . '"' . selected( esc_attr( $options['design']['header_font_size'] ), $i ) . '>' . $i . esc_html__( 'px', 'maintenance-mode-coming-soon' ) . '</option>';
							}

							?>
						</select>

						<p class="as-form-help-block"><?php esc_html_e( 'Font size for the header text.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>

					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'secondary_size'; ?>" class="as-strong"><?php esc_html_e( 'Secondary Text Size', 'maintenance-mode-coming-soon' ); ?></label>
						<select name="<?php echo Config::PREFIX . 'secondary_size'; ?>" id="<?php echo Config::PREFIX . 'secondary_size'; ?>">
							<?php

								// Loading font sizes with the help of a loop
							for ( $i = 6; $i < 81; $i++ ) {
								echo '<option value="' . $i . '"' . selected( esc_attr( $options['design']['secondary_font_size'] ), $i ) . '>' . $i . esc_html__( 'px', 'maintenance-mode-coming-soon' ) . '</option>';
							}

							?>
						</select>

						<p class="as-form-help-block"><?php esc_html_e( 'Font size for the secondary text.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>
				</div>

				<div class="as-double-group as-clearfix">
					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'header_color'; ?>" class="as-strong"><?php esc_html_e( 'Header Text Color', 'maintenance-mode-coming-soon' ); ?></label>
						<input type="text" name="<?php echo Config::PREFIX . 'header_color'; ?>" id="<?php echo Config::PREFIX . 'header_color'; ?>" value="<?php echo esc_attr( $options['design']['header_font_color'] ); ?>" placeholder="<?php esc_html_e( 'Font color for the Header text', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control jscolor {required:false}">

						<p class="as-form-help-block"><?php esc_html_e( 'Select font color for the header text.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>

					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'secondary_color'; ?>" class="as-strong"><?php esc_html_e( 'Secondary Text Color', 'maintenance-mode-coming-soon' ); ?></label>
						<input type="text" name="<?php echo Config::PREFIX . 'secondary_color'; ?>" id="<?php echo Config::PREFIX . 'secondary_color'; ?>" value="<?php echo esc_attr( $options['design']['secondary_font_color'] ); ?>" placeholder="<?php esc_html_e( 'Font color for the Secondary text', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control jscolor {required:false}">

						<p class="as-form-help-block"><?php esc_html_e( 'Select font color for the secondary text.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>
				</div>

				<div class="as-double-group as-clearfix">
					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'antispam_size'; ?>" class="as-strong"><?php esc_html_e( 'Antispam Text Size', 'maintenance-mode-coming-soon' ); ?></label>
						<select name="<?php echo Config::PREFIX . 'antispam_size'; ?>" id="<?php echo Config::PREFIX . 'antispam_size'; ?>">
							<?php

								// Loading font sizes with the help of a loop
							for ( $i = 6; $i < 61; $i++ ) {
								echo '<option value="' . $i . '"' . selected( esc_attr( $options['design']['antispam_font_size'] ), $i ) . '>' . $i . esc_html__( 'px', 'maintenance-mode-coming-soon' ) . '</option>';
							}

							?>
						</select>

						<p class="as-form-help-block"><?php esc_html_e( 'Font size for the antispam text.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>

					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'antispam_color'; ?>" class="as-strong"><?php esc_html_e( 'Antispam Text Color', 'maintenance-mode-coming-soon' ); ?></label>
						<input type="text" name="<?php echo Config::PREFIX . 'antispam_color'; ?>" id="<?php echo Config::PREFIX . 'antispam_color'; ?>" value="<?php echo esc_attr( $options['design']['antispam_font_color'] ); ?>" placeholder="<?php esc_html_e( 'Font color for the Antispam text', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control jscolor {required:false}">

						<p class="as-form-help-block"><?php esc_html_e( 'Select font color for the antispam text.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</form>
</div><!-- #design -->
