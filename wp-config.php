<?php
define('WP_CACHE', true); // Added by WP Rocket
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

define( 'WP_DEBUG', true );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'igoods');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '98523020');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'k(tj?6h_%;CTE(D<qDI{HUI)c2=HS$_fb%d8]^s<BfgidAJSpJ+=|O/[K_s=o:.2');
define('SECURE_AUTH_KEY',  '1OLW5N8jbvkC&9M@Dj {@)U`ENtW=t0Djw[pe#`n!BptlRT?5}$^9+g2,L ]ZXzQ');
define('LOGGED_IN_KEY',    '5}MZynT?8]A1V/;(DlS.j%8Ck3^:%JVCBh},UW8kFZ5AYPcPM6B*j2VL/V6f89Ea');
define('NONCE_KEY',        ':v]#scv,>#GCf[63D]3PJ5YOm=}9L#?_^>z<>yw`^IF/xj!UE~b`7!|^21ND1CbU');
define('AUTH_SALT',        ')&d0&)Uf0:fS!?]As*pBr)=pLmv3]?e)!.=GI2S`cIccDUHH9HNLe:cHr=uc,WTp');
define('SECURE_AUTH_SALT', 'uw=4c(6v`%/& YXHx}rSk|a5Y3UK07G[tWP,BsN&0g x=G~_ahk8EfM8_Efd/!xu');
define('LOGGED_IN_SALT',   'AWgZRrVlgw^/T8V;2OdLv $wrWmG>b/W{6c@:V$5RaD1)UvLkmX D)$fu0DsQEMa');
define('NONCE_SALT',       '<^/d8h~H9KiGOyNh+-R56R0?1:q$jBc+`/Ar8 gM2JtZ!p8%J@F%^+f}Y?di_-,j');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
