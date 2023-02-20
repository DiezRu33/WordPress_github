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
define( 'DB_NAME', 'WordPress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
	define('AUTH_KEY', '+r{6P)gULvyt~/,5_*sx<G]j/({@%,req8pDmNv.55OSy+@JNV6aIVQ*.%:wfD<h');
	define('SECURE_AUTH_KEY',  '{e5a/g1wf9I7|d+o/nnFlU(KYB:Vu&-}aAZX:`%X;7nPj!<Hd+42g-:]<-3Weix.');
	define('LOGGED_IN_KEY',    '-}g^++g<+n8mz$oW7SVZ+I;r15~Y(xSNsff24hs+}mg~8<qtbF)bFsoW9]eXN[7%');
	define('NONCE_KEY',        '0~GW=#%~L4&rgHGt+$Raq.r%]<Wi/%I&|sCWKUvc:z0!x$*X=GE#,y#9SR-1w=ke');
	define('AUTH_SALT',        'UJi~1JT5|+icN9Xs{$s*+F C}UdHOK>vdX=&(nGv!,7#mGbth[(s(8<Sg9cLr@|p');
	define('SECURE_AUTH_SALT', 'g+dXn9ImUMiM^;yw=B$z.WVy>%_^vza1Gb)XPG| B.+#Y%fl8FbS)~`UZ|.7%1ut');
	define('LOGGED_IN_SALT', '6OaHM1XO%w).?+WGE0 XwMbh)xp.XC(~=g1;;LoBp_H!U<PqpfJS$3pz4wp-24yV');
	define('NONCE_SALT', 'MIud.Dt)f+@8r_Aed #k+z8UHxTjYDNzK(RQ$uGLA|r-NS?w8O>:LOS;5I/Q+m%1');

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
