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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '`xLCr4Bj04%AY~>&un<Q;1dr3ncQF?m1t08_Ym|D;V]Yc=meE__M@%yk&U]yz*#C' );
define( 'SECURE_AUTH_KEY',  'C)f%Vi|9HIIe(M#4/n7KZ~7jRkb9~rcbPxwIY%XVr?|J)R!T?TeT[MPrt<S&5G##' );
define( 'LOGGED_IN_KEY',    'IGzB4|^Nf)jnogn6GU *Y^@3:2(<c*sfmbf9SEi_q$gR0N,-6k%Dg=Y~6we`dGF_' );
define( 'NONCE_KEY',        ':p1r`04).b._<Na]>p9>qqR)2rjy2Zl.)(7a$(KkCWlq7PE.Z.i9?FuWF@x ga-I' );
define( 'AUTH_SALT',        'lk=v cnv%kUi|-pjg[a1<v(`n94q[;/!Y.Rx{)oK[*g.{9df^rp_ZQvjw,CiC/2)' );
define( 'SECURE_AUTH_SALT', 'Z?`B}GQ@u|^q3ZYrY,B#/NX%ZEi0_Q,upan4G6yfnZiUU7ic^G-WDHW;ta0B2^F]' );
define( 'LOGGED_IN_SALT',   'GJW8V`{Zk6{% 48uNv6c$sJ?EKvz,l$rf!^3i<Q3ChP=y+5d;itCtxQ>LPSaE(*K' );
define( 'NONCE_SALT',       'Bd&<k|bvI#c^`FRs7_0K2zgrjy4m=+m!)eeMm{9B-bshi:wR/K>+I*a/Pgb,zPn-' );

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
