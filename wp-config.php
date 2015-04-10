<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'challengeWordPress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'Americanpie3');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'UKZK|+4Z:i{5@maO:<gu?+G?=G}<*&+-2`-q)*q36beq,q,Z*!*j@L<u; Jj?=;?');
define('SECURE_AUTH_KEY',  '$vHb)#CV72HjJ@QF:ZvM#Asoa76o=@He_5y,9Z+>e{5ac3i8?Fo?Q>$#?_9f-!Bm');
define('LOGGED_IN_KEY',    'e**>=.-4RZ|SxWc 6,!bkR+xx`)z>.#VC1 ||43duo+>8rv$fe%S3p!!~1{,hOJR');
define('NONCE_KEY',        '%ATi2U=KyL|_P.TOuT,lExr!U3Sqqs<|kcFv<h_k_IH?4[|Q8EHtmbCBg`F53FEB');
define('AUTH_SALT',        '$p7ad!z;S#a5_<aT=~gR5].&]6slRIGXI3=*|<%kNKvp:iGB}M}=9u)$+ebs78|L');
define('SECURE_AUTH_SALT', 'wIX7xWk=#JxV8|W$O|X230fRWz*m/]AEQ{&]f<g-d+63loL5|[v.UOWD|C5bebOJ');
define('LOGGED_IN_SALT',   'ZU&XK<4%N(.EzG8eNgTcW{#qJ]}(0+*}1P[C[JBw8x|H`pHBZ~6=-;m*L7=a3g6,');
define('NONCE_SALT',       '5UFp5L!h*I$jiy}Zk6{Z0qteop@y{n/;1|rP7`aAYC7JP<8,3x89h?[}v`4^ >R?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

