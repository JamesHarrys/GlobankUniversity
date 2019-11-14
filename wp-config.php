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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'globankuni' );

/** MySQL database username */
define( 'DB_USER', 'james' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '#Y1Vkc1**C0<Vvki^kj=g},v^A9r<MCDJ&LE|x[A,q.~-Gp`;#OPYg2&`_/inI*k' );
define( 'SECURE_AUTH_KEY',  'l%%v^3,T;?ox*TS{]$)%N+LR>im/&.Q9ha`0?6iXrAg02HJf2Ko3FXf%B,ueh.>D' );
define( 'LOGGED_IN_KEY',    '1p7TwURn~dOlBV[!Bym[nG&OZZ{ hPJT:m~?fs/ApyHUqV/f@*%1MY4`<3v.O)*^' );
define( 'NONCE_KEY',        '@}$AT0$S9R_9^6:@D~w|i>^Y6v@<t4-Ko2+VrJQ`kbk$BkVCCZE`(sYaf^~Ej~cl' );
define( 'AUTH_SALT',        'uXcl)Obz1H%3HzN?evwK<|?(A3|,@[wkeNViJ.?>l RJr;o(Bdd*v=^2+5b~y/{g' );
define( 'SECURE_AUTH_SALT', 'rc[<j2HX~z!X^Sx_J;~C<NT@s$b.qM`qcq4UVX@J$dAvEY)M&ldB^^jXQ85`b4_O' );
define( 'LOGGED_IN_SALT',   'a|SwfQ^r>@xw:8,m~L {K% UHH4MTnJ!wqkt<Kp6[AC.25)`lR}I.,K72;-8z>{>' );
define( 'NONCE_SALT',       ':,,$^}~H-NRTnykD^xgpMIKt/?#[y&WqK!*q!-p@xbHJ?nyaYQ[N3arP?(P(9Jk^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', FALSE );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
