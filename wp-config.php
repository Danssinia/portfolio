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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '|LKKC>s${yhA|^@OqlydX-:*KqzzB]jwEp%j(Y@[p/s0Jc_RJNbJ<vX;R~-ve&Y$' );
define( 'SECURE_AUTH_KEY',  'PV5B4O`hZ;Q~,U{|!tg3>]SV_8/J{3Ki3,SX0?s+sJ!u,VvmCV~EIC(g-,>s$}-{' );
define( 'LOGGED_IN_KEY',    '~x}Nb)cOH=J3+d}?* B;i]vKo,mOXMSU:DV#JatWZf>l_pW2et_K79wmL~*!ns|U' );
define( 'NONCE_KEY',        '1[EN=^&Ls..V6W9*~dR.ZcL%[kX9E?<e]TbW[u8t6Wg,=&XC*0+r{*Z>c3@T{5%m' );
define( 'AUTH_SALT',        'imj>/ip>ilFTKnY)i{k1+gViZ(MbNGl}g*E9kssXX7+9pHjh4`$L}p~QT# Vq^qV' );
define( 'SECURE_AUTH_SALT', 'JI42,ePG~7CiK|#/FQUf.8b6Hd?+q>$,+Nk&!Z*1|nWq++FWU)N.G5R1o3/^RJ=c' );
define( 'LOGGED_IN_SALT',   '5iZ3$`Y5f3F?44$+A_VZ2&J)4vjc{[%K/u|GMgaL|Hz;WIPfaD;2b0h,FC$3^AWK' );
define( 'NONCE_SALT',       'vl^dG;P@aKYI<i*vY`^[^)]ZnZ,&`L8BMmw}cLc`{_>%kf#MZ5p_SWbVDH0ZvYHn' );

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
