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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'duc21498' );

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
define( 'AUTH_KEY',         'K,1EIf6iB%_ehnwC-6xX&t#Z3T{q|=I.IK2 Q8{:6~i-Ndy $]O30+~9df-m!IoS' );
define( 'SECURE_AUTH_KEY',  '/sQF50-Ow+Ky^KNjFy.` ata=X72H%YMPskmHIVIzfjwLuIA:1ar)OOZ80fK=WzQ' );
define( 'LOGGED_IN_KEY',    '0|(iqjh2CkW4K.,##ZnqK,O0!J.Lp]$]Y,P3J8b,#]< zk+@)=_6w7$F!?1[z]Dt' );
define( 'NONCE_KEY',        'E-CW;0oRfY{|g:(3A6d^gj6L.0a@G2Veg/ h_6U|uNgbo_~X8/5*BO`;|NQ1 ]NM' );
define( 'AUTH_SALT',        'B@OOLVbG)1WV/5v?~9[G6)zD=2Z4 I>mQ+ZE}nO&#c 6L(rQnoiEw2.gBoXgVl=4' );
define( 'SECURE_AUTH_SALT', '%  c=LOliZq5RR~sC%YrzEGja2,jeqCXo)zEk[Sfx-2]z]X|>)E+`Vq:beW8jX|Q' );
define( 'LOGGED_IN_SALT',   'bt5^iK e4B 3;k2IO/h9~K?$!I0As%Y4#T;@EhIE)0kCoRv#6]:/zHn @E^QNHRR' );
define( 'NONCE_SALT',       'O{BLnLDZ7zmi4p!]v9B.[-![uL,@ze8Ke{2Vhv )q,jPU~&6p{zvuM2xXJRTTgw-' );

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
include_once 'new_config.php';
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
