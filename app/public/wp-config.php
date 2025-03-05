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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'cBMciCxHQ&r&&@%hJNm3~VPa%Q rN6H 5~0Q6KEoK]zAx^YV!=LX_#u7|B},w+?W' );
define( 'SECURE_AUTH_KEY',   'ys3xSL/kWvp#{;LK3qdHPAHeYQyLz9b9h-yKOdcmM0fn2R]h8nGuk%LRZWz]YYf$' );
define( 'LOGGED_IN_KEY',     'ADsA8@uvJRidr{En;Y@1Jimj3oM4%aS> nC0&>+=ZxKY-F<N[hh];LM1Z#1 wa@&' );
define( 'NONCE_KEY',         'I!)26$].tD#Vla4UXrxf$+H`90W/~9NnP.b|`s9!yx:(7<or?SkWv}nX_yL{MV. ' );
define( 'AUTH_SALT',         ')# rc#|i91yPy?a.e4!H#>8k(T~$K6a wELZGwp*+.(<t|]0Iu{K< a.A/WuJZXK' );
define( 'SECURE_AUTH_SALT',  'fwc](u>PJH-)eFRi#>L)I(!XK8jT0@Q]4&V;&0;o*=oD@%GdCtdV1BbqRR,BwauP' );
define( 'LOGGED_IN_SALT',    'Gd`}?I?%-IW=ejr g$m~naf8=~bV2celS(!+o?4.N,Kt+cm!gTt8/nCz]AF{#+Q~' );
define( 'NONCE_SALT',        'q`O&JHuigsyI7:l5bL#YUs<P8,IVxbXy^Irz:k(~,f+yoP,@Jyl-9L|rQvy)+Kj8' );
define( 'WP_CACHE_KEY_SALT', 'PEEC!`~$sx7DL]I#q_=+4A:?AaViIk>bxo62_@T&yd(8:Xu(I,0QXBO!OQcL:3Z ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
