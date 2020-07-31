<?php

// ----------------------------------------------------------------------------------------
//  Footer widgets
// ----------------------------------------------------------------------------------------

function footer_widget_one()
{

    register_sidebar(array(
        'name' => 'Footer Widget One',
        'id' => 'footer_widget_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'footer_widget_one');

function footer_widget_two()
{
    register_sidebar(array(
        'name' => 'Footer Widget Two',
        'id' => 'footer_widget_2',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'footer_widget_two');

function footer_widget_three()
{

    register_sidebar(array(
        'name' => 'Footer Widget Three',
        'id' => 'footer_widget_3',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'footer_widget_three');

// ----------------------------------------------------------------------------------------
//  Register Website menus
// ----------------------------------------------------------------------------------------

function add_navigation()
{
    register_nav_menu('menu-1', __('menu-1'));
    register_nav_menu('menu-2', __('menu-2'));
}

add_action('init', 'add_navigation');