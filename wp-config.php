<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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

$cred_env = ($_SERVER['HTTP_HOST'] == 'rubicon.loc') ? 'dev' : 'prod';

require_once 'credentials.php';

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', $creds[$cred_env]['db_name'] );

/** MySQL database username */
define( 'DB_USER', $creds[$cred_env]['db_user'] );

/** MySQL database password */
define( 'DB_PASSWORD', $creds[$cred_env]['db_password'] );

/** MySQL hostname */
define( 'DB_HOST', $creds[$cred_env]['db_host'] );

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
define( 'AUTH_KEY',         'in^o@Yli]x{-SSjI3kAN7lo@M>#UPU%i_C/+`/nnZ=vuk[#Uo7~!lKDas{pb56q;' );
define( 'SECURE_AUTH_KEY',  '+tsBciGDxO*g&:kn8/OmnJ,=ZavWEh} PMv)Nhz%ABar]s}}f>,s`&2bf0nY@npT' );
define( 'LOGGED_IN_KEY',    ' DJ]P0qpos1to^2)r[Fwg8$elz#u^o?{5L_|erSm{]quc}3pe/.Q{K_Xy:h<|xZ}' );
define( 'NONCE_KEY',        '<50m$;N]qr`#/NUzxcKYnZB-<oQp1T%zYC;_<ap^q<NEVzkT,O-.:(|Vl=-[7-R*' );
define( 'AUTH_SALT',        '$^|.iL_7NZo}W^N:rR(aF9^,}1@=0$;V4SrHL}N~cXh-LO27C!;OAq r5zMDXL~R' );
define( 'SECURE_AUTH_SALT', '2aTtw>K(r!n|#qfBiYfZ?NIN6kbaN*Ytl@>y67;tp|(&TJ<{LzoxJs/bdn[w3>JT' );
define( 'LOGGED_IN_SALT',   '0EA`OWv[>S}M>ev:#fn12[^*n}zvJq*K4*~a56>{E)TfDqGxhcz~*U9;PsV?%rI#' );
define( 'NONCE_SALT',       'U]IiNX~?<^zm_iR-4]awa}3jv#1I5ywv%d[+1#9*ej!=owwFl]$-FJ)Fa!&8@o>{' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
