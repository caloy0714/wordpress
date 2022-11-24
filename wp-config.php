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
define( 'AUTH_KEY',         ';lar+h!$~92[sQ=+KGnbIrDT_#?2|tsgSXW`@n.n2j/^V83*Wo_KR=!c_]-Mqe),' );
define( 'SECURE_AUTH_KEY',  ';0o6sYFWPv4Y4g2N,uh3(~h2u~c1_srF;*PFP?[c,D%h)E) b4Gi@C7c#FvoTLSp' );
define( 'LOGGED_IN_KEY',    '>Dg,9.^1q7>OgyHNxizwm=5=tobzD;odQzeC`Eg*E@=G?Gtt0aR/,=?,pZC!`7]h' );
define( 'NONCE_KEY',        '{%}[H+}X;Ev?}sdfWs;J7pN3|nx!c5+cwiQhr5]9*]LOZvN.5m#H~]nefkZ(h4wA' );
define( 'AUTH_SALT',        'Z>Hf_ sGOe#k~KwyJpv;CPx9d5r7l{GI2LdsSJ,FzB?tp,@R{8bccNf#oge^UY@^' );
define( 'SECURE_AUTH_SALT', 'Ir/Z(avIpty9a>UJo;CYlb([nGz)(;^#IA7$:_Ppk*H)>J03$`.MOaC*|?qyu&q5' );
define( 'LOGGED_IN_SALT',   'cUs87tt]UxyeS*Vl!i((tpF2A;dp0!l0:,3c@E8 y%3$fUu#%@U~W>}vyQR~D}sG' );
define( 'NONCE_SALT',       'W<b..Rf_j)C;tu/Io+|pTa2L6vjdN@,[?+lIky+G.r(4<@A^Idu(+y;-T0};JB5P' );

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
