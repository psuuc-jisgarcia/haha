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
define( 'AUTH_KEY',         'xk;$fVR{X]M/W%@Of<3:MehX.@BtnoZhJI-Uj]T8QQ=JyIT<K3bsr)gkg@F;~a(L' );
define( 'SECURE_AUTH_KEY',  'oyBN=Ts6%spCJ[J]cjDRZ8cSk7&kex_$#XLd19`f5vyP,eZ!D,&eLF0;,Cju5<5F' );
define( 'LOGGED_IN_KEY',    'IMM^*kY^SA-D6K]e.mLEH.;ibSzxw@Cc0tq:eFB+Jg49~xJk`$frG$oLO5Y.1Hm/' );
define( 'NONCE_KEY',        '~~&4TD;C(:kHDbMfC!iY?^IjYt>J5]67;B;`PE<THnGPi(u[T)e, `, 7B_/#:V|' );
define( 'AUTH_SALT',        'enng&Me,|0qjl>skj.?3_Z$i*$NBWfKIX8GU-H|x<@/>V}]Wq~}8D@Z<BM{E=h*Z' );
define( 'SECURE_AUTH_SALT', 'HF(!aG;SzR(thE,JWi*XV#n3b-?uj0Uq/hk:F=nc()|;HuF:+}~oZ+9Ax?H]@4Zq' );
define( 'LOGGED_IN_SALT',   '9c Nn;EYJYh_nHq>&`Zi[z]+9UHA6XV.UAhX%<s9rR{&VPj5kXY9+~G/Mf!(u)EO' );
define( 'NONCE_SALT',       'E?;wy5#tZ8QD6Sq;n/3q-)W/H)%,VL(^VY%m61)TGN5N6;mb$W7_S%B8?2e[atoa' );

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
