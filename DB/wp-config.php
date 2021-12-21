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
define( 'DB_NAME', 'ceritastudio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'aXxKqj`<$V_q8tc _{}A=Pz$M!ET<ySBO{bR:,b%R.p_n+E.Z|5m=GQP0>0k&E}M' );
define( 'SECURE_AUTH_KEY',  'Y }#{/Lbl?I );P$;=Yq>fg%,>ii@Fe#w-(5gnw!ai9`CaU)uWPk=p%$@]tJYuyQ' );
define( 'LOGGED_IN_KEY',    '@a[xwUNhm,&d%:Yo(.e*]+P765i~41mQ<!qf$5eP)lEzN|ftZAc-)GD$Q?xaa9<S' );
define( 'NONCE_KEY',        '%m>|Fk%zJg0zSo30_6c[54eHu2z<?Ax&I H.$V.CXln5MgZkIE-)!#$)-X.QP+f7' );
define( 'AUTH_SALT',        '?@>f5Lb?SfZ=[?H!KdO0#JWo]M<8t3Ik(c]9h`UisBCvkVM|Qe]G~6j__JK,0Z_0' );
define( 'SECURE_AUTH_SALT', 'g&feR8-1ip}WN?_}Q)JsO6`R0n.t]XAn{q23gQ/0nsE5Ao}(mPW9qwt?in)5:FJw' );
define( 'LOGGED_IN_SALT',   '~OVWw,@*w>t|MOLa{QqSWnYCAO?n{c=e)Eesi#k72G~8P`/@x5=)$ym.Oojijj>*' );
define( 'NONCE_SALT',       'Cf2#>!RgKRPPGvz8T4G.SllwnR5il .R>]o+$gvluwOAWbH^FhI(a(XT:@lB218e' );

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
