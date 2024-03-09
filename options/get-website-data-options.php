<?php

/**
 * Get Website Data Options
 */

defined('ABSPATH') or die('No script kiddies please!');



function mm_get_website_data()
{
    $data = array();

    //logo_perusahaan_for_light_bg
    $data['logo-light'] = carbon_get_theme_option('logo_perusahaan_for_light_bg');

    //logo_perusahaan_for_dark_bg
    $data['logo-dark'] = carbon_get_theme_option('logo_perusahaan_for_dark_bg');

    //nama perusahaan
    $data['nama'] = carbon_get_theme_option('nama_perusahaan');

    //deskripsi perusahaan
    $data['deskripsi'] = carbon_get_theme_option('deskripsi_perusahaan');

    //alamat perusahaan
    $data['alamat'] = carbon_get_theme_option('alamat_perusahaan');

    //kota perusahaan
    $data['kota'] = carbon_get_theme_option('kota_perusahaan');

    //provinsi perusahaan
    $data['provinsi'] = carbon_get_theme_option('provinsi_perusahaan');

    //negara perusahaan
    $data['negara'] = carbon_get_theme_option('negara_perusahaan');

    //kode pos perusahaan
    $data['kode-pos'] = carbon_get_theme_option('kode_pos_perusahaan');

    //alamat lengkap
    $data['alamat-lengkap'] = $data['alamat'] . ', ' . $data['kota'] . ', ' . $data['provinsi'] . ', ' . $data['negara'] . ' ' . $data['kode-pos'];

    //telepon_kantor_perusahaan_display
    $data['telepon'] = carbon_get_theme_option('telepon_kantor_perusahaan_display');

    //telepon_kantor_perusahaan_button
    $data['telepon-button'] = carbon_get_theme_option('telepon_kantor_perusahaan_button');

    //fax_kantor_perusahaan
    $data['fax'] = carbon_get_theme_option('fax_kantor_perusahaan');

    //email_kantor_perusahaan
    $data['email'] = carbon_get_theme_option('email_kantor_perusahaan');

    //mobile_phone_perusahaan_display
    $data['mobile'] = carbon_get_theme_option('mobile_phone_perusahaan_display');

    //mobile_phone_perusahaan_button
    $data['mobile-button'] = carbon_get_theme_option('mobile_phone_perusahaan_button');






    return $data;
}
