<?php
/**
 * Plugin Name: Disable Google Fonts
 * Description: Removes Google Fonts from Counter theme. Thank you, GDPR.
 * Version:     1.0.0
 * Author:      ThemePatio
 * Author URI:  https://themepatio.com
 * Text Domain: themepatio
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Filters the default archive title.
 *
 * @return string The archive title.
 */
function themepatio_disable_google_fonts() {
	wp_dequeue_style( 'counter-fonts' );
}

add_action( 'wp_enqueue_scripts', 'themepatio_disable_google_fonts', 99 );
