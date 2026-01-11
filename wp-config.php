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
define( 'AUTH_KEY',          '(@g^gOiVwYXQ0<#&h,+$ov5d^q_EZ&7uVi+`eqnoy-eUhB!MY8[IllgJWnBdk/1J' );
define( 'SECURE_AUTH_KEY',   'kDr|H65<!,P@}K,u,K[$0(;fY{`^C~p{CIuBI|rv5Oq)iLW$>ihL4|{*-,CEQOvp' );
define( 'LOGGED_IN_KEY',     'BBlOr<5m~n=vpJ2fwkhI4Rj2ITN @1OfTDwE|uj?XJpszQR=]p1D*KTwGvhDuY)$' );
define( 'NONCE_KEY',         '`VUd@n.Bq^O$aH`h)FzA!ThQZ[z/Dje@%01YYM<{q,J_%]%wDUsTK)W=wDCJF7RJ' );
define( 'AUTH_SALT',         'v%Y6@j4OEhFDD)W5Fncj-@_XY<n)dl.0=I7A1RU`zvP>o[w4w8D(b$$)$*Nq]a)(' );
define( 'SECURE_AUTH_SALT',  'IGvzo$Oc@:u-_oCG uL#=eD9Z@SC<Fz&TVrX<V27[U+;X/T2L>tv55s@IMR*YxGc' );
define( 'LOGGED_IN_SALT',    'lfIlf5C}J2x=bX|B/K-b]sS ^nR$661~^-yz`W6$<JHV]p>u/Ho0&3j=CXiA0-Y3' );
define( 'NONCE_SALT',        '8$-7e]8?6x8PA|5F{70;at0<>?QQ|OYtUy:G1hTA&>}Mc+(nOr__ynFdy$7m;vY9' );
define( 'WP_CACHE_KEY_SALT', 'P]7n2zs v-jt*D(Y)B{S:H_VhlgdPP;cYtjYAr|KkhoUPz5K}>HJtqI(1#>O24D|' );


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
