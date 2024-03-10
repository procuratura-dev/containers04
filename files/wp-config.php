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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '@M@oT%G%1L>*(?V*SAvO<B3<^,<tbb?wc{e8:sA5C:)UEI `-F8w+pd`y@d.S70:' );
define( 'SECURE_AUTH_KEY',  'Efy][c5S8K(W~`f&dlWj0rm!C@vjoGxd+`N7U^:C#4NXZzmH]zy5DX.@]((WcPZD' );
define( 'LOGGED_IN_KEY',    'op@a.V~ohkY.-Tz;4$1to?%DftZA~~m9z<N[=4FYP3jLkJ-CSy`e1yO7D2V97mo/' );
define( 'NONCE_KEY',        'r!cf76V8wc)vyQ+vOo?W2;Rixp2@2yk.Y@c]=Y,{|fc&&85`:)U+I=yv1WhJFnW4' );
define( 'AUTH_SALT',        '>aC(@l`vQy}?Ky@4f0Cr#y4]+4L&MYJx6eQIXpHZ/RDDc8t2RUkND44_%lb- X7B' );
define( 'SECURE_AUTH_SALT', '~C2tD+h)ti2#n}J90dN[5h^Wv:>7+t(A p75O)s3m?m/>|7$p1``[?q;-.TtW=K@' );
define( 'LOGGED_IN_SALT',   '+|G q$AtpwL(&ty=S(:]*0qH(6bXlRFr`.6:cEq(qg/A$Qa;a!>p7HKWgi5r77P-' );
define( 'NONCE_SALT',       'HB.[j>B;xz~CfUlL$68?IvBgj3o/LENb0f2+xh<L~`Jwf=jhfV/EbH~]`Q)MB0Kc' );

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
