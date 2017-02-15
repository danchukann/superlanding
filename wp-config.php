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
define('DB_NAME', 'superlanding');

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
define('AUTH_KEY',         'KDc}*&</+I8ByV:7FM0sH-S^{H1Ie&1H$]Z#}p(vDC)YmY(R4U+Zo=W<`5bLOMJ-');
define('SECURE_AUTH_KEY',  'GjKnr#^3=mf3%i!H8imixw@3SYHiLI()MJHyK{R#e_>-anQ&z}p9?OD>[62*8m{e');
define('LOGGED_IN_KEY',    'IPlj{w=~O|I$5X;Ll9K]TkB~3PPlt$YQ1.LC;xaj?K(]JsF*(U3_|Cx.MUs;|s~;');
define('NONCE_KEY',        '*yFFma%>,ldy1o,@n,) 0W{g`&O%~fBYd~$:j9mGZy{,hM9?_LRL/U~44s0W;27o');
define('AUTH_SALT',        'QQWcCDN9iTg}`4fHshMnW^pLhnmDV,jPx^!:t(:ZQ,2R3M,TyZ_Qx=3.n,{I>-e^');
define('SECURE_AUTH_SALT', '*dN6]15 3;QqEM(ia%-da6-V>*,nu2W#sKCpDl:>>E6w&;c3*ETUL363ulY.uR:(');
define('LOGGED_IN_SALT',   'dbk+|zU6UIP{5w)S7^9ab%Yw/`<d>}1:>*HL&DR{JDizI5pBkckExNYhz-WJa!IJ');
define('NONCE_SALT',       ')#jc;,KS%&#GsLWt`K uTxn,zMJ_-0!^-@C-Cz7v;83D|>H@*Sp+)19<|65z,F*|');

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
