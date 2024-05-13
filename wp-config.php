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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mohammed aldajani' );

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
define( 'AUTH_KEY',         'cc&mk.?=Kd.Vq>J>^!VtZk`#/P)[[b:m,7K[8<`^>Y~vV7pdE5>zE[l m1w!?N_B' );
define( 'SECURE_AUTH_KEY',  'unCPSh<BX82.%/!-a:VMv!$^1Mllou@Miv.f>Fc}^Vtq(%0]Tl+4l^-a!6!TFvq|' );
define( 'LOGGED_IN_KEY',    'Fi:S[1/Hz2+rMCy(.ga--:.CZm(Q!`f<{`mCEIZ`hx2N{(SmQ~Bw*/4Z .3xIIHq' );
define( 'NONCE_KEY',        'ijp[=)+cOvYH}cq-W_114x22>(ZE$qp&e{ ek?tXj9d/b0DmA|J*s<d._qYCwiM*' );
define( 'AUTH_SALT',        'fpz5zUlH2Sf5:#V%(w2.29E{d:an`_@xwlkWpcS/9uuGVP[|{vhr&/w,,GsI5_N-' );
define( 'SECURE_AUTH_SALT', '.)<`ms2C#*UiZcu=@L7+|TpxJFlr<4s>N!E0jqvEFNc$]D0UOVV?anawuA!r&_NO' );
define( 'LOGGED_IN_SALT',   '-C2#5S>xexfkA1W1HbMKpb`J]-D,$1f9m#l;Gh8+hmD2[tkX$q)K v3ZgoVxw4e=' );
define( 'NONCE_SALT',       'U@<N(eM)suHD^x@u{u~711%fDUV@Ni$T#/vcWldiiC=Tw;Bg5u4<P0w8l)|mq[oC' );

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
