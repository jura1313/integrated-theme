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
define( 'DB_NAME', 'integratedfoodka' );

/** Database username */
define( 'DB_USER', 'jura_wordpress' );

/** Database password */
define( 'DB_PASSWORD', '1313hut' );

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
define( 'AUTH_KEY',         '=Pqk8L#hrrwbiyL%Ll.{s~evK!%12u4Y(8E]cz}!2v_~W6gSP}xl}9w&L7g0c]SI' );
define( 'SECURE_AUTH_KEY',  'ZmO<(JA9ZM}}|KeYBOxWD[Q#wjklA4hO?JpFYc^q;pBhcPS*aS.!Q5DhWJjYH{RQ' );
define( 'LOGGED_IN_KEY',    '&;3zZz&AJ4RI`_ 1(udc3ek^;gp?GUxuTc=)zD>%54biNz{Q!(~PJIp]=qP{Gi;e' );
define( 'NONCE_KEY',        'a8cru~Vx1!mN:4e1`+IF(+,bKYB7 -xg;r<DYRJMKKJ2Dv`M3y4iVhN4zTuje]ig' );
define( 'AUTH_SALT',        'qN-mm~z`*iSNRbJ{A`<=0I!jj^m@p+E=]+wwH{uw=PS/n<F~2?|a<$o/,z)Bi-$J' );
define( 'SECURE_AUTH_SALT', 'S -/xjLAOoxj#!Le;jC=2_MN0h:N_8#C}v-:(CW1pUeCjp9wnb;+$h~IJw*ILv/,' );
define( 'LOGGED_IN_SALT',   'WLZ.;2#<kgYz7@ET^WXdu713r)iHk2.GZaH<n=JZ-^K=[*3M96i9qq~pq+yqFR,Z' );
define( 'NONCE_SALT',       'd71Ra&PWTY2[q@&2vbAl`f[co8$q)j?5kwu~bC1r#_`Eku9q{e&=~9zASyv,Dj}Z' );

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

