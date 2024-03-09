<?php

/**
 * Single Options
 */

defined('ABSPATH') or die('No script kiddies please!');


use Carbon_Fields\Container;
use Carbon_Fields\Field;

function single_options($container)
{
    return [
        Container::make('theme_options', 'single Options')
            ->set_page_parent($container)
    ];
}
