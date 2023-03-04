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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-23' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'l8I<na_!1Br-AQu3AU^X$5,R;6CuDb|1%j}GZy%uP:y6U|.@4P(tqOmxq&d!jTgC' );
define( 'SECURE_AUTH_KEY',  'h%LF[#<BuQ[h3TxV<%MFB2&NP9HpPo}cC**Mh-fpn]#<y%NW)Q[8QjXt/y>>kBj2' );
define( 'LOGGED_IN_KEY',    'N3URtu8TJBfdz%qCZuUvg5N7g=]We@?[3Ux9BE6nlYlGL+7@)7_0o_0>{PF@GVA@' );
define( 'NONCE_KEY',        'n:Sh-etMhjVbv&:n^2T>oe0{BaD~E6bt<)+/?o[Ab8Z}uOZde4,iK+:[KLK`#6-o' );
define( 'AUTH_SALT',        'm8(xfjzh#:19;2|Pom-W-rM6%O~Pc@c*Y4R2)gY~9J>wC(CUEf6UH3 aA6kvP{8W' );
define( 'SECURE_AUTH_SALT', 'cyZfFo4)].e`9VX)YHl1^7(D|y`ivNfw4dE]EFc7^?PK9%M^T9hhtBQ|BW5njE>L' );
define( 'LOGGED_IN_SALT',   'jMlms+4+/hE;gR{+NF<1gmEX*lnu/vj^p=H >,}_uwgP<G0+KNQ12qfXgSFdXAuC' );
define( 'NONCE_SALT',       'J,%8x/^=k+u~hY8nduqL(=GZgD 3GGB2j$}nFu^6q,7mMCGwSgA]euo[-d7C,oGn' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
