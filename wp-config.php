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
define('DB_NAME', 'wp_test_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'sU>SeY4m]C8?i,}&N|GB7IlwfT6qG?cRsYaJMG[Va@]IH.5Xx6RVpBV,Iif4&}YG');
define('SECURE_AUTH_KEY',  'Z_$ip> <s&%7*sJaX&*<RlfSz)sV[vS7D2ht-p9U6LnN1%fxA:wE>R[!-g5XA4{q');
define('LOGGED_IN_KEY',    '|;#m7$]yTjS7Y=4AsT*%iyX+^++m9khJM15<B(.ere[.|7`>h!]Ki-HQweFuIH9<');
define('NONCE_KEY',        ')TLzOR;2d-C S0Rr6Ls>bQE-@da1s`~27ZO5PlZwpR$FLg;|D-Ea1]1unI[%nYO[');
define('AUTH_SALT',        ']:AtsWlpc-<WoB}IY>xyV6w_J[zjAhvK+c+]M9a!<5?mjWumzIa)SA3!F$zq|A8s');
define('SECURE_AUTH_SALT', 'b?T%H~qDyA#/2!5mma^IH6dG;DQl6((NIw?,ZR9dC=Qs@!v.,U<*]O5(OlHWJmv_');
define('LOGGED_IN_SALT',   'eb?8ebs>;(ZQ[?KyK:iN.7 FNx{.B!$x?$PxY/tE?V`N:r:Tr7Ua5Ufc{/Tul`aX');
define('NONCE_SALT',       '/6+2?6E:Z]+MMZ6}ud,Qc,,]G E$ rN8=s.(-d[&yb;$ ?AZy.&dZ:UT1#HLX8ff');

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
define('WP_DEBUG', true);

define('WP_MEMORY_LIMIT', '1024M');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
