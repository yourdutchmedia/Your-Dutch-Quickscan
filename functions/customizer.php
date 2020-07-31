<?php
// ----------------------------------------------------------------------------------------
//  Add customizer Logo support
// ----------------------------------------------------------------------------------------

function branding_customizer($wp_customize)
{
    //adding setting for logo
    $wp_customize->add_setting('brand_logo');
    $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize, 'logo', array(
        'label'      => __('Logo', 'mytheme'),
        'section'    => 'title_tagline',
        'settings'   => 'brand_logo',
    )));
    $wp_customize->add_setting('mobilebrand_logo');
    $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize, 'mobile-logo', array(
        'label'      => __('Mobile Logo', 'mytheme'),
        'section'    => 'title_tagline',
        'settings'   => 'mobilebrand_logo',
    )));
}

add_action('customize_register', 'branding_customizer');

