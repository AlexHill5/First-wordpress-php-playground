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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'B7p3BJhQUSwtrAz7A2G5v7TO0cob20K84sxLntNg8PhUEJAFLqxNf4LvsHMZG1g5Al5+etSeuhVmcHY2Zsx03g==');
define('SECURE_AUTH_KEY',  'Ft7K3lXz4W6afeSiVgyNCpWLi9mBZEHXq2u1BMD6sgP+SxWRLJcBDlK7P1fEPUJO/EFy5snIOkyZfmgQhdXeNg==');
define('LOGGED_IN_KEY',    'GrDxOr+0dN3zN4Ta0CWRF71RGMgPF0oV80vEgUeZJ78r1aaUmT8eGArS6Ic4nKskDXH9t2pQuN/pJvu3gNaQEg==');
define('NONCE_KEY',        'ilNyaM+mRNF/5kWcCYhb743jwhC0+et/jEJas6uT7YI3H6cPh9GNiA2uhEnLX2alzglEIk/w3Y5d7VbdIN6UXQ==');
define('AUTH_SALT',        '0KSizZfRwrlruwixME6XWn6Wn4D5UP5zAfda0DamkzXoEIe4rhPDua2QmEOIA3aWajEmk3EIQsl8sZtvUn9pjQ==');
define('SECURE_AUTH_SALT', '7qQ/z0aXa21MFFbWiUyZdHFU3CHYAGQnbkSJ6x9Wgk9vNz/EWChzyRqiygV3VlSqnPT7IzGdEC6kck3D85Ovyw==');
define('LOGGED_IN_SALT',   '2733nKPtDl8/pUhTb1RL8+SXbjbTcxF20tSA36o1p6UcIbpnxGalGWwBE7IXJ2JNy5FmXBXP81CbLHT/FRXjBw==');
define('NONCE_SALT',       '0QL09qzX0UyvqUC8aM7TJSfF8kVCwX6HuAZOF9Ua9OItrMBiW3m/HDIjfYizNoK0TZ3ZJP3KqytKYDm4U3+etA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
