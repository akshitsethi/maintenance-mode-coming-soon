<?php
/**
 * Renders the html template for the frontend.
 *
 * @since 1.0
 */

use AkshitSethi\Plugins\MaintenanceMode\Config;
use DrewM\MailChimp\MailChimp;

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo stripslashes( $this->get_option( sanitize_text_field( $options['basic']['title'] ), esc_html__( 'Maintainance Mode', 'maintenance-mode-coming-soon' ) ) ); ?></title>
<?php if ( isset( $options['design']['favicon'] ) && ! empty( $options['design']['favicon'] ) ) : ?>
<link rel="shortcut icon" href="<?php echo esc_url_raw( sanitize_text_field( $options['design']['favicon'] ) ); ?>" />
<?php endif; ?>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> RSS Feed" href="<?php bloginfo( 'rss2_url' ); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?> Atom Feed" href="<?php bloginfo( 'atom_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo Config::$plugin_url; ?>assets/css/front.css">
<script src="<?php echo Config::$plugin_url; ?>assets/admin/js/webfont.js"></script>
<script type="text/javascript">
	var data = {
		headerFont: '<?php echo $options['design']['header_font']; ?>',
		secondaryFont: '<?php echo $options['design']['secondary_font']; ?>'
	}

	// Font loader
	WebFont.load({
		google: {
			families: data.headerFont === data.secondaryFont ? [data.headerFont] : [data.headerFont, data.secondaryFont]
		}
	});
</script>
<?php

	// Inject styling for the options in the header
	echo $this->head_css( $options );

?>
</head>
<body class="as-plugin">
	<div class="as-mmcs">
		<div class="as-container">
			<div class="as-content">
				<?php

					// Logo
				if ( ! empty( $options['design']['logo'] ) ) {
					$arrange['logo']  = '<div class="as-logo-container">' . "\r\n";
					$arrange['logo'] .= '<img src="' . esc_url( $options['design']['logo'] ) . '" class="as-logo" />' . "\r\n";
					$arrange['logo'] .= '</div>' . "\r\n";
				}

					// Header text
				if ( ! empty( $options['basic']['header_text'] ) ) {
					$arrange['header'] = '<h1 class="as-header-text">' . stripslashes( nl2br( $options['basic']['header_text'] ) ) . '</h1>' . "\r\n";
				}

					// Secondary text
				if ( ! empty( $options['basic']['secondary_text'] ) ) {
					$arrange['secondary'] = '<p class="as-secondary-text">' . stripslashes( nl2br( $options['basic']['secondary_text'] ) ) . '</p>' . "\r\n";
				}

					// Form
				if ( ! empty( $options['email']['mailchimp_api'] ) && ! empty( $options['email']['mailchimp_list'] ) ) {
					// Checking if the form is submitted or not
					if ( isset( $_POST[ Config::PREFIX . 'email' ] ) ) {
						$email = strip_tags( $_POST[ Config::PREFIX . 'email' ] );

						if ( empty( $email ) ) {
							$code     = 'error';
							$response = $this->get_option( esc_html( stripslashes( $options['email']['message_noemail'] ) ), esc_html__( 'Please provide your email address.', 'maintenance-mode-coming-soon' ) );
						} else {
							$email = filter_var( strtolower( trim( $email ) ), FILTER_SANITIZE_EMAIL );

							// Check value for filter_var
							if ( ! $email ) {
								$code     = 'error';
								$response = $this->get_option( esc_html( stripslashes( $options['email']['message_wrong'] ) ), esc_html__( 'Please provide a valid email address.', 'maintenance-mode-coming-soon' ) );
							} else {
								$mailchimp = new MailChimp( esc_html( $options['email']['mailchimp_api'] ) );
								$connect   = $mailchimp->post(
									'lists/' . esc_html( $options['email']['mailchimp_list'] ) . '/members',
									array(
										'email_address' => $email,
										'status'        => 'subscribed',
									)
								);

								// Show the response
								if ( $mailchimp->success() ) {
									$code = 'success';

									// Show the success message
									$response = $this->get_option( esc_html( stripslashes( $options['email']['message_done'] ) ), esc_html__( 'Thank you! We\'ll be in touch!', 'maintenance-mode-coming-soon' ) );
								} else {
									$code     = 'error';
									$response = $mailchimp->getLastError();
								}
							}
						}
					}

					// Subscription form
					// Displaying errors as well if they are set
					$arrange['form'] = '<div class="as-subscription">';

					if ( isset( $code ) && isset( $response ) ) {
						$arrange['form'] .= '<div class="as-alert as-alert-' . $code . '">' . $response . '</div>';
					}

					$arrange['form'] .= '<form role="form" method="post">
							<input type="text" name="' . Config::PREFIX . 'email" placeholder="' . esc_attr( $this->get_option( sanitize_text_field( $options['form']['input_text'] ), esc_html__( 'Enter your email address..', 'maintenance-mode-coming-soon' ) ) ) . '">
							<input type="submit" name="' . Config::PREFIX . 'submit" value="' . esc_attr( $this->get_option( sanitize_text_field( $options['form']['button_text'] ), esc_html__( 'Subscribe', 'maintenance-mode-coming-soon' ) ) ) . '">
						</form>';

					// Antispam text
					if ( ! empty( $options['form']['antispam_text'] ) ) {
						$arrange['form'] .= '<p class="as-anti-spam">' . stripslashes( sanitize_text_field( $options['form']['antispam_text'] ) ) . '</p>';
					}

					$arrange['form'] .= '</div><!-- .as-subscription -->';
				}

				// Social
				// Set defaults
				$arrange['social'] = false;
				$social            = '';

				// foreach() Loop
				if ( ! empty( $options['social']['arrange'] ) ) {
					$social_arrange = explode( ',', esc_html( $options['social']['arrange'] ) );

					// Loop over social networks
					foreach ( $social_arrange as $social_item ) {
						if ( ! empty( $options['social'][ $social_item ] ) ) {
							$social_code .= '<a href="' . esc_url( $options['social'][ $social_item ] ) . '" target="' . $this->get_option( esc_attr( $options['social']['link_target'] ), '_blank' ) . '"><i class="fa fa-fw fa-' . esc_attr( $social_item ) . '"></i></a>' . "\r\n";
						}
					}
				} else {
					foreach ( $options['social'] as $key => $value ) {
						if ( ! in_array( $key, array( 'arrange', 'link_color', 'link_hover', 'icon_size' ) ) ) {
							if ( ! empty( $value ) ) {
								$social_code .= '<a href="' . esc_url( $value ) . '" target="' . $this->get_option( esc_attr( $options['social']['link_target'] ), '_blank' ) . '"><i class="fa fa-fw fa-' . esc_attr( $key ) . '"></i></a>' . "\r\n";
							}
						}
					}
				}

				// Exists : $social_code
				if ( ! empty( $social_code ) ) {
					$arrange['social'] = '<div class="as-social-links">' . $social_code . '</div><!-- .as-social-links -->' . "\r\n";
				} else {
					$arrange['social'] = '';
				}

				// Custom HTML
				$arrange['html'] = stripslashes( $options['advanced']['custom_html'] );

				// Echo out sections
				if ( isset( $options['basic']['arrange'] ) && ! empty( $options['basic']['arrange'] ) ) {
					$sections = explode( ',', esc_html( $options['basic']['arrange'] ) );
				} else {
					$sections = Config::$default_options['arrange'];
				}

				foreach ( $sections as $section ) {
					if ( isset( $arrange[ $section ] ) ) {
						echo $arrange[ $section ];
					}
				}

				?>
			</div><!-- .as-content -->
		</div><!-- .as-container -->
	</div><!-- .as-mmcs -->

<?php

	// Analytics code
if ( isset( $options['basic']['analytics'] ) && ! empty( $options['basic']['analytics'] ) ) {
	echo '<script>' . stripslashes( $options['basic']['analytics'] ) . '</script>' . "\r\n";
}

?>

<!-- Plugin by Akshit Sethi (https://akshitsethi.com) -->
<!-- Twitter: @akshitsethi -->
</body>
</html>
