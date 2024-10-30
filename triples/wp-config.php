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
define( 'DB_NAME', 'db_triples' );

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
define( 'AUTH_KEY',         '|Agmrn[d]0(Fy{-iGH_}WVtU$NyntS;)!oPSf8g!YWi*MUg(23D%[18LsM$J,XAa' );
define( 'SECURE_AUTH_KEY',  'l6O9Y5fNtZoJx+mj22#8~*V,<]Y#9zOhRB+cRW^$-wPG,3Pdb)c>Q z<=qI`b~Ds' );
define( 'LOGGED_IN_KEY',    'k8eTqupyV{= XI4pYJl/ ,qk6f&^eJ=kJR,yGH-<, +C;IXke KOnh;?)T7#owpe' );
define( 'NONCE_KEY',        'bRMpm+-zp9=)|aY69^WJ-bs/(gJ=s=Jk{=QQ@a<uIx(u*]RS?{IpWUGhxehIJ2?d' );
define( 'AUTH_SALT',        '96-3Z5FR4UfphVQsf?&.rxHSh/:tt;,l~JN,&~FaW}Og,,!JGkjfSJgVU5>;n9u,' );
define( 'SECURE_AUTH_SALT', '&%M)RHW?e@SgEfrm3a`by6c{KzLS{SUPjwcHuwyG1MY6Wt?8Y|$TzJB90![)6FJM' );
define( 'LOGGED_IN_SALT',   'lwX*Y6tP@2E6!Z}>9.{ys`rnpr!&Es$5mmiQQ$z2}28+_R`NlVKA&!eQar|Xw%9;' );
define( 'NONCE_SALT',       '51q,E@#*ZVfD^D}N~/&/)AwmFP`@IM*Bz|pu6>*}u-KRTSkl9-Im@fUf]kjz[O<2' );

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
