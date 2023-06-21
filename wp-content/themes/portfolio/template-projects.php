<?php /* Template Name: Projects page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="projets">
        <h2 class="projets__title word" aria-label="Projets">
            <span aria-hidden="true">P</span>
            <span aria-hidden="true">r</span>
            <span aria-hidden="true">o</span>
            <span aria-hidden="true">j</span>
            <span aria-hidden="true">e</span>
            <span aria-hidden="true">t</span>
            <span aria-hidden="true">s</span>
        </h2>
        <p class="projets__description">Retrouvez ci-dessous mes projets récents classés par ordre chronologique.</p>
        <a href="/contact" title="vers la page contact" class="projets__cta">Commençons un projet</a>

        <article class="wrapper_tabcontent">
            <h3 class="hidden">Navigation filtrant tous mes projets réalisés</h3>
            <!--PARTIE 1 : FILTRES -->
            <input type="radio" id="web" name="filter" />
            <label for="web" class="tablinks">WEB</label>

            <input type="radio" id="mobile" name="filter"/>
            <label for="mobile" class="tablinks">MOBILE</label>

            <input type="radio" id="client" name="filter"/>
            <label for="client" class="tablinks">CLIENT</label>

            <input type="radio" id="reset" name="filter"/>
            <label for="reset" class="reset-link">Réinitialiser les filtres</label>

            <!--PARTIE 2 : PROJETS -->
            <?php
            $project_items = get_field('projects');
            if ($project_items) {
                $count_web = 0;
                $count_mobile = 0;
                $count_client = 0;
                $category_class = '';

                foreach ($project_items as $item) {
                    $title = $item['project-title'];
                    $description = $item['project-description'];
                    $category = $item['project-category'];
                    $img = $item['project-img'];
                    $url = $item['project-url'];

                    if ($category === 'Web') {
                        $count_web++;
                        $category_class = 'web';
                        $count = $count_web;
                    } elseif ($category === 'App') {
                        $count_mobile++;
                        $category_class = 'mobile';
                        $count = $count_mobile;
                    } elseif ($category === 'Client') {
                        $count_client++;
                        $category_class = 'client';
                        $count = $count_client;
                    }

                    ?>
                    <section class="project <?= $category_class; ?>">
                        <h3 class="hidden">Projet : <?= $title; ?></h3>
                        <div class="project__grid">
                            <a href="<?= $url; ?>" title="vers <?= $title; ?>" target="_blank">
                                <img class="project__img" src="<?= $img; ?>" alt="Image de projet">
                            </a>
                            <div class="project__grid__overlay">
                                <h4 class="project__grid__overlay__title"><?= $title; ?></h4>
                                <div class="project__grid__overlay__category"><?= $category; ?></div>
                            </div>
                            <p class="project__grid__text"><?= $description; ?></p>
                        </div>
                    </section>
                    <?php
                }
            }
            ?>
        </article>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
