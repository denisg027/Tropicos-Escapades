<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define( 'DB_NAME', 'evaluation-studi' );
/** Database username */
define( 'DB_USER', 'denisg027' );
/** Database password */
define( 'DB_PASSWORD', '@dm.2022.DgR' );
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
define( 'AUTH_KEY',         'Y(3(.Y^=wQXX&{&r2uX~)YqZ^UZUGfP#V}dk2aY8A-8I[.-TG8vPQFSdB6)rt`vA' );
define( 'SECURE_AUTH_KEY',  ' gy|0L9MD([I)$oFGK{&Z;]y7y|wA0l=72tEm#iV8:nm2z)z6h/|UQ#CylDss1 =' );
define( 'LOGGED_IN_KEY',    'FLV+.~6}XC;5k%0X?DUF4ObJbPQJp!3/Bo/p.Jt0Zy];`d/o@}?dB510*)cj0H`s' );
define( 'NONCE_KEY',        'YHRO`C@I=zTJYF(bx<(7<tq876cBK0ci-Xe+B2`<X%}wE@gf{J!h;SB_3NC}V:bI' );
define( 'AUTH_SALT',        'JI<tN~!O;8E ]aqY]`Tpg9--(DBcnQMYl;uYltBzr*8W[9g>LPVpV,*en_@Q`zb6' );
define( 'SECURE_AUTH_SALT', 'w{bV7Q4q:1_D5wzh-/,t,!D3%B,IG-18o1U-f7vO[dVuJu)rd]rFCy:7#%Zt)%fv' );
define( 'LOGGED_IN_SALT',   ';3ruTk,V^vh^:BiC`cS=`pV,K5e%a6di_|2sf9Z-igxn)DE?q)HDr{,y}EB>kG>O' );
define( 'NONCE_SALT',       'F0IA=:qf[=vl7 bM&1Lgyz:(;E~#TR_9d^nQfTG*_ekVJqb>-7&zls>Lq@VNzQvq' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'es_';
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