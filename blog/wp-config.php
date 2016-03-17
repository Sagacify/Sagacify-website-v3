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
define('DB_NAME', 'sagacifyblog');

/** MySQL database username */
define('DB_USER', 'sagacifyblog');

/** MySQL database password */
define('DB_PASSWORD', 'Clive2012');

/** MySQL hostname */
define('DB_HOST', 'sagacifyblog.mysql.db');

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
define('AUTH_KEY',         '%Y#i4<NGSFS#u5L6Pye&]g+0GtX#gXs_WUbm1;:x:7tlCG`*e MJC&h0RUt31V@u');
define('SECURE_AUTH_KEY',  '+M$]XT91zK^H8NGI*10]Sv(H!O:*ZNnJEfWXL9hiuA{5(ol@qNkvZ&wFm=6c5p.Q');
define('LOGGED_IN_KEY',    'Lj*RmS9r[+l:$y-@kUu#XCI+Y@-`m.!|/T* ;NjeLZ:.+-il+>kkm9N~8cW=v)xL');
define('NONCE_KEY',        '6z#0X8q-X@G[Wg2)k5g(W$:_lzU(V.,f?%h*8uy<Pns$ih++iNUT|hCvp~s!4$I$');
define('AUTH_SALT',        'z/ {vOMSfXLcx5A++k?h*fcO1Y{=jNq1+N)+H%Uz|VnaY{Owvxl=<(:ila@,Vs$=');
define('SECURE_AUTH_SALT', 'z~TP`eVlBJA6g&/EOlxE5Q}dXNt*iH!0(i-[p |hhohJraftCWQ!;-HBM0*vu6/S');
define('LOGGED_IN_SALT',   'y0U2+<-&p[f%^)t;ADCDYyoyq$)j}<dk)2{1/o`+F-:N&U<$r9bfL#`7]r,0*.os');
define('NONCE_SALT',       '.>5B g>TdWz_hp?Z_`W+F~|cGa+)354PMk1S~QIQhN-j1mHzy=zJ/;Psi8vb%[P^');

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
