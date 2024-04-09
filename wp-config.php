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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'yoshikawa-kinzoku' );

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
define( 'AUTH_KEY',         'ToR3^CnYbkO<U+depxj@];oS1$1+6BL@A`GA-678,wL$/(?(T8/e{D(R9TY]d!#h' );
define( 'SECURE_AUTH_KEY',  'oqc^>c15cX>V>6<.=(cG5iM_*5]z;?)t>*J0o03.xk=h&e 3si6JKPO2M J7 3Z/' );
define( 'LOGGED_IN_KEY',    'DzR_HZK(>#=XwVpCL6Q5!dZ(Tol~Ko6`?a}C+b3_UqY4P@<[{-uq*j`+V(_v5spM' );
define( 'NONCE_KEY',        '&mHGmx+g0Tz-aO9<#1ys@$;-(UiJXzpCNmZG3!%h_Som9Xuc)~bn+xUfPaSw4@GS' );
define( 'AUTH_SALT',        'ch3WC!7p|DR~jfP5W7K]}fq4RGGe,|U.|t)Y2=ER<R%`:us&y!Z-.Q2)I/Pw]EN(' );
define( 'SECURE_AUTH_SALT', '3/zOW^>TU8+<ZR}?m7EcJdVK]H9+Jfg+M{TAD(%>k1G9sr6 W7ef8[v]UkCLnX|m' );
define( 'LOGGED_IN_SALT',   'RIS.o(N$m= K.#OZ7[ozx3$]}8inWMt|GU(&^pX=IT(,yflF(U/!dk%$Oyhq2s8 ' );
define( 'NONCE_SALT',       '?xa1/SW6xSqWeZ7TVdpum(j@a9{Ka@T+M`hV3[D84Zmu+*=N;*<ON;+d1Rh8@e<l' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
