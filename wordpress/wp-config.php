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
define('DB_NAME', 'wordpressdb');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpresspwd');

/** MySQL hostname */
define('DB_HOST', '172.19.0.2');

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
define('AUTH_KEY',         'e~m&Ob6mgyH{55};F]E~dRk^39A3$CnHCD`Y}Khzf~a@(-0RFt!n5NOteVMm.NUE');
define('SECURE_AUTH_KEY',  '!uf^{WCXwGu/2cwp//U7,KwlL?g+2t?K7,/bs4)*M5b T+d;^K^U8kebT|$0RPy}');
define('LOGGED_IN_KEY',    'EHD0;%eqnBMOqtB|+yGOA+}kzICQJ_@RN$pV_]F=tHK bIG/%J9sr!{Vx>%+-G?b');
define('NONCE_KEY',        'WIsGUnfyX;`.#BQbq[9:$rVQK# 3ITzDY0*TA~}qnU~<L*Z:uK2?A]P;PrVo?L*I');
define('AUTH_SALT',        '4?vV*Frb%}KLpW>E:-=$<qzWV9Ko,+#(Y4eN{H0=a)fGPVi/W^l~|u1%|I2AGv4]');
define('SECURE_AUTH_SALT', '7F_Q4_b?YJ^w3;vIZ8QE[CC>H>|!]IT+o$/Wp@Zz+.atW:E[&$3Xxe6=Nqm]jqz5');
define('LOGGED_IN_SALT',   'fGq,Fl4HavlZo];JJ!!.i#;[kGLiF&p6TtKl3vTS$tzaay^QosBG//z_<}vvV5_L');
define('NONCE_SALT',       'h9Hd1jSr159qQU9.#{=07#!rfeO9f8q)K$,wUTeMevaw2+OG/h0>Wwm(V I5]GTv');

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

