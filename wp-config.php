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
define( 'DB_NAME', 'onlinestore' );

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
define( 'AUTH_KEY',         'uy=w)sJhL7.}@r}xW6f4.?>sU)PQickWtGSJJ-9t4r6<C61BTAA]q]ai1c(A>;}c' );
define( 'SECURE_AUTH_KEY',  'Pq.wM$Bx`^/ONL#>ls=CXw8N1Ol0jB>WEhO FN|=,mVb^gM7iq,) ~GhknH:id&#' );
define( 'LOGGED_IN_KEY',    'au,vq_=z+k_yv4!5RL/=GHxbqy+yd`e3|ErRTrPv|Ez9(,Z[^fR/3P9zNp-$(_8c' );
define( 'NONCE_KEY',        '=[c)I6h:cc3w(Y3wDE^8r,Y@`8#Hnfa1Hc^(CXQdA5t:20EgxRIygTS3Z%Ou%9s<' );
define( 'AUTH_SALT',        'jX9/|;#$iEmCY|dW<@Eud./ocKimnw?:2d6Uc*Y82 #/F_5-CR5zCir2l8pM3ur2' );
define( 'SECURE_AUTH_SALT', 'i}fAB*V0sL[bSo@*ZXx@vKl/G4zJiL}|(y9D9Sq0t[w&NGycMB*:Phwd@414j+]v' );
define( 'LOGGED_IN_SALT',   '%@!=,X#}p:HOg2riv$Gd)eCL=4~c^d-5oas{bcfg~ P[)$`PI!cHMMjX-Zt9/=lA' );
define( 'NONCE_SALT',       '.]|:?as#KV4nnR2J?fBhTuVVx;e3twtA:DlOcq<H-:]3CVo_>-ZG[R, nw5-3B:M' );

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
