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
define('DB_NAME', 'kosmiobecgkfy');

/** MySQL database username */
define('DB_USER', 'kosmiobecgkfy');

/** MySQL database password */
define('DB_PASSWORD', '06302012Kfy');

/** MySQL hostname */
define('DB_HOST', 'kosmiobecgkfy.mysql.db');

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
define('AUTH_KEY',         '&@]kji1-&m;$WwS,Wal3-4faoe`8<3l^]~nnlh4_u|1=Lt~=<yL%OZSqox_~8&Hb');
define('SECURE_AUTH_KEY',  '/b|-WR/E|Z-ylFsAg;`-uYq&?v=x/_+8XQ|1-p!YcjpP+7{T7$+)B*=-,)j-2`mT');
define('LOGGED_IN_KEY',    'Sq:XKK#W&G|4>[.kpf{?uC@U(riQplcou>gC^0<]0h]u43D5{W,LN9;+fLUV={e>');
define('NONCE_KEY',        'IsCq5*Vf9vS.FS1}]9dbF,1,_DDt<|a!*=oqs7wRjqVy8P%IG4e_@1v_1O&j38Dl');
define('AUTH_SALT',        'eLke*@U~Q}[{{Sb1|m{z/e3?&w8wUBb?BhKS!qPWU;q<.tS[NHjp@q>fL <0U$q6');
define('SECURE_AUTH_SALT', '6){wIjfKT[w{{:89TIMI6{/Ic<(C+2}S*_sVFU)/=+*-+/S R-h[PYApS2W|:6kO');
define('LOGGED_IN_SALT',   'Ly[^mt$%/BP)IyZm8QH=63Y!,t7B1|Wh:d[E<]]**nvP|+wT#K>0Dt/?dTr`.]^/');
define('NONCE_SALT',       ')5}TuPC&So2SPX/!|bacA%Pc|<r8m%[I|y>_XW<--NuAD%m$3>CSMbV*x1H>$`dh');

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
