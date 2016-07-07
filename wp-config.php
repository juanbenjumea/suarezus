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
define('DB_NAME', 'suarez_us');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'c8fr4ct4l');

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
define('AUTH_KEY',         '6n[|QJH)Tz}h[-IP2{,~ry~~skhzY)3vZ}K$k!fr-xBNlaX%u0Jv0<S$-PIjpzI)');
define('SECURE_AUTH_KEY',  '}9YT ?N}erf(#z!BZu|@}iYgjXMFk2ilTkYP~n7Yu6w2:Cg@t=iQ!/}]H tn 7O!');
define('LOGGED_IN_KEY',    '^VZrrb~h&s3cuomlhHBHW`uoV|TKWcj,u|LWCFQ<H eMb#=4r;H(Wcl>0f%>6kq6');
define('NONCE_KEY',        '8i,@QN HCOj<},8O^v{+D;JVj/]lOZ6>m G1x(8];iLbH$XeV+|8Ny{90I|3wTH)');
define('AUTH_SALT',        'R 3tCCI)&-/d?@Y3u ElB3YKB(ErDSA~I$]u*Kne/5~mqFJVzI*L@P(OY#FzBE9Z');
define('SECURE_AUTH_SALT', '7vAJ?I,BM?d`r5x.G)/;5+JAo#p{rb4rh{A7lkY4_=fZs93B]6GPGOlx~yNuR!|G');
define('LOGGED_IN_SALT',   '_,,o$!Y,%n%jEA%:>YWOr@i*2^]c+QEG@`U$-W%?rN%RrTFikpzc|<+~H>Bb-t[d');
define('NONCE_SALT',       '_w+aU4RIg!^p|%=I!.zv$-M9%Aasn1v_</tpy>^]jD/bB}}tZSW=9Xsu`!vLJTRy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sus_';

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
