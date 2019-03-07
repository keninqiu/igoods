<?php
/**
 * igoods engine room
 *
 * @package igoods
 */

/**
 * Assign the igoods version to a var
 */
$theme              = wp_get_theme( 'igoods' );
$igoods_version = $theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

$igoods = (object) array(
	'version'    => $igoods_version,

	/**
	 * Initialize all the things.
	 */
	'main'       => require 'inc/class-igoods.php',
	'customizer' => require 'inc/customizer/class-igoods-customizer.php',
);

require 'inc/igoods-functions.php';
require 'inc/igoods-template-hooks.php';
require 'inc/igoods-template-functions.php';

if ( class_exists( 'Jetpack' ) ) {
	$igoods->jetpack = require 'inc/jetpack/class-igoods-jetpack.php';
}

if ( igoods_is_woocommerce_activated() ) {
	$igoods->woocommerce            = require 'inc/woocommerce/class-igoods-woocommerce.php';
	$igoods->woocommerce_customizer = require 'inc/woocommerce/class-igoods-woocommerce-customizer.php';

	require 'inc/woocommerce/class-igoods-woocommerce-adjacent-products.php';

	require 'inc/woocommerce/igoods-woocommerce-template-hooks.php';
	require 'inc/woocommerce/igoods-woocommerce-template-functions.php';
	require 'inc/woocommerce/igoods-woocommerce-functions.php';
}

if ( is_admin() ) {
	$igoods->admin = require 'inc/admin/class-igoods-admin.php';

	require 'inc/admin/class-igoods-plugin-install.php';
}

/**
 * NUX
 * Only load if wp version is 4.7.3 or above because of this issue;
 * https://core.trac.wordpress.org/ticket/39610?cversion=1&cnum_hist=2
 */
if ( version_compare( get_bloginfo( 'version' ), '4.7.3', '>=' ) && ( is_admin() || is_customize_preview() ) ) {
	require 'inc/nux/class-igoods-nux-admin.php';
	require 'inc/nux/class-igoods-nux-guided-tour.php';

	if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.0.0', '>=' ) ) {
		require 'inc/nux/class-igoods-nux-starter-content.php';
	}
}

/**
 * Note: Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woocommerce/theme-customisations
 */
