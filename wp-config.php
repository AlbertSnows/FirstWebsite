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
define('DB_NAME', 'learningwordpress');

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
define('AUTH_KEY',         '#vFM7OH5 7J+%uDcK^AALx>cEtVe]aDOrLQ#-|T)<Y_#(UU8Z:^b@Q~X`EQH4uYe');
define('SECURE_AUTH_KEY',  'W%>=C*T`nS30YC9]={wN:~vmOl95^r3Cy{F/Cvrgk#on%`,P1L%sg)|pOSuMZpix');
define('LOGGED_IN_KEY',    '=#I&s=ug>JQW!bi{Ky#wN+?1G<I(SIeY3`IpY}9`#`iBV_ATUdQ6o/96a}IybX}n');
define('NONCE_KEY',        '%^)0_ g,nh[hMv{4q)emmWEc_`+A}NUYJ|s[oe%6Nk4R!MYXzTAgT2#Q}O3#*L]o');
define('AUTH_SALT',        'tD Tda}F)]|~1}*iQ:ZNIfYmUJ,D8w2I~H_f W$N?P3aDiM(GRsKG(D()UbbR}0u');
define('SECURE_AUTH_SALT', 'LS12lT3(Q:}6jkF]LV/G+mu4B7+}Oy.PO+quXK[OyD}@<{@_-Cr}K!VguxEf! )&');
define('LOGGED_IN_SALT',   'HEa/9yVWb!s^2@QS,&ctLpoK>wdr~9|_5hCQ!zG*PO*]z@CjnW+kEw#$Glawxkbn');
define('NONCE_SALT',       '%J,<x%y>D*j=)MYLw3> v6HOq>xJ_(E&!~/C#9c3w}[w LKb^Kcw&1aaHnFGw0~i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_testsite';

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
