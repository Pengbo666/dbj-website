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
define('DB_NAME', 'DBJTECH');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'pengbo@2');

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
define('AUTH_KEY',         '+{<%: ]=!>wl;1BX~N]4iiYOI_+A1+<iE1]k$H<a`-|@rt;Cg2^}[:LPM|pGZKkO');
define('SECURE_AUTH_KEY',  'HF!$R0hc=+cV(3tI8d7M|?(BKuy|-T:}_V]AQe8I:d. iQ`8cxfl.qt+_7+J [X~');
define('LOGGED_IN_KEY',    '#Z+yOH$]PB-CR*r%$~^Ndkwonyj rCB5?#?4`yquY?ng,*lE~,B1+^H5ha?T&.UV');
define('NONCE_KEY',        '5#0MzBG+>GR3|X`k7/&w8A/Eggl?x(C2B-7QdET+mU,LF(XPIU5 cDIySEI-P}4y');
define('AUTH_SALT',        'K^IEM&>T&?2Le<U7,-bS-ZxR;Z{NxQNF-jFk!sD%f2y|&AX|u+Fp*S]6-|l:jh)y');
define('SECURE_AUTH_SALT', '{BMg{r-}.w&]aJv#h#RW|7-eFOq% VTe@C=@!m5!Bmg_GDg?J%J,L`it8:+,b*Hg');
define('LOGGED_IN_SALT',   'j/--IME9uGo=!RAypte 3eG@^qo|9CgC`{;dswu:?rl*yj&Do,=eAF8$  -{-?pv');
define('NONCE_SALT',       'XGujQJlQ+?6#ro34h7))e*O1VZUk5R=u*Q[jO;NUOjz/]`3^_-6EC{+H&snLy^v{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'web_';

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
