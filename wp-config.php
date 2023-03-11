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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress3' );

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
define( 'AUTH_KEY',         'T?FX2nTcY{:TWn0m-&:bi<mI&+N-dMI)4{}O(y<z%-m+5MO2cr*1LpE-CTt4|?9S' );
define( 'SECURE_AUTH_KEY',  'niL$h;_}kI`_3ne{j/a!l b9XnIF0S_?j0L@.A&X7j<8%ho]M5zUa4 j|<co* 4/' );
define( 'LOGGED_IN_KEY',    ',_Ae_5.4Q&b[j^9+e0Yx_CN3[dl*hZJ@{)f.,^jRc@~&r/`oJL# !It>CM=Q:$W ' );
define( 'NONCE_KEY',        '%dV_KBQxBCN3fsVC~S$Nv`:S| 9iw{bez}4f%XPh!pC_ 04^Byx?He^iH>TS!HKa' );
define( 'AUTH_SALT',        'y:g_=@Rj!t_jZop@Xy=X)0}_MjQ-L#,I=Kp]YoMf]i_(6RK);W$6n]h-H~94}A{+' );
define( 'SECURE_AUTH_SALT', 'M%{h3$>Y~eUIBzjt?)$fwT`eWIw7jh8=/ma,&e}c0B##jL~#4yPIq2|A{/~z<YFM' );
define( 'LOGGED_IN_SALT',   'rez/VC(qE&x, |u<r;~}HJ~YtDU3)0dl5_Fw9VECn/=/2/OEV}[7cBF&/T/@mO9!' );
define( 'NONCE_SALT',       '$M>]58@/UU`GAr)Q8I(iY_rr-b~xG&Y]5q:m&3+& j ;)p|.y()y5Q/Op}Y{@5s*' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
