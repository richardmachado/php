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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '59jZhW1peM96Di+8onnkClPSPvG1p7WlTzJIYXB8EeZixQgItMEhOR83R8p5Aq1I6AElyXmg5XeKrcePKMEerg==');
define('SECURE_AUTH_KEY',  'shf2wi7UEYVy++ftSGpiBrbkH2njWBYafuneCUEFlIfdafJ4o56xBEODBhkDq4mguMS6+hFksdM0WoXtTlosyg==');
define('LOGGED_IN_KEY',    'b6u5RSJxU2Kp3BGPPlQ1PdO9aZh0YPvlWBjd5GqQJgHk1YeaJtISka12cvKOngq2T2JlhAFBYIKrPbV4BBY7/Q==');
define('NONCE_KEY',        'me1DmrSPnOGzxV5wBhyV9pCKzXlZ6xOjye7v3OXt919XdwG7LjfLrVYCESu2Z5n6FMhHa05iR7iHqFiuq5zkJQ==');
define('AUTH_SALT',        '482t/s+xvjnmpFRbV2XkZV5aKADx4k+r4rNsyV5EWRGRykSvoY2cNwp9RCygq3fSBkADRpc4D17AF8S5oxXMUg==');
define('SECURE_AUTH_SALT', '8bO5z4rQJhJdkqK0wCIqYTZ8U1/yL32xRkU/j8f9AJTxHYwE5CKWsk8lmbXZZLDvbW+mQQQwRgxNdTeDvCzFog==');
define('LOGGED_IN_SALT',   'h9uVmHJfu/yNZEx9m38pjB0BiEEqmWAixK773lRUqx1NWe5bRNNIRaQdh5spcm2OAmukSUco14En4ifniPZsuw==');
define('NONCE_SALT',       '6laP2m8VkYI1kXuAadPz5is84mlXc56DNeep4VOZma/ZqvfgoE4r5q0yChyqU4tWB0Ii/uNE37KYBZ8ST1bPDg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
