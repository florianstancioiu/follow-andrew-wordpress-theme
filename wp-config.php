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
define( 'AUTH_KEY',          'N6{0l3:P^ahPwWNUn)zap3b_9:THV5*pUuu*8@AOKY8.c<QVATKy]e9CZ?A>V7#G' );
define( 'SECURE_AUTH_KEY',   'm>Byx0T)Oplp/ M:we0,v}P~G*}/Cd#/x/dNLW+ze5Tn.>mmR}L!Nl3TAY:7>Kf.' );
define( 'LOGGED_IN_KEY',     'nzx3{$:#L>ztryaIW=,d|_m)0Nj`2|xkp/mZw}H%u,fGIgga2Ktq=Z^^VIfg}y<G' );
define( 'NONCE_KEY',         '}YFTb]0#GW5P9+b;6cU{[)*@tv6u*wiL4k=O3$Q}oInh (razTxSpRjq#rs}*1Fa' );
define( 'AUTH_SALT',         'jawB/1T=j^4{nZX{q;G.1OJ6=|~2^Bf%Hzr.I&~S)dl-.%{,]$YGBl*-smt#;/O^' );
define( 'SECURE_AUTH_SALT',  '~v~QpweVGaaa]zmQYp>ArpSwklKS_T(K#:]H`B]O<arg_$&o D2#_x*?sxjP_&];' );
define( 'LOGGED_IN_SALT',    'Jc.L=i5/gwa6#T(h8]fMu8u)jpYj5xDQUXli.JtprDj^cvh5917.]Du7tCrXHl2/' );
define( 'NONCE_SALT',        '4wz(H(<<ykHz{F=JvX?<g6r1c)C[=q5 EPQA2dK!c^b=(7GtR]7G^yepVXCs.:4X' );
define( 'WP_CACHE_KEY_SALT', '`+G9ZI7S*/]0><31tkAvb9+>Fre_4/.M,9wqX]lDC#,dfa5dic9&1Ekh=rs>Jcdh' );


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
