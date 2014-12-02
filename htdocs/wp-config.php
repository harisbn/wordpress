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
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', '271913eac2');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:3306');

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
define('AUTH_KEY',         'de5aafe0ed3b63344d716d9c7e2e280ff822c5fe18c75517817a4bf6737f6cbf');
define('SECURE_AUTH_KEY',  '1bb8e48f90e6aac1fd0d6ea81ac9c3b2f6e16dfcf174cc5901d0e78c909ae388');
define('LOGGED_IN_KEY',    '11aadff0bfe3600c0bb70213023ede1f2e59bd9d07c794260dca53faf0823869');
define('NONCE_KEY',        'f6f9013405136137881f08198d0c9f49a663bf16095a52b241f8a75419c73167');
define('AUTH_SALT',        '75e33137903de3c6baad3aa3a7d7d4fbcfa335f894ea344b63b4fc67cf73d81f');
define('SECURE_AUTH_SALT', 'c008874c783ab5570039f24c653f5b13ea99ee2f556ceb4975704aa64890b7b5');
define('LOGGED_IN_SALT',   '819ee467c425c741d6c9a6fd11dbba4d7f00c3c278a71f5e26b4719792c86b32');
define('NONCE_SALT',       '54b0e7d47dde9130a59554838de06fc7ca848f98eb4cd25155f8a42927424093');

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
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', 'C:\Bitnami\wordpress-4.0.1-0/apps/wordpress/tmp');

