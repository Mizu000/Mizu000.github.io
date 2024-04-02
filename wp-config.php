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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'client_1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'az*6Y4I*LUo|.U&+:>fzk5YK,V>xAh/`tn;Bfa|i70xGuk3AG<!81Dz!#+  >1Z$' );
define( 'SECURE_AUTH_KEY',  'Ks!B,@VcKqWf/vn;Bi.in]>jRxo)t$]-JcZp^ff0,j13B:5_/bPd$<5Bct$#{}6e' );
define( 'LOGGED_IN_KEY',    'Y~CfC[G<SuzvuoIZ{..JNKcs-eB)>?9O(_|4o^b1TZ=4^`=hM%+.zY6*co/FRH#>' );
define( 'NONCE_KEY',        ']v9?*kYuhB@@o36&*vO|llTYcx.g*898>44}9:}Mo&<(:L6#}<]3,0?*bwB@T3UX' );
define( 'AUTH_SALT',        'M(+L0D$eGT2mul)kE;j),T~j!T_!+J;VXiSA;8SIX_@YYv$@i6:YZ_JU]ZU~X#ww' );
define( 'SECURE_AUTH_SALT', 'iLFL>Q|jvND~qlp}pu[*:,<V !cB!hHHPBDp[y60BW|=F|dvf7>LpbV4Z<u^I[)c' );
define( 'LOGGED_IN_SALT',   '_lxsrO_~10KsmaEG6vZ($m`^&<-IwdSI6};X* ,/,l^s&S5Rxo,AC=vWF6TElH5n' );
define( 'NONCE_SALT',       'k$los74U7*.,9{mK2G. ;dIbntKZ<f5o*mc&aPAHt-;mMy[?2kbUR=MZC)sFv|.$' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
