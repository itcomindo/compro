<?php

/**
 * Functions and definitions
 */

defined('ABSPATH') or die('No script kiddies please!');




/**
 * Add theme Supports
 */

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');





/**
 * get Theme version from the style.css
 */
function mm_get_theme_version()
{
    $theme = wp_get_theme();
    return $theme->get('Version');
}







/**
 * Check if the current environment is development mode or on production
 * development mode is when the server is localhost
 * output: boolean
 */
function mm_is_devmode()
{
    if (isset($_SERVER['REMOTE_ADDR']) && in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'), true)) {
        return true;
    }
    return false;
}



/**
 * Load the Carbon Fields
 * define the container and fields
 */
add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    require_once('vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}







/**
 * Load the Required Files
 */

//call that require_once function to load
require_once get_template_directory() . '/assets/assets.php';
require_once get_template_directory() . '/options/options.php';
require_once get_template_directory() . '/plugins/plugins.php';
// require_once get_template_directory() . '/inc/inc.php';
// require_once get_template_directory() . '/sections/sections.php';
// require_once get_template_directory() . '/components/components.php';
// require_once get_template_directory() . '/queries/queries.php';
// require_once get_template_directory() . '/assets/images/images.php';
// require_once get_template_directory() . '/widgets/widgets.php';
// require_once get_template_directory() . '/sidebars/sidebars.php';


// experimental 1 start



// add_action('wp_head', 'mm_apply_custom_css');






// experimental 1 end


//experimental 2 start
// experimental 2 end

//experimental 3 start
// experimental 3 end
