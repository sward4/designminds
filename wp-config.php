<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'designminds_db');

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
define('AUTH_KEY',         '](m+MuPC<QJX `%;qd:sb Fl!|#*@zvrQHMk!99dZ u!;jx>vjj8El|+7Urw#M<k');
define('SECURE_AUTH_KEY',  'oG_!HURYe q:c|;w+)~R>B`+KKS:-fE^6kO#7me5?-ro:V68.U,SGQ09z3<t:5RG');
define('LOGGED_IN_KEY',    'Y0iHe*a{zJRB<fMy`j|=VuX:i-;~as3yhw,sm5{FZlUqKgm^;q`L2OJm,_x5GoAV');
define('NONCE_KEY',        'h&.fi6;?*2`-Df1M2de/qji_>I`112cZNr%K_aUa$n3|@}MLnj+ ]pwF!Q1(m{oL');
define('AUTH_SALT',        '4*73N%]&fMf-M}^9iSD4(%.6|UMJ>|QdvTaTUDd`!$m0CnHd)7bAKuq;#p,M&+n!');
define('SECURE_AUTH_SALT', '.|:x-SW6CSLFY9go/Z7UUzY-/9X>zcfi(@DI`vDt(im2s|F5SUxR4?MO|#$fi/6g');
define('LOGGED_IN_SALT',   'vgl-b+cqHi>Yw!zGjW!-Iulqhu>-Y4NDXaqVAm]0p$mmT{Neyms]T6I@R:ADnnLJ');
define('NONCE_SALT',       '?RI<C}TC&@w9;!A%bgJ9op?L FScut/WMTIM^USxow?Qe`1x [Y8&is!0i+$PgrD');

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
