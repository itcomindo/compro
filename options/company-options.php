<?php

/**
 * Company Options
 */

defined('ABSPATH') or die('No script kiddies please!');


use Carbon_Fields\Container;
use Carbon_Fields\Field;

function company_options($container)
{
    return [

        Container::make('theme_options', 'Company Options')
            ->set_page_parent($container)
            ->add_fields([


                //logo_perusahaan_for_light_bg
                Field::make('image', 'logo_perusahaan_for_light_bg', 'Logo Perusahaan untuk Background Terang')
                    ->set_value_type('url')
                    ->set_help_text('Logo Perusahaan yang akan digunakan untuk background terang artinya background warna putih atau warna terang lainnya. Ukuran logo disarankan 200x50px')
                    ->set_width(50),

                //logo_perusahaan_for_dark_bg
                Field::make('image', 'logo_perusahaan_for_dark_bg', 'Logo Perusahaan untuk Background Gelap')
                    ->set_value_type('url')
                    ->set_help_text('Logo Perusahaan yang akan digunakan untuk background gelap artinya background warna hitam atau warna gelap lainnya. Ukuran logo disarankan 200x50px')
                    ->set_width(50),



                //nama perusahaan
                Field::make('text', 'nama_perusahaan', 'Nama Perusahaan'),

                //deskripsi perusahaan
                Field::make('textarea', 'deskripsi_perusahaan', 'Deskripsi Perusahaan'),

                //alamat perusahaan
                Field::make('textarea', 'alamat_perusahaan', 'Alamat Perusahaan'),

                //kota perusahaan
                Field::make('text', 'kota_perusahaan', 'Kota Perusahaan'),

                //provinsi perusahaan
                Field::make('text', 'provinsi_perusahaan', 'Provinsi Perusahaan'),

                //negara perusahaan
                Field::make('text', 'negara_perusahaan', 'Negara Perusahaan'),

                //kode pos perusahaan
                Field::make('text', 'kode_pos_perusahaan', 'Kode Pos Perusahaan'),

                //telepon_kantor_perusahaan_display
                Field::make('text', 'telepon_kantor_perusahaan_display', 'Telepon Kantor Perusahaan Display')
                    ->set_help_text('Telepon Kantor Perusahaan yang akan ditampilkan di website, boleh isi lebih dari satu nomor. Contoh: 021-1234567, 021-1234568'),

                //telepon_kantor_perusahaan_button
                Field::make('text', 'telepon_kantor_perusahaan_button', 'Telepon Kantor Perusahaan Button')
                    ->set_help_text('Telepon Kantor Perusahaan yang akan digunakan untuk tombol. Isi hanya satu nomor. Contoh: 62211234567 tanpa tanda "+"'),

                //fax kantor perusahaan
                Field::make('text', 'fax_kantor_perusahaan', 'Fax Kantor Perusahaan')
                    ->set_help_text('Fax Kantor Perusahaan yang akan ditampilkan di website'),

                //email perusahaan
                Field::make('text', 'email_perusahaan', 'Email Perusahaan'),

                //mobile_phone_perusahaan_display
                Field::make('text', 'mobile_phone_perusahaan_display', 'Mobile Phone Perusahaan Display')
                    ->set_help_text('Mobile Phone Perusahaan yang akan ditampilkan di website, boleh isi lebih dari satu nomor. Contoh: 0812-3456-1234, 0812-3456-5678'),

                //mobile_phone_perusahaan_button
                Field::make('text', 'mobile_phone_perusahaan_button', 'Mobile Phone Perusahaan Button')
                    ->set_help_text('Mobile Phone Perusahaan yang akan digunakan untuk tombol. Isi hanya satu nomor. Contoh: 6281234561234 tanpa tanda "+"'),


                //social_media_perusahaan
                Field::make('complex', 'social_media_perusahaan', 'Social Media Perusahaan')
                    ->set_layout('tabbed-horizontal')
                    ->add_fields([

                        Field::make('text', 'nama_social_media', 'Nama Social Media')
                            ->set_width(50),

                        //icon_social_media
                        Field::make('text', 'icon_social_media', 'Icon Social Media')
                            ->set_help_text('Icon Social Media yang akan ditampilkan di website. Contoh: &#60;i class="fa-brands fa-square-facebook"&#62;&#60;/i&#62;'),

                        Field::make('text', 'link_social_media', 'Link Social Media')
                            ->set_width(50)

                    ])
                    ->set_header_template('
                <% if (nama_social_media) { %>
                    <%- nama_social_media %>
                <% } else { %>
                    Platform
                <% } %>
            '),







            ])

    ];
}
