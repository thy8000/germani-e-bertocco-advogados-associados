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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'O4ZBMB0lcXmbFCkHXziL5DrjHzYXQC18B19AZvWBFEfK9G4fAJ/sjjA8wKEKo1M4+8EBcL5RQW5oelxV4B72Wg==');
define('SECURE_AUTH_KEY',  'uR6urUtuf2bcDqVVjV0siT/RH6k/aMjmC1OSPzKqe9hLMyq9jwqU+b5ZgDcTZiDbk4O+Tl9ze7UIsA6tQK1qAg==');
define('LOGGED_IN_KEY',    '4KkzGT3Wm0VlNafluhMh3BP8cY/y/bYLU8vqklupbAi+YSW+M3RcB+uIv+9Eyk1C/HtEawbY0/GR3d5dMJczWg==');
define('NONCE_KEY',        'JhAzzro2KFBejjh0KxNNhiHQk2GGz8ji8/Z4+bhXgHjiehFKzOjXcqnVVj90yKhQt7ex0Eegk7Fxk/QFX1EC7Q==');
define('AUTH_SALT',        'NDvnBekA2uJaGy81QYvwHfjUZBtck6r/7MlkeWER4grsATn6VNc7IP+1JjJvMU/g/W5xp+NnSLezxEJKlC2lqQ==');
define('SECURE_AUTH_SALT', 'aNc7DWk2HrB6tnzIcmmk1Lattpyc163CqgQxccAtrGf4cB4tOxvqixqZDluqqGzF68IfJ68A4fXgtlRjuUoA1A==');
define('LOGGED_IN_SALT',   'gmcXVnu6InvFPwlC0AWL16CU+uFpbOgtO/92avR6senzagM1y09XgwZC5gtyzVT3Ax2cxdAdxRE/sapoz5XNTA==');
define('NONCE_SALT',       'BBRR9kOJ9PB3BNk90+HppOFYvW7ibiYYZ0jam8InH1o1SaXZmXeT7y8kQLarIZAoqWlToWvrokeaN1OLdG0eMg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
