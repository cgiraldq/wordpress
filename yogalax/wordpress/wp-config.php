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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'cgiraldq' );

/** MySQL database password */
define( 'DB_PASSWORD', '08108217' );

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
define( 'AUTH_KEY',         '5N>4-2r|Q:9aK_zUY?VQ]WIvp^}:Zfx R#QBZFgvCEb07MpICXQxC,w(yz= 9T,A' );
define( 'SECURE_AUTH_KEY',  '@r9`KW6#8om{H M[T,26IE^OL$<% _f>/yR2Z8Uk<zHggdE|iXuC>3vF@0YWwdnj' );
define( 'LOGGED_IN_KEY',    'zkZ9BGJG/+xl}BmytHo=B$DwTQ$gK8B:;iL`.#]j:u4+h>670zHj4wIt`BQjoK/b' );
define( 'NONCE_KEY',        'H=B?Xx]Z0kV9P;r}D.A.]$q(Glt&YSZcFRSHpPq$<rXwfbeG1>gU!K;R(4,DWdd4' );
define( 'AUTH_SALT',        'zCz$[p,9sZ?R`6NB|B#bJ>RJP$Nw`w}]K[zEC$548^Sw-Rr0J;$YwJ!56NWZA|I#' );
define( 'SECURE_AUTH_SALT', 'W}f5eo5,~::SUTD6K,*8<>_?4ze`SYFiQ}2Q9x>.:h{V8ZaZb9f`Oi9sa:e-.{oO' );
define( 'LOGGED_IN_SALT',   'S3Pa}zLj M.YZ*vI[Q^^n8%:t<.kC.8k32F4~z-kwvokF= qvh>mSIE29`aJ=-r/' );
define( 'NONCE_SALT',       'nGD.i{<g-/8~RhIpRKy8i |K%+S0J)y7!Gi)2<JfFdy#9L%C6<TTxpm%-BpD0S_1' );

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

define('FS_METHOD', 'direct');