<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'iipp_wordpress');

/** MySQL database username */
define('DB_USER', 'UserIIPP');

/** MySQL database password */
define('DB_PASSWORD', 'IiPpWordpress2014?');

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
define('AUTH_KEY',         '`r9@J~_|z7)lq,t6{07JqhvlaMXXHix0OFjYt|~&J:M<5Y)jv}^t!UN4XFTFSo+^');
define('SECURE_AUTH_KEY',  'd.~@0zkzW`C%mrGx; 6ChgL!tYh@xkXMACNXIu^us>-Ip}+L9I?z-dKd..c8>rRv');
define('LOGGED_IN_KEY',    '^FR|43H724vN4K*H OD^`=<st|30_t-CxMP15n1?B J`5FQz;c:imE5u&=&y/=;R');
define('NONCE_KEY',        'I,nx%K|1xopMr=1~#CbNWQfJ7M1-iaHv(^T/tA@O4Ov}KU],0nSLPVn.U*4+}@SK');
define('AUTH_SALT',        '8;#%6 ovYGTZ^wrq?:iZ].6ZM.~kX[;Oe!`km:==gI!+kf01ANMj:Vj~;{8EtP7=');
define('SECURE_AUTH_SALT', 'HVO3N.XCIx#L@Z<eX-Zt2wJ ?mV!?U8V;`%(teH-@WM-gZE_8Nl< =9B?B_iur~r');
define('LOGGED_IN_SALT',   'elWD5xA-bgrd2Q%,+~|gMwJL!Jcaw$a-vIv3LV+mjHg^8#le:@_T:/)+sd?popI(');
define('NONCE_SALT',       'GB! >%W8$IB/BZcy`Gbt>gH,/u1++{`R|, ;^MM]YIMlf-ZBa44*KMnqazM{)f=I');

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
