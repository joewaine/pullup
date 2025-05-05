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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */



//  Vg&uWkSjuR26IYG9MZ

// Check if the site is running locally (you can change 'localhost' to match your local environment)
if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false || strpos($_SERVER['HTTP_HOST'], '127.0.0.1') !== false) {
    // Local development settings
    define( 'DB_NAME', 'pullup' );  // The database name you created in phpMyAdmin
    define( 'DB_USER', 'root' );           // MAMP default username
    define( 'DB_PASSWORD', 'root' );       // MAMP default password
    define( 'DB_HOST', 'localhost' );     // Localhost
} else {
    // // Production settings (set your live database details here)
    // define( 'DB_NAME', 'production_db_name' );
    // define( 'DB_USER', 'production_user' );
    // define( 'DB_PASSWORD', 'production_password' );
    // define( 'DB_HOST', 'production_host' ); // E.g., 'localhost' or an IP address for live server


// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db8yiideq31q8i' );

/** Database username */
define( 'DB_USER', 'uvy8vpjyxzuih' );

/** Database password */
define( 'DB_PASSWORD', 'ghbz7frxnly9' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );



}








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
define( 'AUTH_KEY',          '>h6y+/?a750nq[ZX/)b^:9},ou_w_x?=7#5|S&Nq#!6X!TB{&xu*wY1rIo!-R$F#' );
define( 'SECURE_AUTH_KEY',   'C|aB5px38>Y5|z,o:S@!]P< lI|.N:0Ma3osJk/stiPj.j+E`f6W_QCo3sOAd{SH' );
define( 'LOGGED_IN_KEY',     '>ViRe?^%R:0R=}!)+RMlT*KvJV[RR&WaA:{]451`b]E/8mwhUN!~J|ATxWi(@{nS' );
define( 'NONCE_KEY',         'Uuw!H 6)KR+~xo)zteAz@2iOf<O|8]@DBuQT2R.sK?{mBI|7{EpRuh`qVXzFoid9' );
define( 'AUTH_SALT',         'JbSJ +YDV#gL6882~C7U^6ih$h>r3-0*~[R0M$Lp<J4y$c7P?8-N8[Mci /x)epK' );
define( 'SECURE_AUTH_SALT',  '|h[FljWEk,mABwdNU!XQl1*wH8:i$A{%`4&H$ScZwZ~0vxmx]<48E/Z!zgvUs1<B' );
define( 'LOGGED_IN_SALT',    'Sgf>V:vj]cyx/&Pg:b2db NM;Io^G0KGEuNBqGu0@&QPMEeUuL#VF*}GJIsjmt%=' );
define( 'NONCE_SALT',        'zowl.D2}}Jo%MsKIO 777IWN1f_4a=9=FHJm({?&I,ALpa0%cArvLD#uf)K![kE_' );
define( 'WP_CACHE_KEY_SALT', 'nd.jCDak9F7)2qjRHlPAG{@Lg~Jd*1GBrt->kw!|TavONQ#TB0nZgwfq4KI&Vxe_' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ypz_';


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
