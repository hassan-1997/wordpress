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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '{-dG~I&/?]K~,AG^b=b&x;.}5e%N,/c5|KDPD3KIlQR6Pifl1_:#ofVz%+ZFgW~J');
define('SECURE_AUTH_KEY',  'VuY7z&?z>5@JOq]b84OB_pm@  `Y5Raom4ppC6Y.(E]N!V;rwbL _F!b:oL5_1V+');
define('LOGGED_IN_KEY',    '<Ra**8A?IHc;dyOs+SlZ0yNu9fV* TSxG;_H1l4bizJze_@)}H< S!nX7RGhlEjB');
define('NONCE_KEY',        'Y^>]!:.vl-Bs;h4( _C-8dE]0S@(&:KJ)};i1TvE/2i~B)?F=MGZY{w8bTsfIpXI');
define('AUTH_SALT',        'FKKuacxX<QMUzw7uV`|66=G</U+,{0/m}xhD,qaX%wPnL+BRo_c&5%Zo#`^`eP{[');
define('SECURE_AUTH_SALT', '#R2!$RZUqy,b/^0BI;g3-d %PJf<BHf]/4,E3]?X[g7s|k-MAsA4G4cL/RDx?(OY');
define('LOGGED_IN_SALT',   '[AB<tr7jIp]1rAWBS-hCf-nR3-F[*GK6Eo01QOb6a*b0e@9+]#wi<kzIS!eTO|r-');
define('NONCE_SALT',       '5mXq|IyN]z$*X![EbB-%{7bN!jZuTVO(#*&dvFR?u)BeG? k(T$mXef%0DI$s(/1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'h_';

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
