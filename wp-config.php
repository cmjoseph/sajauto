<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sajauto');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'U.]|b}Kj~*cI|{0i~M@LXo2EObK$xH]o5B|>A)Sqtd{=;Tn@Fj4Z#XCRUr ,c/U=');
define('SECURE_AUTH_KEY',  'z= >XR+>G#E`f9f7kI +a$-XF9x|Auv+6ZPSrAAE1f|Q}B*>3{xo_pc2vK%2r!V[');
define('LOGGED_IN_KEY',    ',hZLzA3I,]IQ ql+}6tzD}LBkT)+Rm>~LE`rnWyjQkPDs;0+~2H.;3@.RiTt&#Cw');
define('NONCE_KEY',        '+@5/|-H1<FaU@GxWAm^ZMiu))eV(+ds/iv(HnTm ?ew,gVC /&XC?g!bNd0kyQpv');
define('AUTH_SALT',        'A,,O$)mq&O0,|[N[<K6oMs@LNWjTN9p0*q2Ugh>27kbHw?-0^*0>$$u5lxn!g=h~');
define('SECURE_AUTH_SALT', '{Mp5OU8baZ+[6j-.Z*LPXHDa?}g7)#<_>A9q^QiZ,tuyk:0).py92LUoRl9-tJHK');
define('LOGGED_IN_SALT',   'n-FgpH1tLXqNJfuku.%O&2.Kr,`FpS#9kd=T9WF4rbi<SN[]%N(Ig$Or:@gHUE^b');
define('NONCE_SALT',       'v? TEvqL};ro0-(=]Jm.-o]+cE(IJSFSXr#A>ohc~wkwz{6!iO~<yb@ 9NmyQpO6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
