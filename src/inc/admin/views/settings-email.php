<?php
/**
 * Email settings view for the plugin
 *
 * @since 1.0.0
 */

use AkshitSethi\Plugins\MaintenanceMode\Config;
use DrewM\MailChimp\MailChimp;

?>

<div class="as-tile" id="email">
	<div class="as-tile-body">
		<h2 class="as-tile-title"><?php esc_html_e( 'EMAIL', 'classic-coming-soon-maintenance-mode' ); ?></h2>
		<p><?php esc_html_e( 'Email settings for the plugin. You can configure your MailChimp account API with this plugin to store collected emails in an list.', 'classic-coming-soon-maintenance-mode' ); ?></p>

		<div class="as-section-content">
			<div class="as-form-group">
				<label for="<?php echo Config::PREFIX . 'api'; ?>" class="as-strong"><?php esc_html_e( 'MailChimp API', 'classic-coming-soon-maintenance-mode' ); ?></label>
				<input type="text" name="<?php echo Config::PREFIX . 'api'; ?>" id="<?php echo Config::PREFIX . 'api'; ?>" value="<?php esc_attr_e( $options['mailchimp_api'] ); ?>" placeholder="<?php esc_attr_e( 'MailChimp API', 'classic-coming-soon-maintenance-mode' ); ?>" class="as-form-control">

				<p class="as-form-help-block"><?php esc_html_e( 'Provide your MailChimp API over here.', 'classic-coming-soon-maintenance-mode' ); ?> <a href="https://mailchimp.com/help/about-api-keys/" target="_blank"><?php esc_html_e( 'Click here', 'classic-coming-soon-maintenance-mode' ); ?></a> <?php esc_html_e( 'to know how to get this information. In case you don\'t want to enable subscription option, just leave this field blank.', 'classic-coming-soon-maintenance-mode' ); ?></p>
			</div>

			<div class="as-form-group">
				<label for="<?php echo Config::PREFIX . 'list'; ?>" class="as-strong"><?php esc_html_e( 'MailChimp List', 'classic-coming-soon-maintenance-mode' ); ?></label>
				<div class="as-ajax-response">
					<?php

						// Fetch lists from Mailchimp if the API key is provided
						if ( ! empty( $options['mailchimp_api'] ) ) {
							// Try to fetch from the transient
							$cached_data = get_transient( Config::PREFIX . 'email_lists' );

							// Transient present?
							if ( $cached_data ) {
								echo '<select name="' . Config::PREFIX . 'list" id="' . Config::PREFIX . 'list">';
	
								foreach ( $cached_data as $key => $value ) {
									echo '<option value="' . $key . '"' . selected( $key, $options['mailchimp_list'] ) . '>' . $value . '</option>';
								}

								echo '</select>';
								echo '<p class="as-form-help-block">' . esc_html__( 'Select your MailChimp list in which you would like to store the subscribers data.', 'classic-coming-soon-maintenance-mode' ) . '</p>';
							} else {
								try {
									// Array to set transient
									$list_data 	= array();

									// API call
									$mailchimp 	= new MailChimp( $options['mailchimp_api'] );
	
									// Fetch lists
									$lists 			= $mailchimp->get('lists');
	
									// API call went fine?
									if ( $mailchimp->success() ) {
										if ( count( $lists['lists'] ) > 0 ) {
											echo '<select name="' . Config::PREFIX . 'list" id="' . Config::PREFIX . 'list">';
	
											foreach ( $lists['lists'] as $list ) {
												echo '<option value="' . $list['id'] . '"' . selected( $list['id'], $options['mailchimp_list'] ) . '>' . $list['name'] . '</option>';

												// Add to array
												$list_data[sanitize_text_field( $list['id'] )] = sanitize_text_field( $list['name'] );
											}
	
											echo '</select>';
											echo '<p class="as-form-help-block">' . esc_html__( 'Select your MailChimp list in which you would like to store the subscribers data.', 'classic-coming-soon-maintenance-mode' ) . '</p>';

											// Set transient for future calls
											// Expiry after one month
											set_transient( Config::PREFIX . 'email_lists', $list_data, 60 * 60 * 24 * 30 );
										} else {
											echo '<p class="as-form-help-block">' . esc_html__( 'It seems that there is no list created for this account. Why not create one on the MailChimp website and then try here.', 'classic-coming-soon-maintenance-mode' ) . '</p>';
										}
									} else {
										echo '<p class="as-form-help-block">' . $mailchimp->getLastError() . '</p>';
									}
								} catch( Exception $e ) {
									echo '<p class="as-form-help-block">' . $e->getMessage() . '<p>';
								}
							}
						} else {
							echo '<p class="as-form-help-block">' . esc_html__( 'Provide your MailChimp API key in the above box and click on `Save Changes` option. Your lists will appear over here.', 'classic-coming-soon-maintenance-mode' ) . '</p>';
						}

					?>
				</div>
			</div>
		</div>
	</div>
</div><!-- #email -->
