<?php get_header(); ?>
<main class="l-main">
    <article class="l-contents">
        <section class="p-fv-page c-mv c-mv-page">
            <h1 class="p-fv-page__title c-heading c-heading--xxxl"><?php the_title(); ?></h1>
        </section>
        <div class="l-contents--single">

            <body>
                <?php the_content(); ?>
            </body>
        </div>
    </article>
</main>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>