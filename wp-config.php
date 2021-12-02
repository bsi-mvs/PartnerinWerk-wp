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
define( 'DB_NAME', 'wp-piw' );

/** MySQL database username */
define( 'DB_USER', 'usrWp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'W0rdPress_2021!' );

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
define( 'AUTH_KEY',         'at+MM<?h)2ZDH|:.dtZ1,p2y^L*_)/cSo 0EsY}tQBm21BG>@7BO(}@d+UxnSF!~' );
define( 'SECURE_AUTH_KEY',  't~@}N]%gODsh|v8KnFWPX>|Vdf594F|pfQRw@s1Z*CW{=k}l<:=LQKN#?mY_7~PP' );
define( 'LOGGED_IN_KEY',    ': h08@yhkoW_;DmwS*KA1XD]hA*6Vg$(H[6;b1{.:rjP6 8#{$[i~giq~o#9O-$t' );
define( 'NONCE_KEY',        '(1cf)0#)2=!J)7i|pVn%{M4n~>l:[{iCvEkbdxfoEq9T>rDZi[}_7UM0m`D/Bjp$' );
define( 'AUTH_SALT',        '6o-fB?nxw]]bG/ulJ|j}V-+/uT^c_Thq)<-cr~Jk:(/]FX8?W>unXSnCRF8T|tz6' );
define( 'SECURE_AUTH_SALT', 'nY}T42Z/8Nczg#w#i#4az+N&VbL{?5Ep^3g/.T8e?}uKL7M7MO_wZ/y?ON<^C:0v' );
define( 'LOGGED_IN_SALT',   'p3gi~&XOGQcF:CIlV@d(>Qr*j3/|!`m#$ZkwI_z-vDMjsu:qr>`|}z%`hV<NC2tJ' );
define( 'NONCE_SALT',       'rh:CF,;2$F{)@_/jU%$npnyn8szvJ/mTY|.^`oy8m*:F@(wtQN=2T+L%)LfY!usP' );

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
