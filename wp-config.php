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
define( 'DB_NAME', 'wp_clean' );

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
define( 'AUTH_KEY',         'o;Zr3/?lUio,IgRYPYs-Y1-i<9X:Pl+Mxf-cpT^?E;Pd?=HauPXvO0K9.p 4y_5Y' );
define( 'SECURE_AUTH_KEY',  'oXUb] NT%,k.{%Z6r5:s2X2[spUSr)<$gqRqQ${^uMfkyx-BXQHf| A=n_w@ed}C' );
define( 'LOGGED_IN_KEY',    'x3@]SJ~5H7N t$>ZX%-5#gRsUJ4G)Q9(n]G;RN-LXpGDLC6 Y;yge<}=@TvB z>Y' );
define( 'NONCE_KEY',        'T`ulp<UycJhC?5{@]wf=j8B7b(]YbcAtDNFy.+$^^Z!*%HOhWCq>ao<*X{ARRlo%' );
define( 'AUTH_SALT',        'fddnx x`wJmZs~C prx2$l8SOOTtBq)wRou(=u$[nJ[tSQ[tL,o^0r=qN_}pZCz#' );
define( 'SECURE_AUTH_SALT', 'PI!Tby),bX{cDrDtnqofa+NxcOa]d~tzBYr-;er%;U8=S$xk;dYlS}<K+9rNKd.r' );
define( 'LOGGED_IN_SALT',   'aOxPp$g3<:xcm-&vrJ8#A8hHqyj*z1w2+DlveqG7IqMz)C[.,:v6nva/TEjl^/I@' );
define( 'NONCE_SALT',       '9NeW(S8wE hE$0]!Wg:2DFh{Ps.X(a>ba7{2i]r^sH&:!$(2zrg[:(kNO:-D<7!@' );

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
