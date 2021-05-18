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
define( 'DB_NAME', 'epiz_28487627_iti2' );

/** MySQL database username */
define( 'DB_USER', '28487627_2' );

/** MySQL database password */
define( 'DB_PASSWORD', '0Sp79U[v8[' );

/** MySQL hostname */
define( 'DB_HOST', 'sql305.byetcluster.com' );

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
define( 'AUTH_KEY',         'or6zqryhwqcthcdzsgdxb6lbcz4aczxd3ggqspufbf9mpqouwhniv5n0jpbybjls' );
define( 'SECURE_AUTH_KEY',  'hbrwbhd3tymox3w2n8699tvmm1fkshslka81bvfxlkmbjdvrufkqz894arb4zod2' );
define( 'LOGGED_IN_KEY',    'qn0n3q6qs5sadjkqq7r2jddnwhk58qdzbengggkset0hehp0t3olyadd0z9zvcm6' );
define( 'NONCE_KEY',        'vbm3opam7kk4095qkpsp7mqqyuclbpng70xwa6jdrkpruzifm1djdy0jhgq5irrk' );
define( 'AUTH_SALT',        'tcfiecs5vj2mfnuaybagw2h0raqcchmm5iykni7qvcg0ucsjqxehbxba5a49xnyt' );
define( 'SECURE_AUTH_SALT', 'pndboe0wq0lpkur5khxeallbatwtoq7xh2lc0ubz03ksgnyhd7golflo3kczu4dq' );
define( 'LOGGED_IN_SALT',   'mx4i8twaa73snf72tcf8lwuh3rbyitietikephocpet0oo7suowwvbg1o5rmlzj5' );
define( 'NONCE_SALT',       'han4nsffr0zbjj8krn6dxvwaxqnmhoyaazcldt0k8y2kxty9halhdx2fzigncfam' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpga_';

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
define('ALLOW_UNFILTERED_UPLOADS', true);



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';