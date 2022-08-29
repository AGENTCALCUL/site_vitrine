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
define( 'DB_NAME', 'site vitrine' );

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
define( 'AUTH_KEY',         '?l].t[]+RC#2^8Y`RZ+iw2f-(P>W$_+[HlzhcPo2Q(C`bm,|]?)p|>xw*Zk6sR41' );
define( 'SECURE_AUTH_KEY',  '$JxK1,AB3~=_hO hiajOQ#RP:|74g!foH_KjI@K |[E$,nC::Y)O#^UgT4[`I?5G' );
define( 'LOGGED_IN_KEY',    'jP??W`D-h2O%l#MQf 3OgQuF:m ;L=TW5E3OL;P)S^_(EQ6x8UL#zWVa+mV.(NkY' );
define( 'NONCE_KEY',        'BI5aJPWS6qS!i3P[;.x[+3kgc~9KU+$DujfdG[+bT#sxru/f-V7+CnDzOOy8{~^k' );
define( 'AUTH_SALT',        '{Oqz(cmZnb(s#NmQAvk79>kW7@E}n:}Ncq$U*@@P+(cOK 4{QoF{2<xb~$KbX?z!' );
define( 'SECURE_AUTH_SALT', '?A1.<$hGg%6k:W?JOXGIt-S%zKgl0G[h?e0ol4Oi0hzgULNfN!>se~}z~@8m1+-5' );
define( 'LOGGED_IN_SALT',   '_o/(*!V|U+I>7[}xv6iO>*6chjqTJE8Kb]=4}1m<[9oOpq4@DmA?!1LfKcGt3#~G' );
define( 'NONCE_SALT',       '492Y~066qX577D J/*WnSZ?xE<n6=J>?N[j`;6w=<Qn{i,)0Eur!o#?qOZ6y}vvq' );

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
