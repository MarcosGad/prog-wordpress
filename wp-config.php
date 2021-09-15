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
define('DB_NAME', 'wordpressprog');

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
define('AUTH_KEY',         'wvA{Kh]brKi#f*Fs_3TvTN#C=K|R38gdjfFmF!*Cqi}fU3z{]fKw6tUEYKs2s~K2');
define('SECURE_AUTH_KEY',  'Z@W?%(Q*y@-bY]oi9>V%08N8[DxJldz 1UmtoM (q@9(KG><MdPy%aM=(6_[V?Ne');
define('LOGGED_IN_KEY',    '9gQbm/,!{IoS=aJX?w.08n6YOIyfEv+n2C*G`_iDL~G<<.^G((@zsR6p0&,fV.8D');
define('NONCE_KEY',        'rX!4Ue$ 7nF#1ghH sBWl?B@L)?/n2M)./)k|tV`>8$.V,Lo8;,/W[4Vp7OPgm@I');
define('AUTH_SALT',        'A3d&`NMX7nNN6Ffafi`Jd^6}Z$DO N:t=}XR6o^;;Gg,ZXU+Tn91$brHKR {TSD%');
define('SECURE_AUTH_SALT', '~x;*gw88<ugF?}[4`X?(KPX*1}Jw]<~C_3.,n^g:0E<~^y+EEFx>I rsf~7Jd/BF');
define('LOGGED_IN_SALT',   'h/.=j6ehnI5%lu)eg2Iug@*k{p.D,L=|FY=O<[9<>iFi@3koQ@js=8t.+~,WFzd4');
define('NONCE_SALT',       ']t|Z_uBq DyFK{>Z39zn.wavr_yk_5^d=-y$eqfRY)}GH(WgL5P|i.3Qh@L13trd');

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
