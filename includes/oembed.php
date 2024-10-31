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



/*
 * Playbuzz oEmbed
 * Register oEmbed provider.
 *
 * @since 1.0
 */
function playbuzz_oembed_provider() {

	wp_oembed_add_provider( '#https?://(www\.)?playbuzz.com/.*#i', 'https://www.playbuzz.com/api/oembed/', true );

}
add_action( 'init', 'playbuzz_oembed_provider' );
