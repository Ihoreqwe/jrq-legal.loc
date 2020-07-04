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
define( 'DB_NAME', 'jrq-legal' );

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
define( 'AUTH_KEY',         'SvOROh?BTJI6pT>Cm*8=9R+4Rcl.mPy8Om10y`4Of/|<M}M/%(-X$0(7l/uq[Oew' );
define( 'SECURE_AUTH_KEY',  'dq7r=|oBn1Jb.{$Qvn?IGYaGb*agWRBJpz![&5qO`/DAg^(,WX2[{pAy j:HP.S=' );
define( 'LOGGED_IN_KEY',    '4&|Q(-DcpPpv/=ZTpr8*t^/:JWy<i<*/TTF-^~F`|/gc<&z%aVs8_Q30,>g|u)tK' );
define( 'NONCE_KEY',        'r@I[R$Q,wE1>*BS630~x9R]KHXV?y^p$B^HERyvzDk-Jp7TGj ~>]>OeiD4%*O4]' );
define( 'AUTH_SALT',        'bIQ_ {pWcmpC^.0LWjf5/u ]7&Qy1$^9psQ1}A!{H3/{g;q?. EoCz$Om%)A9?J.' );
define( 'SECURE_AUTH_SALT', 'HYvNvR(_ Djz|P9:RW=beb0#?cTa`2A=Nb(QbW=z dY4iBhs</Nm*N[,YV[{i.l(' );
define( 'LOGGED_IN_SALT',   '7>r*h@ifoPw0Fx)IgZfM+{ZfP%*Sz*s11T/r0xEoeHEw:4$HhP<0e?TEYf}#Xdj[' );
define( 'NONCE_SALT',       'AmisUQl<l|TD 2oPPCqtM*)+/n>n}/wcFkc`2@1VL,LCy|1^$hqllZm&7lq?<@ao' );

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
