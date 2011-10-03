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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Bl4.?p=-yfH^|j5s)Ja,[CuER0gF!,!3f$!iMs@%VK-Kt2*Y[yzl`6/El_H>p+tl');
define('SECURE_AUTH_KEY',  '{~!k%=|c|L~* Wz8 `XlmeiHw+3H{]::ojAT<Hp-#qaWNqooS41KO861-Tbf[9N*');
define('LOGGED_IN_KEY',    '=+jUS|H0|HL+!Yn%K2MVl?Iea6x;0l*S%|^HR*Z5cXL?L.VpH@4PX l6j3XtLd:p');
define('NONCE_KEY',        '(E-t6#|(E?`8|)HZG6$jHNmeBojp&=eSHjl!?CIi-h-4h,UL*ma/S+:.:*n+IIJ<');
define('AUTH_SALT',        'rv+t!sH[8om,dZb,i~cl;pTTi.}v73iD*tFv1Q@p-C6%ba)Kl68(yIb=--*ky#}+');
define('SECURE_AUTH_SALT', 'A@>Gg;}q9q~[wYTs8_JKgpwvPA{7_pXc]_K5Y-G7e-@ixjYpDComsM]Q*EN=:&19');
define('LOGGED_IN_SALT',   'Zs42P#gpqdSwj<.Bp#]:L1nyl;|U9MS#1^#U8B3mNt?}+chk[2KXm@>J`#yr~MM`');
define('NONCE_SALT',       'z1|iS-(?a|QgJpz9y[A?+?[o$<xx@pM:jgRFUs0mc^^/gMO-;m-}>;v$;,8HNHwn');

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
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
