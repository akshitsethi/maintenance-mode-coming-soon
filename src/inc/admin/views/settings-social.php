<?php
/**
 * Social settings view for the plugin
 *
 * @since 1.0.0
 */

use AkshitSethi\Plugins\MaintenanceMode\Config;

?>

<div class="as-tile" id="social">
	<form method="post" class="as-social-form">
		<div class="as-tile-body">
			<h2 class="as-tile-title"><?php esc_html_e( 'SOCIAL', 'maintenance-mode-coming-soon' ); ?></h2>
			<p><?php esc_html_e( 'Configure your social networks to display them correctly.', 'maintenance-mode-coming-soon' ); ?></p>

	  <div class="as-section-content">
		<div class="as-double-group as-clearfix">
					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'link_color'; ?>" class="as-strong"><?php esc_html_e( 'Link Color', 'maintenance-mode-coming-soon' ); ?></label>
						<input type="text" name="<?php echo Config::PREFIX . 'link_color'; ?>" id="<?php echo Config::PREFIX . 'link_color'; ?>" value="<?php echo esc_attr( $options['social']['link_color'] ); ?>" placeholder="<?php esc_html_e( 'Link color for the Social Icons', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control jscolor {required:false}">

						<p class="as-form-help-block"><?php esc_html_e( 'Select link color for the social icons.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>

					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'link_hover'; ?>" class="as-strong"><?php esc_html_e( 'Link Color', 'maintenance-mode-coming-soon' ); ?> <span><?php esc_html_e( 'HOVER', 'maintenance-mode-coming-soon' ); ?></span></label>
						<input type="text" name="<?php echo Config::PREFIX . 'link_hover'; ?>" id="<?php echo Config::PREFIX . 'link_hover'; ?>" value="<?php echo esc_attr( $options['social']['link_hover'] ); ?>" placeholder="<?php esc_attr_e( 'Link hover color for the Social Icons', 'maintenance-mode-coming-soon' ); ?>" class="as-form-control jscolor {required:false}">

						<p class="as-form-help-block"><?php esc_html_e( 'Select link hover color for the social icons.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>
				</div>

				<div class="as-double-group as-clearfix">
					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'icon_size'; ?>" class="as-strong"><?php esc_html_e( 'Icon Size', 'maintenance-mode-coming-soon' ); ?></label>
						<select name="<?php echo Config::PREFIX . 'icon_size'; ?>" id="<?php echo Config::PREFIX . 'icon_size'; ?>">
							<?php

								// Loading font sizes with the help of a loop
							for ( $i = 4; $i < 41; $i++ ) {
								echo '<option value="' . $i . '"' . selected( esc_attr( $options['social']['icon_size'] ), $i ) . '>' . $i . esc_html__( 'px', 'maintenance-mode-coming-soon' ) . '</option>';
							}

							?>
						</select>

						<p class="as-form-help-block"><?php esc_html_e( 'Font size for the social icons.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>

					<div class="as-form-group">
						<label for="<?php echo Config::PREFIX . 'link_target'; ?>" class="as-strong"><?php esc_html_e( 'Link Target', 'maintenance-mode-coming-soon' ); ?></label>
						<select name="<?php echo Config::PREFIX . 'link_target'; ?>" id="<?php echo Config::PREFIX . 'link_target'; ?>">
							<option value="_self"<?php selected( '_self', esc_attr( $options['social']['link_target'] ) ); ?>><?php esc_html_e( 'Same Window', 'maintenance-mode-coming-soon' ); ?></option>
							<option value="_blank"<?php selected( '_blank', esc_attr( $options['social']['link_target'] ) ); ?>><?php esc_html_e( 'New Window', 'maintenance-mode-coming-soon' ); ?></option>
						</select>

						<p class="as-form-help-block"><?php esc_html_e( 'Link target for the social icons. Select the one as per your preference.', 'maintenance-mode-coming-soon' ); ?></p>
					</div>
				</div>

				<div class="as-form-group">
					<ul class="as-arrange-social">
						<?php

							// Open the array
						if ( ! empty( $options['social']['arrange'] ) ) {
							$arrange = explode( ',', $options['social']['arrange'] );

							// foreach
							foreach ( $arrange as $item ) {
								if ( ! empty( $options['social'][ $item ] ) ) {
									echo '<li><a href="' . $options['social'][ $item ] . '"><i class="fa fa-fw fa-' . $item . '"></i></a></li>';
								}
							}
						}

						?>
					</ul>

					<p><?php esc_html_e( 'Preview for the social profiles can be seen over here. Links will appear exactly the same way on the maintenance page as they appear over here.', 'maintenance-mode-coming-soon' ); ?></p>
				</div>

				<ul id="arrange-social-items">
					<?php

					if ( ! empty( $options['social']['arrange'] ) ) {
						$arrange = explode( ',', $options['social']['arrange'] );

						// Loop over the list of social networks
						foreach ( $arrange as $item ) {
							echo '<li data-id="' . $item . '" class="as-double-group as-social as-clearfix">';
							echo '<div class="as-form-group">';
							echo '<p><i class="fa fa-fw fa-' . $item . '"></i> ' . Config::SOCIAL[ $item ] . '</p>';
							echo '</div>';
							echo '<div class="as-form-group">';
							echo '<input type="text" name="' . Config::PREFIX . $item . '" id="' . Config::PREFIX . $item . '" value="' . esc_attr( $options['social'][ $item ] ) . '" placeholder="' . esc_attr( Config::SOCIAL[ $item ] ) . '" class="as-form-control">';
							echo '</div>';
							echo '</li>';
						}
					} else {
						foreach ( Config::SOCIAL as $key => $value ) {
								echo '<li data-id="' . $key . '" class="as-double-group as-social as-clearfix">';
								echo '<div class="as-form-group">';
								echo '<p><i class="fa fa-fw fa-' . $key . '"></i> ' . $value . '</p>';
								echo '</div>';
								echo '<div class="as-form-group">';
								echo '<input type="text" name="' . Config::PREFIX . $key . '" id="' . Config::PREFIX . $key . '" value="' . esc_attr( $options['social'][ $key ] ) . '" placeholder="' . esc_attr( $value ) . '" class="as-form-control">';
								echo '</div>';
								echo '</li>';
						}
					}

					?>
				</ul><!-- #arrange-social-items -->

				<input type="hidden" name="<?php echo Config::PREFIX . 'social_arrange'; ?>" id="<?php echo Config::PREFIX . 'social_arrange'; ?>" value="<?php echo esc_attr( $options['social']['arrange'] ); ?>">
	  </div>
	</div>
  </form>
</div><!-- #social -->
