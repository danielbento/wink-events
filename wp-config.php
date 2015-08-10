<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_DEBUG', true);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'winkevents');

/** MySQL database username */
define('DB_USER', 'daniel');

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
define('AUTH_KEY',         'g -J76@]a0/jgVL56X|yut:>|{;nHnQ.sTsr.-PY{i({ Ikyxb`&H#--0=iLHJoc');
define('SECURE_AUTH_KEY',  'C81dnFpx/juWw@h23Tqx<{|L4_g[kF&-rr&aXXK|5QA`NOZCybDd{GK|)A%H<`vU');
define('LOGGED_IN_KEY',    'RR[w75Z-rO2ZUIxo-+T;Q=[vdclpZtvr+B.r`6Z+%1l-qtl, Y&;x1YtK@%rZ- o');
define('NONCE_KEY',        '}&F.F |0f/KE#^XJqyo0O|D=TmeWijbFrobnjyJeey*MF+}&iRib`TLIN_rc&Ra=');
define('AUTH_SALT',        'P=tCJ-z-@Hg$oNeK(}ip=9SDUkxX[^+6pO#DLVi)FC@P$Z$V|D{vuG|Ds%+AdwBp');
define('SECURE_AUTH_SALT', 'qcI#+8a~E]HGa*P<9q4+wj!W/)P=:zIgELnD&o68bgH|4E/.a<M|h+yVe>NT[x>M');
define('LOGGED_IN_SALT',   '-g>hg#9~tR+rM%;1|clAbPZ;$?^)-^+d|@|(&f K`4|lY[xJ1@)y%xWme9^GZbvT');
define('NONCE_SALT',       '@z+vY+Z%$B)V;7p;@Yp[:R`_o<p|20.g$6Df!@_SD.1 9]4|-Q`g-)}Eo[@s+H8,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'devp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
