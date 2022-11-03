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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web_ban_hang' );

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
define( 'AUTH_KEY',         'Uk5q:]y=S(7@4Ws8#NV|$4(WkvpQA7fNj@Xb7}u$eD91cvzYVN._pyrq{# 7N aW' );
define( 'SECURE_AUTH_KEY',  'V]rA:2G|y~4k02GOD0zFPwjf/r4cY)|iQW)Q$KwvWa`3Vr}F}bJt@yA&%zbrZcMc' );
define( 'LOGGED_IN_KEY',    'q6tBqh&z#F5FZh3DV@.HokMy2!MWAx@$O>fee`;uuIzU<2bed9b#AD5@ZdEn[NY}' );
define( 'NONCE_KEY',        'pA/ss&1H!Z]{He>-KrgmSe7{<EZ<sB/D[+13o9@.C<e7w)/c#0/X3v6JiX_E}K}P' );
define( 'AUTH_SALT',        '4+|k4+GF)QaQFGzE)5Ku+4`> QgCb=MU:hF ]dkIA1Li=MKE$%_M.H`fmBnMU/!N' );
define( 'SECURE_AUTH_SALT', '&wCVG:<w]O6=TwkN!Ob*Ei0+bgj$#ZWNWut~pK8Kuk8Ox~?5OA]tj.`iWJ<oecW1' );
define( 'LOGGED_IN_SALT',   'wgO*Rkvbbrn L!>-8pT5S4}<V%z@!0k``s.uW##!35:5~-V%$_n%6n4kmj6KZ>b1' );
define( 'NONCE_SALT',       'p5y=,Sd^X DMJb/>]slrIex$u_lOWk Xv%hPbP)(QWq|4e8EI2-60`_ 1D:C!]<!' );

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
