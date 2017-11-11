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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'ipvg-2017');

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
define('AUTH_KEY',         'lZXP]XgKqK]fa1[p+sF >_E>~HiF1-~adKy^XviWuHCz~<{41YH@PfH@o~1(i/)%');
define('SECURE_AUTH_KEY',  'y=t%R4)of/dciSFd]hbb^ S/t%r!,s<eQx/Dh1zjQA&QVFYxqGVp}d#+#UU+UX_D');
define('LOGGED_IN_KEY',    'Fz;P}Pl:Bt2! rwPYK_7^6~g4oP$f7f1D<T9rNa$c[<}rd@]]s8+exig*R@F`w-p');
define('NONCE_KEY',        'qO-)oeqU-1(7Q5^ts+LOqyI,!|O_zD{93rc;6S&Qz}Jbx&xiM|cO#?)0*I`*}v}Z');
define('AUTH_SALT',        'VDB!f?JOAu&$gw/}7F09?C@#N#w11) /6tC(SWY9lSq])Qh]#irLzL[/RCY`jict');
define('SECURE_AUTH_SALT', 'dZl9LU)1#E6=SvkA}HpU[}%AOak*9Zc_j,(DTVuM._nR@m 1C5iJnH,boOx^Ty!j');
define('LOGGED_IN_SALT',   'S^* X^+f%s{vo58^0^TX6H:jTf3Su>tS`L6n:n_nCavmi|$k?ygoMuI2/Y0AI[:e');
define('NONCE_SALT',       'Ckz4`=S-J^Enci4Sz26WR3@v<=88.tlE>*dOx;L Gpgw-e7Po}(t^kMe8&_yvv. ');

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
