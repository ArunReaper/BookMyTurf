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
define( 'DB_NAME', 'booktheturf' );

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
define( 'AUTH_KEY',         'KUKKZx/DIGW,IrFOg*%n.7siq<x-UX;j0a6jF#R:1>x<_/= P&ep1o2!m$xwTu!;' );
define( 'SECURE_AUTH_KEY',  'v|<l%Bq#wD)u.UgD[)PUsLSqt.m_@FpkI$;@=_d!Csu.p.<n+`AP0W=OCTtpfj:_' );
define( 'LOGGED_IN_KEY',    '`%frW.=Foc@N>cJed~diytMJq7iG2lY[y<W5Bho2SmOPjF_Qu[%ZA*hL5J~;:As7' );
define( 'NONCE_KEY',        '<~g_dp&Jy,tK5fG0L=!IIRw1g~r5@cu7!}`^:Io|gniP[.VsvNe1<*r3=4r+g}a4' );
define( 'AUTH_SALT',        'i;Ywe}-I}` -I89hXiWE*:v1AkUlum#KU7@<F+dr?/g[HP:5=D0p.^$/3AN<]ei<' );
define( 'SECURE_AUTH_SALT', '`EH-v=Fw{1k8xY6d7Tbe:]`#9E%:`o>VUdP)sa]_E2hLSQTG NA7d9Ox yB^,W/B' );
define( 'LOGGED_IN_SALT',   '5QEoMQOf=3&KOO0LtSOo(9Re f!&g^nD44p3DWurpJVim~@]{,*=dh9!keT^9C7/' );
define( 'NONCE_SALT',       '#d1#+(YKP:nc-ON4_5QT<J=2EqrS].iU# 5qw;^msK_LpeNB<dt*>gPs$ok^v><=' );

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
