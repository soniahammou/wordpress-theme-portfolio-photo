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
define( 'DB_NAME', 'wordpress-test' );

/** Database username */
define( 'DB_USER', 'wordpress-test' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress-test' );

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
define( 'AUTH_KEY',         ')!{|$7AQ<uDaSYMlQnI<yHbWn^4&li0M!/ /&Y:)LV?S|R=gyu[HZ=(pf<9W{1|G' );
define( 'SECURE_AUTH_KEY',  'Z-/1#JU_3X+)FL~nQzqs|#x>d.QKo_yi=ep+pfej%GcVv_i>8](P^wm!M(Jv!4XT' );
define( 'LOGGED_IN_KEY',    'ZHfOD_5mmvS^*Y`9?Zna:=_Z|35yYiII<Px?W]F<b7HX2TsMq={Qp|]A pWNzM03' );
define( 'NONCE_KEY',        'A_pXwrNm{^bQo_gJX-.6V(bUMks)J^B5%#.1M4]T9=Q,?NOYmpI^&U-7?^OBP}Ud' );
define( 'AUTH_SALT',        '1U)3x/r]Ix>UgO(3>Md*#t,/h,}gNB{X5KaVIs7/b}j:bbSY-HWTwanj!PUS/e`$' );
define( 'SECURE_AUTH_SALT', '!t_]pD>c~b%B!kdaz>#qM+5j4]RPeD6CY6&Ei)|+S HK6V25HHfcsS;5+Xh^!{.b' );
define( 'LOGGED_IN_SALT',   'FN8hG9Eak1n<ezsr!_D4Ke~%2z*6g~;?<e~g&5i.<vZn!37^JQ4ZAoblx.6C$Zud' );
define( 'NONCE_SALT',       '<QMisVoxiYlG(??K]F<oBeGO_`XnVMtDC>BDZM7$mZMdFM-XB=TTPi<zU<3vI W1' );

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
$table_prefix = 'wp_';

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
