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
define( 'DB_NAME', 'web1' );

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
define( 'AUTH_KEY',         'S^Rp~b!#b$85$G+Cgi}`0WMqsLcr!9F9M5#>hr0bwU+o#7v8+#I`jP astP]S%Vb' );
define( 'SECURE_AUTH_KEY',  '{V#3u1H/a/=DRFHuocE.(PLpXS$rzoF/HJw|D-&8g0~H@Qpq<hM-0uEqY4G3@?u@' );
define( 'LOGGED_IN_KEY',    '^pj142MOo},5Ek]JI>uCkhf$?zNfk~to$^0d4O_n^n#02J&tuhQ9+6SS-QEoH~49' );
define( 'NONCE_KEY',        '-&XP1)vnAgIgVD: rcNV/cbf]oy-,9(}rS]9iVVp#tDq[L:DJSu&5g[<{CukJ/ue' );
define( 'AUTH_SALT',        '!Y+nOL4#{wslLf_.2w~l.+fgA%DhlgelQCoFy61XZcm3k9RBGLqv/s#Y;IY</K|g' );
define( 'SECURE_AUTH_SALT', '^Q;{;F}|;2:]OC85P ;6dL6lMe$w`pC6H)~&NY_%[M_*uT!6wi|;9XsQht9Md1@K' );
define( 'LOGGED_IN_SALT',   'VAZB[+XU{u{(e-{0R4n@YSt$c?[7n0] KJ;ydH*7 +l;eWr!8P;3yiPghs{SEBhb' );
define( 'NONCE_SALT',       '6gZ/+hegc`DU2;]h^~iUpCL>.x}:Qe^K y[wpf=aAmAZ ;@b`/!%B~:,~c4mP14.' );

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
