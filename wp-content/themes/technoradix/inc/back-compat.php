<?php
/**
 * Techno Radix back compat functionality
 *
 * Prevents Techno Radix from running on WordPress versions prior to 3.6,
 * since this theme is not meant to be backward compatible and relies on
 * many new functions and markup changes introduced in 3.6.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Techno Radix 1.0
 */

/**
 * Prevent switching to Techno Radix on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Techno Radix 1.0
 */
function technoradix_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'technoradix_upgrade_notice' );
}
add_action( 'after_switch_theme', 'technoradix_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Techno Radix on WordPress versions prior to 3.6.
 *
 * @since Techno Radix 1.0
 */
function technoradix_upgrade_notice() {
	$message = sprintf( __( 'Techno Radix requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'technoradix' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Theme Customizer from being loaded on WordPress versions prior to 3.6.
 *
 * @since Techno Radix 1.0
 */
function technoradix_customize() {
	wp_die( sprintf( __( 'Techno Radix requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'technoradix' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'technoradix_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 3.4.
 *
 * @since Techno Radix 1.0
 */
function technoradix_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Techno Radix requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'technoradix' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'technoradix_preview' );
