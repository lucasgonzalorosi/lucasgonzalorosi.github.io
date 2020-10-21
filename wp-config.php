<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'primerproyecto' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'itE=wd[k:>j@AfdLTbt7v@L)3wa^$9fq@/J@;Tm&=z%<-xDzc-y9y_q*opH=vss[' );
define( 'SECURE_AUTH_KEY',  'SdrM~Uj/4)#Pq$+*7@P50ndDNuaTy+/6RgK^`,@xCP~! TCZlShb=UH}>Zgxl(g_' );
define( 'LOGGED_IN_KEY',    'E }~Q($V`]xE%w8Ai0q)ixz7ezSB1K;TepdKs83YrT%+bO5#<+1k/`UfWGkc[s8j' );
define( 'NONCE_KEY',        'lVSOQl!.#{FmaTGPwW{c<HIg$&NUqj8u[q@@7SUH+@Kd5IjdvG85.?{}a-hr |q_' );
define( 'AUTH_SALT',        'I=@*^Y$2[Xk B8=bjSQyp>i?qB[Vk!kegcqE^7?_o$=KD1:crzrYJ;$pz.CDH.+-' );
define( 'SECURE_AUTH_SALT', 'prf}aEzWZOgisLxZ  G6?M_m-lTV|`38,<sNOEAQZCOb|~TK/H#sh&d`0q#$u(}t' );
define( 'LOGGED_IN_SALT',   '`rb/x@=kvOZNO398S>PIeKDvy<f;3cD4Y|cv*d]/jDSLjJ[b. EVx}3??Ci0S{aH' );
define( 'NONCE_SALT',       'I;=:M?ecP{{8tc6g}AH^Ba?vl=3y-Gm5ME2cJD+o^NVoN~I(H2,)nZxIl`L]N/[T' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
