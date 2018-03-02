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
define('DB_NAME', 'itpwebsolutions');

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
define('AUTH_KEY',         'crW&=S@Rg&RobRdF}Zym_zh XtuL~-p96EHo08InuHl}Tt-y~8UcbY4O[*<RY=dz');
define('SECURE_AUTH_KEY',  's-bMNr![bFfo9Do=l}W2q11./=_wU~JrX_G=8f5}*lRsxdvd7-&05urg5Gb*.}R5');
define('LOGGED_IN_KEY',    '`eFk/6w3%$FKZ46c2/TOs[w,*VBzhdyG@hP]}pc1*S 5V[k`nCzV$9H)qSzQ3#B~');
define('NONCE_KEY',        'Hkh;tqas7Bziz)$k1@LApIv(5jg&=t)=~hXpM1b$[E5O1(:w?.mE]9+m=?mJYMzO');
define('AUTH_SALT',        'f=Y^UEk-9ri_iJy3Rn*v2t,ef<EJv*8H|afu~E?/w-*w66Q[q{.al?fipeL`j]QD');
define('SECURE_AUTH_SALT', 'sn0}Iqsw90EJp[YMwnpWOd}eG{?H8.eEip^[{0UGGQ 2GU#V-J-)[C.<YD I!]vZ');
define('LOGGED_IN_SALT',   'c;=MPu#74bh~>}{Oh9k?4N/sfmd_YOC#cXl^7e*k]Ya8s`:AQF>QL]P*9>GkFSyB');
define('NONCE_SALT',       'l|,YiKvn4la,p9N-_vs3$z65x<e]@^lnj@p^7h0uI{s8y~b0yP?n(~fe)a,(Cy2.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_itpwebsolutions';

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
