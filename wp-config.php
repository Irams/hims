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
define('DB_NAME', 'hims');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'maga_098');

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
define('AUTH_KEY',         '#Og$cnG+?+*7)rqUzQsw47EqU#c>9v-!cR}ltMT@&fUX5E>Z}uX.nZ*:jUfX7Bzz');
define('SECURE_AUTH_KEY',  'wt3nBe08v,$&PA;=v@x)$TSM^&q$oxWaK:C{-BqbYO47?aSBCh,~P~a6;Af]PyUc');
define('LOGGED_IN_KEY',    'Wu/-9Nufx@Nv9]Jr0Fw_c;iL@~~r=Tv%K_<rx5/+YQ@4 `I)0f<Vo0t:MS^D^Z6/');
define('NONCE_KEY',        '-Y{B*7ow]ZcaIHIZB-b+?d0,Hx*b7e)=e41j3&piju$3z@[+q?q6*Vhype;C0OL_');
define('AUTH_SALT',        'Hj3Te-rS>aW$u^W[Sip3?K?%^%(#E<_Ily0J%#WEj|hk)ArZ]Y&X4=$Uq4B/v.gP');
define('SECURE_AUTH_SALT', 'x{WeiFsNp[ /Z8w9Tt6{[#5WK2{:0CY,SP~#~1w3<D$MixC5_oK.4lv67:2rbYuq');
define('LOGGED_IN_SALT',   'NQ&DPlxLEEKR{52e4Mi<:tF)Wg(K/94T-93NG+zZKm2+>2[#_Yb*%M> W_G4y3yA');
define('NONCE_SALT',       'Dsg#%z#0Jej6yR8>_B7i #y$|sS_|uDrtOC#+MN:E}th5 ^3zIIQX1b6~|+=DLx1');

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
