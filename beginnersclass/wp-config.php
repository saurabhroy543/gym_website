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
define( 'DB_NAME', 'begineersclass' );

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
define( 'AUTH_KEY',         'uL!,=Go#@?x(N93SINMQ^3Jy<qH?7E*ZFS}S&#>U|f.ZX!kKkqz]m.mrtpF-Vij{' );
define( 'SECURE_AUTH_KEY',  'kA1)&!X)1%2$ITT-C#v:_-3s>xNxPzuv.w2]Z4.Yarx%{8>s+Om[usECa$JJ[/Z:' );
define( 'LOGGED_IN_KEY',    '13cky=gyCjo,NAJq6)6lE9E(/,]}0HIr0rZ`D.Z{g)oi}*0?4pMCU7vU|[]QjhF4' );
define( 'NONCE_KEY',        'zdMAE:p56Ga;biSs&OY(kI2Me`d([JV|kY&>=$EbjAF*5C!PSgd9#C^$Dyk!lj 8' );
define( 'AUTH_SALT',        'I,Crn#kF#utt@YGAH{sEpXt<EIS!V]6o;h2rNY:2;q_Fv63`Esw}y!/uFLSzZGB9' );
define( 'SECURE_AUTH_SALT', '!W+LTSMiEGNs 7}dT!#Z(XXcS:.W<e>ROA&hTlEW1<*`|6h#A=0$p/(X.^so_qGy' );
define( 'LOGGED_IN_SALT',   '8RXi<6q>UY/CVa-G72j2N-i_Ku3/.+`UV+wik-%79>_jr~g9EZ;Q3U@Zy}C=:Tek' );
define( 'NONCE_SALT',       'z,p!_[.b~qpL!0IU7^{G>|1wq<3o/${1zXJR8&:OcQP+{YkXowlnq9UO)>62pfyL' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bc_';

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
