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
define('DB_NAME', 'AssaTraore');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Yg3bD01P7$8^_5EW*5TpPk#:4Fo F{PKgX^_Z*mqZf/YiF9c<*a#O=](u>`WxF1:');
define('SECURE_AUTH_KEY',  ']wH_J:o@axt]f|(J:Qe|}SLoWB0:fsu|@&v7A4-Ycap&+}N|0V?I-E+/I3DqzjlF');
define('LOGGED_IN_KEY',    ')I_O.dWd+3x0}e$DJkRA#V[<3/;%,X@BMTXp?O7`j.C(AhAY+c?V,G6%8,^nQ^?7');
define('NONCE_KEY',        'mf44IYZi#IJ^}/(ei.u}j7X ^V9;Xy&XHBcJ[w#rIO$PyJ,&*5J$A=0&-w;X3yr%');
define('AUTH_SALT',        'GgX,]wD}JH3H)#1,V?+idHgU7?k]%~r^-/R^6r_pMRx|LmG#ny(&66;HnP~/P,7=');
define('SECURE_AUTH_SALT', '8I-= slvq>eR#rTw3c`i |$im/ITBvW]tPuKj4C`b&]ys 3K^L_G$OAjVgUbYu(!');
define('LOGGED_IN_SALT',   'r%<G^Q[2>zB;ovx0c@GElC29l-z,aZ%jrGl2(_=$k;e)1g2X7&g`&e{!RjLkPq4w');
define('NONCE_SALT',       '{+wD?(BsgY19d(Nu- IA}&.I2]7<w-j`+6-4rnP^n4)?*@_rE:Mgf_|Z/k@yB?R5');

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
