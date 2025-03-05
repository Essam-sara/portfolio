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
define( 'DB_NAME', 'portoflioo' );

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
define( 'AUTH_KEY',         'jrcx3*+7^n7n7(|ZZZFI9U]%XB;QT*MRDbVaq V|x^t<wjl1>@:yX},mSI(Y5yJI' );
define( 'SECURE_AUTH_KEY',  'TY7 _8s{} -@gDcu{$KbSZU<k&{.=4&B:|qu>r VH)td]];]FsSv3f!yM)!MG`}[' );
define( 'LOGGED_IN_KEY',    '*ajag~*RRWk}6279kKEr)tVZ363>V0f>$aV[a4Z PN]081j@z-5I;!VQ(N[BPd*-' );
define( 'NONCE_KEY',        'Z:P)U<8{&:MU%Se&I|{x4?q4@0u+CnZ!UEO5sz^<ma`/E]q:MC=ou[n8b$jF%HvU' );
define( 'AUTH_SALT',        '-FpH5h#=gAdHgkH{)beb&Dk[JOXH,20,FyfQhyrx%1I:fo{g>WrM&Y6AX!yA(694' );
define( 'SECURE_AUTH_SALT', 'BhY:NBr`NXap3uaWm1sn2[~Zl7x&UIk5:3nR_o4iU4n&cM ~3inu1[>W}r_wNugB' );
define( 'LOGGED_IN_SALT',   'FHxg03Bg.rx*HUlT(6f4bv0THxPG|c3U4;MKsNE#}`=1{hYs1?>Rp.#+dO3w.56Q' );
define( 'NONCE_SALT',       'w[ww!iZ,3h}om>Gc2#VF}r1Gl5{i~~2)S$6?c&IXklt_y^^e0)x6P5a98Jf5X Vh' );

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
