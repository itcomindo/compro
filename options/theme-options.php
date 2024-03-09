<?php

/**
 * Theme Options
 */

defined('ABSPATH') or die('No script kiddies please!');

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'mm_theme_options');
function mm_theme_options()
{
    $container = Container::make('theme_options', 'Theme Options');
    company_options($container);
}
