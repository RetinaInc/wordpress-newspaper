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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bandist_studio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QyiuD#8J!@>ja_e/Oin{3rZ=Cgm?0/J[$F_JEHLxrf1~EQ{ !CVbw9n8S kLC.M>');
define('SECURE_AUTH_KEY',  'ml-M0G{WNB6}6bT`z?MIBTyt1][JCM;]a*&++X,Lcx}%S>d<$ 8<Wh(+l7t fV5o');
define('LOGGED_IN_KEY',    '1w4[x!s+|h].c6HU6G|h0w2-T{&;f~gOJ2v1[&{JV*kZ1~Jw ybqXu@M#/YpBkT#');
define('NONCE_KEY',        'rUcU#+%Rg4c1k5BvR66f(:YzQ(E1L4d@Si^y/%gRA,yZZ31ciwfnXu>m4/P>FPbM');
define('AUTH_SALT',        'n_uX9:,-?*HX_2Dwk,h+^Vx^x76uZZ3F.(z95PYR?>@i@eBYL*-g:$h;w.as1FM>');
define('SECURE_AUTH_SALT', 'F?6ehHJDx>k@c|vvW w3I7MphR$3xh`7h7/^Ekt<c}zQf>A_Lvb13Rj?xlo1qE;(');
define('LOGGED_IN_SALT',   '<m)q&IjAL>3iX{&` w-@uCJZTF0d|WgyH/SegoZY`W$r0w+%<vz`ru)=vbWj^j!2');
define('NONCE_SALT',       '~^lgo/_SU] -Pk5AjT}GR6s(d86:x4h[+mM,1-Ge!Z*IPg QUS hg[`+y23aRu4h');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bs_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define( 'FS_METHOD', 'direct' );
define( 'FS_CHMOD_DIR', 0777 );
define( 'FS_CHMOD_FILE', 0777 );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
