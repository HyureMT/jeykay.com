<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'loja' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Cws`UO!Y]^P@~0z%j^vf.eWC<oUIGvACM2rqbx.9X-`zSLwXI)D)[C#Q!Kv!q^L>' );
define( 'SECURE_AUTH_KEY',  'JkX;27wVj3s;k7.&0wvG.>PE1F0W2oZZXdpKz>=BGzwc$);ls}!td/gR,#qs*~]~' );
define( 'LOGGED_IN_KEY',    'd-&K3&tNz<+@]BAyu]69?nHV#~E8HU2cPpR[* &@FaAR<g/f>bir]b9;]8S[:{o.' );
define( 'NONCE_KEY',        '>}`H$<}vZxo>2B!_$LN/rp+IRB!gOH6L_3,v4<*bh?*sE!}Zjeqvx.03}P8RVwY[' );
define( 'AUTH_SALT',        'KF&bA/R1$?rW<)&PoGsW-jO,N8bOJ[@y91p!`%.A>fOyeNp%PFX!0~p7=yF)u__;' );
define( 'SECURE_AUTH_SALT', '6hF+ .|;[tJMi^f65ahcYbB23MwU`GFT8jtqa/e/uvY.Mhk28,0s<5/e3&3^%vUU' );
define( 'LOGGED_IN_SALT',   '?-$0b-uv6p/r7w1UVOSp+M~UoSH@0;>rSD!u6tu!}~yE&bjtm$v)[r7rkQjA!qTx' );
define( 'NONCE_SALT',       's;@]|1$]P$0roLYB(lR!98:QD~f&4_}@Z|02L.J*Gx~wV8-Pbkk=jNl!H|mg{:O(' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
