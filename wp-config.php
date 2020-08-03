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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'WL2CHp_$9JsH>R@#6CXq5fh[UnU+[X8aDthe&cq$k%2[y+BErnmTdZH3%_l>]CCE' );
define( 'SECURE_AUTH_KEY',  ')TkaxdQz`-z,;]8j{O#`9$KH8e:]67D|Zy.9dDtcJ_,[?|j;4Ofb>LLEX-oKGoO(' );
define( 'LOGGED_IN_KEY',    'W!C_sdM,.>BJbSr<F}80y Z+D J,Mb@sZ!^sPnnyANCH<[%>5`Qv>G99P[`)$c0T' );
define( 'NONCE_KEY',        'L0wu#6eBdt{Q?2M-Mb?T<3**HU,+5(h)Cs?r0Fb,JNn<9cO}t9K8R&:fSN51D}fR' );
define( 'AUTH_SALT',        'Lx22KR`/QLVIyz19K= rBfuSOLm%VbXA}/~MvJ`LeT{jFE^-N]KS4cm~4%ATVq>A' );
define( 'SECURE_AUTH_SALT', '7e{|<.Z])EUk-!PoeSQ+C,!=Nw~q#kRaVg&,D|9{Oty1R|ecyHC@$)Vdk,4$1=$,' );
define( 'LOGGED_IN_SALT',   'qity{J`6]-oWJ;O>w8::4m3G]cvbf-&XEx Z2QhD_z6~N~c- |BMyk#6,iGNZ/ C' );
define( 'NONCE_SALT',       'L4?@U9Gs_D?H[OqyI2aOiHvJ8FWm~j:#}vUkD*ijOUp+89}n09FgCSEvpJ2q+Bp6' );

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

define("FS_METHOD","direct");

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
