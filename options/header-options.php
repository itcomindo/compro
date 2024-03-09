<?php

/**
 * Header Options
 */

defined('ABSPATH') or die('No script kiddies please!');


use Carbon_Fields\Container;
use Carbon_Fields\Field;

function header_options($container)
{
    return [
        Container::make('theme_options', 'Header Options')
            ->set_page_parent($container)
    ];
}
