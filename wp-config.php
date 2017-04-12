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
define('DB_NAME', 'website_db');

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
define('AUTH_KEY',         '!nz!)B9kUjqM6_HNi7+cY,d;b05)rGwuO0X?iZ5emw6o{_`a#NAFLax[NJQRrk}h');
define('SECURE_AUTH_KEY',  'N4SQ8kX}.Rc%&7~8)=jshIT.T@(:*wn:u@n$Q[wtVDnaGPd+Ds+L9Ngd#)Eq3^{q');
define('LOGGED_IN_KEY',    'QxYP8%~/yf^wYHf?]h7/T.!Egzgw4+}rcoE6DEg]Z,)xD{zss*U9Vw+aH{8_&m#r');
define('NONCE_KEY',        '/BIst(:oT 8C9npwx`,6m6`Phgm;bjBB?{;<kmbpliU%>[1J+shwb@9FTP[[:vkM');
define('AUTH_SALT',        't0mus&BG+})xPEb{xD,ba1stW0*o>-[Q63wvOZcI]l:[$0135y{r };bvMMET?4-');
define('SECURE_AUTH_SALT', 'MWZsa~<n/HO#+2&q;}h}a jz)LoBt2$5^V9M4HHB9H{Q6^.8b0Q8K=@8#MO43lT|');
define('LOGGED_IN_SALT',   'hgTFMZQY?jF~)g$1 LHPo<O-sqG0A=:aO$`bCLU>-bQb4taO#BVA$lq>?lPK8~J/');
define('NONCE_SALT',       'FDKn:(^s`tJs^zfgp_I# uA{4=XW1vRk2#2z+7,]YbI+6amP=5dOhK hZ=JUAXD8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'web_';

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
