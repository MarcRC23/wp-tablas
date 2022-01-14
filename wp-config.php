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
define( 'DB_NAME', 'wordpress_tablas' );

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
define( 'AUTH_KEY',         '7 BD(LDLf EogiEC8{0! ptL;JN}LLd=c|F5ykq=hkP)P{g<a<R}lWz`]oTv2}~B' );
define( 'SECURE_AUTH_KEY',  'Z+F$y(JEwQrXpB!K-@}OC<@D|nL^$y}]w>jTsnlCiC#/9j:#`Ta$iYuJV<cG|5Pi' );
define( 'LOGGED_IN_KEY',    'S$|1SX^d1@0kNs{!X%V&OwEIi9-ENGJt~-wg*5&%%Vb0FuXNv$btXHjtZCD)uB(T' );
define( 'NONCE_KEY',        'T<@:sM0bIF 8VXX@|?J9ZdDIoT{:)e *[lhOLAX8$;/ze|feRKcLcC[aWuT,P4y_' );
define( 'AUTH_SALT',        '=%cItcSx%Rpq&/N1DbVC4.B0K[X$X=3Dz/ZcNuDUOW Ry,pC@opN&}%xnRb%yo%:' );
define( 'SECURE_AUTH_SALT', ';*{KNx$Cdtjc84;KKq0{iLO]$)v<iub2i(pAB9=Xw-%)ZWXG5_AIaY=%5[OO)jXe' );
define( 'LOGGED_IN_SALT',   '(Uk@=f},cYTbQBTC!5,(D G0k=+ ce9a`BIuLxuD=1bYK%!Y*cQ_<@@]bwiB|tI7' );
define( 'NONCE_SALT',       'QV%PY-r14j))2kr`wq^qer&-%vCN>[8ily$aMoH4d02/_{AZ)E7TenY>[K3/|VG,' );

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
