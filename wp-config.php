<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'videogamestoredb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'changocome' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'bD$4Lj+~zv|GM!nX[t+HyQ53GSwY. mXFNxD0lklO<e_rud#+#.c-D$I_b2|,L>i' );
define( 'SECURE_AUTH_KEY',  ']&T+DQ@=Uj|{ oP8|MkIbhD6N4A4V_:sZcjyC#{{wy[h)oMOvLvr12jj[jB4lB]0' );
define( 'LOGGED_IN_KEY',    'yd4wX2:)Z0 YITgv_NA|<gpat4#PC qh<##@[x$mu:=.D@2bE+Fm<k)Ui|Np?xIf' );
define( 'NONCE_KEY',        'gA`7(6P-#K6ROfKn6w D|kNRna04=C>_1Vvm.~tUKt~xQ^fO<6+&g@ k(`ro}jO+' );
define( 'AUTH_SALT',        '.)]uj(R-U6C%&ylwNU%]+mdPnR_|.EdUpHg.xI5w3rj_#2^PB_).A^59jI 2#j!8' );
define( 'SECURE_AUTH_SALT', '$/o-0aVx<} x&}B~%dIAaFlziL)Sv!hLE_C?d]<AR[we0{IZCsDOTEr-2J<9Kt&K' );
define( 'LOGGED_IN_SALT',   'LE6t]6,4>[Xn wUY{iRWk?p.[9tRoFFCziZ9rXl.8-4!6APH:&#ox>DaN9y.6QKX' );
define( 'NONCE_SALT',       'kXnH``lP^^FN;@)-hy8A@+&6br3JzB[w@`L6fX&3^2AkAt-iT<ccfrrBY|xcOrSi' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'vgbd_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
