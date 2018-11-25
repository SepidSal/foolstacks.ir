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
define('DB_NAME', 'foolstac_sepidWPDB');

/** MySQL database username */
define('DB_USER', 'foolstac_sepidWPUS');

/** MySQL database password */
define('DB_PASSWORD', 'SepiD SaL 64#');

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
define('AUTH_KEY',         '%9@1~v[rx9ng(=meuStN_]Q?Qgq#:/wao-LCuq<jI0s%gK:L?i${N|L>wv9>m#R8');
define('SECURE_AUTH_KEY',  ',!onhUij`S183F{n(NbGS%1W@clP~zRHM%XTIZ6oO+/Opia#UJ`-Jn&@4%UkEv_S');
define('LOGGED_IN_KEY',    'd%CanQk%]XU2iQF_-BAryt<dSn{eF!HxZ~-Oe9(p!fREMx$=aM$eq`)U,ia O#1G');
define('NONCE_KEY',        'kiX=6b()8}[K=Z1B-+:J3BSuR*?vJX8hOqA~a,fjoepk<T:V^vvrC[][@Oh%n/`k');
define('AUTH_SALT',        '@D`/e_l>V;axvAx:3H8:xdClfX1jX`~WH@66nn~I/>tl<:[Cyv!n[t~DC:UI}|[?');
define('SECURE_AUTH_SALT', '><>8GiPPbus7P+!QU2N,XnErWt5sw/fmp~FjU(#cQ.unVYgsGj>UY<_y{YY~w=?m');
define('LOGGED_IN_SALT',   'DB`yy59VWZ?JwEg[zr[4_(F^xq{:q.v7KkmP}},wsDc#edhRDtP!BFr&2|yohsiY');
define('NONCE_SALT',       'G;ED.r|^aSB| `X^cr#L!UIj>/6lggDsc[!6}|TgdtML*2QZg{T7dw9M`Xw7Yrg>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'st_';

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
//Disable File Edits
define('DISALLOW_FILE_EDIT', true);