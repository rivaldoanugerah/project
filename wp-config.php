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
define( 'DB_NAME', 'sql12375285' );

/** MySQL database username */
define( 'DB_USER', 'sql12375285' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zsZG2D15pD' );

/** MySQL hostname */
define( 'DB_HOST', 'sql12.freesqldatabase.com' );

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
define( 'AUTH_KEY',         '-%*zeW>Q,9$K?aSvkeOz]7)zQ/MM)vrT#3FVrU}cqf[p%EuzKm%fQ~|[gn^bOq3,' );
define( 'SECURE_AUTH_KEY',  'Yg4rczR%rIr]!JX)7d<X9xCIS#M-pk0e=RB>_]3<g1,~Jl:b23Bnaz_G))J%_jl!' );
define( 'LOGGED_IN_KEY',    ' +aEv7VeGsN>Q0RD~EmrJtu:l[}DRP[#RFp=VP11Fd]rJB33Avh`4EFB|lUna `A' );
define( 'NONCE_KEY',        'Bf+nIqe_|M5RzV-ON&oX8]CKraA@0;_^Nec,@K:Nh;H#mAn:-aJOboM{~eu5eNrL' );
define( 'AUTH_SALT',        'tnvxgZ7S[e,:bn|Z$0X|-R_&0TsMp]qQjFfNEDgfI5<dLFU:iPBic|Ak1:<*pUav' );
define( 'SECURE_AUTH_SALT', '~*$zP&cIv}1np-9qnxu~(bHCS{.z5yAOcU$M*@;wIDVR:>ACq!^+_%z04v@zk=|,' );
define( 'LOGGED_IN_SALT',   '?-)y:F#c|H(YsC@GXM[~[$?13Jm$3~G*V1c7 9+pA=kHrDx58N]~;qS=(F. gD_h' );
define( 'NONCE_SALT',       'WE#7DA6*g.;z;Tu2)HqTkRk5eH4d<u|kHg=or.&=q3SY5K#IK2k [s/Why{2Lyvx' );

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
