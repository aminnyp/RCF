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
define('DB_NAME', 'wordpress_f0');

/** MySQL database username */
define('DB_USER',       'wordpress_87a');

/** MySQL database password */
define('DB_PASSWORD',       'CObl92!Jz6');

/** MySQL hostname */
define('DB_HOST', '188.121.44.182:3306');

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
define('AUTH_KEY',       '7k%5Fjkb3bgYCBK31SDiUUEfOcQbhdQuR(mzxBfptqjCSA^J4u6LHJ^0gDodvuK3');
define('SECURE_AUTH_KEY',       'lAde!TpYB21eFv*ex2VPvw0h76qNZ1R&^mz!xmqF3xdsRMzpAl^vCc#FyZjLeMuc');
define('LOGGED_IN_KEY',       '4LNwoFEg*@eEPvU9ef0IBI9iY2Q1FelRSBIuo4w&(Be^7n3I1aK4Okpota0rp3Jc');
define('NONCE_KEY',       'm!I%Rqemoquk5Dj6jSkoU9k!O915W5aWNKy3up050&eyotNm#S&vv6HOxG7&D!aE');
define('AUTH_SALT',       'eiSm%n5oSblrZ4M%*04x(YUzWY0OAN*A)S#MnjN7&5kC5HoN!H@BrGl)ohBx&x&J');
define('SECURE_AUTH_SALT',       '@7oiV4uqI2GWZq4Yj79V1eqVJXBlQTe^N&o5!qvmWaUxwCmhXbiQVa)Kbotbm^#d');
define('LOGGED_IN_SALT',       'Owdfz%TyJ73qxDx3B55p!e&JLPDnhLBQ3EOixLj*SLk%4yYdVT9dtH#@uXTs0GB!');
define('NONCE_SALT',       'RSQo8e58Y4X8W%x!7Amff^nA&ZHd3*GePOV*kvugt3Q#DcWU#wn#o6158(ZVUw4w');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'X498pi_';

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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
?>