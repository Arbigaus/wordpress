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
define('DB_NAME', 'wp_wordpress');

/** MySQL database username */
define('DB_USER', 'projetos');

/** MySQL database password */
define('DB_PASSWORD', 'gazeta');

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
define('AUTH_KEY',         'H<s7;HU0>7k]$rY30S^htDu~Jm`K*DjM{E:Z<d_u_fTGO@)|zw~Ra$VHLiRXJ&Lh');
define('SECURE_AUTH_KEY',  ',P.hAyvD(iOE`YP (BIh![^PT&TQmdy_[; ?raV^}X[5zyi#7S[xm0WDP&jg}$9%');
define('LOGGED_IN_KEY',    'aB(.Ocur9IPhS~;)&4Z8|3q;ytFPv*98gI$TH>6s:!V@,mKWc-K7}x{)L*?28SE-');
define('NONCE_KEY',        '-8,tQVE%D8]I+8tL<5IRNe(%$F:AB`2HgRpJkhsoV=v4huLw2C8YR:XDN]-r~Om9');
define('AUTH_SALT',        '92@0{Bxx;,;p?n9%T*6dxrY~oTX<2_(fHTqpJAE/3A|))sPp,kS^U^V%X#i0LcNs');
define('SECURE_AUTH_SALT', ':O~kYeR(!CBK?h;NrCogkaMcUb]qU0W{`QwDS^UeDA (yZ@Pcg~i+`RDZS]K {`z');
define('LOGGED_IN_SALT',   'UTMJ+;gXs33^R2VwX.wG3-}lk,w51rU:FID*p]_YW!IAvB::0rg@?@Yt`6ium)qf');
define('NONCE_SALT',       '2{/;^t&E?e}*e`W/][=JsQNYIrl,S4>D:JG]_%A@dC<^zoCNBTO~C* ^]x~5E}j`');

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
