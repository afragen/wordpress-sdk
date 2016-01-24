<?php
	/**
	 * @package     Freemius
	 * @copyright   Copyright (c) 2015, Freemius, Inc.
	 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
	 * @since       1.1.4
	 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * All strings can now be overridden.
	 *
	 * For example, if we want to override:
	 *      'you-are-step-away' => 'You are just one step away - %s',
	 *
	 * We can use the filter:
	 *      fs_override_i18n( array(
	 *          'opt-in-connect' => __( "Yes - I'm in!", '{your-text_domain}' ),
	 *          'skip'           => __( 'Not today', '{your-text_domain}' ),
	 *      ), '{plugin_slug}' );
	 *
	 * Or with the Freemius instance:
	 *
	 *      my_freemius->override_i18n( array(
	 *          'opt-in-connect' => __( "Yes - I'm in!", '{your-text_domain}' ),
	 *          'skip'           => __( 'Not today', '{your-text_domain}' ),
	 *      );
	 */
	global $fs_text;

	$fs_text = array(
		'account'                                  => __( 'Account', 'freemius' ),
		'addon'                                    => __( 'Add On', 'freemius' ),
		'contact-us'                               => __( 'Contact Us', 'freemius' ),
		'change-ownership'                         => __( 'Change Ownership', 'freemius' ),
		'support'                                  => __( 'Support', 'freemius' ),
		'support-forum'                            => __( 'Support Forum', 'freemius' ),
		'add-ons'                                  => __( 'Add Ons', 'freemius' ),
		'upgrade'                                  => _x( 'Upgrade', 'verb', 'freemius' ),
		'awesome'                                  => __( 'Awesome', 'freemius' ),
		'pricing'                                  => _x( 'Pricing', 'noun', 'freemius' ),
		'price'                                    => _x( 'Price', 'noun', 'freemius' ),
		'unlimited-updates'                        => __( 'Unlimited Updates', 'freemius' ),
		'downgrade'                                => _x( 'Downgrade', 'verb', 'freemius' ),
		'free-trial'                               => __( 'Free Trial', 'freemius' ),
		'details'                                  => __( 'Details', 'freemius' ),
		'account-details'                          => __( 'Account Details', 'freemius' ),
		'delete'                                   => _x( 'Delete', 'verb', 'freemius' ),
		'delete-account'                           => __( 'Delete Account', 'freemius' ),
		'dismiss'                                  => _x( 'Dismiss', 'as close a window', 'freemius' ),
		'plan'                                     => _x( 'Plan', 'as product pricing plan', 'freemius' ),
		'change-plan'                              => __( 'Change Plan', 'freemius' ),
		'download-x-version'                       => _x( 'Download %s Version', 'as download professional version', 'freemius' ),
		'download-x-version-now'                   => _x( 'Download %s version now', 'as download professional version now', 'freemius' ),
		'download-latest'                          => _x( 'Download Latest', 'as download latest version', 'freemius' ),
		'you-have-x-license'                       => _x( 'You have a %s license.', 'E.g. you have a professional license.', 'freemius' ),
		'new'                                      => __( 'New', 'freemius' ),
		'free'                                     => __( 'Free', 'freemius' ),
		'trial'                                    => _x( 'Trial', 'as trial plan', 'freemius' ),
		'purchase'                                 => _x( 'Purchase', 'verb', 'freemius' ),
		'license-single-site'                      => __( 'Single Site License', 'freemius' ),
		'license-unlimited'                        => __( 'Unlimited Licenses', 'freemius' ),
		'license-x-sites'                          => __( 'Up to %s Sites', 'freemius' ),
		'renew-license-now'                        => __( '%sRenew your license now%s to access version %s features and support.', 'freemius' ),
		'x-plan'                                   => _x( '%s Plan', 'e.g. Professional Plan', 'freemius' ),
		'you-are-step-away'                        => __( 'You are just one step away - %s', 'freemius' ),
		'activate-x-now'                           => _x( 'Complete "%s" Activation Now', '%s - plugin name. As complete "Jetpack" activation now', 'freemius' ),
		'few-plugin-tweaks'                        => __( 'We made a few tweaks to the plugin, %s', 'freemius' ),
		'optin-x-now'                              => __( 'Opt-in to make "%s" Better!', 'freemius' ),
		'error'                                    => __( 'Error', 'freemius' ),
		'failed-finding-main-path'                 => __( 'Freemius SDK couldn\'t find the plugin\'s main file. Please contact sdk@freemius.com with the current error.', 'freemius' ),
		#region Account

		'expiration'                               => _x( 'Expiration', 'as expiration date', 'freemius' ),
		'not-verified'                             => __( 'not verified', 'freemius' ),
		'verify-email'                             => __( 'Verify Email', 'freemius' ),
		'expires-in'                               => _x( 'Expires in %s', 'e.g. expires in 2 months', 'freemius' ),
		'renews-in'                                => _x( 'Auto renews in %s', 'e.g. auto renews in 2 months', 'freemius' ),
		'no-expiration'                            => __( 'No expiration', 'freemius' ),
		'expired'                                  => __( 'Expired', 'freemius' ),
		'in-x'                                     => __( 'In %s', 'freemius' ),
		'version'                                  => _x( 'Version', 'as plugin version', 'freemius' ),
		'name'                                     => __( 'Name', 'freemius' ),
		'email'                                    => __( 'Email', 'freemius' ),
		'verified'                                 => __( 'Verified', 'freemius' ),
		'plugin'                                   => __( 'Plugin', 'freemius' ),
		'plugins'                                  => __( 'Plugins', 'freemius' ),
		'path'                                     => _x( 'Path', 'as file/folder path', 'freemius' ),
		'title'                                    => __( 'Title', 'freemius' ),
		'slug'                                     => _x( 'Slug', 'as WP plugin slug', 'freemius' ),
		'id'                                       => __( 'ID', 'freemius' ),
		'users'                                    => __( 'Users', 'freemius' ),
		'plugin-installs'                          => __( 'Plugin Installs', 'freemius' ),
		'sites'                                    => _x( 'Sites', 'like websites', 'freemius' ),
		'user-id'                                  => __( 'User ID', 'freemius' ),
		'site-id'                                  => __( 'Site ID', 'freemius' ),
		'public-key'                               => __( 'Public Key', 'freemius' ),
		'secret-key'                               => __( 'Secret Key', 'freemius' ),
		'no-secret'                                => _x( 'No Secret', 'as secret encryption key missing', 'freemius' ),
		'no-id'                                    => __( 'No ID', 'freemius' ),
		'sync-license'                             => _x( 'Sync License', 'as synchronize license', 'freemius' ),
		'sync'                                     => _x( 'Sync', 'as synchronize', 'freemius' ),
		'deactivate-license'                       => __( 'Deactivate License', 'freemius' ),
		'activate'                                 => __( 'Activate', 'freemius' ),
		'deactivate'                               => __( 'Deactivate', 'freemius' ),
		'active'                                   => _x( 'Active', 'active mode', 'freemius' ),
		'is-active'                                => _x( 'Is Active', 'is active mode?', 'freemius' ),
		'install-now'                              => __( 'Install Now', 'freemius' ),
		'install-update-now'                       => __( 'Install Update Now', 'freemius' ),
		'more-information-about-x'                 => __( 'More information about %s', 'freemius' ),
		'localhost'                                => __( 'Localhost', 'freemius' ),
		'activate-x-plan'                          => _x( 'Activate %s Plan', 'as activate Professional plan', 'freemius' ),
		'what-is-your-x'                           => __( 'What is your %s?', 'freemius' ),
		'activate-this-addon'                      => __( 'Activate this add-on', 'freemius' ),
		'deactivate-license-confirm'               => __( 'Deactivating your license will block all premium features, but will enable you to activate the license on another site. Are you sure you want to proceed?', 'freemius' ),
		'delete-account-x-confirm'                 => __( 'Deleting the account will automatically deactivate your %s plan license so you can use it on other sites. If you want to terminate the recurring payments as well, click the "Cancel" button, and first "Downgrade" your account. Are you sure you would like to continue with the deletion?', 'freemius' ),
		'delete-account-confirm'                   => __( 'Deletion is not temporary. Only delete if you no longer want to use this plugin anymore. Are you sure you would like to continue with the deletion?', 'freemius' ),
		'downgrade-x-confirm'                      => __( 'Downgrading your plan will immediately stop all future recurring payments and your %s plan license will expire in %s.', 'freemius' ),
		'after-downgrade-non-blocking'             => __( 'You can still enjoy all %s features but you will not have access to plugin updates and support.', 'freemius' ),
		'after-downgrade-blocking'                 => __( 'Once your license expire you can still use the Free version but you will NOT have access to the %s features.', 'freemius' ),
		'proceed-confirmation'                     => __( 'Are you sure you want to proceed?', 'freemius' ),
		#endregion Account

		'add-ons-for-x'                            => __( 'Add Ons for %s', 'freemius' ),
		#region Plugin Deactivation
		'deactivation-share-reason'                => __( 'If you have a moment, please let us know why you are deactivating', 'freemius' ),
		'deactivation-modal-button-deactivate'     => __( 'Deactivate', 'freemius' ),
		'deactivation-modal-button-confirm'        => __( 'Yes - Deactivate', 'freemius' ),
		'deactivation-modal-button-submit'         => __( 'Submit & Deactivate', 'freemius' ),
		'deactivation-modal-button-cancel'         => _x( 'Cancel', 'the text of the cancel button of the plugin deactivation dialog box.', 'freemius' ),
		'reason-no-longer-needed'                  => __( 'I no longer need the plugin', 'freemius' ),
		'reason-found-a-better-plugin'             => __( 'I found a better plugin', 'freemius' ),
		'reason-needed-for-a-short-period'         => __( 'I only needed the plugin for a short period', 'freemius' ),
		'reason-broke-my-site'                     => __( 'The plugin broke my site', 'freemius' ),
		'reason-suddenly-stopped-working'          => __( 'The plugin suddenly stopped working', 'freemius' ),
		'reason-cant-pay-anymore'                  => __( "I can't pay for it anymore", 'freemius' ),
		'reason-other'                             => _x( 'Other', 'the text of the "other" reason for deactivating the plugin that is shown in the modal box.', 'freemius' ),
		'placeholder-plugin-name'                  => __( "What's the plugin's name?", 'freemius' ),
		'placeholder-comfortable-price'            => __( 'What price would you feel comfortable paying?', 'freemius' ),
		'reason-couldnt-make-it-work'              => __( "I couldn't understand how to make it work", 'freemius' ),
		'reason-great-but-need-specific-feature'   => __( "The plugin is great, but I need specific feature that you don't support", 'freemius' ),
		'reason-not-working'                       => __( 'The plugin is not working', 'freemius' ),
		'reason-not-what-i-was-looking-for'        => __( "It's not what I was looking for", 'freemius' ),
		'reason-didnt-work-as-expected'            => __( "The plugin didn't work as expected", 'freemius' ),
		'placeholder-feature'                      => __( 'What feature?', 'freemius' ),
		'placeholder-share-what-didnt-work'        => __( "Kindly share what didn't work so we can fix it for future users...", 'freemius' ),
		'placeholder-what-youve-been-looking-for'  => __( "What you've been looking for?", 'freemius' ),
		'placeholder-what-did-you-expect'          => __( "What did you expect?", 'freemius' ),
		'reason-didnt-work'                        => __( "The plugin didn't work", 'freemius' ),
		'reason-dont-like-to-share-my-information' => __( "I don't like to share my information with you", 'freemius' ),
		#endregion Plugin Deactivation

		#region Connect
		'hey-x'                                    => _x( 'Hey %s,', 'greeting', 'freemius' ),
		'thanks-x'                                 => _x( 'Thanks %s!', 'a greeting. E.g. Thanks John!', 'freemius' ),
		'connect-message'                          => __( 'In order to enjoy all our features and functionality, %s needs to connect your user, %s at %s, to %s', 'freemius' ),
		'connect-message_on-update'                => __( 'Please help us improve %2$s! If you opt-in, some data about your usage of %2$s will be sent to %5$s. If you skip this, that\'s okay! %2$s will still work just fine.', 'freemius' ),
		'pending-activation-message'               => __( 'You should receive an activation email for %s to your mailbox at %s. Please make sure you click the activation button in that email to complete the install.', 'freemius' ),
		'what-permissions'                         => __( 'What permissions are being granted?', 'freemius' ),
		'permissions-profile'                      => __( 'Your Profile Overview', 'freemius' ),
		'permissions-profile_desc'                 => __( 'Name and email address', 'freemius' ),
		'permissions-site'                         => __( 'Your Site Overview', 'freemius' ),
		'permissions-site_desc'                    => __( 'Site address, WordPress version, PHP Version', 'freemius' ),
		'permissions-events'                       => __( 'Plugin Events', 'freemius' ),
		'permissions-events_desc'                  => __( 'Activation, deactivation and uninstall', 'freemius' ),
		'permissions-newsletter'                   => __( 'Newsletter', 'freemius' ),
		'permissions-newsletter_desc'              => __( 'Updates, announcements, marketing, no spam', 'freemius' ),
		'privacy-policy'                           => __( 'Privacy Policy', 'freemius' ),
		'tos'                                      => __( 'Terms of Service', 'freemius' ),
		'activating'                               => _x( 'Activating', 'as activating plugin', 'freemius' ),
		'opt-in-connect'                           => _x( 'Allow & Continue', 'button label', 'freemius' ),
		'skip'                                     => _x( 'Skip', 'verb', 'freemius' ),
		'resend-activation-email'                  => __( 'Re-send activation email', 'freemius' ),
		#endregion Connect

		#region Screenshots
		'screenshots'                              => __( 'Screenshots', 'freemius' ),
		'view-full-size-x'                         => __( 'Click to view full-size screenshot %d', 'freemius' ),
		#endregion Screenshots

		#region Debug
		'freemius-debug'                           => __( 'Freemius Debug', 'freemius' ),
		'on'                                       => _x( 'On', 'as turned on', 'freemius' ),
		'off'                                      => _x( 'Off', 'as turned off', 'freemius' ),
		'freemius-state'                           => __( 'Freemius State', 'freemius' ),
		'connected'                                => _x( 'Connected', 'as connection was successful', 'freemius' ),
		'blocked'                                  => _x( 'Blocked', 'as connection blocked', 'freemius' ),
		'api'                                      => _x( 'API', 'as application program interface', 'freemius' ),
		'sdk'                                      => _x( 'SDK', 'as software development kit versions', 'freemius' ),
		'sdk-versions'                             => _x( 'SDK Versions', 'as software development kit versions', 'freemius' ),
		'plugin-path'                              => _x( 'Plugin Path', 'as plugin folder path', 'freemius' ),
		'sdk-path'                                 => _x( 'SDK Path', 'as sdk path', 'freemius' ),
		'addons-of-x'                              => __( 'Add Ons of Plugin %s', 'freemius' ),
		'delete-all-confirm'                       => __( 'Are you sure you want to delete the all Freemius data?', 'freemius' ),
		'actions'                                  => __( 'Actions', 'freemius' ),
		'delete-all-accounts'                      => __( 'Delete All Accounts', 'freemius' ),
		'clear-api-cache'                          => __( 'Clear API Cache', 'freemius' ),
		'sync-data-from-server'                    => __( 'Sync Data From Server', 'freemius' ),
		#endregion Debug

		#region Expressions
		'congrats'                                 => _x( 'Congrats', 'as congratulations', 'freemius' ),
		'oops'                                     => _x( 'Oops', 'exclamation', 'freemius' ),
		'yee-haw'                                  => _x( 'Yee-haw', 'interjection expressing joy or exuberance', 'freemius' ),
		'woot'                                     => _x( 'W00t', '(especially in electronic communication) used to express elation, enthusiasm, or triumph.', 'freemius' ),
		'right-on'                                 => _x( 'Right on', 'a positive response', 'freemius' ),
		'hmm'                                      => _x( 'Hmm', 'something somebody says when they are thinking about what you have just said. ', 'freemius' ),
		'ok'                                       => __( 'O.K', 'freemius' ),
		'hey'                                      => _x( 'Hey', 'exclamation', 'freemius' ),
		'heads-up'                                 => _x( 'Heads up', 'advance notice of something that will need attention.', 'freemius' ),
		#endregion Expressions

		#region Admin Notices
		'you-have-latest'                          => __( 'Seems like you got the latest release.', 'freemius' ),
		'you-are-good'                             => __( 'You are all good!', 'freemius' ),
		'user-exist-message'                       => __( 'Sorry, we could not complete the email update. Another user with the same email is already registered.', 'freemius' ),
		'user-exist-message_ownership'             => __( 'If you would like to give up the ownership of the plugin\'s account to %s click the Change Ownership button.', 'freemius' ),
		'email-updated-message'                    => __( 'Your email was successfully updated. You should receive an email with confirmation instructions in few moments.', 'freemius' ),
		'name-updated-message'                     => __( 'Your name was successfully updated.', 'freemius' ),
		'x-updated'                                => __( 'You have successfully updated your %s.', 'freemius' ),
		'name-update-failed-message'               => __( 'Please provide your full name.', 'freemius' ),
		'verification-email-sent-message'          => __( 'Verification mail was just sent to %s. If you can\'t find it after 5 min, please check your spam box.', 'freemius' ),
		'addons-info-external-message'             => __( 'Just letting you know that the add-ons information of %s is being pulled from external server.', 'freemius' ),
		'no-cc-required'                           => __( 'No credit card required', 'freemius' ),
		'premium-activated-message'                => __( 'Premium plugin version was successfully activated.', 'freemius' ),
		'successful-version-upgrade-message'       => __( 'The upgrade of %s was successfully completed.', 'freemius' ),
		'activation-with-plan-x-message'           => __( 'Your account was successfully activated with the %s plan.', 'freemius' ),
		'download-latest-x-version'                => __( 'Download the latest %s version now', 'freemius' ),
		'download-latest-version'                  => __( 'Download the latest version now', 'freemius' ),
		'addon-successfully-purchased-message'     => _x( '%s Add-on was successfully purchased.', '%s - product name, e.g. Facebook add-on was successfully...', 'freemius' ),
		'addon-successfully-upgraded-message'      => __( 'Your %s Add-on plan was successfully upgraded.', 'freemius' ),
		'email-verified-message'                   => __( 'Your email has been successfully verified - you are AWESOME!', 'freemius' ),
		'plan-upgraded-message'                    => __( 'Your plan was successfully upgraded.', 'freemius' ),
		'plan-changed-to-x-message'                => __( 'Your plan was successfully changed to %s.', 'freemius' ),
		'license-expired-blocking-message'         => __( 'Your license has expired. You can still continue using the free plugin forever.', 'freemius' ),
		'trial-started-message'                    => __( 'Your trial has been successfully started.', 'freemius' ),
		'license-activated-message'                => __( 'Your license was successfully activated.', 'freemius' ),
		'no-active-license-message'                => __( 'It looks like your site currently don\'t have an active license.', 'freemius' ),
		'license-deactivation-message'             => __( 'Your license was successfully deactivated, you are back to the %s plan.', 'freemius' ),
		'license-deactivation-failed-message'      => __( 'It looks like the license deactivation failed.', 'freemius' ),
		'license-activation-failed-message'        => __( 'It looks like the license could not be activated.', 'freemius' ),
		'server-error-message'                     => __( 'Error received from the server:', 'freemius' ),
		'trial-expired-message'                    => __( 'Your trial has expired. You can still continue using all our free features.', 'freemius' ),
		'plan-x-downgraded-message'                => __( 'Your plan was successfully downgraded. Your %s plan license will expire in %s.', 'freemius' ),
		'plan-downgraded-failure-message'          => __( 'Seems like we are having some temporary issue with your plan downgrade. Please try again in few minutes.', 'freemius' ),
		'trial-cancel-no-trial-message'            => __( 'It looks like you are not in trial mode anymore so there\'s nothing to cancel :)', 'freemius' ),
		'trial-cancel-message'                     => __( 'Your %s Plan trial was successfully cancelled.', 'freemius' ),
		'version-x-released'                       => _x( 'Version %s was released.', '%s - numeric version number', 'freemius' ),
		'please-download-x'                        => __( 'Please download %s.', 'freemius' ),
		'latest-x-version'                         => _x( 'the latest %s version here', '%s - plan name, as the latest professional version here', 'freemius' ),
		'trial-x-promotion-message'                => __( 'How do you like %s so far? Test all our %s premium features with a %d-day free trial.', 'freemius' ),
		'start-free-trial'                         => _x( 'Start free trial', 'call to action', 'freemius' ),
		'trial-cancel-failure-message'             => __( 'Seems like we are having some temporary issue with your trial cancellation. Please try again in few minutes.', 'freemius' ),
		'no-commitment-for-x-days'                 => __( 'No commitment for %s days - cancel anytime!', 'freemius' ),
		'license-expired-non-blocking-message'     => __( 'Your license has expired. You can still continue using all the %s features, but you\'ll need to renew your license to continue getting updates and support.', 'freemius' ),
		'could-not-activate-x'                     => __( 'Couldn\'t activate %s.', 'freemius' ),
		'contact-us-with-error-message'            => __( 'Please contact us with the following message:', 'freemius' ),
		'plan-did-not-change-message'              => __( 'It looks like your plan did\'t change. If you did upgrade, it\'s probably an issue on our side - sorry.', 'freemius' ),
		'contact-us-here'                          => __( 'Please contact us here', 'freemius' ),
		'plan-did-not-change-email-message'        => __( 'I have upgraded my account but when I try to Sync the License, the plan remains %s.', 'freemius' ),
		#endregion Admin Notices
		#region Connectivity Issues
		'connectivity-test-fails-message'          => __( 'From unknown reason, the API connectivity test fails.', 'freemius' ),
		'curl-missing-message'                     => __( 'We use PHP cURL library for the API calls, which is a very common library and usually installed out of the box. Unfortunately, cURL is not installed on your server.', 'freemius' ),
		'cloudflare-blocks-connection-message'     => __( 'From unknown reason, CloudFlare, the firewall we use, blocks the connection.', 'freemius' ),
		'x-requires-access-to-api'                 => _x( '%s requires an access to our API.', 'as pluginX requires an access to our API', 'freemius' ),
		'squid-blocks-connection-message'          => __( 'It looks like your server is using Squid ACL (access control lists), which blocks the connection.', 'freemius' ),
		'squid-no-clue-title'                      => __( 'I don\'t know what is Squid or ACL, help me!', 'freemius' ),
		'squid-no-clue-desc'                       => __( 'We\'ll make sure to contact your hosting company and resolve the issue. You will get a follow-up email to %s once we have an update.', 'freemius' ),
		'sysadmin-title'                           => __( 'I\'m a system administrator', 'freemius' ),
		'squid-sysadmin-desc'                      => __( 'Great, please whitelist the following domains: %s. Once you done, deactivate the plugin and activate it again.', 'freemius' ),
		'curl-missing-no-clue-title'               => __( 'I don\'t know what is cURL or how to install it, help me!', 'freemius' ),
		'curl-missing-no-clue-desc'                => __( 'We\'ll make sure to contact your hosting company and resolve the issue. You will get a follow-up email to %s once we have an update.', 'freemius' ),
		'curl-missing-sysadmin-desc'               => __( 'Great, please install cURL and enable it in your php.ini file. To make sure it was successfully activated, use \'phpinfo()\'. Once activated, deactivate the plugin and reactivate it back again.', 'freemius' ),
		'happy-to-resolve-issue-asap'              => __( 'We are sure it\'s an issue on our side and more than happy to resolve it for you ASAP if you give us a chance.', 'freemius' ),
		'fix-issue-title'                          => __( 'Yes - I\'m giving you a chance to fix it', 'freemius' ),
		'fix-issue-desc'                           => __( 'We will do our best to whitelist your server and resolve this issue ASAP. You will get a follow-up email to %s once we have an update.', 'freemius' ),
		'install-previous-title'                   => __( 'Let\'s try your previous version', 'freemius' ),
		'install-previous-desc'                    => __( 'Uninstall this version and install the previous one.', 'freemius' ),
		'deactivate-plugin-title'                  => __( 'That\'s exhausting, please deactivate', 'freemius' ),
		'deactivate-plugin-desc'                   => __( 'We feel your frustration and sincerely apologize for the inconvenience. Hope to see you again in the future.', 'freemius' ),
		'fix-request-sent-message'                 => __( 'Thank for giving us the chance to fix it! A message was just sent to our technical staff. We will get back to you as soon as we have an update to %s. Appreciate your patience.', 'freemius' ),
		'server-blocking-access'                   => _x( 'Your server is blocking the access to Freemius\' API, which is crucial for %1s license synchronization. Please contact your host to whitelist %2s', '%1s - plugin title, %2s - API domain', 'freemius' ),
		'wrong-authentication-param-message'       => __( 'It seems like one of the authentication parameters is wrong. Update your Public Key, Secret Key & User ID, and try again.', 'freemius' ),
		#endregion Connectivity Issues
		#region Change Owner
		'change-owner-request-sent-x'              => __( 'Please check your mailbox, you should receive an email via %s to confirm the ownership change. From security reasons, you must confirm the change within the next 15 min. If you cannot find the email, please check your spam folder.', 'freemius' ),
		'change-owner-request_owner-confirmed'     => __( 'Thanks for confirming the ownership change. An email was just sent to %s for final approval.', 'freemius' ),
		'change-owner-request_candidate-confirmed' => __( '%s is the new owner of the account.', 'freemius' ),
		#endregion Change Owner
		'addon-x-cannot-run-without-y'             => _x( '%s cannot run without %s.', 'addonX cannot run without pluginY', 'freemius' ),
		'addon-x-cannot-run-without-parent'        => _x( '%s cannot run without the plugin.', 'addonX cannot run...', 'freemius' ),
		'plugin-x-activation-message'              => _x( '%s activation was successfully completed.', 'pluginX activation was successfully...', 'freemius' ),
		'features-and-pricing'                     => _x( 'Features & Pricing', 'Plugin installer section title', 'freemius' ),
	);