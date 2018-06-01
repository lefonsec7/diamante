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
define('DB_NAME', '100a1');

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
define('AUTH_KEY',         'GVL/;I}qi^]B(hspf*j)MFim..^r2RV 5pzW+WQgum%[c&7ya-|hWkOT_pZ`w3xn');
define('SECURE_AUTH_KEY',  ';nQOaT^Ciz5dD14S}KYNeq8-TcW/6 6Mqp%<%VB6[`!h;#Wy}JJZA&yB:]I]vM9H');
define('LOGGED_IN_KEY',    '2&X=/lnq4{O]oQ~op@K`Tv>lNKjGf#E=Vx@x|glv3(mxkYc+E~x}x}e`?l]rdF69');
define('NONCE_KEY',        '|-iOi$7dV_^Dl??@;_BEtw6~PF!|k(0)tjtv)61$uU+%dyusXbxN7~HE9a(|<hfi');
define('AUTH_SALT',        '5mW_P.^~5jD>F/T{H1 I3(mYE*^G?Nt])^Mzg4Q@51)m-L571sfs}_IvxKMC{5>g');
define('SECURE_AUTH_SALT', 'Q{soa|Z(gEZ1=#!Aj<[4!Ybm0+)/$`L_9Rn_uUr%n+yp]K@&,->]|(0D<G~,TuIw');
define('LOGGED_IN_SALT',   '#lz|&>wiA40j6FJMdg-Mzz+[p-T?v@]w{*A;+[(_EW>[LgTH qM/_aauV5jF2fCj');
define('NONCE_SALT',       '1/4tHK/JCkc]MjFEx+Qwdf[7TC+c@Wgd9_A0M!@s~SS%o*c^3rbsB71b9]q^+!GH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dm_';

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
