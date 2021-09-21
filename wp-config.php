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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'basededatos2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Z:]PK<8Y@/a;d2FXT!OYrFcC+/Fq/R?jEBB1F84/B%9zU>t]!IF0dm@cL&*taSSO' );
define( 'SECURE_AUTH_KEY',  'Ose4_Xt(Tsmn!c]:O&l@8R$cHmmU>(1zP+o;^+&7IT_[*P{mUgONrPq+JjQm6XMd' );
define( 'LOGGED_IN_KEY',    '$Znz[&A<0eoQX:cpI+snwN.^sEASlr2uX%GU%T>/Fy2z?1<98Ckf%^g5Rw56,V5>' );
define( 'NONCE_KEY',        '@&%%aR_8,YFTr]kz$<k8}e|nlL6prYYWoujL;k,q[46#7ih6vRVw@?ZYo-%k~.f5' );
define( 'AUTH_SALT',        'cG5%GGI&GNvO!W>A$]zU*jF_nA[F3vkgq[E$E+q(GHcP^/ ?UoI7H|h`X1hHLo$D' );
define( 'SECURE_AUTH_SALT', '}8.Fj{H?1!qvW6{sYbX]#%$HgEb&5VY^<C0y.M9u+f/`4YTuux_wCC]yHhqFLLie' );
define( 'LOGGED_IN_SALT',   'ZuI?Q?s@|aI<}0NvE-!y3^{w6{$o0qMH(bi(ThPFoR[YRV1P/]h[bHiH_:Wet8$(' );
define( 'NONCE_SALT',       'k~=d1UD~M/pY,IWF^F}f|[EjF:r/r}_JA:UDU_&YiH7y~?OwnWH@g5w`n ;,Ton[' );

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
