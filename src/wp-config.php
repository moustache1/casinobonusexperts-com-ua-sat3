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

if (getenv('WP_LOCAL')) {
    define('WP_HOME','http://localhost');
    define('WP_SITEURL','http://localhost');
} else {
	define('WP_HOME', 'https://'.getenv("WP_HOME"));
	define('WP_SITEURL', 'https://'.getenv("WP_SITEURL"));
}

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv("MYSQL_DATABASE"));

/** MySQL database username */
define('DB_USER', getenv("MYSQL_USER"));

/** MySQL database password */
define('DB_PASSWORD', getenv("MYSQL_PASSWORD"));

/** MySQL hostname */
define('DB_HOST', getenv("MYSQL_HOST"));

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
define('AUTH_KEY',         '~UI8$8( >VKl(V&%iy!xEYYB[e!t`]=?#`-9/vfB9xE#g]H;GxHEA~OM5{=Dk(>/');
define('SECURE_AUTH_KEY',  'Rfik;U-ISW4(z@_$Oe)nUuG]%I(,un@c /pb|VQ4bq|]|#8O4l<{bzV>$9g;+wO&');
define('LOGGED_IN_KEY',    '}~mu,b&)98Iu[qr*6@J|=xP*Xt0+-IE,m&+|+|%>~%~KOjyC7? ~R|Z[C43<bW7o');
define('NONCE_KEY',        '@%*0o<Hg=iu|t^61+f d;a6m4by5 6mtRD5pj!?+XVvHzl:^UM4L;}_wkyJFf1[l');
define('AUTH_SALT',        '^}ncMQ]/&qN-HPAP9Ly&sqcxThdCl0a5DM2OsO8JBbReauA5a`@^7PrpHhZn{z&)');
define('SECURE_AUTH_SALT', 'HI9y)Y#y9ae7<>E >vzB?Z) P@&Y2 *%a@-s?>cPS)d5^Wkyca7oqe}]1JlJVugZ');
define('LOGGED_IN_SALT',   'd9KPY*S<Y!R}VM+0ER95O[f-hiF^</<D 6oL!ntHi#h]rNXho3O-q,id}OTQW,>L');
define('NONCE_SALT',       '|-;{TQFd*XEIG!Rissc+ht@Qi|-WQHj^@>=HG5|-r_tk#cyuM{r^{9IvaOBxjW+?');

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
define('WP_DEBUG', getenv("WP_DEBUG"));

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** 
* Activate 'ilab-media-tools' plugin on startup
* @link https://ru.wordpress.org/plugins/ilab-media-tools/#description
*/
include_once ( ABSPATH . 'wp-admin/includes/plugin.php' );
$path = sprintf('%s/%s.php', 'ilab-media-tools', 'ilab-media-tools');
if (!is_plugin_active($path)) {
	activate_plugin($path);
}

// Activate 'cache-control' plugin on startup
include_once ( ABSPATH . 'wp-admin/includes/plugin.php' );
$path = sprintf('%s/%s.php', 'cache-control', 'cache-control');
if (!is_plugin_active($path)) {
	activate_plugin($path);
}
