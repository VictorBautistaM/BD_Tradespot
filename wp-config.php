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
define( 'AUTH_KEY',         'O_S!<Y&)04_c=Wdv1il .l.NGCjptbZUz.}ci~x8%wIO+V+hPDu<gNAZEq>1HDM1' );
define( 'SECURE_AUTH_KEY',  'I$o.6%,N3pW!1-yj=&}Pwhxr,5d2=P+X[N:Hvmt=y_-w }YUwfe}H1:P&xYzlrf|' );
define( 'LOGGED_IN_KEY',    '^OUc1Vh:_@7?NF3Mogz(cFf-Woz?J,9feDCz3YxW5&>e%OHq}<;uV~l~*,X)eA:%' );
define( 'NONCE_KEY',        '+]n2i5#^t@qmd1!D;iUT[x(]CA4@S<&JN{Rw;]+UeNB3Rbe37MF[-j|81%{ dxh<' );
define( 'AUTH_SALT',        '@xsgM4sB53y;Ja(tntY4Q,>Bn8h%Tj$ A,<d+yYaN C|ELr{^O*:I9TFZW}#{C`_' );
define( 'SECURE_AUTH_SALT', '6_>gXzX2}wV|HCNJ,=b5ReG45CHo@-w<Tn!XAXXGqS)1cfJn)/q&~ILS,vwm{3C,' );
define( 'LOGGED_IN_SALT',   '5Y{cGk)#L>`Tsa@Fd95N7Ak<|cGbv8Ow|Jbw^b.*!Ev$6>^CH4S25B.o!WR!K~<2' );
define( 'NONCE_SALT',       ']#5p:v-W7M*c91.j@pBF4QKG?2`JeimVtKU#`@rRYMcRR.V&:)2B5YPa&.Q2> J#' );

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
