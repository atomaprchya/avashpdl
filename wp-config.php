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
define('DB_NAME', 'wordavash');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '12345');

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
define('AUTH_KEY',         'h>`1a}6oqqn<c%Nm#D^)`DNHznA|>~x@)mx8FdKOe%#{ QvO^OM6D2_Jb>Pts,3N');
define('SECURE_AUTH_KEY',  'Xprho5gb@[u*yblezCHE+Zd%>(yjg=7*kP[ifv~5c9fVh4s`A:s$dSWIw}^,fkK9');
define('LOGGED_IN_KEY',    '`Un+[J,bS%W!_A|l0d.oU3Si~;.je-m92>`Ub}-mh#2aE_on|TNKHlvR/a#Fh[dG');
define('NONCE_KEY',        '&u0l8^;aUqPm)&J{z_]gGOY;-E4S3u4jc>yw;`Khb>e^DMh4x0 ~TiZ;,R=/>My_');
define('AUTH_SALT',        ':s6mJ7t)11k{u9hD,|3vxEOAyi~]40?AMJfev%5/Hw@<it-A~j*.#hCiuwZ91OAK');
define('SECURE_AUTH_SALT', '~f~T27N:kmhs+$koVr=7r[t,M1xLW#T=dTk6iCKF8zgXU7g2B[0?,x;zd;z@.<2!');
define('LOGGED_IN_SALT',   'vbNgN^#HP{Y)ZXl*yj2HM=yW0n)&$R9ngRLDZBa0aeDH)n{B<47)? $jHSZej73y');
define('NONCE_SALT',       'aqn/O%r>-{Z*Q8G/:6ZZN6g_g8]NR|#NTZb#)jYFk*X4Q1$1=uU+,tnW:a]j%)`X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wa_';

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
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wordpress/wordavash/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

