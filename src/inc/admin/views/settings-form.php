<?php
/**
 * Form settings view for the plugin
 *
 * @since 1.0.0
 */

use AkshitSethi\Plugins\MaintenanceMode\Config;

?>

<div class="as-tile" id="form">
	<div class="as-tile-body">
		<h2 class="as-tile-title"><?php esc_html_e( 'FORM', 'classic-coming-soon-maintenance-mode' ); ?></h2>
		<p><?php esc_html_e( 'Form design settings for the plugin. These settings affect the appearance of the Mail Chimp subscription form. You can customize styles for the input field and button.', 'classic-coming-soon-maintenance-mode' ); ?></p>

		<div class="as-section-content">
			<div class="as-double-group as-clearfix">
				<div class="as-form-group">
					<label for="signals_csmm_input_text" class="as-strong"><?php esc_html_e( 'Input Text', 'classic-coming-soon-maintenance-mode' ); ?></label>
					<input type="text" name="signals_csmm_input_text" id="signals_csmm_input_text" value="<?php esc_attr_e( stripslashes( $options['input_text'] ) ); ?>" placeholder="<?php esc_html_e( 'Text for the Input field', 'classic-coming-soon-maintenance-mode' ); ?>" class="as-form-control">

					<p class="as-form-help-block"><?php esc_html_e( 'Enter the text which you would like to use as a placeholder text for the text input field.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>

				<div class="as-form-group">
					<label for="signals_csmm_button_text" class="as-strong"><?php esc_html_e( 'Button Text', 'classic-coming-soon-maintenance-mode' ); ?></label>
					<input type="text" name="signals_csmm_button_text" id="signals_csmm_button_text" value="<?php esc_attr_e( stripslashes( $options['button_text'] ) ); ?>" placeholder="<?php esc_html_e( 'Text for the Button', 'classic-coming-soon-maintenance-mode' ); ?>" class="as-form-control">

					<p class="as-form-help-block"><?php esc_html_e( 'Enter the text for the button. Usually, it will be "Subscribe" or something like that.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>
			</div>

			<div class="as-form-group">
				<label for="signals_csmm_ignore_styles" class="as-strong"><?php esc_html_e( 'Ignore Default Form Styles?', 'classic-coming-soon-maintenance-mode' ); ?></label>
				<input type="checkbox" class="as-form-ios" name="signals_csmm_ignore_styles" value="1"<?php checked( '1', $options['ignore_form_styles'] ); ?>>

				<p class="as-form-help-block"><?php esc_html_e( 'Enable this option if you would like to use your custom form styles. The settings below will only be applicable when this option is turned on.', 'classic-coming-soon-maintenance-mode' ); ?></p>
			</div>

			<div class="as-double-group as-clearfix">
				<div class="as-form-group">
					<label for="signals_csmm_input_size" class="as-strong"><?php esc_html_e( 'Input Text Size', 'classic-coming-soon-maintenance-mode' ); ?></label>

					<select name="signals_csmm_input_size" id="signals_csmm_input_size">
						<?php

							// Loading font sizes with the help of a loop
							for ( $i = 11; $i < 41; $i++ ) {
								echo '<option value="' . $i . '"' . selected( $options['input_font_size'], $i ) . '>' . $i . __( 'px', 'classic-coming-soon-maintenance-mode' ) . '</option>';
							}

						?>
					</select>

					<p class="as-form-help-block"><?php esc_html_e( 'Font size for the text input field.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>

				<div class="as-form-group">
					<label for="signals_csmm_button_size" class="as-strong"><?php esc_html_e( 'Button Text Size', 'classic-coming-soon-maintenance-mode' ); ?></label>

					<select name="signals_csmm_button_size" id="signals_csmm_button_size">
						<?php

							// Loading font sizes with the help of a loop
							for ( $i = 11; $i < 41; $i++ ) {
								echo '<option value="' . $i . '"' . selected( $options['button_font_size'], $i ) . '>' . $i . __( 'px', 'classic-coming-soon-maintenance-mode' ) . '</option>';
							}

						?>
					</select>

					<p class="as-form-help-block"><?php esc_html_e( 'Font size for the button text.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>
			</div>

			<div class="as-double-group as-clearfix">
				<div class="as-form-group">
					<label for="signals_csmm_input_color" class="as-strong"><?php esc_html_e( 'Input Text Color', 'classic-coming-soon-maintenance-mode' ); ?></label>
					<input type="text" name="signals_csmm_input_color" id="signals_csmm_input_color" value="<?php esc_attr_e( $options['input_font_color'] ); ?>" placeholder="<?php esc_html_e( 'Font color for the Input text', 'classic-coming-soon-maintenance-mode' ); ?>" class="as-form-control color {required:false}">

					<p class="as-form-help-block"><?php esc_html_e( 'Select font color for the input text field.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>

				<div class="as-form-group">
					<label for="signals_csmm_button_color" class="as-strong"><?php esc_html_e( 'Button Text Color', 'classic-coming-soon-maintenance-mode' ); ?></label>
					<input type="text" name="signals_csmm_button_color" id="signals_csmm_button_color" value="<?php esc_attr_e( $options['button_font_color'] ); ?>" placeholder="<?php esc_html_e( 'Font color for the Button text', 'classic-coming-soon-maintenance-mode' ); ?>" class="as-form-control color {required:false}">

					<p class="as-form-help-block"><?php esc_html_e( 'Select font color for the button text.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>
			</div>

			<div class="as-double-group as-clearfix">
				<div class="as-form-group">
					<label for="signals_csmm_input_bg" class="as-strong"><?php esc_html_e( 'Input Background Color', 'classic-coming-soon-maintenance-mode' ); ?></label>
					<input type="text" name="signals_csmm_input_bg" id="signals_csmm_input_bg" value="<?php esc_attr_e( $options['input_bg'] ); ?>" placeholder="<?php esc_html_e( 'Background color for the Input field', 'classic-coming-soon-maintenance-mode' ); ?>" class="as-form-control color {required:false}">

					<p class="as-form-help-block"><?php esc_html_e( 'Select background color for the input text field.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>

				<div class="as-form-group">
					<label for="signals_csmm_button_bg" class="as-strong"><?php esc_html_e( 'Button Background Color', 'classic-coming-soon-maintenance-mode' ); ?></label>
					<input type="text" name="signals_csmm_button_bg" id="signals_csmm_button_bg" value="<?php esc_attr_e( $options['button_bg'] ); ?>" placeholder="<?php esc_html_e( 'Background color for the Button', 'classic-coming-soon-maintenance-mode' ); ?>" class="as-form-control color {required:false}">

					<p class="as-form-help-block"><?php esc_html_e( 'Select background color for the button.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>
			</div>

			<div class="as-double-group as-clearfix">
				<div class="as-form-group">
					<label for="signals_csmm_input_bg_hover" class="as-strong"><?php esc_html_e( 'Input Background Color', 'classic-coming-soon-maintenance-mode' ); ?> <span class="as-red-color"><?php esc_html_e( 'FOCUS', 'classic-coming-soon-maintenance-mode' ); ?></span></label>
					<input type="text" name="signals_csmm_input_bg_hover" id="signals_csmm_input_bg_hover" value="<?php esc_attr_e( $options['input_bg_hover'] ); ?>" placeholder="<?php esc_html_e( 'Background color for the Input field when it gets clicked', 'classic-coming-soon-maintenance-mode' ); ?>" class="as-form-control color {required:false}">

					<p class="as-form-help-block"><?php esc_html_e( 'Select background color for the input text field when it gets clicked.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>

				<div class="as-form-group">
					<label for="signals_csmm_button_bg_hover" class="as-strong"><?php esc_html_e( 'Button Background Color', 'classic-coming-soon-maintenance-mode' ); ?> <span class="as-red-color"><?php esc_html_e( 'HOVER', 'classic-coming-soon-maintenance-mode' ); ?></span></label>
					<input type="text" name="signals_csmm_button_bg_hover" id="signals_csmm_button_bg_hover" value="<?php esc_attr_e( $options['button_bg_hover'] ); ?>" placeholder="<?php esc_html_e( 'Background color for the Button on hover', 'classic-coming-soon-maintenance-mode' ); ?>" class="as-form-control color {required:false}">

					<p class="as-form-help-block"><?php esc_html_e( 'Select background color for the button on mouse hover.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>
			</div>

			<div class="as-double-group as-clearfix">
				<div class="as-form-group">
					<label for="signals_csmm_input_border" class="as-strong"><?php esc_html_e( 'Input Border Color', 'classic-coming-soon-maintenance-mode' ); ?></label>
					<input type="text" name="signals_csmm_input_border" id="signals_csmm_input_border" value="<?php esc_attr_e( $options['input_border'] ); ?>" placeholder="<?php esc_html_e( 'Border color for the Input field', 'classic-coming-soon-maintenance-mode' ); ?>" class="as-form-control color {required:false}">

					<p class="as-form-help-block"><?php esc_html_e( 'Select border color for the input field.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>

				<div class="as-form-group">
					<label for="signals_csmm_button_border" class="as-strong"><?php esc_html_e( 'Button Border Color', 'classic-coming-soon-maintenance-mode' ); ?></label>
					<input type="text" name="signals_csmm_button_border" id="signals_csmm_button_border" value="<?php esc_attr_e( $options['button_border'] ); ?>" placeholder="<?php esc_html_e( 'Border color for the Button', 'classic-coming-soon-maintenance-mode' ); ?>" class="as-form-control color {required:false}">

					<p class="as-form-help-block"><?php esc_html_e( 'Select border color for the button.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>
			</div>

			<div class="as-double-group as-clearfix">
				<div class="as-form-group">
					<label for="signals_csmm_input_border_hover" class="as-strong"><?php esc_html_e( 'Input Border Color', 'classic-coming-soon-maintenance-mode' ); ?> <span class="as-red-color"><?php esc_html_e( 'FOCUS', 'classic-coming-soon-maintenance-mode' ); ?></span></label>
					<input type="text" name="signals_csmm_input_border_hover" id="signals_csmm_input_border_hover" value="<?php esc_attr_e( $options['input_border_hover'] ); ?>" placeholder="<?php esc_html_e( 'Border color for the Input field when it gets clicked', 'classic-coming-soon-maintenance-mode' ); ?>" class="as-form-control color {required:false}">

					<p class="as-form-help-block"><?php esc_html_e( 'Select border color for the input field when it gets clicked.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>

				<div class="as-form-group">
					<label for="signals_csmm_button_border_hover" class="as-strong"><?php esc_html_e( 'Button Border Color', 'classic-coming-soon-maintenance-mode' ); ?> <span class="as-red-color"><?php esc_html_e( 'HOVER', 'classic-coming-soon-maintenance-mode' ); ?></span></label>
					<input type="text" name="signals_csmm_button_border_hover" id="signals_csmm_button_border_hover" value="<?php esc_attr_e( $options['button_border_hover'] ); ?>" placeholder="<?php esc_html_e( 'Border color for the Button on hover', 'classic-coming-soon-maintenance-mode' ); ?>" class="as-form-control color {required:false}">

					<p class="as-form-help-block"><?php esc_html_e( 'Select border color for the button on mouse hover.', 'classic-coming-soon-maintenance-mode' ); ?></p>
				</div>
			</div>
		</div>
	</div>
</div><!-- #form -->