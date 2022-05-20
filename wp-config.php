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
define( 'DB_NAME', 'wordpresstesting' );

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
define( 'AUTH_KEY',         '!+m-aaV}K[U<9aJf JjZHyS!oLZsQ~/Q#9j,k9,x%E_Ia uJEeXs.l[d[Bub]!q6' );
define( 'SECURE_AUTH_KEY',  ';`biWWC:#2Y%]u@*p@eEGqhIiGf>TCY!(k9ttqA`{]j-00pg1H.1{9q`+w_!Mcm<' );
define( 'LOGGED_IN_KEY',    ';@gg,ZauTJ)nuS,]0&LABRbI*dDlHpNYkR5n%?ZPl[$20JY9:KQ>PljcglyyFPY*' );
define( 'NONCE_KEY',        ')=C#uP>}3F_3y8J!0) GYj4KK),=. vrU&Cv$8:M m .PDe,A<te%<.~TWFppdBN' );
define( 'AUTH_SALT',        'w@1m`01I^3mZQVRM#LoXnXD,PUr=dlHF,Ag1J=R#{BMz3DR T,+s=c#5d!A*UPB`' );
define( 'SECURE_AUTH_SALT', 'cC7Nnk(#OAmjPbbFE7uteeUCJ&bK[X^2QkZAw@M2O)bTC1C?{tzkBsZXa6P<K?-s' );
define( 'LOGGED_IN_SALT',   '4tAp5=T b`h3nX%|6k5rk)`;-Dp0pkDiJYk0h5cVFA)8JrEfY&r#p|E8_k>K35W2' );
define( 'NONCE_SALT',       'iMuQ~EanFx4s7&UDOTgC8dL[3TT>@z<(_;jXc+}m&_@5!jLh}^yW8g*!Bmwtcqd?' );

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
