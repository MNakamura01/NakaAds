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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '2PjMaU<taSYaDKp_E@x]T0h(j<}l+9Q>o8Ud1}(^Hr?+DA%Z1nkE/*nv&r!n^xPd' );
define( 'SECURE_AUTH_KEY',  'FBJ#2L+h8.z!aRbWjtQ(XhU%^C*FTgOs s*(cDRY9_.nm.{vbf=3ws%qjTKzD{g<' );
define( 'LOGGED_IN_KEY',    '=]>L49Tt (5f,uWmvVd)W=I8a`U|Sr<6LgL }lPv8DA)crZO/`D[)3/PmRpXqJ]M' );
define( 'NONCE_KEY',        't}GPvm7|,p:[5xkfBd&EEX<eK-yeke8+4p_}]vb+Q MZg1lnZ4lHSqWVjj]`O??&' );
define( 'AUTH_SALT',        ':d$[.D]m`K]v3Q;u=G2!Q{bFC|I8~D;j#nX(mTA@0Ir5Z(pmrWlZ,X:cgtQYq+tx' );
define( 'SECURE_AUTH_SALT', ']^(>O^NdV$>J<#Lo0XjR#211V7qT&Uu[fc`~O8Du]av~Ou-Yi+W#z9#7@V^0cVpE' );
define( 'LOGGED_IN_SALT',   'gPdF.N)iJ:)DHAJ:hrQDs?<PF|ze {v4O964(7fx,XMu4Uj:dSM7x;FTCe]uFhIL' );
define( 'NONCE_SALT',       'Y|6|kPsQ5~:K-v|r*2< C&)1)P*5s6:]WC!OkJ7Ox6?$squA<D!auFQv?HB!4s 6' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
