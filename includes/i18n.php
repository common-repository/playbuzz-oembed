<?php
/**
 * Security check
 * Prevent direct access to the file.
 *
 * @since 1.3
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/**
 * Internationalization
 * Load plugin translation files from api.wordpress.org.
 *
 * @since 1.4
 */
class playbuzzoembedi18n {

	/**
	 * Constructor
	 */
	public function __construct() {

		add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );

	}

	/**
	 * Load the text domain for translation
	 */
	public function load_textdomain() {

		load_plugin_textdomain( 'playbuzz-oembed' );

	}

}
new playbuzzoembedi18n();
