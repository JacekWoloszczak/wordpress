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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         'e9bgkK[Q7#pFz]HW&{@2$~~@7N]S>:?cxe!_x9hqWwp!2QijBSi]ant#e=kD6gbV' );
define( 'SECURE_AUTH_KEY',  '650l6yEAF5NHPaHc&PSpy9{4_mK&pKBhf!p8^CzMUAs!@9`ANoRwMn8fqrWXio)]' );
define( 'LOGGED_IN_KEY',    'yLaA[4+a}&eM7h>:pRin,(6.[ZoSGDb_S`m?FA1FFO;tL2}U,@i?d4(`y2Wn*w)1' );
define( 'NONCE_KEY',        ')w$E,ha$0gLs$vyePtb?p% BrY~Rb^[%lj6<t@5MZJpC]Td>Oz[]A6r_lItQ`m c' );
define( 'AUTH_SALT',        'SnUL2FOZP*#aIj/NT=p!B}(<W5E8Mi,avJv7/n3+~NHsL}PcJxO}7&gd&E#mK#0t' );
define( 'SECURE_AUTH_SALT', ';J@$3/L,L2#[DH=<8p]ErP8C/XT wF,<&styR-:a&$^j>$LPXU=d^?lF:l`5Fg4l' );
define( 'LOGGED_IN_SALT',   'pQP,/x+1Tomu~FS(lz(r-r~g^%`_Cy6`_*E{3({S%+bH ?D5XoJRli+$b}ejAOki' );
define( 'NONCE_SALT',       '67@?v(}lw~b6qN^gG0ynh+389E#Pjw@LPo/&.iC:8xU=:6)N2kBn5GgKz7Fk%f@(' );

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
