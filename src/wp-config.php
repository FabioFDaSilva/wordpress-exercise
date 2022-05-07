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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'my-secret-pw' );

/** Database hostname */
define( 'DB_HOST', 'wordpress-exercise-mysql' );

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
define( 'AUTH_KEY',         'Fr~L@-{kD[I3LBxbza&,>3IHiA!svSxprFlK;GsZ|4-(sR;FBrZ6IR=/ACOb4Ajd' );
define( 'SECURE_AUTH_KEY',  '/Z>IT+?ozjrL(1xdh#ie>5k^6+[uL17c,;qEXPv@iM!3K1J2HCOmM73.+s&]GD;;' );
define( 'LOGGED_IN_KEY',    'Z8Qi]cNqU~]jx38F,OThxOkvHP4Cz8TEeq(/R5TLv~boC@@9bPk); @HXtPyZt{!' );
define( 'NONCE_KEY',        'T4jxn:nI{q)?rjST[Nq#q|/1<0*ptIvja0cpn }dnXHh|P4Vqo+[:Se<`d&RtwAX' );
define( 'AUTH_SALT',        ',TDR/ b!!!3)&vCt=DH+5N%!PhE4%9&BHxfFmnf|vR4y.gitu<gu(|-.%Qnb*px1' );
define( 'SECURE_AUTH_SALT', '1yc>`0b&o7fL72f.0/h[g9#[x;LXW*k_eJHVLnk/o1_m^{NRP-{m>-Qb,F~okg+&' );
define( 'LOGGED_IN_SALT',   've/tiKiGK#{X|K!AC?UxFJvzxb;6 5Ew:oX46u.Xv*GBq;!j@C*J0j|67`hU[(xh' );
define( 'NONCE_SALT',       '8SA`NXBt2~H.g~Wl`T<sqD5bmpoW(a=L2a/GNE%#6diyHtpYI,E@##$z:F&sPw$O' );

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
