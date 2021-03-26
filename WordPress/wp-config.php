<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'GVS' );

/** MySQL database username */
define( 'DB_USER', 'APPLICATION' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ZgbiWy&5mXyvEr4' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'DGWW6`/}a0:H1.i_VN7&y!VsL<tIYgfsP;jxIIc+Z+v0HnLt4wufvrBM!9%[if4q' );
define( 'SECURE_AUTH_KEY',  'm(&k$VsCu4l{ug[B4tM[2kZRxWPxyn{U*0Q{[kICr(F>.i3kC |nh=cwIO^o8=<z' );
define( 'LOGGED_IN_KEY',    ' xC)bJDW%R+ED!qzS5r3/#nW0>*0,YYasDswk?V<S:_},|V}sVeefNn<t*r|b={9' );
define( 'NONCE_KEY',        'O%8D,^@~zk,j2@GHGZwcds?IgmxPIHT`AmoNy@D0!92o>m/z%J|bBG;wGlc:Gb@k' );
define( 'AUTH_SALT',        'OD6ad3b$]rHr4Wm.&N;QitM9!sYP5;G|INxI9d>P>[%P,^9$}gLG%!K[u0`&V;&7' );
define( 'SECURE_AUTH_SALT', ':/wJWH}Jl?H7Fg,FqZa)DqO!iceXI@`Q<k3WV@1-N_A2Al`HtTbxnS]Az`Z<#%L(' );
define( 'LOGGED_IN_SALT',   '/+L`aVph=cr[X2^DFk>,X!&|js.q!|69Pb=|MqSddxfmT&r,nQ{}G#/[#Mpfs4{!' );
define( 'NONCE_SALT',       'wgPn.[=)[02TF<F:o%i/E0M7yP~lI?dCRj0ve{91)B](c!oN[Njn;E.L1&fR|.)O' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tbl_wp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
