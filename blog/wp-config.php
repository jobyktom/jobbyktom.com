<?php
/** Enable W3 Total Cache **/
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jobbyktom_com');

/** MySQL database username */
define('DB_USER', 'jobbyktom_com');

/** MySQL database password */
define('DB_PASSWORD', 'housepony200');

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
define('AUTH_KEY',         'Pb+qBl<heXQBF)aTdYyj`9NU7`kT_,)ncuxR@!?PQ/R7;Ld.%r~hvZRjQt[j8 0k');
define('SECURE_AUTH_KEY',  'uEI!D|/rwzl/tJ{0[N|nj  9F3w1z wB|K)xdX<%}qc`/uGG2D+[kG0H:L{--UOm');
define('LOGGED_IN_KEY',    '_}g6qNQ=1{rMuKTP+^>y{V:$e_ImZQOhPQWSOWn5E8|}C/LL`xS`^d.`nYVd)w+n');
define('NONCE_KEY',        'C1*Wvvb eZy-oF&VPpgPtiD-@wPjp{L8x *fB[ O4gX7P|OT9Xm_x}mc|*-Z%5q-');
define('AUTH_SALT',        '79i]uk`oz(b#;%mnpw~kluiKW,]v_Y]5iIHfiZ{a*0k9#M,H|`yls8x0{flW5:).');
define('SECURE_AUTH_SALT', 'AC^+i@R90&r!5}y?N.{A9=[TO1iT`bdn]}A}$o@mV5^Nwni,9J$|?defQ1/<`TWt');
define('LOGGED_IN_SALT',   ']R -P+&-:IgJS/Es)Gk|Z<9uw,[+#ba7/daWl(8# s1,|7FAFUzE>!Sy|FG7z~Os');
define('NONCE_SALT',       'z;+Y{I[*>mHRrVAm]pD={3,6;V4]x<P,Nw3w:vF6tp4rt0p,[$nbg|yk!?;u|7Q|');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
