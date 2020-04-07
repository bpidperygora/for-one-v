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
define( 'DB_NAME', 'for-one-v' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'E~s>JL#*Tp~MGRnWg&h+*LIJaC`fH;!UIilQ>-+7->9[luniN]Dv,{Kf|(^4>Q =' );
define( 'SECURE_AUTH_KEY',  'KK6bZXgUK2D+=q7owyKy(YOls<@J*5 Ri}gB(mC lpsI-$|P5p)Of+^a(oY;|[nH' );
define( 'LOGGED_IN_KEY',    'GRhT5A+d`ks@%xYC=Ir^n=iy7YoUl^zz6My3Ju[VpR&ON0:c2O&5&Xi;}PH$Gan$' );
define( 'NONCE_KEY',        'e;WR6Vzs~_9RLUddZ(rHHL=wUL6{<u]fkL^XW@?E#VDCb_^igrihyBSVL5eDi9ox' );
define( 'AUTH_SALT',        'j+OVV&{X{`2a25eJ0J}?C2ZgKyHrxE&mSGE7wd%g@$CMoa9cf^$VwJfkT%]B]~5[' );
define( 'SECURE_AUTH_SALT', 'R#f4PwVV{!fxN?K:7 6K$XNCA@7eAAf#;s_kmV(cEG-hw{cyt5A<8)=im Isza;&' );
define( 'LOGGED_IN_SALT',   '=UDq^lBDNyO0 (i-:i7~ooX:N2_hO/dQ?A.K+VaG[]::D:5ySpPiqy 5WsZ+.L7}' );
define( 'NONCE_SALT',       'zQ9g6I7EM~O7$-~;q(C}3%377IvoGttC[{3rQP&x`f$4IU%!r(e9?bpp(VX5qU__' );

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
