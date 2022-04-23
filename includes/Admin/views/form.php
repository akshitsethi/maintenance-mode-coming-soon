<?php
/**
 * Form settings view for the plugin
 *
 * @since 1.0.0
 */

use AkshitSethi\Plugins\MaintenanceMode\Config;

?>

<div class="as-tile" id="form">
	<form method="post" class="as-form-form">
		<div class="as-tile-body">
			<h2 class="as-tile-title"><?php esc_html_e( 'FORM', 'maintenance-mode-coming-soon' ); ?></h2>
			<p><?php esc_html_e( 'Form design settings for the plugin. These settings affect the appearance of the Mail Chimp subscription form. You can customize styles for the input field and button.', 'maintenance-mode-coming-soon' ); ?></p>

			<div class="as-section-content">
				<div class="as-double-group as-clearfix">
					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'input_text'; ?>" class="as-strong"><?php esc_html_e( 'Input Text', 'maintenance-mode-coming-soon' ); ?></label>
						<input type="text" name="<?php echo Config::PREFIX . 'input_text'; ?>" id="<?php echo Config::PREFIX . 'input_text'; ?>" value="<?php echo esc_attr( stripslashes( $options['form']['input_text'] ) ); ?>" placeholder="<?php esc_html_e( 'Text for the Input field', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control">

						<p class="as-form-help-block"><?php esc_html_e( 'Enter the text which you would like to use as a placeholder text for the text input field.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>

					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'button_text'; ?>" class="as-strong"><?php esc_html_e( 'Button Text', 'maintenance-mode-coming-soon' ); ?></label>
						<input type="text" name="<?php echo Config::PREFIX . 'button_text'; ?>" id="<?php echo Config::PREFIX . 'button_text'; ?>" value="<?php echo esc_attr( stripslashes( $options['form']['button_text'] ) ); ?>" placeholder="<?php esc_html_e( 'Text for the Button', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control">

						<p class="as-form-help-block"><?php esc_html_e( 'Enter the text for the button. Usually, it will be "Subscribe" or something like that.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>
				</div>

				<div class="as-form-group">
					<label for="<?php echo Config::PREFIX . 'ignore_styles'; ?>" class="as-strong"><?php esc_html_e( 'Ignore Default Form Styles?', 'maintenance-mode-coming-soon' ); ?></label>
					<input type="checkbox" class="as-form-ios" name="<?php echo Config::PREFIX . 'ignore_styles'; ?>" value="1"<?php checked( true, esc_attr( $options['form']['ignore_form_styles'] ) ); ?>>

					<p class="as-form-help-block"><?php esc_html_e( 'Enable this option if you would like to use your custom form styles. The settings below will only be applicable when this option is turned on.', 'maintenance-mode-coming-soon' ); ?></p>
				</div>

				<div class="as-double-group as-clearfix">
					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'input_size'; ?>" class="as-strong"><?php esc_html_e( 'Input Text Size', 'maintenance-mode-coming-soon' ); ?></label>
						<select name="<?php echo Config::PREFIX . 'input_size'; ?>" id="<?php echo Config::PREFIX . 'input_size'; ?>">
							<?php

								// Loading font sizes with the help of a loop
							for ( $i = 6; $i < 81; $i++ ) {
								echo '<option value="' . $i . '"' . selected( esc_attr( $options['form']['input_font_size'] ), $i ) . '>' . $i . esc_html__( 'px', 'maintenance-mode-coming-soon' ) . '</option>';
							}

							?>
						</select>

						<p class="as-form-help-block"><?php esc_html_e( 'Font size for the text input field.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>

					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'button_size'; ?>" class="as-strong"><?php esc_html_e( 'Button Text Size', 'maintenance-mode-coming-soon' ); ?></label>
						<select name="<?php echo Config::PREFIX . 'button_size'; ?>" id="<?php echo Config::PREFIX . 'button_size'; ?>">
							<?php

								// Loading font sizes with the help of a loop
							for ( $i = 6; $i < 81; $i++ ) {
								echo '<option value="' . $i . '"' . selected( esc_attr( $options['form']['button_font_size'] ), $i ) . '>' . $i . esc_html__( 'px', 'maintenance-mode-coming-soon' ) . '</option>';
							}

							?>
						</select>

						<p class="as-form-help-block"><?php esc_html_e( 'Font size for the button text.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>
				</div>

				<div class="as-double-group as-clearfix">
					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'input_color'; ?>" class="as-strong"><?php esc_html_e( 'Input Text Color', 'maintenance-mode-coming-soon' ); ?></label>
						<input type="text" name="<?php echo Config::PREFIX . 'input_color'; ?>" id="<?php echo Config::PREFIX . 'input_color'; ?>" value="<?php echo esc_attr( $options['form']['input_font_color'] ); ?>" placeholder="<?php esc_html_e( 'Font color for the Input text', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control jscolor {required:false}">

						<p class="as-form-help-block"><?php esc_html_e( 'Select font color for the input text field.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>

					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'button_color'; ?>" class="as-strong"><?php esc_html_e( 'Button Text Color', 'maintenance-mode-coming-soon' ); ?></label>
						<input type="text" name="<?php echo Config::PREFIX . 'button_color'; ?>" id="<?php echo Config::PREFIX . 'button_color'; ?>" value="<?php echo esc_attr( $options['form']['button_font_color'] ); ?>" placeholder="<?php esc_html_e( 'Font color for the Button text', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control jscolor {required:false}">

						<p class="as-form-help-block"><?php esc_html_e( 'Select font color for the button text.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>
				</div>

				<div class="as-double-group as-clearfix">
					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'input_bg'; ?>" class="as-strong"><?php esc_html_e( 'Input Background Color', 'maintenance-mode-coming-soon' ); ?></label>
						<input type="text" name="<?php echo Config::PREFIX . 'input_bg'; ?>" id="<?php echo Config::PREFIX . 'input_bg'; ?>" value="<?php echo esc_attr( $options['form']['input_bg'] ); ?>" placeholder="<?php esc_html_e( 'Background color for the Input field', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control jscolor {required:false}">

						<p class="as-form-help-block"><?php esc_html_e( 'Select background color for the input text field.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>

					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'button_bg'; ?>" class="as-strong"><?php esc_html_e( 'Button Background Color', 'maintenance-mode-coming-soon' ); ?></label>
						<input type="text" name="<?php echo Config::PREFIX . 'button_bg'; ?>" id="<?php echo Config::PREFIX . 'button_bg'; ?>" value="<?php echo esc_attr( $options['form']['button_bg'] ); ?>" placeholder="<?php esc_html_e( 'Background color for the Button', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control jscolor {required:false}">

						<p class="as-form-help-block"><?php esc_html_e( 'Select background color for the button.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>
				</div>

				<div class="as-double-group as-clearfix">
					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'input_bg_hover'; ?>" class="as-strong"><?php esc_html_e( 'Input Background Color', 'maintenance-mode-coming-soon' ); ?> <span class="as-pseudo-selector"><?php esc_html_e( 'FOCUS', 'maintenance-mode-coming-soon' ); ?></span></label>
						<input type="text" name="<?php echo Config::PREFIX . 'input_bg_hover'; ?>" id="<?php echo Config::PREFIX . 'input_bg_hover'; ?>" value="<?php echo esc_attr( $options['form']['input_bg_hover'] ); ?>" placeholder="<?php esc_html_e( 'Background color for the Input field when it gets clicked', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control jscolor {required:false}">

						<p class="as-form-help-block"><?php esc_html_e( 'Select background color for the input text field when it gets clicked.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>

					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'button_bg_hover'; ?>" class="as-strong"><?php esc_html_e( 'Button Background Color', 'maintenance-mode-coming-soon' ); ?> <span class="as-pseudo-selector"><?php esc_html_e( 'HOVER', 'maintenance-mode-coming-soon' ); ?></span></label>
						<input type="text" name="<?php echo Config::PREFIX . 'button_bg_hover'; ?>" id="<?php echo Config::PREFIX . 'button_bg_hover'; ?>" value="<?php echo esc_attr( $options['form']['button_bg_hover'] ); ?>" placeholder="<?php esc_html_e( 'Background color for the Button on hover', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control jscolor {required:false}">

						<p class="as-form-help-block"><?php esc_html_e( 'Select background color for the button on mouse hover.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>
				</div>

				<div class="as-double-group as-clearfix">
					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'input_border_width'; ?>" class="as-strong"><?php esc_html_e( 'Input Border Width', 'maintenance-mode-coming-soon' ); ?></label>
						<select name="<?php echo Config::PREFIX . 'input_border_width'; ?>" id="<?php echo Config::PREFIX . 'input_border_width'; ?>">
							<?php

								// Loading font sizes with the help of a loop
							for ( $i = 1; $i < 21; $i++ ) {
								echo '<option value="' . $i . '"' . selected( esc_attr( $options['form']['input_border_width'] ), $i ) . '>' . $i . esc_html__( 'px', 'maintenance-mode-coming-soon' ) . '</option>';
							}

							?>
						</select>

						<p class="as-form-help-block"><?php esc_html_e( 'Border size for the input field.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>

					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'button_border_width'; ?>" class="as-strong"><?php esc_html_e( 'Button Border Width', 'maintenance-mode-coming-soon' ); ?></label>
						<select name="<?php echo Config::PREFIX . 'button_border_width'; ?>" id="<?php echo Config::PREFIX . 'button_border_width'; ?>">
							<?php

								// Loading font sizes with the help of a loop
							for ( $i = 1; $i < 21; $i++ ) {
								echo '<option value="' . $i . '"' . selected( esc_attr( $options['form']['button_border_width'] ), $i ) . '>' . $i . esc_html__( 'px', 'maintenance-mode-coming-soon' ) . '</option>';
							}

							?>
						</select>

						<p class="as-form-help-block"><?php esc_html_e( 'Border size for the button.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>
				</div>

				<div class="as-double-group as-clearfix">
					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'input_border'; ?>" class="as-strong"><?php esc_html_e( 'Input Border Color', 'maintenance-mode-coming-soon' ); ?></label>
						<input type="text" name="<?php echo Config::PREFIX . 'input_border'; ?>" id="<?php echo Config::PREFIX . 'input_border'; ?>" value="<?php echo esc_attr( $options['form']['input_border'] ); ?>" placeholder="<?php esc_html_e( 'Border color for the Input field', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control jscolor {required:false}">

						<p class="as-form-help-block"><?php esc_html_e( 'Select border color for the input field.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>

					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'button_border'; ?>" class="as-strong"><?php esc_html_e( 'Button Border Color', 'maintenance-mode-coming-soon' ); ?></label>
						<input type="text" name="<?php echo Config::PREFIX . 'button_border'; ?>" id="<?php echo Config::PREFIX . 'button_border'; ?>" value="<?php echo esc_attr( $options['form']['button_border'] ); ?>" placeholder="<?php esc_html_e( 'Border color for the Button', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control jscolor {required:false}">

						<p class="as-form-help-block"><?php esc_html_e( 'Select border color for the button.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>
				</div>

				<div class="as-double-group as-clearfix">
					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'input_border_hover'; ?>" class="as-strong"><?php esc_html_e( 'Input Border Color', 'maintenance-mode-coming-soon' ); ?> <span class="as-pseudo-selector"><?php esc_html_e( 'FOCUS', 'maintenance-mode-coming-soon' ); ?></span></label>
						<input type="text" name="<?php echo Config::PREFIX . 'input_border_hover'; ?>" id="<?php echo Config::PREFIX . 'input_border_hover'; ?>" value="<?php echo esc_attr( $options['form']['input_border_hover'] ); ?>" placeholder="<?php esc_html_e( 'Border color for the Input field when it gets clicked', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control jscolor {required:false}">

						<p class="as-form-help-block"><?php esc_html_e( 'Select border color for the input field when it gets clicked.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>

					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'button_border_hover'; ?>" class="as-strong"><?php esc_html_e( 'Button Border Color', 'maintenance-mode-coming-soon' ); ?> <span class="as-pseudo-selector"><?php esc_html_e( 'HOVER', 'maintenance-mode-coming-soon' ); ?></span></label>
						<input type="text" name="<?php echo Config::PREFIX . 'button_border_hover'; ?>" id="<?php echo Config::PREFIX . 'button_border_hover'; ?>" value="<?php echo esc_attr( $options['form']['button_border_hover'] ); ?>" placeholder="<?php esc_html_e( 'Border color for the Button on hover', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control jscolor {required:false}">

						<p class="as-form-help-block"><?php esc_html_e( 'Select border color for the button on mouse hover.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>
				</div>

				<div class="as-double-group as-clearfix">
					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'success_background'; ?>" class="as-strong"><?php esc_html_e( 'Success Message Background Color', 'maintenance-mode-coming-soon' ); ?></span></label>
						<input type="text" name="<?php echo Config::PREFIX . 'success_background'; ?>" id="<?php echo Config::PREFIX . 'success_background'; ?>" value="<?php echo esc_attr( $options['form']['success_background'] ); ?>" placeholder="<?php esc_html_e( 'Background color for the success message', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control jscolor {required:false}">

						<p class="as-form-help-block"><?php esc_html_e( 'Select background color for the success message.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>

					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'success_color'; ?>" class="as-strong"><?php esc_html_e( 'Success Message Text Color', 'maintenance-mode-coming-soon' ); ?> <span class="as-red-color"></span></label>
						<input type="text" name="<?php echo Config::PREFIX . 'success_color'; ?>" id="<?php echo Config::PREFIX . 'success_color'; ?>" value="<?php echo esc_attr( $options['form']['success_color'] ); ?>" placeholder="<?php esc_html_e( 'Text color for the success message', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control jscolor {required:false}">

						<p class="as-form-help-block"><?php esc_html_e( 'Select text color for the success message.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>
				</div>

				<div class="as-double-group as-clearfix">
					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'error_background'; ?>" class="as-strong"><?php esc_html_e( 'Error Message Background Color', 'maintenance-mode-coming-soon' ); ?></span></label>
						<input type="text" name="<?php echo Config::PREFIX . 'error_background'; ?>" id="<?php echo Config::PREFIX . 'error_background'; ?>" value="<?php echo esc_attr( $options['form']['error_background'] ); ?>" placeholder="<?php esc_html_e( 'Background color for the error message', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control jscolor {required:false}">

						<p class="as-form-help-block"><?php esc_html_e( 'Select background color for the error message.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>

					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'error_color'; ?>" class="as-strong"><?php esc_html_e( 'Error Message Text Color', 'maintenance-mode-coming-soon' ); ?> <span class="as-red-color"></span></label>
						<input type="text" name="<?php echo Config::PREFIX . 'error_color'; ?>" id="<?php echo Config::PREFIX . 'error_color'; ?>" value="<?php echo esc_attr( $options['form']['error_color'] ); ?>" placeholder="<?php esc_html_e( 'Text color for the error message', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control jscolor {required:false}">

						<p class="as-form-help-block"><?php esc_html_e( 'Select text color for the error message.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</form>
</div><!-- #form -->
