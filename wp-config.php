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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressLab1' );

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
define( 'AUTH_KEY',         'gAMM8z:/.)jD3=)WDg/%n9LO3o*)/Hf$x*c^Rfk?~QsRi!rXGUEO0oPh6fRQo-KS' );
define( 'SECURE_AUTH_KEY',  '%:t~w-Pkf]Nz|[!KT1hll}!B@X$;-kf{oG{$eV?Os03NYg;<EC*}qB[TN$upx9&_' );
define( 'LOGGED_IN_KEY',    ',i_#1==9vC3)uV]U,%w##]`!`HA*OX=XAkU%z)H@fXk5WhH;t?Z=QN=B<M!b[k >' );
define( 'NONCE_KEY',        '!:3MN3ludA2gw/Q|y5fizq=[DfwMeoh7Gh?w^<[SY7)MS!jC@9gr>>dWN 526+D4' );
define( 'AUTH_SALT',        'NAMdtwX0#/Cv/PH<+yM-96.w,k585E7c1  3[AIQw{VrNaKKczB<nj1iBw.j/MXq' );
define( 'SECURE_AUTH_SALT', 'y~ym[H||9z8g_B61dm{rQEXGd`tZj}PM|4y!a)s8,!0rd*JtlIwJRKTL6Utv*84&' );
define( 'LOGGED_IN_SALT',   'h#w2$|BZIo!2]o?]6T^j}e`=lWrkyj0kq|{FQdb9BW7u=89h<UVR;r{@ca?/(raB' );
define( 'NONCE_SALT',       'OX~>R[m4LJ[]a&f-x>nB^Cn>)ljO5q#nYD&w%yZ&tV(%O(kLe0$,}A9.Ba]mV5K.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lab1_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
