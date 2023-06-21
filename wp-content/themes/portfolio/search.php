<?php get_header(); ?>
<section class="search">
    <h2 class="search__head">Résultats de recherche pour <em>'<?= get_search_query(); ?>'</em></h2>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <article class="search__result">
                <h3 class="search__title">Résultat : <?= get_the_title(); ?></h3>
                <div class="search__excerpt"><?= get_the_excerpt(); ?></div>
                <a href="<?= get_the_permalink(); ?>" title="Vers <?= get_the_title(); ?>" class="search__link">
                    Voir le résultat <span>"<?= get_the_title(); ?>"</span>
                </a>
            </article>
        <?php endwhile; else : ?>
            <p class="search__empty">Aucun résultat à afficher.</p>
        <?php endif; ?>
</section>
<?php get_footer(); ?>