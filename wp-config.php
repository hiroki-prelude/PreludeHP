<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'PreludeHP' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         '7CnchWzz5x0wtTyg9s8sH4UJ9Nceo4rMjf4CSp6BHH1ydxT3OOLIgp14F8Ydcyk0' );
define( 'SECURE_AUTH_KEY',  'IAzyT4vvV2T7H5SZnfsOfvryESXl3Ryn1CZt1usl4ezwsYGEDG6yiHe9KG4n7Q8w' );
define( 'LOGGED_IN_KEY',    'NZUWuS6AAlwCuwI5n06IY5NdGZp0uHGQUgZ65FIUs8W5YSC5xh0vZrMxvIpojXIi' );
define( 'NONCE_KEY',        'eY4RH8Xg8TTD7nE4Uv6QDhNVdeuMpiM69IIQO8WWNuoCJIaXJ3BuyzSv7GLO6TcT' );
define( 'AUTH_SALT',        'KsfZ8hnzOpsq2TiUN5L6J7zbfTTaHuTwBC4aLnJk0WoSJQkdKmZTQN3wrXYBW1Qm' );
define( 'SECURE_AUTH_SALT', 'uJOCkZGlTwLnkXy9QuiVQ4sqrvMB07F1XVO6sdSywT49FlDjkCUDwx12vfwUAace' );
define( 'LOGGED_IN_SALT',   'jvprJDwK8Ag9XEwef9vRpC7f0xZLXksGyGbymSB0TVg8P8zLJqMNWo4AiPWBivHZ' );
define( 'NONCE_SALT',       'fL2uldSNvDVFT2ccZZmUpOwElYyG90fxoTaArlU8h23Ngc9AVMBn6jadPIcF51mC' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
