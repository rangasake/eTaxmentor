<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'WS_WP' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '+ wahWc Kqc[ZWW+>:,V=zv!v6NSJ*%XvOluVbO@OluN8?%ub-t+$b1o-UHIQrIF' );
define( 'SECURE_AUTH_KEY',  'nY]*/as*DFQS+XuN]Gz_IwdS|s943rVf@@YEpC]BOBu9ZI2p0fc&*d|He2D|MN]0' );
define( 'LOGGED_IN_KEY',    '#+nIo9-?%ge0*yQtQ]fER?RuepO84G-5Oka@]~bkSasK(URmb^0I)9U!(t;!IfH{' );
define( 'NONCE_KEY',        'q{*]`U^F]e[ M+/[*PscTD3@#+xr]SG>hf[HDWmVeH ]cwMGg!t^py2Jc{wzkCX=' );
define( 'AUTH_SALT',        '?5v^bK?T 0&=Xsq1[Fz%44(1_ % $by<?|hDf/=V0`,k@0^$iZ]H9$pd{z[D7)C{' );
define( 'SECURE_AUTH_SALT', 'Eu`:d9|R1]E>U P(j#ar.eaBrZ1!ze24~/r|/8*LUsCf]75tk,;k/:Zp%(7U)iMb' );
define( 'LOGGED_IN_SALT',   ']^cAE)+a.*aD2gZ7J?!K3E-! H,$RS*yF|>gTIw@A){wPi+Sg sJb!Ztj{cwIIC~' );
define( 'NONCE_SALT',       '6^K%5NRtnfShipV)e~Ys8O2k}>K4if3)XfR_c#C0 Llk.h;T&IHu|]<btz`t#W`1' );

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
