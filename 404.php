<?php get_header(); ?>
<div class="page404">
    <h1 class="page404__title">404 NOT FOUND</h1>
    <h2 class="page404__subtitle">お探しのページは見つかりませんでした</h2>
    <p class="page404__text">お探しのページは見つかりませんでした。<br>ご指定いただいたURLはすでに削除されたか、間違っている可能性があります。</p>
    <div class="page404__button"><a href="<?php echo esc_url(home_url('/')); ?>">TOPへ戻る</a></div>
</div>
<?php get_footer(); ?>