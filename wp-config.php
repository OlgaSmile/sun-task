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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sun-task_db' );

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
define( 'AUTH_KEY',         '1; 3}zAk4js}yt:[jNA&q6-EFn6Cn_:<N1G*Fq2a_C*<P:2wJ`:g+6&RN][3syg_' );
define( 'SECURE_AUTH_KEY',  '}~]aA:v$y~HG#TSnAKQUf&u.NqFHM(tX|EE:,xbt1lv/O_pr6EA,ZJu]4Hp9SNhJ' );
define( 'LOGGED_IN_KEY',    'hiG8D?bOLdTu?ml$wI{KF@EX;Z7xCih}/29Bw%g*[Go;_klUR6UgJBf!XT<f^(ZN' );
define( 'NONCE_KEY',        '4laz9Y:)2TdZOn!7GJqXkKAu@u)$(/ksSJ*!ykl<xRyJ .8knk`TFiLtwl^SJ3+>' );
define( 'AUTH_SALT',        'J}J_,Gws0A%+m7v1i`2nRiI6PF6g-kX$SJ`:C rvbZB)7joqya+Ob>Vym_RKBT0{' );
define( 'SECURE_AUTH_SALT', '/*.LfQ:y]vEkc9#~uZXR2w*}4(i%v%-cY{(x|O0+UVAzfH)Kf6$GuhdVH&~pR)-V' );
define( 'LOGGED_IN_SALT',   'FMeXvEW00.0i^gBU=Y4=;^H<iW7M&&~C%}XE[9qTHKw+v_ml>nTZ{kH?F3Rs`h|w' );
define( 'NONCE_SALT',       '.[5.mab/rns{fs[OT!ur=Ha`swo~9Zj-aiu20~_vthQ*jWq`X0HtO.ZMFIp^AW),' );

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
