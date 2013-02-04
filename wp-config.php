<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//define('DB_NAME', 'wp-db');

/** MySQL database username */
//define('DB_USER', 'alycia');

/** MySQL database password */
// define('DB_PASSWORD', 'aY5IhTB6');

/** MySQL hostname */
// define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
// define('DB_CHARSET', 'utf8');

if (isset($_SERVER['PLATFORM']) && $_SERVER['PLATFORM'] == 'PAGODABOX') {
    define('DB_NAME', $_SERVER['DB1_NAME']);
    define('DB_USER', $_SERVER['DB1_USER']);
    define('DB_PASSWORD', $_SERVER['DB1_PASS']);
    define ('DB_HOST', $_SERVER['DB1_HOST'] . ':' . $_SERVER['DB1_PORT']);
}
else {
    define('DB_NAME', 'yourlocaldb');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_HOST', 'localhost');
}

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'K)LM_DiSZzVzA;-XxW}Y+zh]#2!Qc37d3Q&Zp-855-iV((rz|3AJaLD&Nf-YpSp=');
define('SECURE_AUTH_KEY',  '`*Ib<02/*~bVpinF~A@|-7V^`;$8)kyyvQBG~1)z90qvfx{,|@MPy`A*AxrzfPjZ');
define('LOGGED_IN_KEY',    '4<6?f-|#QRuo9u*h*>:F&</:y=tI@pm}=[;mpy)`9^I6ipn6WMUUUR+|F_O**de?');
define('NONCE_KEY',        '][IOH9HQ0|!(A,q1(H-XE/{M2-IZ6uP-xS*p!OLH!tVR#aYF6rkmDsakTS*cDSw-');
define('AUTH_SALT',        'TZHg23Vex!0~njiPXca!O3OXCH]9/xIvE8Bv(yWH}l==pKC#/>UYqFhEa%Bb=2={');
define('SECURE_AUTH_SALT', '{n~Nr,_K m};4.5ZBVqd-Fh )(e`(PP50NHsp-R6<>/Q(s6BF:1+F:`@]fKKlY|W');
define('LOGGED_IN_SALT',   'k^=,PR((!g%.dQ~Q:yjC6-<db;wHX>o?N]@vh&Oi0g.{bN~*+0t]B+)m}+<#IW1(');
define('NONCE_SALT',       '7FV%Ruh[`iB$ePUeoe? :m}E|CtyoHPEKWB?sT~5VLf{68OP*xiE6u@eilO1XUc~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
