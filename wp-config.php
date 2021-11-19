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
define( 'DB_NAME', 'quantify_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '/Ze8k3n_v+IDIWl1b|TL$=d}YS!.il2UDiQ,?S%Mv^_`I/);e;,|4hMYUzHjLiD3' );
define( 'SECURE_AUTH_KEY',  ';-Qz)]Zp)KEq_Z_s!KD{DceMEWAAS qO?e0|gNN!fO/+;~80wUU{@P|bld,U]j5a' );
define( 'LOGGED_IN_KEY',    'tYZ]d}:G]7SF#z9s=4<J%A2Qdtwn4JwUIfO8f.!A]2Wt^F}72NvYqrqnV?CguP{s' );
define( 'NONCE_KEY',        '@0v#YV<y&{BM!Dr;VY%h=g!D(#m%rM&8jJORC755aW[MHw^wfa;6@IPWmk]FIQTH' );
define( 'AUTH_SALT',        ':[abbS)7k_uoha$/Uu4_}@Ew}o<;ZM/Yz|Wr^8*?[%t6r[a@ ^RKY,HCqh=*pkVX' );
define( 'SECURE_AUTH_SALT', 'fkRa)92i_;hE*PnH -A#%)d:eBR4zHlGzi;nPx+O.b4).}7C{Z({TjM)`]3&w/],' );
define( 'LOGGED_IN_SALT',   'HaN<5EqEp~Z4p _aNI1l[ASTm{:.a&fVA//+wzmStk<246(JY]vW5Z%uJ50co3&y' );
define( 'NONCE_SALT',       'sku_bQe5FHr^,Vo-+3beafX~2iV30F=IOu>M/]ikk]d)n0}u&zCX$bh~:6 GS~I9' );

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
