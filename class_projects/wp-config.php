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
define( 'DB_NAME', 'sdev253' );

/** MySQL database username */
define( 'DB_USER', 'sdev253user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'x8!])%AACT_I;F[>.]HyAjJY@X$u_}N@J^yFjK6)H#^loa.&UtQFO^haFZIDL2?r' );
define( 'SECURE_AUTH_KEY',  'P(EEEI0Crd4Jf0l%2{UHT{{m@tN /K8KMd1iP9+(D&9yam&|!4/Kb)kC,kw$!.FE' );
define( 'LOGGED_IN_KEY',    'F y={eW8AMncw&hW&TN:g`<KcxAm7O/Gn@3nt~euG+-3-JjYZ>1iEw d?ou5Xhe<' );
define( 'NONCE_KEY',        '`~CyeRqJ&qHQ2^U1#dSt?bT8=9bBFCb.3JsXvNP+9|[a=z]%qff?h0_(KyRUQy7,' );
define( 'AUTH_SALT',        '/~/Y-(:G^ LkDWX-:k^Cz[:_,xWl8j^QE G+];Y$P?J-U&PSP*_?.Ri,yV!?$`T@' );
define( 'SECURE_AUTH_SALT', ',nsU+v v8Hy80s-FL AQgB,m$@hggMvJuGKAdPbHF0xJh 5t t^F%v*o1hO*oaNb' );
define( 'LOGGED_IN_SALT',   'x+p`qMNiRx!`c R*Nyz?G[Y>5neTS^e3Qt`,q{+3GZ1JFXk<S;MmE`2#(MNq*Cb>' );
define( 'NONCE_SALT',       '~k5wBH F@gA3.9&h)v*@SV}*(q-_LP[+84,}TcuW{p&MouHz7%v]!mx:WUff;g.t' );

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
