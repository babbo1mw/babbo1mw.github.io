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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'AIK_O&(R-hGbFD`ac$Jl:#*I$<d9!<[1_K/YSm$[~&C}q D/Zi]BHTsQ=X`_}?>R');
define('SECURE_AUTH_KEY',  'vdNP3u3jeE;c59#$3k*!~ZPAnBu</N0_Hys[PFcK}hA:yxI>2>@.cH.gRpzdaG]_');
define('LOGGED_IN_KEY',    '~EjWR6fL2Xc/S=caMmkg(j7Ml6G=2(=%tZ<au$F*K~dto+XSXaW^W.a/3u2iTgo,');
define('NONCE_KEY',        '%upa}E*^I36:YGLs|J V|3aIBH1zPMfq/po)2vhPgxjAsQq7x-Ka<xiF;4 ~.Sv<');
define('AUTH_SALT',        'j5L$ug>CUgS0k2nDRDYSHg@-K_A|D6,99!K5u$H2(vw;zT[npw7~OuXLu#Nbws,6');
define('SECURE_AUTH_SALT', 'sV9Y<us:+53njO_5F;5_5/V?N]1vM! 2~7BP3kw~9vCN!p+scSMyHj^iw..en ,j');
define('LOGGED_IN_SALT',   'rqb-L<t6?(uZ,]eIPXS];)M{3PQk#cZLtatrKIYyGc;ac)n=<d8m[y|[7A`SaYsV');
define('NONCE_SALT',       '}VW$l6KR_]%|27(}sA]R]Ss^d5&Dz8?G%-|Mo&b}P<rE`~9~d}FM}?-i>uW&$,4!');

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
