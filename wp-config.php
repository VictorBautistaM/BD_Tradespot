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
define( 'AUTH_KEY',         'Me`a&hwErCV/i[J;rPcYgi*>FMpZi/:5W)UzdXbBxy(yRNmPeEY*uiM&mwwtqcj,' );
define( 'SECURE_AUTH_KEY',  '|+fsVgwzA$_6Z_{$DIZZLy[f/kO1PJ{VE#V2+_nI.B1R0zD%<SQ#-i1ak]wQcbsH' );
define( 'LOGGED_IN_KEY',    'Q<levzm~0n(X1+R1C^2oq,2a%SN8mJ5q7b~xS 3 b*b*1a!BCC;1QD]6=:w;#V&,' );
define( 'NONCE_KEY',        '(Lw&VsD6?usi-3Wjc|l/a:&^W)K}~q2hb1of57P/yq+Y$Wq~Y$=Z2L5JX~s|BSHi' );
define( 'AUTH_SALT',        'C[%pm]}uDQ`d9eBvp7]X5|H?]_7!kBG^][wG{)w]L8FAkb!@>r6*Q*Svz=?7&Q_X' );
define( 'SECURE_AUTH_SALT', 'VwtcAQ=n`,cTEF>`l34rY>riT*I1Ee<$0&0ha$:DC19N[jz690jn$!w)xz;)x*`Q' );
define( 'LOGGED_IN_SALT',   '3]QdR;o_6Ph`4|T6U@Na+XP,3y~&c<MLg4ltzCIvFXOcw`^~t0-CPO8zYkP@[[c7' );
define( 'NONCE_SALT',       '=ukTKdyQUh](;sS^3S*U*YX-XAs69 Z],]$B)x`P/8UvoW2GEE&P xzt~1y(<9gg' );

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
