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
define( 'DB_NAME', '2020_01_agsolar' );

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
define( 'AUTH_KEY',         '1p-Ux%R14mn~2i&Em5274ay6!rV?,W:w]W7isoD,gRKE~d~tVz$n-+{d!A&UHYT7' );
define( 'SECURE_AUTH_KEY',  '>hP`W//xMX#e]NC^/M{H7K8s2yyZOZr`nG,>4n}*t!,`@&%xR>$%VbU3T6+ !axW' );
define( 'LOGGED_IN_KEY',    'B15M6Jmz4`x/#wv)Je%5+giJaXIM2HjEjel9x&lN;8,=SJ?w6x#f*)I8X_+XES1E' );
define( 'NONCE_KEY',        ',5I|WDD)l([C@8CP@I5U# YF{cVyq&1e^M1Bs8!0MQ91Vji:+9~I|ucioUaDx.O;' );
define( 'AUTH_SALT',        'GDINkzT&eOwV,r8k$L?E]IqEMG:if3[iiV@|%!vFm8v=O]N/,^=b$_0NMg^+/]8t' );
define( 'SECURE_AUTH_SALT', '=Y5CEhG%UPairmJMTs~omVrV!%9M_&%GDOwo4a(cP5j>BXcWrmm9Sc0YK02`EH$}' );
define( 'LOGGED_IN_SALT',   '0&1g:4RDfgHex3XTw6Aj5R`]-psTng_nm<.-]NME.oz4d@kSd{VJ4_^qwhxe-Du ' );
define( 'NONCE_SALT',       '*lJx:nW4hfQfr4/V$3,>7 HTA87#ezhcv>J77V^h`i{;E>1<<e:ZW^o0=5q8@3Iv' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
