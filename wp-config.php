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
define( 'DB_NAME', 'website' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root01' );

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
define( 'AUTH_KEY',         'v2nZEb]L5tC|C[gaU{--C~_17UMVl_ZA<Wx|1VUQAC<>0]yOarAGcxDv#yN0hs&~' );
define( 'SECURE_AUTH_KEY',  'DKJ]M$?<2V+](sOI]yR_rR7%2]SG[,1/oIm5dQc$xR@k.Rp{*Z.bne<S mdpqn|7' );
define( 'LOGGED_IN_KEY',    'w$D5Ij8,U]h`KoC9lYjCVO1{#]cQGUMtaBTfm`Hy_LE)0, llT>lwB$FrP+<kE+Z' );
define( 'NONCE_KEY',        ':,L)Gd`&P)uwN*@B[xk3%{p=r5}UaYb3,QFQ$@8A=BDGg@dQM@?#70|0[X]@bA/H' );
define( 'AUTH_SALT',        ':aUsO zcOhnx9:L))qHCU 0tq6?C},x2}q|H))i}r4JJ%N[7lH[F6Ts{8V%C86,o' );
define( 'SECURE_AUTH_SALT', '<4*.MeMR[NcKyp_a42;_RRv?Mg^#`C]/5!(3?!k8[z%pa.A[ Rxuk]{Nx<*0$B8T' );
define( 'LOGGED_IN_SALT',   '5dHy lR]B:^&h6f5q#kB{YODP24ZI^-~CDFn;2U)+} KW*!mH+:Hn{mSa`=lpN0p' );
define( 'NONCE_SALT',       '_iPoFM{wyhTkyc &/Z#m3>5gI%] N/;n=~K[a$?h)jP !&V2Z{ZDCV[39i^!!#Y>' );

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
