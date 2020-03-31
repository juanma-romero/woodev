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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woodev' );

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
define( 'AUTH_KEY',         'n]!`)Fn5(2,COLzgQyxt;s-LN*C&qFVQ@Qa(%]*q9+.MEdAFRQs}ynJ=RoVwOT~|' );
define( 'SECURE_AUTH_KEY',  '{[rSR1pD[%H]jTw/],,X@<YFMx=6N,%K&n3I=P]6eh$Pi6v#$8~E.!%R9}OsRqhJ' );
define( 'LOGGED_IN_KEY',    'dg&x(`[^#384{nvL%jmC!x3X<7dA$g)#c7^ej@S+EB>:;<A?:&!er/9@uwnv4FG,' );
define( 'NONCE_KEY',        'Xy6@tJNnV/HC]wF+t}(uKJqrNTG#KHW{Xtd#*e~ ]+<RAvhPX~Fp65G`i~m?&Z}d' );
define( 'AUTH_SALT',        '+kS-qaus8KUE~ixH]3=q+2c1I[~U{1KQamal)vhEz9*CohG0-H66~;@>Dp3L7;,z' );
define( 'SECURE_AUTH_SALT', ':Q%/Uc9|xt;cR+zmsC5o>6du?H +&8z ,Erig0L(ftNJ&YTk[]u.yjzEngQ^gh/R' );
define( 'LOGGED_IN_SALT',   'J]tIm4,D$1rqx9%;`~p=}K}`ZILl74v*.W6-SId.$QP v=LG>Z%SJp]AEDI[DYq(' );
define( 'NONCE_SALT',       'B|2#?Q&pDgx$EzV Ys=H:smXzJ|;RO+;Wof2 @u0N0-3Qx;%bN2:!:u><!LUMd`,' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
