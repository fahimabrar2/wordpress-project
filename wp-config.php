<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'fahimabrarsiddiq_demo' );

/** MySQL database username */
define( 'DB_USER', 'fahimabrarsiddiq_demo' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vH6]M_[aHTo#' );

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
define( 'AUTH_KEY',         '`h-u*zV|+>AX2XM~H}z,S&-hT=z`bC0o)b71A`C,KoiFL.F~%w}#nelF6lC}]yDW' );
define( 'SECURE_AUTH_KEY',  '*u#>/)&xpTs6ubG`?sO6IsUb(CG|Rdf,9vJ`P*kCQ!mLQN!;-/kq[DJ,=jW<bs)d' );
define( 'LOGGED_IN_KEY',    'Uk]xB}MLEd7Tar#7~kc$E4e9X|K>u31FY.vv|H3^ ]$,m+pK=uZIJ!_9)(nZh52#' );
define( 'NONCE_KEY',        'l;{^F~t+R~5a6,/KcXh2{GR&H[F_qA1oxmPRk/z#c=,CwyH+?eGxo-]{:?Km0XdZ' );
define( 'AUTH_SALT',        'HZPEUuU57%DYqv>m>5v 2@^aa|8q,r%exN0x KX|YRJdSJ<D(^3YTr&L{RM@c/|V' );
define( 'SECURE_AUTH_SALT', ',%ES9*!9r-<lewctApDg|m#gNNXctSw_mN9n#tnh-hoY^P9?(ILEA0wGrU(ke$JW' );
define( 'LOGGED_IN_SALT',   'C<;Z.}%UB.<QX=P=V}x~D#0F`=iZuq0=b!eMA;(jkmW5fI&n*Jd7/QZ/;uTnA`O^' );
define( 'NONCE_SALT',       '=w=.~uljt`Z)noFl^d$W|)._yS?QFnm>3m]y-ga!$%yH3M?stIl;&Q@<AVA:K@/&' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ss_';

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
