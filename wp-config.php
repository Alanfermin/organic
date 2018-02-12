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
define('DB_NAME', 'organics');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '>K4Euj{DL1VR3nv} -^?/vNO|TE4P&1K?aQ*}vRW;*@[+*|Kqc={(,)[7s,|M4ef');
define('SECURE_AUTH_KEY',  'W9Z2S+Z=q7nD86vKy0p7m6mH|VWtG-lvw/p]|2t~#=[c]t|tP?`fh$2*]58Q8M@%');
define('LOGGED_IN_KEY',    ',^L$@_p~B9Q#HxKOzwA;*p?6F2w9Skt]Mv/~b[<pV3],0h!5przI%1`-?P]i8#}a');
define('NONCE_KEY',        'g.2#opQSZKE= !G:G[[j;A=#;XF_Z*1!&~5nnbJhi^fOtG=001Dr=v`n_|DAr9jQ');
define('AUTH_SALT',        'oh7v,&l5I;3XvP/^D#+!(8U4Lsvf_t~&9[C5d,S{URAv&>*p1lQ|HT>N;$GB:HA%');
define('SECURE_AUTH_SALT', 'B!y)iT5AI{F16Y|0K-3~X0r^DlR(qWB+A&5@!Vh[)d__9R@okQX8x3cLB4k=/nMa');
define('LOGGED_IN_SALT',   '%q.k<;;>A;z0L-]N_@Cy[QcXrQ.G>eR1pFZJ,C#on.0tHNI95m$[xVE@Ul>JZk=,');
define('NONCE_SALT',       '[TToDc~S;v&rl`r*S`=`{(8j{d<NmO~lq;xE:Ksr?H%S1i?3N7,.~<!Va][py26`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
