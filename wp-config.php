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
define('DB_NAME', 'brokinsfbd761');

/** MySQL database username */
define('DB_USER', 'brokinsfbd761');

/** MySQL database password */
define('DB_PASSWORD', 'TJHXMy8cTAGR');

/** MySQL hostname */
define('DB_HOST', 'mysql275.sql004:3306');

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
define('AUTH_KEY',         'WAPA/HrNFt8rYqbpJgYrVZQxaNLvK/JLqBAOQuGwjEO0FJz12Vt6YvzR6I9e');
define('SECURE_AUTH_KEY',  'm72wMa0rCwehujyRtnz21dGLse9al74Ofe1Cu3VGIo6DTMsxNM532mLCV8Yz');
define('LOGGED_IN_KEY',    '9gZhkBXQj2T3ILaLL56ZlSWhPL+tcHZFTr4kN1Sm3BbWeraK7f7FzLuSnCjV');
define('NONCE_KEY',        '2VsV3LnHHA5nQb8idbwUnhz51n3pLDPJnpg1zOwQ91v0cY4OHNhhoA/tm9W6');
define('AUTH_SALT',        'jn0qhzRAjuI1Xg7n0TQsN0RsLt6HHLyqT0zakK3UFzNTAJUIi98mYyZnpktv');
define('SECURE_AUTH_SALT', 'VU4rDxg1z4Fbn1h418BxhKsixfsp1McuELpb/0JJVurujdIhIQgj/f1SMOdU');
define('LOGGED_IN_SALT',   '72aaGv0uJogi7X35HGERXTx1xWFpQQ3l2fTHsUxdEndZTe7GUjOgF13VL5PE');
define('NONCE_SALT',       'wnjRk4gztY4Kt8NO/bpCERzdJvpTAs7tMCXQLmK5qxEVzMUF0+uplbHAleLr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod556_';

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

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
