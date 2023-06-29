<?php
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'itc' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         '.K]z]e,4SpSlW`pyO=D;y>->90BVHKdGs0EUp5;y-n%zuaf%;fJOs Dl:idNhN|<' );
define( 'SECURE_AUTH_KEY',  'CYG#`4)q)61cYl7*i}r{3h6Vw-$Jh%n}R%}xg3Y?VIip}Jr:XP5)O>|RPJ-)`nmI' );
define( 'LOGGED_IN_KEY',    'D{mFg=N:S <D~~L[)6b))UJRFt$KHx`GT*>g6AnF%luZpkk&bSuB}9UBa~Lcngj.' );
define( 'NONCE_KEY',        '~ *^C#vPeM5Cr;hE8<J|s@p`-V+r87lh=Oeibav@0|geXHKW6$4(/<Y*2XpK]Im8' );
define( 'AUTH_SALT',        'DvzNH5nP6#42y4pGu6CWo!5g6Gd:$r@C.{7=5ayn0qX-7uY~{v[Ex-E2[DZ}.#[%' );
define( 'SECURE_AUTH_SALT', 'MY@|m9c--*]51L&</S[p}V4(J$md;y.HgEzjj!h4bn9-feYc/iZR{Fnkr_&#4*6e' );
define( 'LOGGED_IN_SALT',   '9sQ3ASP_cLY1)s.ePt,P}^ !HW_v0pWU!|;f$gDA$07s;*TBlN3r;J0@k!vBe$}+' );
define( 'NONCE_SALT',       '`k@nZd.A>&TT2j1H3XYO  QFo;;hs`Q<JOK[ [,=Er~LAo0liX_ 7;r~/~?Jck/}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'itc_';

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
