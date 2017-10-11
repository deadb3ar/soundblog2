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
define('DB_NAME', 'soundblog2');

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
define('AUTH_KEY',         'p&903/!x(_eR _Nl*-oDV>d3Fiz$&(m&E(/.}|7:|86yP>5z;ChJ;fd%hYu}`[;D');
define('SECURE_AUTH_KEY',  'I16||9~75Vh!?y>nyPQtg@;JDY3^1eek(,AwLfr@?u(r fo2~&Vw#(l$hYf0df&J');
define('LOGGED_IN_KEY',    'A&Z`ev=ndJ*SP3k%=Ok<3cmJknPYt3@x6^b3Wuv&VjELKj+*x<@VeO=P;d4;+Ez8');
define('NONCE_KEY',        'o,jNk9rISwhs.;GWIs%rago<uDzz ob)5jN:TQ]avNh./]4G.8uLH.I(n@$}BD`m');
define('AUTH_SALT',        'W6=fWs(nx?m#byj/c|^WFB%e53SoV44svI)L&MV)4Ap#Rt?^!0;qizSheF#]NK1?');
define('SECURE_AUTH_SALT', 'YNynX];K%TQ^&C Yo,nh)k^pR@.MKb`Z0u,R>kib)29}-%Ry#_`],aPqSHvwbMk*');
define('LOGGED_IN_SALT',   '9^=@5@<-g>-z_;[<p$GsKhh?`c? `B&wK0VrUx(,h6oiJE<Xxj;M;0*20R*jxNH8');
define('NONCE_SALT',       'Pql21{o6x3;`xrMP_6Q]U?t]_A63Pp~t.-<+12fs#RLlV*nVsKCa!EG5!E{f5z@U');

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
