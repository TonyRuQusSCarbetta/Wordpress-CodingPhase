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
define('DB_NAME', 'FirstDataBase');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ':]DXV%cU-Ve}^;fP$b^9l&cBhX@dks3e)W:4%DtlTbYbW{Qd`DQ{>i{V>nfp^kS`');
define('SECURE_AUTH_KEY',  '<PB2V,,UkPiK|oHxIj`i~<]uWRhYzzU|JG(8KG$h7AFpptr$7$(5el%5`.{I&)lp');
define('LOGGED_IN_KEY',    'v9MS>6?1!:<a3iCx[0W~h=?Qj,pT145XcT|@KYRL9LAAT.$V__/Azgrlrlpj%-MS');
define('NONCE_KEY',        '6PRE/tU+N}8r#t3D:Hd.QE_P4.BN1nbDeM%Gx(D+i$Z2_6XKFu9~a7^.ZrN9ZW`!');
define('AUTH_SALT',        's#-[_F$>oCE:mE?>O+8|nyTsKfyEGdOf@caRRVwYX_C48Q4UUu[#LsvS2^qNq98@');
define('SECURE_AUTH_SALT', '9z]9-<>F6~ nbt6~PpGNz0D5Gd82.9|eTSW73ssQ/4jJ~m*#@%tJ5w6(D$b0T7x7');
define('LOGGED_IN_SALT',   'MIxx.yF0I{PPt)`:OJr`>Aar@lI%kl.5On)9!?tb;6uIjFz!BZy9Eym55Sj/,2N(');
define('NONCE_SALT',       '@3rosHi:i 9RpZAHxE}92f.y0m]>xHBea0k<$em5H][jpwli}=JAYol,Vc1EUMt7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
