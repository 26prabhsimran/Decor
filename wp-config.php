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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Decor_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'k4uU:!F~=[)Scpq=D1)}VElX F{A_3_}]o&~_AWP~N?V%A6tq-3%Q,Te%UGCb8M<' );
define( 'SECURE_AUTH_KEY',  'X{2,DNEexjr&pS9-f*GxYp&9e$in?#jW/1_::aa@ds)DQBg481`u+L`iJe1rW6>8' );
define( 'LOGGED_IN_KEY',    '}quD]OX>d|GgU%{|}/Y zKNR^{=iBE~XQQ0d7Vqc+?|(&)DNI]71DF2X:`Y#Jp$>' );
define( 'NONCE_KEY',        'D[<-iD;I]|jb+;bHYaF;$,:k,txS9rn]d7~a7.hL4Qk0N|YDVyIb4UH#tFe]yI5Z' );
define( 'AUTH_SALT',        'QeOdY^l6YJr[+@YanRgnJ{V]CR:9M[$?GNDVU0CC)CWxfboC~xm|tMr^%zdsrABS' );
define( 'SECURE_AUTH_SALT', 'zE/1`fFD_(C1].R]*6o-Z6-wd@*5209]K8lCqhJ5X[bhX$Cc%NS_)=x3~DVKb=K1' );
define( 'LOGGED_IN_SALT',   '|A6Q7oPyF2qtFKKTLmI}#>Tjz1A!D3i.Z?FP(1B9,XQ}AfQK+WXyuX[;_h&]}YwU' );
define( 'NONCE_SALT',       '0ev%)]yzxd;J99%LxDW[p~VKMjX*-VzvueYJ8Y5^=G?f`URn|ER302%8s+%-e {T' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
