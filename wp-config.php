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
define( 'DB_NAME', 'divyansh' );

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
define( 'AUTH_KEY',         ')R=z:Dvp^+wSKZ.wV$E~dn(iPCG#arIh~qBb5P5D3oPO]34o{i 3BYSA(.j-^a0/' );
define( 'SECURE_AUTH_KEY',  '0M-AZJpYkRDB(;hOpzj^iS}tEX/z?Yaxf`o-=w>Q}FU#|#j/Wf]TUth.hU4G*^0o' );
define( 'LOGGED_IN_KEY',    '/EW|}gF~nIQUj]-flcqAD83CL_tIKB3G J7b.Nqq%;(/`P+O(,g2LouVjd%ysm[O' );
define( 'NONCE_KEY',        '<A5X7LEX|b|(@Ow&F!a0Hb^f j)hJ-]hP1[!}PTU0QaxgR?<fwXe7bIYi!W_wXs,' );
define( 'AUTH_SALT',        '%:0fM~@&P5HvcZRScyZrq<i%E!VKy,t?RJF,1;{lGnlMRPnVD#ksB$+j1P*PB)p&' );
define( 'SECURE_AUTH_SALT', 'Fs6E!3&(>L1@T!tadi;~E6EjQ-(W@;TfKm*CzZZo<9W)I!Xj_VTEJ_gp9NJ|a(_x' );
define( 'LOGGED_IN_SALT',   't*CAgDfmAS66N3rZE=^H!vK8e&*bKo&ra3#iH`d93hTmA@-o!/Qc<N<0@ +U?fE_' );
define( 'NONCE_SALT',       'mH1b<yG0W}T%T7Cwn$%b&>$1a+)JB||i:rTV(+$eJ3^Lt3;/)4@*-jfSv#/!u,&#' );

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
