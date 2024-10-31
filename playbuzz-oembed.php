<?php
/*
Plugin Name: Playbuzz Embed
Plugin URI:  https://wordpress.org/plugins/playbuzz-oembed/
Description: Embed playful content from Playbuzz.com into your WordPress site.
Version:     1.5
Author:      Rami Yushuvaev
Author URI:  https://GenerateWP.com/
Text Domain: playbuzz-oembed
*/



/*
 * Security check
 * Prevent direct access to the file.
 *
 * @since 1.3
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/**
 * Include plugin files
 */
include_once ( plugin_dir_path( __FILE__ ) . 'includes/i18n.php' );
include_once ( plugin_dir_path( __FILE__ ) . 'includes/oembed.php' );
