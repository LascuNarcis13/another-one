<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'mediev');

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
define('AUTH_KEY',         'I<HLD`.r)kX7pVk)[Ta*9Wh+bB[9Po%fO]pdSshMB&pJBQ8;01}[TOe=lT69^,/N');
define('SECURE_AUTH_KEY',  ';C5ZguDkS%qjl}^~33BLRqtn0}.E!~,45;`?o~qOiuqnvu}h-*hD*]J$xl6Yty:p');
define('LOGGED_IN_KEY',    '+#,M2t4K?0q-:x*+D?=F_<b)=N+otR/FH&$uvoDG6LjdHm>H<jSEh(7J<LxSUwEq');
define('NONCE_KEY',        'Dl6=3AO4Z/o(`;N1JlMHAs1Gg6=/$0#=^D!7Q[ST7lY?4h5pZbDDIw?7gu4Ef]D0');
define('AUTH_SALT',        'v2~z7|PWq3hE@?s5T3Yipd9^@>Z%3uU,CUkc|M#>>^BS7oum?`O^@-9-Y^JnTK@E');
define('SECURE_AUTH_SALT', 'giXKZv:DLzgUP~4%b)1/i!3SXkccSK~Nj7$h+!!__A2d[z8Lb9xImC_ChsD,v%@g');
define('LOGGED_IN_SALT',   '/i<D{`V3MQbK<6,HZWw-K&~s//}Ean34l~Ekc!q2=1Ro93_D@?Y.Z9X{$a!dK&re');
define('NONCE_SALT',       '4s^2Tq@U+k#(AdG?[Z<^vjsukqc%TAbhQF4yrpt@p[:){{wtG=:LtYhZ6J!4f6D]');

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
