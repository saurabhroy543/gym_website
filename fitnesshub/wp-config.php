<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'fitnesshub' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'eH0&,uZA<g$.+hLTRR4q=SjzSZ]#c3HrQQi4m=&0|@wS6Uojd30-XR9}TjiFfPV`' );
define( 'SECURE_AUTH_KEY',  'iKK5M_O9r8m=~SB7sNDZIS3B<lh$fIF|uXK]gihz+ul0hqKUEX#8}7t<4w~M$ :Y' );
define( 'LOGGED_IN_KEY',    '6cBJG-]psA8b< O)*=^{XlH(-z`2,q(5)c-UczYq3IjCkq(WLVas|=%)V?Q^_[/=' );
define( 'NONCE_KEY',        '7 cc{kO]6;B*R0JqO~y1|Ng`VtAQ5o#I 3KR??Mj<&q*l*M+ >M^KNm(nb}MLUc>' );
define( 'AUTH_SALT',        'v 7bHg@R;1E!$T|H|N2JOB08C@aEBa%bca+Ql@yW+3 )2nVy%!>(uWzV#@se7s03' );
define( 'SECURE_AUTH_SALT', 'o:;.(A-P`B$kh)wPwZ)`?W*4&UyGh(M~J;TX3*pJ.Xi[[qOJKU0TX~z1ji#LG=@3' );
define( 'LOGGED_IN_SALT',   'J1X?>>V:q%|c5T6pe7s~G&qvRJfRL*6J3HGskXS1S<:UhZ4U:j~y_sr>${?XH=t#' );
define( 'NONCE_SALT',       'Yn>DfKpEBaoJ,w=gtcGPS`~3Y9w,;;4lym{^2L1E!Qso+Zb7MO_wp=i?ws(Z_X~S' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fit_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
