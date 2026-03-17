<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'clinimaster' );

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
define( 'AUTH_KEY',         'UfF+mJVE%FsA-;L/:`8r#)4uI2RznAas+xd/^eXWn79L67=X-yN64WCk5!p]$S9`' );
define( 'SECURE_AUTH_KEY',  '7elm^UZ^:6]o3MjMeP(7gzB24l<>XKII:(*DS:`Q ZzAfxi%#x}2q.8;S<j5T&uf' );
define( 'LOGGED_IN_KEY',    'A4{hu7P~ 57h/rL5nqa26mWz0e_vhZBy{9j^(G&>82hM5={Y+&T` |OM518Ej{@u' );
define( 'NONCE_KEY',        'Un7D{be+ie,!e_r9^Z:7a&:w:GXEnne;H`MAWs1G7ljmL!Acz9a!7ggs0gq<6)0D' );
define( 'AUTH_SALT',        'x~K2$)6 =~#v!gmk]?3|=OncL:v4W0F2EZ_ @_M<aXEC5Uf>+r:LetQe_hR=Q!I{' );
define( 'SECURE_AUTH_SALT', 'a4j02v fZUVcXuWvg@D?S@f|-6UBiWjjCh]?|2wcuE0[b/:D{`RvR4$hp0?c=)et' );
define( 'LOGGED_IN_SALT',   '=l-^GJdW-~G6Z)H+9peAnPnV5RmR}*y/Ei/7WOH2hx0&*}#Fh*=CwWHY1u[r#Iw0' );
define( 'NONCE_SALT',       'x={G#*x2B^!;V0n0jA>eM4)w@[5(d|)%+AEg3*u)]{fKMW7[=OiTkZ8J~|hNt}5#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'pdawp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
