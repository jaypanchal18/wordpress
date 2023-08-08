<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1@3+&mx~Rn%Wan%3AQ;BI1$>0hdDx&_u@}:jgynMzcd)A>TdF&_R~gy`-$}NlN?k' );
define( 'SECURE_AUTH_KEY',  'G7=|<I_U+t9JKAL&d-^*--`Q+|7fFECc^vWsWe({L?6S+DB6m}G@}`?h]=`|UvzP' );
define( 'LOGGED_IN_KEY',    'y/nMD|dd7[|uA)):1V.-{{R%tA3s|ZNud)@H@|cZ0%z8;epCd dKICy/)ZgB5`JS' );
define( 'NONCE_KEY',        '5hRJVV>w*Yf4u5GR Jqx/7)|6vc1S<_kd+z;0+c0WOIE:[E<~-Z5kZk:Bde%%(.W' );
define( 'AUTH_SALT',        '_B74idm-/RKQHep|efXm F)H N eQ*bk5d,NXARx (r2[LV.OC{/H>{/Y<m1gvP&' );
define( 'SECURE_AUTH_SALT', 'pd&D%|wUm=x5V?(CXCqRpRn/PD2y`#HIiiwGA@#?RUMtPHrxMB6X_.v!rin3on@_' );
define( 'LOGGED_IN_SALT',   'd&Z L+5D/P%8DO=yAa1Q|jo;6$ku!qh&1AeitkYY;F6RcmE1xp3N&4`$/p(;-Kh-' );
define( 'NONCE_SALT',       '!z}1HS%Lud_&T]wL`%c}o!}?$X3Cr!<4%m6?Ax)jx)M!U#v}bxmaj23v1[RB4*Oi' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
