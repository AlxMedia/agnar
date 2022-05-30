<?php
/**
 * Easy Digital Downloads Theme Updater
 *
 * @package EDD Sample Theme
 */

// Includes the files needed for the theme updater
if ( !class_exists( 'EDD_Theme_Updater_Admin' ) ) {
	include( dirname( __FILE__ ) . '/theme-updater-admin.php' );
}

// Loads the updater classes
$updater = new EDD_Theme_Updater_Admin(

	// Config settings
	$config = array(
		'remote_api_url' => 'https://alx.media', // Site where EDD is hosted
		'item_name'      => 'Agnar', // Name of theme
		'theme_slug'     => 'agnar', // Theme slug
		'version'        => '2.3.1', // The current version of this theme
		'author'         => 'AlxMedia', // The author of this theme
		'download_id'    => '', // Optional, used for generating a license renewal link
		'renew_url'      => '', // Optional, allows for a custom license renewal link
		'beta'           => false, // Optional, set to true to opt into beta versions
	),

	// Strings
	$strings = array(
		'theme-license'             => __( 'Theme License', 'agnar' ),
		'enter-key'                 => __( 'Enter your theme license key.', 'agnar' ),
		'license-key'               => __( 'License Key', 'agnar' ),
		'license-action'            => __( 'License Action', 'agnar' ),
		'deactivate-license'        => __( 'Deactivate License', 'agnar' ),
		'activate-license'          => __( 'Activate License', 'agnar' ),
		'status-unknown'            => __( 'License status is unknown.', 'agnar' ),
		'renew'                     => __( 'Renew?', 'agnar' ),
		'unlimited'                 => __( 'unlimited', 'agnar' ),
		'license-key-is-active'     => __( 'License key is active.', 'agnar' ),
		'expires%s'                 => __( 'Expires %s.', 'agnar' ),
		'expires-never'             => __( 'Lifetime License.', 'agnar' ),
		'%1$s/%2$-sites'            => __( 'You have %1$s / %2$s sites activated.', 'agnar' ),
		'license-key-expired-%s'    => __( 'License key expired %s.', 'agnar' ),
		'license-key-expired'       => __( 'License key has expired.', 'agnar' ),
		'license-keys-do-not-match' => __( 'License keys do not match.', 'agnar' ),
		'license-is-inactive'       => __( 'License is inactive.', 'agnar' ),
		'license-key-is-disabled'   => __( 'License key is disabled.', 'agnar' ),
		'site-is-inactive'          => __( 'Site is inactive.', 'agnar' ),
		'license-status-unknown'    => __( 'License status is unknown.', 'agnar' ),
		'update-notice'             => __( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'agnar' ),
		'update-available'          => __('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'agnar' ),
	)

);
