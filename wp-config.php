<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
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
define( 'AUTH_KEY',         'ZodN=kH`^<A/W~<p!ki_Zw<M=IzHyXQX=|_-!&5`Pd)vn0xiUo/:{1y{-`I~)OV[' );
define( 'SECURE_AUTH_KEY',  '/a:L>U;^aT`<M4SZ7h7t6u{w$FXn7GylE,X%0ln>i<ZqXD`}FE,$kier(W)T{a3?' );
define( 'LOGGED_IN_KEY',    ']x#Uk7#5V0/tj5w m}=O4p#%p&j?-?_le*]7 !7/fJO^&{F(.m)y.xIG!5N6i_I1' );
define( 'NONCE_KEY',        'TeJ<~j~cESi_4p<!n+dTC@48<!t?3eD<^zBlbt]qOK.Njj3C~]i5]8+A,hH>= )@' );
define( 'AUTH_SALT',        'Lh[3vuD)R5<P:N?U#=C8dxQBpA;tC`Y2yvO<s{&f4#dLa];;HBF~dTD-G:P[.?q:' );
define( 'SECURE_AUTH_SALT', 'q 5%7^^tad.P@T,MaUhA:qh:ODB7|<mNE*qm|5Ir{%_Q|X@C];C%FCKg@HI;mcE?' );
define( 'LOGGED_IN_SALT',   '#%6p/due.ajNR{:HFG<5O4UYF84)v,#tFk7?g=[z1![!/{o+`]C%2|jX{JyEXZE:' );
define( 'NONCE_SALT',       '-1*iUxF*msbZ<YI$H>8gy3B{aeRqGGHgQ(H;1#$(Kh;m&sSp=v2DOUf.S^CJ?ao,' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
