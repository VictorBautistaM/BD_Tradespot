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
define( 'DB_NAME', 'bdtradespot_bd' );

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
define( 'AUTH_KEY',         'zQHK[-bE{|>$a)*FWwHc_2geDE_khy9v+HPKvDm$f3)OZZ=%id8>D&{{`5rivF,I' );
define( 'SECURE_AUTH_KEY',  '(T*|&T8V@}<if{tV!/39U&v/EgChT=A0G(c s/]s&^F]060 v0q`VRU9#~&*=]Kv' );
define( 'LOGGED_IN_KEY',    'aY(c3qq^^D6/O<CRU}:V/h#7}&)^[UTbc;U4vO&B6`D<:LN)6I}LmTESY2Kg!`J`' );
define( 'NONCE_KEY',        'n))jAS4Bgs ;w,>JaJ<l*L}RuZs2u*Trm=++Rg?h #d0e63QO_[Lf1=I697u1^)L' );
define( 'AUTH_SALT',        '@adh&p{|o++?R#5#gld uqzwmf6M2h1Irk!U|9ar!nx[kz*QZ9pmOAqu_fZ6A]7S' );
define( 'SECURE_AUTH_SALT', '][/_1kHG+[cN(Ho1UYL[dJPAt#s4VelcH6I4N!)V+A^e2%mT]H,]/mCvnh]M9=zl' );
define( 'LOGGED_IN_SALT',   '.Am4%t*5RCC`4$[LsWV>Jr&|4kF[h;Br)QfsW9e(>?zp&X~=AmKF8Vq7X_UcXr[2' );
define( 'NONCE_SALT',       'l|U+5x?s(EZ=lD^(c,=3pW%1Q~OBp?.:Bf3v#>{P#:zh+iJfskhz@Kjy^AVLCGr?' );

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
