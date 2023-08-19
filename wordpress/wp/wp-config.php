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
define( 'AUTH_KEY',         '>@PrirW}~f.-`4JN3SmT&.hz0qxny[&gX) FQ~$=u~YlBV~@4H-jM!Uol&ybM3z?' );
define( 'SECURE_AUTH_KEY',  'S/^vUg-aq5D>5|]G&)TD^Eq.^/n%RKfz mvk</f/rX_hh,7%[IIJ]d$d[P;2@Wr!' );
define( 'LOGGED_IN_KEY',    ',Fj?jr)LG~vQL<Cr$-`a2X2:uL<kV;1V_NkJSHgdL{lM>|W?{ZeDG~cX#KZzUw58' );
define( 'NONCE_KEY',        'x$HgNMwHTzp.H~.MZgyMQjybheXpWB__A|aB[2)dJ7ep]I]~GmxUbph<a<:5Z^h#' );
define( 'AUTH_SALT',        ',3ah,w*Zy:1(OI}-PphnhL6cRsj7$H)yCJ,NDNU~+[+1dK+UKJ1<yl.^BtY~b9^:' );
define( 'SECURE_AUTH_SALT', ' =WJ$WanZ/sG./r1*?~k~XRT~SSSI0wLw]~`sRfN5R Rt %#9!q.4U)-u}`Ij%Lf' );
define( 'LOGGED_IN_SALT',   'X>03Mp7wR3^q7h7i{7<D@My=$DC<4{Yvm/YGOr+6~l:-wZ-afM9=Ega*GHXmZo3f' );
define( 'NONCE_SALT',       'eyZ/o:| %wu !fVYL!>GP:W2Ug{r1 0ZjR)E(q(T7h#0i&+Cy@14>|DGLzr~9}CH' );

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
