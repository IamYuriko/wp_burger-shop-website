<!-- カード（左写真、右商品情報）をテンプレート化 -->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <section class="p-card">
            <div class="p-card__contents c-grid">
                <?php the_post_thumbnail('full', array('class' => 'p-card__image c-image')); ?>
                <div class="p-card__container">
                    <h2 class="p-card__title c-heading c-heading--xl"><?php the_title(); ?></h2>
                    <h3 class="p-card__subtitle c-heading c-heading--sm"><?php echo get_post_meta($post->ID, 'card_title', true); ?>
                    </h3>
                    <p class="p-card__text"><?php echo get_post_meta($post->ID, 'card_desc', true); ?></p>
                    <a class="p-card__button c-button-card" href="<?php the_permalink(); ?>">詳しく見る</a>
                </div>
        </section>
    <?php endwhile; ?>
<?php else : ?>
    <p>お探しの記事は見つかりませんでした。</p>
<?php endif; ?>