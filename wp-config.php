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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'desa_asmorobangun' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':E#6NM9(7gkdRR(+9)*Qk;q:E?OXG^rnH)/^<2Ek!Y|14i:.~[3pJ0+4Q|r&+GA1' );
define( 'SECURE_AUTH_KEY',  '6lUok5Y=lG5E Y+}xLyXk`otrtU_jM2Vjy|QqGrR)p]Dq53]9b&H6>W}+T^/Dg~B' );
define( 'LOGGED_IN_KEY',    '7E dsgTPv?I$spTZuf~xX]*]aK1:@wax9IX~Xf,)te<6i/CMJFJHZ |L1]0Ya%}1' );
define( 'NONCE_KEY',        'cz1YlJn2s]?Q~`>Ufw1{Or)hV]W8JvdoYPHJQ0XIIv]hA$hDD%2LCB o0E8&Nu23' );
define( 'AUTH_SALT',        '@{s]Uf>3V{{R9vmrQ4HQdx(:XtfoAu<76E;(iH!Fyf][S8[lZf<#U%N:L3-f{l r' );
define( 'SECURE_AUTH_SALT', 'lQ;:Ey3&?7%cp/nKc)fR6.+@3`1$9GH<Wuub[TXC+2!Es`$anSTX;KI7Pu*$#GT[' );
define( 'LOGGED_IN_SALT',   '/vv@uoX4|n&sRYU0C5aY&l#,*Vfy4Gd=zGF^d2,y(mBn$]kzlJ[A}lR.Mua$p~41' );
define( 'NONCE_SALT',       'FDNq+*a/F?16^f]5LzT$SPEyto?k]2kLNg#-dwi_)0M@k#ICyV_)NDq&`9T{!hj:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'asmorobangun_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('WP_ALLOW_REPAIR', true);
