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
define( 'DB_NAME', 'E-Commerce' );

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
define( 'AUTH_KEY',         'y8g>$w]# S|g29U.fE<JO5p{.ni?,~|9E}.F3N!,qg4b&E*]`F1HiNv3Q8ZynvXt' );
define( 'SECURE_AUTH_KEY',  '6?DPd@rF^Yga6vZgfu|iiJ.G??tol2VOlK!szup%YRk*Lex]AdP.Ro6u3:{>n(MO' );
define( 'LOGGED_IN_KEY',    ' o;H>N781k*[{{d8 2fm8xCH8`CU:xCbr6dS_;Kwkj$H|E>O:9`&d$E9#IqOMl_I' );
define( 'NONCE_KEY',        '@,zNMd]yUSX_H9u2kMnJ}j%38B[FJ!B7hr*d`a<qIY$iQp=U^NcHgcqMmn~ee:gZ' );
define( 'AUTH_SALT',        'd[T6^;L1%|Vxkcb=,vP:r)]imBe#.5m6p:i8bl7x~H*=_*UywJjr@!4&1Xi1sf5+' );
define( 'SECURE_AUTH_SALT', '$5;lrxrg.`l|pj&![W-a3y!FGj6zOJ`x$>:)>Lag#XR-JA2<uqH:kJuB ,8)CVOx' );
define( 'LOGGED_IN_SALT',   '*%QB9F6x1u8)Wp?AKR=4|/L|T(>eD8c}7EYZA-F<6JC=Li{%j$Hj^l[|-T0 tFAN' );
define( 'NONCE_SALT',       'g_Rys0P7>}x#97AM3u8+PSvyV|lH(XCdOPSx|vkJB6UynD6q*Tas 7hrg1d3<i/3' );

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
