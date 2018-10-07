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
define('DB_NAME', 'bootstrap');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'SPZLcszd|La9Ud-|*|os<yWI4k8>l=,^@t/<M~tr-NrC;TL+8q<<qWM86<(^zwnl');
define('SECURE_AUTH_KEY',  'K6RQC!M|T7ZV3>@w|+.6~gDJMsHU$t-!JEx,Tg~:%y_4*>L .5v$k%[r)FaA-2d5');
define('LOGGED_IN_KEY',    '+A8lY T[K_^oxv+kJ4|lDw4#O=rQ~ufSbL-(_jEK4st)I:Pyox+;-9*&JQ$UpD7(');
define('NONCE_KEY',        '(d_vf~pCl&1A);+wg:d %lK1+m3!cR:E0|<z(+zW}@y<MJ:Tp|e@V]5#X3_Va!3R');
define('AUTH_SALT',        'K4By8&;D1xF#]G?sNgTV+2E`-1$fhJ|JX#FYEQn-?=P76*>YglCR73(vaZX.-~p-');
define('SECURE_AUTH_SALT', ')m@GrV,L=:$ ~kp<ASVc]#*t7gQ+NfFb_I3/f.My };}PwMJ@*k`jn5ahICqtYX!');
define('LOGGED_IN_SALT',   '*V$r,NFe6{C{z*hz-f3X5o.#9,OuZ1JndEO:z@z6ov-#eLLXO0ewch5:C T-x0?3');
define('NONCE_SALT',       '?DEhfCQ4xmD4%yN8c},N8Bw($+Fm=,B9qX&;gj]:M20%&b6!YO#:KnaOwy.8HO=;');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bootstrap_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
