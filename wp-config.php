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
define( 'DB_NAME', 'db_eduit' );

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
define( 'AUTH_KEY',         'SB[yDu+`(%Y4q.aw*e<Y@j5o0a6i}A.]6vPb`OF>74)@HJS+8q$J=Rl_Z|#L% .K' );
define( 'SECURE_AUTH_KEY',  'T;{Kwg)@r8tc)Hdnn}f]P/9O`d~1?Y^sJa*^@B)Pg_1R[I]|lnmnB!U);zN{*)JU' );
define( 'LOGGED_IN_KEY',    'A4R/_!Ob]MjIwnE:Cb7JQ|@@opT%!#l}|@1s~2]Eh`)6DQnq?1F^jEn}{f-Up4K)' );
define( 'NONCE_KEY',        '&CM)m[@qQ~^=l.`+p,[%m=hzeis]`5P7;H^zmH4p}xjabSUrNH-)*Ko2(Fu4$]Cr' );
define( 'AUTH_SALT',        '<}<2s){rA?5k*xNl6af+fhV9gX)oM^,G]6ZK&7y75<xdc1q@hIgj.aa,f]=NIK0]' );
define( 'SECURE_AUTH_SALT', 'cP*mRl2#?jw;kvQ!,yR7j4,*#rB5m&|,%J!~Yb9{X}q%}):NBE<R>,xquQw=(:c:' );
define( 'LOGGED_IN_SALT',   '0?4WNsD]#?,.*s9qT0$sb9HG`8)5~S54e<&&677}L/)x%l3<DvTYgzSjYHJN,}eS' );
define( 'NONCE_SALT',       'd4nY{>PcavbX+%k?k3&G1Gk_7;_mPe0_qm}fSR9w|glV&G/pV+R Q7wi4hGVF6Az' );

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
