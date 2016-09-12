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
define('DB_NAME', 'test');

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
define('AUTH_KEY',         'V;JN1&1,6_:c:8<h(#]j9i8_r.ljIn7NWq0YY$a4UO$9rq|k@SvUt&m!1HH#?n:I');
define('SECURE_AUTH_KEY',  '0IBugwnAEj>50_bCZT+@+C{uK^UlT^<>q`Lz_5S`JOXTgWKjLMFjhDxbk(+{e:cs');
define('LOGGED_IN_KEY',    'X>DaVxJOYq-1vZtL#9i1<CJ;a)cP65X_0wZj2i<0A+5XPKTlg2b|y+ZFdh+j%r^b');
define('NONCE_KEY',        ',K~>qGsK9Vx^B<tpf;^%etYta?@qga:d:CZ0t2!|#w#=*^oV2&LZm$_UKS=%r`m?');
define('AUTH_SALT',        '5MeL<vgb+yVjmH9~u^GfS#<pNysoj+`WhEQ,UI_zZ+b`BY8}wrBu<#dnXLmy<2v}');
define('SECURE_AUTH_SALT', '.#t~!wb<oMa>z.;FZTr[e5c~B[Gr,V>xDS!7nO+mEO#R&.?3A2xs2~tqO^#N9eH}');
define('LOGGED_IN_SALT',   'V)#N<4{#nQ@ai.P@a(IZu$`~2+G`,l%>PUS)z)m9e$VFTy>,5q=T%6cW!$B#.B09');
define('NONCE_SALT',       'O@9-`kOCzYz3yh`/#bdh^|(SEg}J:fOHg@)9!+o}ZMW|zQC)f3sHpS1|yfZ8~4L/');

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
