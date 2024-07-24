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
define( 'DB_NAME', 'wp4' );

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
define( 'AUTH_KEY',         'm&>v4(D]~JLPD.V`QqR?j^|5,fggN:hVeqcs?#VMo40zu350)Kx|t_vMK(-{)YWB' );
define( 'SECURE_AUTH_KEY',  'LpF_Ug^<S/m5oPHHCi6TU<HEHDRSlN??b@:u:-nSeiIK~MHd{I1m)^o@[t0h]#g}' );
define( 'LOGGED_IN_KEY',    'v]86CX+bJ[Y,/X-0Q?[,ebVkZ%;lLeLVTNvR4rTY-[fLq6$({Z>!#{(eWUwtS_xF' );
define( 'NONCE_KEY',        '5j^eXKqj5Dq`m2C3]H8[hNFMKj#R}6 m&xlFQp/&x7s!&Q@t&y(lEWlRO$-FRU,3' );
define( 'AUTH_SALT',        'DjEue;l^dim6#gq6Zb)9eGU83,N9fGo%vk@`1w9M+VQ54Eft) :Sj<tV89#i7p?N' );
define( 'SECURE_AUTH_SALT', '@X`UqX!dm }F^by?[[gFN|>CA;hNiM&=#dB$0^JhRjJ4iceM;_=Pf`]>PgNc,7O0' );
define( 'LOGGED_IN_SALT',   'I5@:dB{01P( .MJ=9Z1%|2D2B/BZ!:vx+U@>.948 vy1|t$,`$mU,Hi(LV1WeXDu' );
define( 'NONCE_SALT',       'vN*t`!4Q3ScguqQ>Ba]r8;@r5VGo$FzX$%(LN]`Y}<3@AHQz[j((WD4b4u=1I -b' );

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
