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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '1)8%LI%+DIpPdFptL4bl5u_UuDf_%5zgcX9HGwm$w(8g:5WK=eYN&}$cpzR{wUN2' );
define( 'SECURE_AUTH_KEY',   'P(cAN<d39s`xW!<TRO9+>3=TV(cajDM_J!R7fh^31]=<T>uq0R[`Cy3I=&!SWR4c' );
define( 'LOGGED_IN_KEY',     ']dc9n8uW@yrrzOxD RrU<Y=Yb9 q:$|gq2!f7Rt^dD4IJd{/&`u<`PJnYS:`:$sU' );
define( 'NONCE_KEY',         '/!hqu=)npn{b!)+ ?>&e|aKVObg1E%tgv-;20k*kQ|#07$tr}Q=cIJ:*=eN4vRsO' );
define( 'AUTH_SALT',         'vzO)puh(xh*g`nMGvxK?@;|p|;E[s-|j27|6BF`XKc?w`Y]%&kOWbXMPm!NXSwqN' );
define( 'SECURE_AUTH_SALT',  '8v3g1<X9WdGeGKA<|*i{M[rET);oBcT[4qFa&VHbds,!}l_@AGX.fSWP 3?ZL/CI' );
define( 'LOGGED_IN_SALT',    '//dSWT~;oDrljl2~KdO9jdj81pRdE5(gPVc(Z3z~al*hVEmVo6G37dp(Hx85OC*j' );
define( 'NONCE_SALT',        'PzSQUq]p&7$J]T~.<t7cw9Tz^8cg(:M`aC5<@pX{B?|<rx.T<~#%Hia9=Lx(gj~@' );
define( 'WP_CACHE_KEY_SALT', '7gC0*Eq0Z[!A0N<i9=fZWCOvA Nl4{}}TWlK{$*xSh}<l@mHqS&@i&NVwFncc s-' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
