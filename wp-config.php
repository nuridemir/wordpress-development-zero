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
define( 'DB_NAME', 'wordpress-test1' );

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
define( 'AUTH_KEY',         ':p&d{d(#Lj$b;9s/Q4EZQdJk@q0ru;RgR!Sj/uC%Ju[gsa*xGtHnFE83w^)yuzBF' );
define( 'SECURE_AUTH_KEY',  'WP{@5JVc2v>lqn5g2!Dm<|_0J5FTa#hbl-%d<|YUzJXW9[$|<NG*v.HK8h~4S@A-' );
define( 'LOGGED_IN_KEY',    '3SD{C~/pzaR73I$j_L(c(}g Z$?Jn -!F-}ih*?K++!4rCp;SP)v-Hs(Cugn0d/?' );
define( 'NONCE_KEY',        ';Ad)mapdh4-LhyllV(00a6zQ4dck$oC7(QVE{yZ[y[3R H=<GD)h{bWfyt<{$;F+' );
define( 'AUTH_SALT',        'z$XG0hidVxY/S>V 3(Y{b(>uOBknM}ZRZF]BY8MI r_q;wZ1A|`/fBof?LSZ&j.F' );
define( 'SECURE_AUTH_SALT', 'Kd.%U/IhdbxF+Fp]}P>fUp|2Y%f<=iHEM|2[Z%OZBA#foA:U}-7K.%p5r$#<}ZGK' );
define( 'LOGGED_IN_SALT',   '[#0ai-0Y<S{8~(kM69I!rFh@ekTuFx7X{Cyw7Rr$o?ajkL-Om/IIX~42gZdu/sur' );
define( 'NONCE_SALT',       '22mM!}+2NPDZcSM$8#:%{j;y3]/ys;5]`)u!|};-L8=B^4_M^,JFHNGwOgT|N*^k' );

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
