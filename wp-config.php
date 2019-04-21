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
define('DB_NAME', 'db_desabambangan');

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
define('AUTH_KEY',         '9>/J^aPCI7<3,J99dZ;`@X/&AU(O~ZX{B(H8yLd22iU.p4S#kCw :.?_cZo?Be@3');
define('SECURE_AUTH_KEY',  'x1[cXR630l|BhNKc!4QQ0o=}C:<46W$t1akRbwWCXyjG0@hG$uL(V?.eaYN rK3&');
define('LOGGED_IN_KEY',    'a9`WQ% Q8+!;VbEn)!Dj_tM;<lXd7ZU1cY;W5?3qxe3S3h_%B]q/~ru#4[&DsHhS');
define('NONCE_KEY',        '*u?AP+meh<B`![`6puOdb&ape|>y{mu|u?<OPykULyMFeF8(s!^^Wtal{m,vEY4R');
define('AUTH_SALT',        '_ArI_a`Nq q*g5%rFk$!$ a0t7@NLeLGgn`n=.UK!F,OqYZ}p.wn?dTdsY/ET)AM');
define('SECURE_AUTH_SALT', '}(9;k *Knh3)r5  eG^+1RsS@eEQ7E}jd)EXjwfRM_IZJ-]s/93M?y/+<4>N^[lT');
define('LOGGED_IN_SALT',   '+1$,Ws0()g934`OjpUWwpp:VGl{)69c((4PP1 g<io9(q6{@CNb#6,&Eds[t9!}b');
define('NONCE_SALT',       'K,hTG:4:+jcs~b@p2QX!Q0WwqNI:Ky4Hv2nr&|<_qJFO`5-Bb~.Th~|}KuL(.=FL');

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
