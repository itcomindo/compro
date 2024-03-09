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
    $container = Container::make('theme_options', 'Theme Options')
        ->set_icon('dashicons-carrot')
        ->set_page_menu_position(4)
        ->add_fields([
            Field::make('checkbox', 'disable_gutenberg', 'Disable Gutenberg Editor')
                ->set_option_value('yes')
                ->set_default_value(true)
                ->set_help_text('cek untuk disable gutenberg editor untuk menggunakan classic content editor.'),
        ]);





    company_options($container);
    header_options($container);
    home_options($container);
    about_options($container);
    faq_options($container);
    service_options($container);
    card_options($container);
    cta_options($container);
    tesimonials_options($container);
    single_options($container);
    footer_options($container);
}
