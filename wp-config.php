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
define('AUTH_KEY',         'LU&JM@&eVnzM5Xnr:8XSOxACub`8ag~fz^HXtpl;5)%zLzJx3v`gFk!7*hgd&3Pg');
define('SECURE_AUTH_KEY',  '"c~eV~ufvfmYmZg~b:a?t|i98$42C^KHv|1yjd#@aaFWO^K"O8$CH*j$20Jy8iFF');
define('LOGGED_IN_KEY',    '(+F+~V;r%UH?$(pc+XgDV#%OZlUUF+caNgh0uPW1#J!JXjG|:A3S50#s5yT|Im~3');
define('NONCE_KEY',        '#Bqj"?*c@S6CL~@%8uDvwBQld"Sg3J_YJ;N2#VN*?QtnDfRbz$0vex3?jABx+o$/');
define('AUTH_SALT',        '!`^ny8ls&|21EESk5C"geq84_&X#:)zQThdw*tKW#_Ur/;ZX*ur99r$8W`6p*t!k');
define('SECURE_AUTH_SALT', 'Xl~lOJB@(XCtw3cV:#|z65C6U/K7c?f:UD%"u_ovb^XZyHjyDe&a(`4|qX4adzLj');
define('LOGGED_IN_SALT',   'r$o/3_ud1`"%EVx)FvjmBp5AjcJH2k!m^2dkx#`Bfa8J9u"?8F$+XM78Kjqi+Kl)');
define('NONCE_SALT',       '0P!(D~EVe:9^8J^Fi%GK1*SMbqdZ0u`IMl_MK"(0dlcaQ^9OyU!BibD&u&Li;p;G');

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
