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
define('DB_PASSWORD', 'ipvg-2018');

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
define('AUTH_KEY',         '<{{hmiX*{mVvNF0bQ`8pwNf^%H{r3~yP>tFs(gOW#{*_t0CKw%Az!dq@n8|L%_=$');
define('SECURE_AUTH_KEY',  '%%>bg*WJ)Fw9R}=BS-&`^|H{;C9i}p)NRq1UaC6+hI386zYb2S5KfA%!,$FfZuso');
define('LOGGED_IN_KEY',    '|X6|>FGZ$Z4z2^@Q4BAj6gr%Joz?~fa^c!*Bu1T.y{]ZM3PL*<;-~{3hZ9@C}7w}');
define('NONCE_KEY',        'e9D,0R[]P2?+-O=hJ}3*_Bsi7ZC=e PyZFl)q8C(f}~OHDI,R^ lNF6 g1(3T_~J');
define('AUTH_SALT',        '!]B^dV0Z CW=9s*>z3skou>$bvc?&6}f<E>JRdE^n@wH_40RQ7Bx*xM ]y.?FDsj');
define('SECURE_AUTH_SALT', 'B$p_(*CTse{17|2,oR}&xpXJ>|x>dyA{EmJWa^mOXHTD;B+Ncp#H$.q_L^lk<V3@');
define('LOGGED_IN_SALT',   '~g|#LMeHv^3Gt$-xO:nKcLl0mzbVietsxV4A4XYnIu(LF%m6zO_+w}9p%|`LMYE,');
define('NONCE_SALT',       'E-hn@7G;T3rXmVL1^&O(Vor3a+t`jgR{xI zYaqLnO|Eh{/f/2cj%:& 84fOZ2]w');

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
