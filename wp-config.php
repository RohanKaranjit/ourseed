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
define( 'DB_NAME', 'seeds' );

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
define( 'AUTH_KEY',         'W%O1Z9`WWlH2$-@YQxg&v*IR&,c+^B`@100I?<[k.zmG&}+q<4pQxW c0<E<s5=S' );
define( 'SECURE_AUTH_KEY',  '0x{7%54iGttEGDkpL~ ` d`y+iZKQrABeo+q&KBfgp)Sy~3)x:}SHhPXJt-_(GQb' );
define( 'LOGGED_IN_KEY',    'VwUwC=#}AmdhVh.Dplqa[G5XtRq.p~TnjMNO^[!(jfU.iLex@1Sm$&mgk!aoxkht' );
define( 'NONCE_KEY',        '`hc]CD?pK/ ~nHK>5i32Jp!&z;=691c(yiu;M;s~M_XF7#RG[3EIc`z(7[tE=;6h' );
define( 'AUTH_SALT',        'HLZvgGrG[%Y:j)zu!=[s|wI:$C$K7J;<Q>F40}%&d[QNO5b/3!$4#/xIGZMLq|#$' );
define( 'SECURE_AUTH_SALT', 'D@$,q~+*%:9n( 9c6uAylU+nS_^xb=*Xm 0KQ}gisgS(C=ou`mXw,TjaNHS$4%Wf' );
define( 'LOGGED_IN_SALT',   'ez]Hwl8hbW>zt0Ny[JM.xO!y6bp|Do`$f?!e^T~|$(7F j>@+Jds9-ei}/2zWkYU' );
define( 'NONCE_SALT',       'jNO[W1DgpPs/sAX}Sk;}yOGCz+(bZ5xHei0eu~:cQHGRmy]b*5rvpngV/WQ4IE__' );

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
