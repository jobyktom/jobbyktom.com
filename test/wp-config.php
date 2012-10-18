<?php
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
define('AUTH_KEY',         '8h7MrJ]RK&HxCPb*Lo?+-:o#Z;fs:8Vbz+])ZL?3O([Q|%n,o75y-BT*)VxBYui-');
define('SECURE_AUTH_KEY',  '|N]EF,p$aHt,nB3(-T/U3&0+Ww64-f#}kCs#-(X*#(g3T,1Cw@/rPEs<=FA1Z>&N');
define('LOGGED_IN_KEY',    '!&o+8NZ=r7=Z3Ne~l~q*8rJwdla}}-H%8!4t[{vD}dsgSi 8uEuwsn@WB%*A}=Hr');
define('NONCE_KEY',        'Ppp0R^_|g6i,*k,12ULJ;|9X3.q?G1~WsoT?R;k&Q=MEDflw|Qwfr,C#@E;]ts|y');
define('AUTH_SALT',        'nJRJD0_bHN1Ol09~[==F_6qOMi!&i>)&7uG@iN[$oa3%Nucn.xKGdwG<,+V1[p|y');
define('SECURE_AUTH_SALT', '*UCT-Xt2N=||F9UxYx2 Q9UEQ|qho#}S4]P.y:V?CvF`eu%FH:3H~)}g,:I-{;-X');
define('LOGGED_IN_SALT',   '[5sPW/|%Bmt~|LRz}*RZ-IW57x4n}ppj(roB?7+dO|Q|jW5g;p`Cx De<Iwbci{T');
define('NONCE_SALT',       '| dA$LL$Q7`Ho)SPSCv^+69mvYMNXJkql&MV_AV5zKYoym)R><j{d#g>IT-|;|tY');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wptest_';

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
