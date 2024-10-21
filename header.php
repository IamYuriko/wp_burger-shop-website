<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="l-wrapper">
        <div class="l-wrapper__inner">
            <div class="p-overlay-hamburgerMenu"></div>
            <header class="l-header">
                <div class="l-header__inner">
                    <div class="l-header__contents c-flex c-flex--center-between">
                        <!-- ハンバーガメニュー用ボタン -->
                        <button class="l-header__openBtn c-title c-title--s u-hide--pc">Menu</button>
                        <h1 class="l-header__logo c-title c-title--l">
                            <a class="l-header__link" href="<?php echo esc_url(home_url('/')); ?>"><?php echo bloginfo('name'); ?></a>
                        </h1>
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </header>