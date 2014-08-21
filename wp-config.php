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
define('DB_NAME', 'maybom');

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
define('AUTH_KEY',         'C6bA0YujC}^-Ab*s-ts%!^,s:gemPeeZd-T=;!-9=p-/K*-@/-hZ6Uro#-b_9dGK');
define('SECURE_AUTH_KEY',  '8I+9%7|MG;d-4)!F9p}YYMOpic1H56ZL`e*!O-R<c9l@a1[/gR03;-[/D:8AYam!');
define('LOGGED_IN_KEY',    'QzZ+7$9+gHK-IEFd,+h `_eIE+RbGug:_mq!8a5U-QiA|@xLb^5(5,Za!xCpE{)>');
define('NONCE_KEY',        '-9sRs2?B*l4y|/KOLR$={!{()C[=`5V]4P0j<,_Hf+ >C$mg_{Cvh|3`^(>|6gv$');
define('AUTH_SALT',        'A>F:s<):)Yp@(]eqgnfwzI*i KQXwdF2?Rw2I_SVg[gD}uZZ9%k*YMNKEoHVI-G-');
define('SECURE_AUTH_SALT', '#;+^@/ $v1o+l7Sz>#/4HyR:Ql%)@7|Li0fx8)W:#]%u6CdTl:qU/^FP&^7l/NJn');
define('LOGGED_IN_SALT',   ' NO2]GPW|5H#l@U,?-4cOF`0KHxXl7*Og|//jn!-t(^.EW&*,QP:mprVmjNeWkpZ');
define('NONCE_SALT',       '@ pZw -Lb$H9OIJPuU% .@}K,aa|N:_a@ZMy]2mk@xaF!<Q&|LhDD8M#o!75w$9R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'vi');

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
