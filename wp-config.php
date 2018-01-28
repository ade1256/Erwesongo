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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         '2KZ`p+VE>!(Ig!P8fBviRcFY=bopuj^mT(A]}dh)<50EroI+6)}4uDlEkr~-[M|@');
define('SECURE_AUTH_KEY',  'qm?sk8}~;=LtRwG}YB5r,/`4p&Xs 6qG*&-+!hfWU.w,h`A*p@bJ)m*86t3Kk&{_');
define('LOGGED_IN_KEY',    '8:dsOM_w9sd`F:%a*?0VxE `])qDLn%4|#+++w9mum7xV%(nU?/L<INljb9 [5lH');
define('NONCE_KEY',        'DmBR93~=*HoMrAOC?oYvn};AX)~wAgwKOKJy]]&2NKf,m-5r,n-/A[kh$K!h#GxZ');
define('AUTH_SALT',        '[V1`^J6GjoMH5}!o,x&U2qj%u.Hyr@R+/wb+vT^_C|q02jV]H*[g?Js_.CZROjkr');
define('SECURE_AUTH_SALT', 'H5cd57p85BDxQ. {4Y=*EY*-^s;s(6i{6AfTo#e_l=VdHq2y))$}2+$WjP[hv~UJ');
define('LOGGED_IN_SALT',   '/@4WXE+3x*ypx2*#BzGo5rzJe(eD&MYCIqjvy=Iwi::XNMZ=RO~2t3^ s3-+TP{B');
define('NONCE_SALT',       'NWQL)*@xu)4[IEVRjeq%k3:uEs50*N{9#Y41;Rqu424Tow5FFy{.FOCK9MCb(+vS');

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
