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
define('AUTH_KEY',         'Se+UD7q87oDR7nBTCo6QZ/0Eh03vllOpLealuzvWndUvCSV6F5R9RBap5xhIPAvAyCy/CRmV104yKKtAhqJddw==');
define('SECURE_AUTH_KEY',  '/W1li3PEs0ntGsOz/61XSFrDNDG9geKJMumUsJe6a8GS97aT0BgoqM+mkha3LT3N/Ql6E7FbqXcle9gwFrx0fQ==');
define('LOGGED_IN_KEY',    'yTXighJZEs7TBWIEnNs/4EXDZHBkML0BXgmkhaJ0KoBgdD3GG0rMourg5hOgLKNQYZQRtqNApiLH6Ou2DM5FDA==');
define('NONCE_KEY',        '/wJAyEDUt+5CA0IqIROP4pkPo8vmEOLh7R4aStfD5zZ5/1QLe7BqC8Vvl2v1BqY57cyypRTaj0azMu4HSVuDpA==');
define('AUTH_SALT',        'iyf99elIQxjDu7gqysJY7DodMQ8LNV0qrTtJ+KaxB/Q1qZARo4j8gJaoRPf5Z0q11t+peh58tpsSifAZQM5iLw==');
define('SECURE_AUTH_SALT', 'AYOtgss6PTc36VxY5nYW1/lA3mYSnw4t2G/fXzNxZCu3sHRwl8XnSP3EtDSn9prCNF0UdtcPjNK54uvO50WfMw==');
define('LOGGED_IN_SALT',   'El/4T48+pjczlw1Pt0KrQ5CwK+yJAkPlBabkprS6RW+wnPACv5rvqSAbO5+QHUD9MQsOU2n7o2L7CLfekxpleA==');
define('NONCE_SALT',       'MDHkG1T1YZCspNW0kFoz6Fx4RLpS5QD583Z/0LKQ93Rg0JFuwsfpgy1uQ1FfPNAojESKSUCVemxRCHHSXwnHGQ==');

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
