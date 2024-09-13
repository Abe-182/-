<?php
add_action('wp_enqueue_scripts', 'add_styles');
function add_styles()
{
    // google fonts
    wp_register_style(
        'google-fonts_style',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap',
        array(),
        '1.0'
    );
    // rest style
    wp_register_style(
        'reset_style',
        'https://unpkg.com/ress/dist/ress.min.css',
        array(),
        '1.0'
    );
    // slick
    wp_register_style(
        'slick_style',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
        array(),
        '1.0'
    );
    // slick theme
    wp_register_style(
        'slick_theme_style',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css',
        array(),
        '1.0'
    );
    // main style
    wp_enqueue_style(
        'main_style',
        get_template_directory_uri() . '/css/main.css',
        array('reset_style', 'google-fonts_style', 'slick_style', 'slick_theme_style'),
        '1.0'
    );
}
// -------------------------------js

add_action('wp_enqueue_scripts', 'add_scripts');
function add_scripts()
{
    // デフォルトのjsを削除
    wp_deregister_script('jquery');
    // JS
    wp_register_script(
        'jquery_script',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',
        array(),
        '1.0',
        true
    );
    wp_register_script(
        'slick_script',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js',
        array(),
        '1.0',
        true
    );
    // main script
    wp_enqueue_script(
        'main_script',
        get_template_directory_uri() . '/js/main.js',
        array('jquery_script', 'slick_script'),
        '1.0',
        true
    );

}

// アイキャッチ画像を有効化する
add_theme_support('post-thumbnails');
