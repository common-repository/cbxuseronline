<?php

/**
 * Fired when the plugin is uninstalled.
 *
 *
 * @link       http://codeboxr.com
 * @since      1.0.0
 *
 * @package    cbxuseronline
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

/**
 * The code that runs during plugin uninstall.
 */
function uninstall_cbxuseronline() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cbxuseronline-settings.php';
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cbxuseronline-helper.php';
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cbxuseronline-uninstall.php';


	CBXUserOnline_Uninstall::uninstall();
}//end function uninstall_cbxuseronline

if ( ! defined( 'CBX_USERONLINE_PLUGIN_NAME' ) ) {
	uninstall_cbxuseronline();
}