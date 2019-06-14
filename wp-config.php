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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'spmedia' );

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
define( 'AUTH_KEY',         'o:M^!-~Shg(#<,TYc?=y*B)3^!vgmM>B-rwUq##=9]iM#.#vME^p8/bjE^Tek/u;' );
define( 'SECURE_AUTH_KEY',  'P]omal|}_D!E[Pe^&l:V.XDzH-B;_uvw7Mi|o]t&J)/fC(N|_/dj[DA3M#qHPFU3' );
define( 'LOGGED_IN_KEY',    '-l)hOcLD^NT=p`M`VD`i7IhT28b&%2sbaZ/BkR9Z.zU4:72;i)wUorvO)Bu;XVzk' );
define( 'NONCE_KEY',        '_ClfKKN&z:8664VhB7o,,#^zMU!*x1&<U0.<~?)[8-Bj||}_}:KM:lY]tT!sJ}7q' );
define( 'AUTH_SALT',        'm,N@viEG~w)&CWXLb$aK4kMWX7oKp%X~Avik2ly-O{<nX{+5#|#+4mXB?hqQ+F6Q' );
define( 'SECURE_AUTH_SALT', '[)}uY{{%His|-1Xt]xW%MzB^#(XV4P@TCzl!$}^FbX3ViM6_Fu 8Q+QnTC(tE>i,' );
define( 'LOGGED_IN_SALT',   'K|dXW8MU[t9kzKr/F.@]ON[ xU^Om0cSb3V?JPGBuzGbt1k7q+xhFr%y wqW##P.' );
define( 'NONCE_SALT',       'J|@99XlJ*olJNWX1Es]oQ3o8OlD1Q~!OC;>7NcVb7@T!jjL[as>qKTPsPZ-WU;A ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nsp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
