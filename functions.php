<?php
// CSS読み込み
function my_stylesheets()
{
    //Google Fonts
    wp_enqueue_style('roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap', array());
    wp_enqueue_style('mplus1p', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@700&display=swap', array());

    //リセットCSS
    wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');

    //メインのスタイルシート
    wp_enqueue_style('style', get_theme_file_uri('/assets/css/style.css'), array('ress'), false, 'all');

    //JavaScript
    wp_enqueue_script(
        'jquery',
        '//ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js',
        array(),
        '3.7.1',
        false,
    );
    wp_enqueue_script('myscript', get_theme_file_uri('/assets/js/script.js'), array('jquery'), '1.0.0', false);
}
add_action('wp_enqueue_scripts', 'my_stylesheets');
