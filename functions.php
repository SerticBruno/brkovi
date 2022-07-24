<?php
defined( 'ABSPATH' ) || exit;

define('THEME_DIR', get_stylesheet_directory());
define('THEME_URL', get_stylesheet_directory_uri());
define('THEME_OPTIONS', get_fields('option'));

require THEME_DIR . '/inc/enqueue.php';
require THEME_DIR . '/inc/util.php';
require THEME_DIR . '/inc/theme_setup.php';
require THEME_DIR . '/inc/ajax.php';
require THEME_DIR . '/inc/ACF.php';
/* include CPT & TAX */
// require THEME_DIR . '/inc/cpt/team-members.php';
// require THEME_DIR . '/inc/cpt/tax/team-member-role.php';
// require THEME_DIR . '/inc/cpt/events.php';
//require THEME_DIR . '/inc/wp_bootstrap_navwalker.php';
//require THEME_DIR . '/inc/wp_bootstrap_navwalker_footer.php';
//require THEME_DIR . '/inc/polylang.php';
//require THEME_DIR . '/inc/comment.php';
//require THEME_DIR . '/inc/pagination.php';
//require THEME_DIR . '/inc/search.php';
//require THEME_DIR . '/inc/shortcode.php';
