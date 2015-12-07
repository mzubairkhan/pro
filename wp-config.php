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
define('DB_NAME', 'pro1');

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
define('AUTH_KEY',         'UY05d1Bn(:h61n7I,y`J_ng#RsiM(EY>-xRgrd)7F>b50|E$K{Fz=u]uH*JuvtVO');
define('SECURE_AUTH_KEY',  'llqy4S&<pg/T.<&mY+R{~gkhH+[&+BOCx Ij`:WA}kSagPiF)Nzb&$Lhhv,B5EbV');
define('LOGGED_IN_KEY',    '.0+:_+^vT&V]TO|S&+*6z6xPD]vH;fPo(w6N7AVli}oGY=J0+YJB~{s}g*n{Vx<Z');
define('NONCE_KEY',        'k6WThh|d0G`ND))3ujqm/ir~ehX|Nd+&]~C{)|S]oGa(Ir[U.c%YA(l`LF3EaY%S');
define('AUTH_SALT',        'NMYS/J,(hRZdp+m<c0 #[{bJ9xB):rSCBE*//MUKbU^st|s[z[dp.0|(gcE8+J)8');
define('SECURE_AUTH_SALT', '{746(q!|E?Qp@KQU;4eJ`Bb-J$>@dTnB9(W16qRbx3kN)#aYg>}&iDO`oQRa|E0!');
define('LOGGED_IN_SALT',   'jl=9ZjQ:|BB>%]QU=XynF,{<3> rnC%RQO#_tPTq3`V{M|HRPMALtXuC-`/k#3/p');
define('NONCE_SALT',       'f5/Y25tmeXamx$arn0}Mi]>m:1=b<7AS++b3MWBL?IdX|]b+-D<[wOkHv[-GqbFR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
