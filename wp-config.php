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
define( 'DB_NAME', 'unisystem' );

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
define( 'AUTH_KEY',         'TVEgM3)o;$)n]IWy`[#W*HGa?+D7L56evAU[%aOw.w!1OFCo&t:[%<p;nN?4n.bB' );
define( 'SECURE_AUTH_KEY',  '7fz50yO6)OwL,oeW6U!EBy#1+(ul*=IM<}w8xr 7b|//KI[e[lW#?:}+W<ZOFRyP' );
define( 'LOGGED_IN_KEY',    'i4SXR#d.Dy{c8*E]PD9{)UJ29S;QPq*oq[00,0S:kDQtLT]@*^3tp~BKb w c%#L' );
define( 'NONCE_KEY',        'PV:Kpx0#vfU+@Ah1Qa@hsP?pdOD>~srZv(2%e%q_=Vux<Z#H)R~k?@Y~Kul{JRA-' );
define( 'AUTH_SALT',        'V7&ZeqZ;f25/MW!`tt5={An^;T4bH!PWlTbyY;|;Qrg`y04o]i72_&HhX:gugv3E' );
define( 'SECURE_AUTH_SALT', 'H{}Uv:p%=_oJ)cIQ[(-va>#lKw9WgL8pqqf*Bp]p3(Ifcgq+o *)djlRA9qq^:?&' );
define( 'LOGGED_IN_SALT',   'R;/!Oe/(Y7BDq0^0/Iz:%g./L7h.8OlHFay2,t4=M}L_~STtDfcfbW37Sf6OMa*^' );
define( 'NONCE_SALT',       'Ax, Hh]@s0>K`H+w3nMgM`c<A|B+eNNr{C$#T3)FY</%Vz5fKT-<JNZS]LP;Zc0s' );

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
