<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp584');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'aypiu48xcfm3mfj72rnjy8haexyposyie3toi2zmulfrw654qbluj0qjokqgjrkz');
define('SECURE_AUTH_KEY',  'c8q4drz8ycmszhx5snmsonzema4zvgsebuxwoajaoidg1c8gytt88kkejdda9onn');
define('LOGGED_IN_KEY',    '1egeagctbsf8dajeg3ww24xx970v6ux5jcsyroszsehqdpghwyngj2ujklqzdl8g');
define('NONCE_KEY',        't3prwkaeljuekc84y8etqwfmtzmwwmaez3g6iseygyepzncaduzup18ejb4eua18');
define('AUTH_SALT',        'gpjll00f2wwbehzllan63iizznpelxkevqwcraz2ziq155biecuotapyh6mgvgid');
define('SECURE_AUTH_SALT', 'sgsrmg4nqacqvyuoemauxybiornbkfsdyofsnttmvds3sua07x8fxcskhmx73d8e');
define('LOGGED_IN_SALT',   'cwk8n05qcp5e8ukp8qbpalalpf5z6m5tljlwty83k5w2h5wnpagpyepk8qid0y2t');
define('NONCE_SALT',       'ifkkav9c3u7gnvm5bxutxi9qydcrbfgxqvsd4w30754jmm16cxpe1clgnw6ophuy');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wph6_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
