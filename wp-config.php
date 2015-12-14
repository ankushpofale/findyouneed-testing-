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
define('DB_NAME', 'ankusmnv_wp683');

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
define('AUTH_KEY',         'gxgwuu0q96f0iy8j0jg6nbrgvlqrbk3oqn95stjjp9vx1b6kza7be9aq1rguhsdb');
define('SECURE_AUTH_KEY',  'uahck08e3k170zkusfigun2bk4secbmaz1enc4cdbh25aahwvy7nnwqw8k995dks');
define('LOGGED_IN_KEY',    '52li8vzjaa7o9blsurdf6w3i25wczpj2bxsk1e381s1lelmqqq8bujvmcgxp0m9e');
define('NONCE_KEY',        '9ai0iixgdxfksk61nphh8zok4iyjsvqiqgh5pu68zoazb5w83mwsjcekpwtwtkhj');
define('AUTH_SALT',        'qzgmxpiob02wxvdtfmf6u4qyprjegvacgpvajuih3p0st3lte74yvno7z7iyunqu');
define('SECURE_AUTH_SALT', 'nzlgiovjihywjlcozuurrq8gggxzl6hi7qfscpbldysxtpzvprypzkhajpfvwhly');
define('LOGGED_IN_SALT',   '1uv9c8gaq6rxuikvsw8qyhd64jmpfjgud95t2npr3qmhjyut2g00iljlleoql16v');
define('NONCE_SALT',       'fgdlzlwqp6ah5xp7qqkhfnrbcawmz2aiggfifxboqqkj66pkkruujnypudjy7zfh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wplw_';

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
