<?php
// CSS読み込み
function my_stylesheets()
{
    //Google Fonts
    wp_enqueue_style('Roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap', array());
    wp_enqueue_style('MPLUS1p', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@700&display=swap', array());

    //リセットCSS
    wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');

    //メインのスタイルシート
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array('ress'), false, 'all');

    //JavaScript

}
add_action('wp_enqueue_scripts', 'my_stylesheets');
