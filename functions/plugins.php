<?php
add_action( 'tgmpa_register', 'ydm_register_required_plugins' );
function ydm_register_required_plugins() {
    $plugins = array(
        // This is an example of how to include a plugin bundled with a theme.
        array(
            'name'               => 'Advanced Custom Fields PRO', // The plugin name.
            'slug'               => 'advanced-custom-fields-pro', // The plugin slug (typically the folder name).
            'source'             => get_stylesheet_directory() . '/plugins/advanced-custom-fields-pro.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
        array(
            'name'               => 'YDM backend theme', // The plugin name.
            'slug'               => 'YDM-backend-theme', // The plugin slug (typically the folder name).
            'source'             => get_stylesheet_directory() . '/plugins/YDM-backend-theme.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => 'Classic Editor',
            'slug'      => 'classic-editor',
            'required'  => false,
        ),
        array(
            'name'      => 'Custom Post Type UI',
            'slug'      => 'custom-post-type-ui',
            'required'  => true,
        ),
        array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => false,
        ),
    );
    $config = array(
        'id'           => 'ydm-boilerplate',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'ydm-install', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => __( 'Benodigheden voor development', 'ydm-boilerplate' ),                    // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => __( 'Installeer plugins', 'ydm-boilerplate' ),
            'menu_title'                      => __( 'Installeer plugins', 'ydm-boilerplate' ),
            'nag_type'                        => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
    tgmpa( $plugins, $config );
}