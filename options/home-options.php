<?php

/**
 * Silence is golden
 */

defined('ABSPATH') or die('No script kiddies please!');


use Carbon_Fields\Container;
use Carbon_Fields\Field;

function home_options($container)
{
    return [
        Container::make('theme_options', 'Home Options')
            ->set_page_parent($container)

            ->add_fields([
                //separator
                Field::make('separator', 'home_separator', 'Hero Section'),
            ]),






    ];
}
