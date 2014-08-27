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
define('DB_NAME', 'technoradix');

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
define('AUTH_KEY',         'n<}zOm-kX2gE3RG>X7BKhc*n&,fc2H~zzA?JwTw+c*!;j,W&ZSd2RWt(HV@XfYR?');
define('SECURE_AUTH_KEY',  'Asdc`IUU8/gFxZ#:I:6Iu)2leJ#CTUu{o|NQ>qfx:v*6!TEcFc{zmH+atoKByE/1');
define('LOGGED_IN_KEY',    'EP44>j`dO%#v1heB81JG:oBLd1hog(beL^?}=W-z#i LGLu<h^m-kxPy-k8`J#~T');
define('NONCE_KEY',        '>,p)K0Rk?{NI74H~y8t^-C 2NYz[K}yDO#_l%#|XuMyi%S>v#1_C%NN|IYW#wk$,');
define('AUTH_SALT',        '~A=YwQ`Q2CF>LB~W#ncTv) 7tpC<Q<tIpjK7Vl$ <}&l%&<WxLIx2o><hc.u;!H{');
define('SECURE_AUTH_SALT', 'm:@43n3`E/{i09 hLYdBAeZ9#n`:k:Ny[7!|G^Dy3uQ46P.6NJ:$@_J:31l+77ha');
define('LOGGED_IN_SALT',   'BHlA*qaC+10}+M$ww~V(NaYg-H;m+{p! `Os132o/+SzeixR,yzm;LHS$UOO~+|P');
define('NONCE_SALT',       '3TXr=yE[f<|{|H[oZ}*T)1d-I 4=$jREuOPN)Vm/}%g:|P!+8]MO5A/q3+ AOc2&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_technoradix_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
