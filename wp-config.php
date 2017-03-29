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
define('DB_NAME', 'Wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'welkom10');

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
define('AUTH_KEY',         'Q-u7H~cyZ~,hX$BgwFZ*o]=CyVu`@{{|i3q;8XcK/_}=-e7Rtytyxw<vn6i$KjuD');
define('SECURE_AUTH_KEY',  ':#[4u%&4OQ-[,,I1f{sd*EI)#M*_rJBmXb5$E-~pjE`.i;Zrw1*5wW;*-S`e+51 ');
define('LOGGED_IN_KEY',    'J6b7I9~Kuj#Ph~Si#A?crO2SB1jA!8h2#~[Z>xcBJ2y5|PW2G%mmr?nD8VbeO*Iz');
define('NONCE_KEY',        'UmK[,6L:UL{O^%SF4Q>pi)|kmngIMfN$cqZGZSjw9MDGbYEZ&Up[LDY*9G.&!ZGF');
define('AUTH_SALT',        'lrN`{3#h>_Rg,g<DqA~VVcRS zuPX3he8IOlkw[z@,EwLBY1u]yJD4l]P5n*g=*0');
define('SECURE_AUTH_SALT', 'dl4hQvw=5Yv.!XFAkJGr9M~WB+Du+..txV+vZL:k8e<lqDof9:$q0@eP k:rn:lM');
define('LOGGED_IN_SALT',   'I?{.h}1=v&d6W:ZH3 ?`;tc]@a[n.M*3fFCS/v^F*/p)!N;&;,r,U*/vYPWBKm2)');
define('NONCE_SALT',       's0B_PCI{yb1tHC 68_<Me^@kR0qp8{{PzM0ZMuBKPZO!A-EEsSM!h_)lQ3E5)c3?');

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
