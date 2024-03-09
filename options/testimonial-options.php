<?php

/**
 * Silence is golden
 */

defined('ABSPATH') or die('No script kiddies please!');

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function tesimonials_options($container)
{
    return [
        Container::make('theme_options', 'tesimonials Options')
            ->set_page_parent($container)
    ];
}
