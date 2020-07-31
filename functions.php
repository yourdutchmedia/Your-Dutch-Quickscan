<?php

// ----------------------------------------------------------------------------------------
//  enqueue styles and scripts
// ----------------------------------------------------------------------------------------

function theme_styles()
{
    wp_enqueue_style('theme_styles', get_template_directory_uri() . '/assets/dist/css/main.css', false, 'all');
}

add_action('wp_enqueue_scripts', 'theme_styles');

// ----------------------------------------------------------------------------------------
//  add menus and widgets to admin panel
// ----------------------------------------------------------------------------------------

add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('post-thumbnails');

// ----------------------------------------------------------------------------------------
//  Page Slug Body Class
// ----------------------------------------------------------------------------------------

function add_slug_body_class($classes)
{
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}

add_filter('body_class', 'add_slug_body_class');

// ----------------------------------------------------------------------------------------
//  Allow SVG
// ----------------------------------------------------------------------------------------

add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
    global $wp_version;
    if ($wp_version == '4.7' || ((float)$wp_version < 4.7)) {
        return $data;
    }
    $filetype = wp_check_filetype($filename, $mimes);
    return ['ext' => $filetype['ext'], 'type' => $filetype['type'], 'proper_filename' => $data['proper_filename']];
}, 10, 4);
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');

// ----------------------------------------------------------------------------------------
//  Tinymce fix
// ----------------------------------------------------------------------------------------

require "functions/tinymce.php";

// ----------------------------------------------------------------------------------------
//  Customizer settings
// ----------------------------------------------------------------------------------------

require "functions/customizer.php";
require "functions/emoij.php";

// ----------------------------------------------------------------------------------------
//  Required plugin settings
// ----------------------------------------------------------------------------------------

require_once "functions/class-tgm-plugin-activation.php";
require "functions/plugins.php";

// ----------------------------------------------------------------------------------------
//  Add Custom Post Types
// ----------------------------------------------------------------------------------------

require "functions/cpt.php";

// ----------------------------------------------------------------------------------------
//  Add widgets
// ----------------------------------------------------------------------------------------

require "functions/widgets.php";

// ----------------------------------------------------------------------------------------
//  redirect to home after logout
// ----------------------------------------------------------------------------------------

add_action('wp_logout', 'auto_redirect_after_logout');
function auto_redirect_after_logout()
{
    wp_redirect(home_url());
    exit();
}

// ----------------------------------------------------------------------------------------
//  Admin footer modification
// ----------------------------------------------------------------------------------------

function remove_footer_admin()
{
    echo '<span id="footer-thankyou">Powered by <a href="http://www.yourdutchmedia.nl" target="_blank">Your Dutch Media</a></span>';
}

add_filter('admin_footer_text', 'remove_footer_admin');

// ----------------------------------------------------------------------------------------
//  Get template directory url and store it in a function
// ----------------------------------------------------------------------------------------
function url($path)
{
    return get_template_directory_uri() . $path;
}

// ----------------------------------------------------------------------------------------
//  Change get_field to field
// ----------------------------------------------------------------------------------------
    function field($value)
    {
        return get_field($value);
    }

// ----------------------------------------------------------------------------------------
//  Change the_sub_field to subfield
// ----------------------------------------------------------------------------------------
    function subfield($value)
    {
        return the_sub_field($value);
    }


// ----------------------------------------------------------------------------------------
//  Wordpress image shortcut
// ----------------------------------------------------------------------------------------

function wp_img($field_name) {
    $image_id = get_field($field_name);
    return wp_get_attachment_image($image_id, 'normal');
}

function wps_img($field_name) {
    $image_id = get_sub_field($field_name);
    return wp_get_attachment_image($image_id, 'normal');
}

// ----------------------------------------------------------------------------------------
//  Prevent image resizing
// ----------------------------------------------------------------------------------------

update_option( 'large_size_h', 0 );
update_option( 'medium_size_h', 0 );
update_option( 'large_size_w', 0 );
update_option( 'medium_size_w', 0 );
update_option( 'thumbnail_size_h', 0 );
update_option( 'thumbnail_size_w', 0 );