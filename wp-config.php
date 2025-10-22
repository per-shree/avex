<?php
define( 'WP_CACHE', true );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u630462731_C545q' );

/** Database username */
define( 'DB_USER', 'u630462731_AC1zc' );

/** Database password */
define( 'DB_PASSWORD', 'pxjMAzTO4X' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '&AifqLgA-Z4a$?h3n^PG;>&qWP(Hs2y*z_,^=n[fGyX9lI[4_4U%D6pzj;m^I)IA' );
define( 'SECURE_AUTH_KEY',   'G2&pr !xt`x0uUfY:jvYtc27Vs2;tRWh~(nlwTt{r:p?nBu<<*~X;n_4K5]eS *5' );
define( 'LOGGED_IN_KEY',     'e/Hb&o}nx0L=BYJF~FW#jf6M8Lr.pWI;$9hn~|3Uv)_Zaq>J+$;U=X~w-t+w)?w}' );
define( 'NONCE_KEY',         '/EXdL:Uv_U/eCdfmA}xo;Y-Bbq}z+^Qad$rqWPWno.~XQVby)E<JeU5`fF8]eTHm' );
define( 'AUTH_SALT',         'Z:[a3Z.|H`qFwZw%(L}(.^SaG=4v(*rLH5fmj+}:ky,3*T8C;i<CH|OMiqlXU9rB' );
define( 'SECURE_AUTH_SALT',  '*dC,O34qpD_p56_.h-~%DTb{Lw;p*,UMb2nSonj=9Qpp:wnCZHs/zVbS _Iu)a6!' );
define( 'LOGGED_IN_SALT',    'f+?#8@X^Q.%AQ@7*-z<{Z;lzj~RAS8<~@V|N7jw5xu|Jp=|eAvt4Wo`HiOP2aaaS' );
define( 'NONCE_SALT',        '%Uq3Kk:53:6~v0W[`>WT+`|umg3hr~H_v;Jvha*<fSb}674M)SkC^2/0q % e%M-' );
define( 'WP_CACHE_KEY_SALT', '|CndL(nhun]}vei2p5)%Cd<R`tC#>7w?/RG;$_*RWlKjX;$4W @:YnX3 *o^<W04' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '4244c95064e561ff048097294852ed3c' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
