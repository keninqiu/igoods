<?php
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
define('AUTH_KEY',         'G$Gq*sX[~$~_NAVzk,Ct`}WY?XoM)VA<<Qzj{Bpq-o6&s(LL])3c.nW-F/R.&Hg%');
define('SECURE_AUTH_KEY',  '/Ku@#FYmFW%`0I$X%]r3aOLDcqXb`6u@T=Oz&UC^qJl~9/:XD5W.dA=IH-<ypXXN');
define('LOGGED_IN_KEY',    'yrz.rPHRMBa%4:#t[,HnV2]. 8J@7w9OJ2dGspr4sQJ7OI9d79{%p!D[f0rU3rC ');
define('NONCE_KEY',        'cF9U!lYL_iM!p[<KBWlDF(FE#lErgg=U+m~Y]tNQC7XS1w(H[`OU$.#2wF8XzY:v');
define('AUTH_SALT',        'lckVxD|Lcr=}w_GgA}(re{s11g$]?t@b2?6;[&0A%~jp6PS?#%rKOWe[8;eC7K[<');
define('SECURE_AUTH_SALT', '8`#(HG /.7AU_E:}Sho07)jO)*JJvh_-ZcD47ZJ&ScU^qOESWu0-dYBR#!DJCQDw');
define('LOGGED_IN_SALT',   'Z3U5)0zEM~J|]a<Pwq.%_)r@Tj):E4Qz+gG`[OAJ]p=U_b>34z%V2ELB`=OUkUO]');
define('NONCE_SALT',       'e]mTs%lt&Xn#>16iG@<?q1)-4+:4N3;pcSVo`tO4@OwM#9w1>.<jXK{s,&UwMt3/');

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
