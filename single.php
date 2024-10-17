<?php get_header(); ?>

<main class="l-main">
    <article class="l-contents">
        <section class="p-fv-single c-mv c-mv-single">
            <h1 class="p-fv-single__title c-heading c-heading--xxxl"><?php the_title(); ?></h1>
        </section>
        <div class="l-contents--single">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post();
                    the_content();
                ?>
                <?php endwhile; ?>
            <?php else : ?>
                投稿がありません。
            <?php endif; ?>
        </div>
    </article>
</main>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>