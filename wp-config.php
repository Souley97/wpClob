<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '{IOb-t7I- 4d&vQNHe+/07CEab3SP}Td[9DXqlGNwavWhARu{_3N<o!GU;ts~G<h' );
define( 'SECURE_AUTH_KEY',  ']TbhXO&A>G7c~As3q|G^=C1$NnD[^xTH}V52OT.maP9i_J0tc}%tEUA@`zEsztog' );
define( 'LOGGED_IN_KEY',    '}>V.K>Oe].)&ukktA4A.ll r;;+}T=G)Z,RMK[{RuV8cE0Oo3iT`j7#kY7-h~&eN' );
define( 'NONCE_KEY',        'E4c;J@t+guS8WD[Fwu9|q=oA^R.pq<b|8)MCLRXibd0:s7KEZ4]8Ah%3U`_H#y#}' );
define( 'AUTH_SALT',        'm[:BP7tV[dAXvG mjLsOkY&i^!8j1i.<?%5J;E=JRMh2g?z>NDr!|cd<QcDBcnZ)' );
define( 'SECURE_AUTH_SALT', '+@!Ua$wz9mN{bm0]C.:}AD+7L7=5#!`>w6^6NSAg%_LnnaTc-^2?m7=9 1XsLk0:' );
define( 'LOGGED_IN_SALT',   '`MaTa;BTiJt/=H!2U[dhi#fp^h^&QcGFz2 :`K9Ylw-06a@,=DrSgqm]8{@|&_Qy' );
define( 'NONCE_SALT',       'OQ8/?u@Jkeg~;/kVl<6[4-tiz4X E|FdPLy&N7,)]c@~5B1ZkV|i$n6c{[:+%dp:' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

