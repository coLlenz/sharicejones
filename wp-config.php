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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sharicejones' );

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
define( 'AUTH_KEY',         'JeGa:2zFNmL57:K99}ACrmDLfWdGPl#q3)/8/]S~&PD0G}lI{R2lkNX6<GE@7]iI' );
define( 'SECURE_AUTH_KEY',  'jYH0Xl8>!I?g<kcc:t8/^-_nGVs36It1uB)61Q=Bq:mRnm? *0O(B{F+R,Y/c 6`' );
define( 'LOGGED_IN_KEY',    'VGg1Y>V%<V<e.w&L{,`-1*4_(?1XqbPxx*0w5RCxj~NvyI`>X .6dR074TInQ-$n' );
define( 'NONCE_KEY',        '9D0?^o29GKocH09]}80MyX>7%I)L^lx9eq2X;<E#ZAN<t/0^g`za>zON3G>n[r6P' );
define( 'AUTH_SALT',        '#}zG!9YAz*IQkDUXvU7Kf;&kT2k8$HB13m8j!(1AZV%(UT&A+V,ADS(I=.Y94jR7' );
define( 'SECURE_AUTH_SALT', '@BhR 8sH)HFhP@U+nt>2`kJzZQwJ%j-@4CYx )ue=lxT^d 89`.F01GO*?lbqHLA' );
define( 'LOGGED_IN_SALT',   'QLWSh~OJO6f6p>:FjG5B(IVV68CvY0JnB$_NeJKHy`*;V-+YUqua4(i0=V7u]_>P' );
define( 'NONCE_SALT',       'DJ12vE@VGh:;2ABxpkStn;I@-<FZRKJ^U[!>0~oMmuhCYL=ITdp/nhwCUfY^GoY;' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
