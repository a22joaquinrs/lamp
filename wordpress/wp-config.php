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
define( 'DB_NAME', 'dbname' );

/** Database username */
define( 'DB_USER', 'user' );

/** Database password */
define( 'DB_PASSWORD', 'abc123.' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'k{vr)zqd3wgRx*7YTD^M^~h[{Yh4x7:15Bl $b]6*y p0T&.aXG]mb58#HZ{o^w<' );
define( 'SECURE_AUTH_KEY',  'pO7F]!GbgdLYKM.LV%t{10-1gN;:?!,U$qjt<rloh3WbTT9l_+k@ 2sKb_q8?FEC' );
define( 'LOGGED_IN_KEY',    't[6^D7W.ov-?!eh~Z)tB5Rl={OB9J;CqZ>6cjhzYt(yD$y%?|mC(%Se7tbVK ffB' );
define( 'NONCE_KEY',        'EqfN&fcD@fK-Ts4+B)iJpxmN1PU/WP[KCdzi`Q|8quuL4$47rh7QPg&HJH-lOt5J' );
define( 'AUTH_SALT',        '(S<#_c#r#KS#+F&Bqe~:DRej)6e_t}@q`V]hT-WdfKF{~?-{h1.?+RO2XJZ@dPJ$' );
define( 'SECURE_AUTH_SALT', 'NG^},,jKKyAy^,0edo,TlDq5l._Dok|Sw:XG5F$nyh!+yc3trlf6$ e<~:jxqtP|' );
define( 'LOGGED_IN_SALT',   '!@+P(Q=i[o(`jk0+/EE2}gRNJX]:KHqS$)7IFF8M=6oD.yqBff&Im2W`S~{akq*M' );
define( 'NONCE_SALT',       '>RD|DXRUB#;-aWPBx4~/GG?Dp3sJc,wx%[[e_hQ8r`4#T0OyN%]m<24HfXtH?s{M' );

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
