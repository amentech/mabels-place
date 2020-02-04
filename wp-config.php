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
define('DB_NAME', 'maribel');

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
define('AUTH_KEY',         '+U+UnyIxy~aU~^[T21v]A13GKJ}tAS:4%26d?mlh{0:-,VL4x(P6ahQC8l,af(@L');
define('SECURE_AUTH_KEY',  'B?G7=c,fzGrb:(]Cg9~vg;F}K62kjZ(YPaN[1I!3C7b]ta-y7n6w=hN;=uE+#[/}');
define('LOGGED_IN_KEY',    'OtpO|JhTY2FOhT1-Y<98@;/Y+{y{@]tGA- `Ex%W9N~RWL1Sw23zCBXHAu(=_Oh]');
define('NONCE_KEY',        '8%.9pbY@?s1PCl:XQ{7SL*-cTl1yBzA?a4m}^$KcoEqX!v>WNT~Vkpq*]}y5?`sL');
define('AUTH_SALT',        ')RDiQ8U^ySLt-CBQqo}3c8{G;D_yz9PtpM>5yvx!**%6,bY5 oyU3t@!,N?9fDc|');
define('SECURE_AUTH_SALT', '{6n4Y3kS{cJ7l.bTG669h8K6q~l|d|8~X#l< WO-QfGZ[3PZf)QZ5~5}a?fU&x*w');
define('LOGGED_IN_SALT',   'B~hBb9J*&t%u]<Qyhcf9bUlVGz=P}V-IQ?@6Y4%(~F0ONFnJ#W#*a6+mGNW<ge%b');
define('NONCE_SALT',       'h`1N3dJHY;`49=jxUe3A> >0pKyoRk~0tNVf&8[ED`kPx&`y1-;6.HyNJ$gU[m1~');

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
