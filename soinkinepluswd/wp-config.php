<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpb@to0l$3cur3_db' );

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
define( 'AUTH_KEY',         '|@yI3AeYP@8I9o{-6$HZp_R%PkE,3zf,tBE}a1;4i,-8Rh]TOfpfi=F!>5R(lIKv' );
define( 'SECURE_AUTH_KEY',  'E,[ke-X8q($#l]d9,&jXg5oS*hVS=emqr7WtM;F+/`OVA9TXyDX%Ti{*vHvT_Kj$' );
define( 'LOGGED_IN_KEY',    'i.XG$1:e;3XXvZbL@G741*k9jw7z=eaw6_-PT`WaP5FAv+KK/5=/8!O r(xKOdBy' );
define( 'NONCE_KEY',        'ey$F4YkZ#bv)f&+6&0~+(u?U}yo|cop=i>aDYd9P+M~b.Ei`,&e!c`==Sy>o]IRR' );
define( 'AUTH_SALT',        '62(-6{At,xbY/GR2E3&<;2<q+.witX5_D}b=yt>/=Q]G`zD~$,Rjnm&G!fg*2]iP' );
define( 'SECURE_AUTH_SALT', 'SI/T6LghE-tfxcXK~WN9 ; NmlkJ8ieH4mjFqAV_b@ao9CVoW!d>+}c`my;Ch/*^' );
define( 'LOGGED_IN_SALT',   '&VMPn!w=kFO;7REbJ]avjcXuh >nyU}8zNJ)Hs8HWr>SNp PYj8d&WmvWj{p@pl/' );
define( 'NONCE_SALT',       'YXy0^Wh&~2L.G5zRWb}m1zUG^/f<svgV{~mcV!om>_Aafz<4obdT&lvsZjEg7>(#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_dqzdzqfeg';

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
