<?php

/**
 * Disable Gutenberg Plugin
 */

defined('ABSPATH') or die('No script kiddies please!');



function disable_gutenberg_plugin()
{
    if (carbon_get_theme_option('disable_gutenberg')) {

        add_filter('use_block_editor_for_post', '__return_false', 10);
    }
}

add_action('init', 'disable_gutenberg_plugin');
