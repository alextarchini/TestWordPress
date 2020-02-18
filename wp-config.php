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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         '{q.4cSnEzgF?2ThSX^1R}4nzxNC~6wK8`mR6*h%;J~w6R(&M=8Q9!;@FWRUKt&P/' );
define( 'SECURE_AUTH_KEY',  'mVoXV.15]f6.Lk-U@aJZ=ou @p<%<{Xvo_;m!|K)D!q P@5C>!X2-SL#H~+~-a{,' );
define( 'LOGGED_IN_KEY',    '{Nu6SH81K>,L`&-!mUY4u%QJ(YIole:E%-{v;6NzyZ}-cPt>>~fvA1I/R$wY;.D1' );
define( 'NONCE_KEY',        ':$q|`}?|<jG{Zt`z{#6cj*C[,ufho.UtfmtmJFB5rDWF$%_g|hFr/^u)%]r^CL15' );
define( 'AUTH_SALT',        'x6@jrR8pF=8:raVzO1A ;cb>L.[dUC#QOszn7&^_$ `Ed #hPcd54~fC4nPPYPV6' );
define( 'SECURE_AUTH_SALT', 'sY$5M0D<is/O&1O)R8UNHvfmI!8~RY6t!GkgBF&6r8=C*g&x]iP )R.&NK7T;x*{' );
define( 'LOGGED_IN_SALT',   'yNy3LvbHcWAUT>SWYMvszV!%joW)^?p<Y1N<ve3HLs*AyH?I7~)`VoV.6 F1F;[h' );
define( 'NONCE_SALT',       'jq1!U)2r21L>rSTh#VtRq,u<i:jn+sE>,FUUL2Bta>@LP~}Gnx4#m=&Ak$j}y1Tr' );

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
