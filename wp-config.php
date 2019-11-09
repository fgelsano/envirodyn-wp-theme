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
define( 'DB_NAME', 'envirodyn' );

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
define( 'AUTH_KEY',         'O3__}#D7,BD<zN]$tma$d*IuGX8>> /vT^y7% +sJcgt%#U,,.ZXmp3EXEOw}HxP' );
define( 'SECURE_AUTH_KEY',  '9goXL1[FDaJXi{g$>P);F3{az`,^NOmIj&qV]<Eb{C`dR<4>U_Sq4<W;MhTEydw7' );
define( 'LOGGED_IN_KEY',    'd3$BaF)]>5#o#M;?|B<_n57kAsbL}4c.-Ej tQP0<qfKP=xxe*`#LCv5w =%t)Fi' );
define( 'NONCE_KEY',        '}W!nT6l;[|([jY8oz%iCs*$Vav*rn/-XF&$g1zqB8GlPrUL)`_ED.t*)r{5ghj&i' );
define( 'AUTH_SALT',        '~0O?j@N p:AN4{b{]>hWPz]p;#S:a?GxcpFoiW-i?WchSKgreexr^_kA({RE/a3+' );
define( 'SECURE_AUTH_SALT', 'YV41Y=:gC)P[@*Q:`9+T,g,^/f-IF1VA,=b}7rB=L3;9|R=F~e:iP_9KH7Nn>cMm' );
define( 'LOGGED_IN_SALT',   '{?R)A,ad=_7(n<F)uMbgo #gTk?_qR7.G?]#1uN=zF%wkq(5v.4I7pA>1o<[1%IT' );
define( 'NONCE_SALT',       '1$oUar]W%2If|Z_{5Iqr8LhtE.p23@OJ~w@Yfe!)bW`7`z-=0R}x_+ $r*}*?%2?' );

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
