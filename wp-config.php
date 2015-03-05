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

/**
 * DON'T REMOVE THIS REQUIRE(), it loads local database
 * credentials. without this line your site will not work.
 */
require(__DIR__ . '/wp-local-config.php');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kT%*LpbY5#Jc!5Z()_iUtU*Q+/GKanX`vPy9!LUW|H+^np;O9xD$BNIELDw!3cy5');
define('SECURE_AUTH_KEY',  'u&/%ZPBlMAl%uV4Y@J*FTmL2T(Lcw1fG^&|$"OdrD%Rf;XhgG`yjFnKlS%9EFz?#');
define('LOGGED_IN_KEY',    'Ws5sE9NI@"mhN"I"WL;^k%V@xAssdT_KdRRTC@Yt)mlvO@08"6m8&h$%F2Yz?_IJ');
define('NONCE_KEY',        '2W1D;Ege3@0jscz/%X19|C^nkm7I|5yuOhXtZPd8JqzQS*ZrR_Q$;I!8IH$~ffN2');
define('AUTH_SALT',        'YwheT6H#BAZY!e~Mf/jL;bvk/tw9G%/vz$Gah(~+h|oicTAI&%J^vBJZ$)obitND');
define('SECURE_AUTH_SALT', 'b*$n!%ha@_rWBEu*YQ~4k:1"7VB(~`oMZndj)qH|X"OoOwCTnUY`yz9c%8biV!Kb');
define('LOGGED_IN_SALT',   'D4@9K$U:?VX:j7f7/)S!hs$z|jH2x66INX?u5ANj6%&0UnP1fxN5g"hA9U513@S_');
define('NONCE_SALT',       'MPdcxvMQ?2RYA0SmA*bQXjlAVy*nAqP+hz~Z;ls48AHRcyK9k"T|z)QFf&/@3Vw!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_3q2hn7_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
