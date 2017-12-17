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
define('DB_NAME', 'oto');

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
define('AUTH_KEY',         'kD8-VUOJ@Dj>f6(XWXfg{| u{E+>mjmH~JYdCh`}}$.N)X{CwXafXBF^OK@l840|');
define('SECURE_AUTH_KEY',  'bH`XlF?fm:y<.TXf:$ H0h+F~j>b!/#T(*wRVwW@,E0Kih|/m})dQWHW#*p8(R|{');
define('LOGGED_IN_KEY',    '#[.f_AUHaUrUhyR9pMQp*L?-ZZ)vH<nt{$=g5JNKrb^CYp:QUE!),qvwRLAf.euD');
define('NONCE_KEY',        'm/vB/qRdc/RIV0W^bjX=JL;v-`P@4(sT91BI=Tg5N021G/uQ}Qm!&fe*r$%l#)CP');
define('AUTH_SALT',        'jK5)cvOafR!!N_R@>$Fc {u0S& bCTxy;U~Y+LdmDS!XH@gDiqZll~~Oofju9J+P');
define('SECURE_AUTH_SALT', '/a]Pxf}%,$`:(D2&rvQU.!:jM[eD%yrx7K <?e_oySx_$? aV12dZ+RFLW=0t<7o');
define('LOGGED_IN_SALT',   '6WNWYR:l`{q~Cxm)U$]5>lQ*w/*hcdq!B.+=f$ffW-BoaHJd<Kj&HqJ]JEiXM@r@');
define('NONCE_SALT',       '%<U85N>oBEk~n2R2`Qmv:CMpW#)cYp W)Yb=Q[$|dSq{6_zT?mbP`{Bz/Q<$jcx|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'oto_';

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
