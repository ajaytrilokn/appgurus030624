<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_appguruss' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '0W~s&:eYg(~V1/dK$xOsH#QBr$ `7P8jiRV;:lU2= A8jhOoEcZ1Mq=IbYOWnWM!' );
define( 'SECURE_AUTH_KEY',  'Qr0o!.b0B>7CY.#+)vi7emR<.e)2emnO!Y1MT>(EE5u3x0oMPdI3G`8xNtjjJnF0' );
define( 'LOGGED_IN_KEY',    'K#%k$SC#uAGerhKz*Z-c6 ?x+@Yv|6S<tpn};1Mk%nuQWdVjw&bfAJ.@@iNxOa97' );
define( 'NONCE_KEY',        's1xwcqzKs/!{ZYk$<VVW8c^Anb[MM+P^MR]y:3mA6~FfN/e<:6?q}P_c+3CXF7z]' );
define( 'AUTH_SALT',        'VX]N.AFKvny>)1O+xrp7!2{48Ks:&GIBs 8@L:0NLt>Lgv`M/18au)NQ,($yFM84' );
define( 'SECURE_AUTH_SALT', 'A:xp$Yi)_Qp)4D%Vc`?T+p`f_@+xgJH$a2&!MlEw#4 l iXX?}a9{0P$44ZZ[^?>' );
define( 'LOGGED_IN_SALT',   ':u+E1j)!q/tBRAZShz)3.~OoElUaL.U@E|>ukNyvd6h]zYyQ>?[={Qj9Zw`AUwWE' );
define( 'NONCE_SALT',       'H:=+NCls6F,a|WRhmtg<yLiai,:%SOsDEPu/<D+YA|)PI`;D$LIoa0$e@0K@/YI=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', false );

define('WP_MEMORY_LIMIT', '256M');

define( 'FS_CHMOD_DIR', 0775 );
define( 'FS_CHMOD_FILE', 0664 );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
