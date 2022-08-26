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
define( 'DB_NAME', 'national-park' );

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
define( 'AUTH_KEY',         'OkAh6B|uHeMwal[C{0UN]C%jI`9~l.tUb?DV9gds-OZrVLyXo?9v!MF@T)4YC[1}' );
define( 'SECURE_AUTH_KEY',  '_7V^gC2oeY?r8rX(E29TODt$-glzK6:h_:`~zDuvpWw%k+/O&l,K1>4aq]#HJ2D~' );
define( 'LOGGED_IN_KEY',    'nXoRX-))&>1MF(]lu6o,qc67>e51Zg)zXv?V8RZ7$a8{(jzoQ19%p)C!aW%h/RNX' );
define( 'NONCE_KEY',        'iscN#YJ(w,9I2Y=:_0Ln}[8wU6)B=*e}N)=s*J%+x}Vpg!|iM5wFK5~ nobgAd?,' );
define( 'AUTH_SALT',        'P#:5Ej{7{>B<qX&KqRU5o:-~o:[p(0O29=Y~B.6>k~Sxq`w.REfQ+}}%|~WcwY/9' );
define( 'SECURE_AUTH_SALT', 'C@HU7x&dfHC,{,uF|h*4iNO8pSk4Y!}}nK9TR7CvL4&JMX?GN*j?H;.Rp3L_!~=j' );
define( 'LOGGED_IN_SALT',   'Cchl^%?z&9}yAYp)7;uWr[sOGNxJ3egFH64/mkfY+sl?E(Zx{a#zqlS>{aB!,_@e' );
define( 'NONCE_SALT',       'z`r91?cRl[,>@<gqrMa|$gdWD.ojH&VxT`-Q(4MQF/zoPfU0TJzdORU=txIZ*En@' );

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
