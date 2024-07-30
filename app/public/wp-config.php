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
define( 'AUTH_KEY',          '5E$sowx=G.]H#EPzv}r]o_wAvf:*LqiVHp]V$_45 C+{=HjW,w0ruZm5D_Z4+P]|' );
define( 'SECURE_AUTH_KEY',   '9S>U?XqEn/z:Q;_bAJv#,=Zi.+Y9Da}aWi[/f]svh)bcP,)b[XQ`s6Z`j5IC&|T)' );
define( 'LOGGED_IN_KEY',     '^iU;/7_qL@{6atQc2HabGl&4dRq1R6tdaQT;)2svM;*9(=@!QoVa[<gwFR%YoHoU' );
define( 'NONCE_KEY',         'o#J@u-UPb1hq[.6{}R:A<TXy{eZM-]&7Og#USt0ej&8EOH-8^|4Q+OwlY?|=#2Wh' );
define( 'AUTH_SALT',         '#{`<H[wM>N}#c[|B1PtPp$2y<_WG$/rYAciLNU$5:w4W/=|TYDc(zX6bjx=ayLvy' );
define( 'SECURE_AUTH_SALT',  '<xnnu0 m: b!G~n&M|SyR0rV59||WZ54#K1Fn5/:DT7JJcP]5}?(cYM wT9 |$MX' );
define( 'LOGGED_IN_SALT',    'HqjyZnsB+Hp;M@wA?fspT$cm@5{:xLR{n:r?c57V$;&BI$hR!zz!C/u<H=U[t,`z' );
define( 'NONCE_SALT',        'z<iM5!LbaUy#MP]n%SLq^JawTS`_)^pvpr+e1(keD70!YC;GM#QY5!IIcxnZCYaQ' );
define( 'WP_CACHE_KEY_SALT', '><9Aj#!Q`Ft-ux6g}NZ/gsV#4//,@Yl9q7Z%!LT]Qc])eC^PGP|}MO5{=Jisp-t%' );


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
