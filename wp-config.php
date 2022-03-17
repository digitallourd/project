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
define( 'DB_NAME', 'project_db' );

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
define( 'AUTH_KEY',         'TwlOI{mjHX@Hha_}(cCq-nO&`)1Y.tjv)c_IiCFB_9NH$>1c:%/Z9.bW[>p?vnA!' );
define( 'SECURE_AUTH_KEY',  'KoS6o7kgPBN<I]GEhW5_T/cE6[,H>*#N_Or_#vS6H^mwL>#wU*YAyRET^g3f&dbU' );
define( 'LOGGED_IN_KEY',    'sRR/@#%M|Re}M,!,@*@/43gKTQS]ySgwQ7]:P(z$qJ+cbFxm8E{-)v{)Y+^eN++0' );
define( 'NONCE_KEY',        'pVYC0VE2jxv*92auVtX}-?OK;^RIQFyRu^D;jIKG5_wTg:#`ckoKJQop+79IRQYl' );
define( 'AUTH_SALT',        '%M]#~>SO4l|rjj>^.c?qB?v+@yPp0]2-z6@It6PoB0w clS|Y{6YLT7s`*9+(2.U' );
define( 'SECURE_AUTH_SALT', '//K-?g]jo/LG%&(}/7LP./,ap.@a.k[VdEFn*-2h*X3Lcq=KQ[<athH~4i#*6|W/' );
define( 'LOGGED_IN_SALT',   'q{x5{Ra$~G?NcH3fV2zL>UM3|AoBpn`t&,>k+ Fal+aTF@5_hQHs#h1r*4qOv:;f' );
define( 'NONCE_SALT',       'gI|LA{.F!Ri`EbTqJgSta@:Mk1}S$c`M`sKJoUq(NYW7JVYgaqa/=3apVGe}J(RS' );

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
