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
define( 'DB_NAME', 'gardensggit_db' );

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
define( 'AUTH_KEY',         '&R$/p1h0EcbTJPzn>=3EUa2hp1@y;zn`$C?:F=N~!/gyy8cKJnQK!7B=dHOB@:g,' );
define( 'SECURE_AUTH_KEY',  'UrA64dUWxynl8.2-JL]}z]~/:mRz/rM_lrOU365~#ixwnW6c|E-F} HISP0.UoEZ' );
define( 'LOGGED_IN_KEY',    '|Ld1d{IxD{UWVbYt5miRoKY#=^n#A./JjGA?uA}}NiEL77PQ<F&^,k(&#DXm*QgQ' );
define( 'NONCE_KEY',        'UX2sXTP.,=wH}cP@XJGRI)}hkF%L{#_W7B(7X~b&vd)~d^AzP(*]8XpDi:aV9oL?' );
define( 'AUTH_SALT',        '3`K;p2N^!K&1-l 4&UM_VS$JC*|5J~`n;N7}@}NKd5]~BDAr#rUy?Bp8lGBaf?T,' );
define( 'SECURE_AUTH_SALT', 'L+b rt$JlGC$pU9mfVX=YfsRje|$e>g8Xs>ni:aAHG1rKWm,X?j4ICN|![E/K&AZ' );
define( 'LOGGED_IN_SALT',   'd=bD!-O_@+y/L&niZ)%T;m:`F2xqat-jc9;[BkrXR:{cd>Tk*134p:XX4 fz3oT;' );
define( 'NONCE_SALT',       'vD;7$m#t{`X-q$}-sOubt0xCL}T!9WY@ALAR=A>S$,!<`A<fcoa~U,Co%z<VtO>1' );

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
