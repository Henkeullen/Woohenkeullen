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
define( 'DB_NAME', 'HENRIK' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'q>^DAYg_!WX j=JXkJvcJ{jaXrIiFhfq@M{cf%IeElx6HrjI3i]^$#p|I~muqKN8' );
define( 'SECURE_AUTH_KEY',  'F.RMxoH$xSd8?+8Z}fE)GVE>[*D3Vg)~)|U[}MV17;(h5G.4cb%h*I&__6X6SgZ#' );
define( 'LOGGED_IN_KEY',    'yi.I}j~njm,K0(u%{eX!Dc?`,D1dbPPNN_Iwgw mg}hpSv%X6RFyR=JJiOM#R[^V' );
define( 'NONCE_KEY',        'c9a~E/{/RhP=[PI<x3F-1qrP>`I[?galzVSR*rz;[;m)kty41a5zU1/fI1i-4g;a' );
define( 'AUTH_SALT',        'GFxl}=W2_*e}fFr`XhdowD=3q^G;NH~c-(o3L=#tiq JX~e/C?HHj6I.sk xpSwI' );
define( 'SECURE_AUTH_SALT', '<887|Mx6Uy/_I{}DPu~Q1j*.gD(yPi(RRSJ~sLn.TYsL)T=TUMz;3;HwHWW&,~ba' );
define( 'LOGGED_IN_SALT',   'Xu^;{&a=*5q>5R1I5ln>pn0=GAmm:yi/ ,~ hCKKEgnO1lV~mF$fIrZ,L9ydhPW{' );
define( 'NONCE_SALT',       'YY:6-oU/KW7bxR?/,Zgiief@en>0uQ^S:kX!=?LfK-R>3%gAIRG|ruzjpU0t4.5:' );

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
