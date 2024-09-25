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
        // 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
        array(),
        '3.6.0',
        true
    );
    // slick
    wp_register_script(
        'slick_script',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js',
        array(),
        '1.9.0',
        true
    );
    // bgswitcher
    wp_register_script(
        'bgswitcher_script',
        get_template_directory_uri() . '/js/jquery.bgswitcher.js',
        // 'https://raw.githubusercontent.com/rewish/jquery-bgswitcher/master/jquery.bgswitcher.js',
        // 'https://cdnjs.cloudflare.com/ajax/libs/jquery.bgswitcher/0.4.3/jquery.bgswitcher.min.js',
        array(),
        '1.0',
        true
    );
    // main script
    wp_enqueue_script(
        'main_script',
        get_template_directory_uri() . '/js/main.js',
        array('jquery_script', 'slick_script', 'bgswitcher_script'),
        '1.0',
        true
    );

     // 画像URLをJavaScriptに渡す
    wp_localize_script('main_script', 'imagePaths', array(
        'image1' => esc_url(get_template_directory_uri() . '/img/mainvisual2.jpg'),
        'image2' => esc_url(get_template_directory_uri() . '/img/item7.jpg'),
        'image3' => esc_url(get_template_directory_uri() . '/img/item12.jpg'),
    ));
}

// アイキャッチ画像を有効化する
add_theme_support('post-thumbnails');
