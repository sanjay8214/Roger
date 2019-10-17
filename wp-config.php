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
define( 'DB_NAME', 'lazarus_db' );

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
define( 'AUTH_KEY',         'F(.swbf:VKZ<J|]<%M?@?*&(ikY}T1z@# |Z0AXwf.n%s/ -laa%<-_t!^{*=y|x' );
define( 'SECURE_AUTH_KEY',  'XkJV!F06oB3f9.3-l?C,>~cUGjPkVrg K=pwegpf:P!7:IC;/Ma9K~H[E)]&pn1j' );
define( 'LOGGED_IN_KEY',    '~cd}!RK7H}U%1A*:k*oF:FE<.fI~a@f%N  B%1qa|2QoQ;P5M87?dF:yeC0Vx S|' );
define( 'NONCE_KEY',        ';z]b:MmQSjUkmX<%Ln: EJQGsn-dXN?ByFeO#}G%,)g|pm?-Nv$h0VEZi4Dn0]IW' );
define( 'AUTH_SALT',        'rUx^%2*C3lKAvSo=7tLo$2cnPJ,WHgjoB!pm6=.aeC5`Gh2[57O4V0-.CGn&xjAe' );
define( 'SECURE_AUTH_SALT', 'FhK~^`r- Y.m!D:7:p+e lPu66S1FPTvZ~Sl.>08G^m@*}S_;>#I+%1t,pWtzpz!' );
define( 'LOGGED_IN_SALT',   '5V+Mb%=2Ej8_@d/SGn(?EW!c>~ea(an:,Jxs[6[/pSS5X_I}LI:S*3Q&?Q+9MwiZ' );
define( 'NONCE_SALT',       'f2[%H;QS&s|_d@;]g|9D:tf%;XAZu7Ojg0U` k^M.*#Or9]|cV$2GB-&-a81@$Ue' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
