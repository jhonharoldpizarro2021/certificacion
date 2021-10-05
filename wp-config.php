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
define( 'DB_NAME', 'personas' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'on$X?aUj|t}WPK^Y(y~@V!sdvn(>U+!_12rn2n]^{T[aU3g*A.46_MOdq!fk95iC' );
define( 'SECURE_AUTH_KEY',   'LJFJ0BC4s~Cx#/^},LLlhl<yt= +$QUZh!w%Df1blC2%0EBJp/Lc9UF5<wSSqFL3' );
define( 'LOGGED_IN_KEY',     'sRvLS8Q=P4RObNn}XUoMf:)IT|8;ET8pjHOK1g_hZt|u-#uiGCCM&/xq/HT&>><=' );
define( 'NONCE_KEY',         'Zvh%)|CnW(NOQjDy#LxsA(c|XZ|DXqSe?xG}Q_X<l3K}|D<cLajmt>/(FPG5ejbS' );
define( 'AUTH_SALT',         'lw-VZXv@#y|#d la*rr:0.EG3|T2-&![XC0LKm^|g1BK}%VU9QXb-$uv^gZ8w@h8' );
define( 'SECURE_AUTH_SALT',  'P3KJJCQy(d j1ht*ctsi^?hIshedp3%<HJ~=p./B%RbZHy6pHK$UZ?XCASG08tOi' );
define( 'LOGGED_IN_SALT',    'Aj(^^7Q;6)PX[SE/54{n 1V*^#mrf$rR7cbx&z<u4[uMy v^X$G_1T5MRrJGj+-v' );
define( 'NONCE_SALT',        'ZqXWUS0Kq^5%uF*JxKF;MIlxnSR$l(Qbd+Z)!~KC([ntK+Qwh8ms[hDSHEX?l|t6' );
define( 'WP_CACHE_KEY_SALT', 'i@S}mjaN6/u7lFK5ED6[*CR?VY^P24xk)e/x?q6%GiR~I6N:Z(7xj=%`1lY=lRI0' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
