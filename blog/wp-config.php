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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ';E %-zucc+.c }V)S5&rn|~SlnfQaH7?3ta5nrZ-$O|zQ:iA;>=iy{y_l2#{Of_7');
define('SECURE_AUTH_KEY',  'WixlT@sep@{3E[heE4%U@!,V3=y{I*CkIhaXz9HsV-OS|2:)k|33``[0G-29&RZB');
define('LOGGED_IN_KEY',    'scI 6JxnW%k-1F3ErtaD-##H&kC )Toj[_K|Jk|Y+D)p,GhbT+8#hstc1Xgdxv@N');
define('NONCE_KEY',        ':tLw2@Dq:^`p=,lY<S;F}nD2Lx&vKuX)gF}xFq,v>`084OISGs-+et|@#9)I7bF;');
define('AUTH_SALT',        '#yAlwe|V)bv&YnMj)}hoJ|CT^q{LxY.OVE P58!-Kf0AP,x7&wS9`ms-,it#%(76');
define('SECURE_AUTH_SALT', 'l@-9QDO[C,0R1fVQ|Q6~k`.P89/LAre4c5xgdp`~*!4KT(3.](?iJ9ZHtY^@AFdY');
define('LOGGED_IN_SALT',   '!{C=K&FN~hYRF?*x_+C[;w-xbkV`E{V+d`Pi$,5mq;^{2?k0v#pZNYGIhgM&(--s');
define('NONCE_SALT',       '6FJc$}E^&cKW/+49}@FmT`@zy}R>A}+)&kIOG)Br!Sz<i;1$|($hsb=~:+cqISO~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
