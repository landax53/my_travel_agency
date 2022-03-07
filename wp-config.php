<?php

// BEGIN iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Désactivez l’éditeur de code - iThemes Security > Réglages > Ajustements WordPress > Éditeur de code
// END iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne

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
define( 'DB_NAME', 'mytravelagency_wordpress' );

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
define( 'AUTH_KEY',         'Av6^D7i}Mh{%{N/d1+ w{?{=d-2&Sof-vB&AMFYT&;i8=|,H0*k;*p{V=Pw74L/g' );
define( 'SECURE_AUTH_KEY',  '%&ys#n7sxLklNiNS%Cym+{L]J%{kz1u/e~:GkGt~26d$GzCgE.z@VMVY~?C;az}k' );
define( 'LOGGED_IN_KEY',    'zj;ion6L*i!R(|ox>Yts{)b;pIqgis,sT,0A,B,!ipFi={=$jHi1}p4OSmKQ=R4=' );
define( 'NONCE_KEY',        '?M~#%cIPA})K+9BwdQ5u=/e*)#A!~293M|*9Ri/96-3Cv^.!sF;+I2u~cMIf}ln5' );
define( 'AUTH_SALT',        'gb+~FQJvFbMFU`K.c/7HU#9Y]PtpYWjZQ<A:cMl1{go$@1}g hpJXi`tRm$C-zVf' );
define( 'SECURE_AUTH_SALT', 'f9JLQP7`-&,dJs>D Z[!It(j99V&6z@A,-wpvX5cxmiFah~3CBBT_n1dbS&u4c46' );
define( 'LOGGED_IN_SALT',   'GOCgUS)vJBZM2lRk= d3L#,|PE6)<[MO/<nFZDr2W#]<AV56=t.gXIL{M<7[k}i-' );
define( 'NONCE_SALT',       'A>vs4Hfg4[syEaVIyp>X?$M!FIV-qS:np3)tcqDjjA|2vHF|6B^vGb7dg=Pso!LV' );

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
