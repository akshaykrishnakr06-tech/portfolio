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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '2o1!g1XXn?-mzje*`V9`n;96Nh5{dsuCy1&dFp6L%x>zWOZi`!o%}kS&=%it!!m4' );
define( 'SECURE_AUTH_KEY',  '`J<6dR:I&=0f!loQ @3U3jA88|>*T,W##%%z`z=(S6sCQ6;,SywGG%Ct;ND2v#8y' );
define( 'LOGGED_IN_KEY',    '$Y}oZCcRf:OMk=G$%/F8@KPvsYGx/n1G*%+UuDH8=i^(vCe+^>^A)(KH>e=9(m:7' );
define( 'NONCE_KEY',        '3!Y 3MK.>b.LF4TjuX13ob`uw&7Z|}=>jN7V}y&7?q#X}as^nQ=7)K2^~7pis#pl' );
define( 'AUTH_SALT',        'Ms 5QA7}|$)Hr9nhybf<pvDz_yzt087i`ngp*W6:Li*{1c`kPX%5)k$<D;@guqKm' );
define( 'SECURE_AUTH_SALT', '>Xg@sM&j=QB)Qu~Effmq_O#Z ]4B_JHsT8~C&q)=^C0m|}SxEgK@`,^t!PFxl({N' );
define( 'LOGGED_IN_SALT',   'MHl{OZ~))27ctgY*IrrYq>B4Qp 0z1F^3d(!+loa`k5A$z~|4_R.;Vm_TN|fbb;g' );
define( 'NONCE_SALT',       'oA=1p1ydqL&;N-rZher8Mir@?(m+xRK!|0xp28M/kqW4V=;2DhezR=n{y~[}*G4~' );

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
