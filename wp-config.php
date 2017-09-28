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
define('DB_NAME', 'wpnangcao');

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
define('AUTH_KEY',         '(l01HO@r[;@XrpS(G=z]Qp+4.bTpXjk%|3@[kZ1!aP!&9Ux#r@>NQ(4Lzepdw/i6');
define('SECURE_AUTH_KEY',  'e{AMrnb97r)JB1Gr7*GI~K;aSa`H&H/U:f.c-gXN5c,yE0E[U^z< j,Cg0OcfdZQ');
define('LOGGED_IN_KEY',    'tl;.1}J(WdZAS0]5uS|qCh[%NHNI6M46[rX)`u^?.-82E-CK?RSucrzPX[c#bOVo');
define('NONCE_KEY',        'i2}QxIK(5VAVu{):5vWoBlm38hY$ver(Z62r=0Whif*yC<=z9f}mrIaiGhQUOr<Q');
define('AUTH_SALT',        ',ERgqPYN{/wUR~i vcrmAhF@ww!:(IMp>`RJ>f%R#)?*;_b0R!&Bw5mGx3mfR CC');
define('SECURE_AUTH_SALT', 'ge|oM2O:=- g {$jL{N.ytcaRkGGk;36mQgfaWh)|Lc-;Ywu:db+drl@dR1B4uZA');
define('LOGGED_IN_SALT',   ')_g~EA97MYB4I&N|eVM;S&d<>:7i^f`s5,-Vy+R-D{%2MPt|iaBfR,})e^;E03P$');
define('NONCE_SALT',       '!BV*m78XFh--(Rlw;R9Gq=/Tcr2aFO>{VPi<L{j,} <EgJR8c8J!MAp/RI-!HY(f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpnc_';

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
define('WP_DEBUG', true);

define( 'SAVEQUERIES', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
