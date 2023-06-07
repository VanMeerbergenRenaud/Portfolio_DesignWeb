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
        <a href="/contact" class="projets__cta">Commençons un projet</a>

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
            <section class="project web"><!-- Mon cv : Airbnb -->
                <h3 class="hidden">Mon 1er projet web</h3>
                <div class="project__grid">
                    <a href="#" target="_blank">
                        <img class="project__img" src="http://design-web-portfolio.test/wp-content/themes/portfolio/img/projets/web/cv.jpg" alt="Image de projet">
                    </a>
                    <div class="project__grid__overlay">
                        <h4 class="project__grid__overlay__title">Premier cv</h4>
                        <div class="project__grid__overlay__category">Web</div>
                    </div>
                    <p class="project__grid__text">Réalisation d'un cv en recopiant le plus fidèlement possible le design du site Airbnb.</p>
                </div>
            </section>
            <section class="project web"><!-- Premier portfolio -->
                <h3 class="hidden">Mon 2ème projet web</h3>
                <div class="project__grid">
                    <a href="#" target="_blank">
                        <img class="project__img" src="http://design-web-portfolio.test/wp-content/themes/portfolio/img/projets/web/portfolio1.jpg" alt="Image de projet">
                    </a>
                    <div class="project__grid__overlay">
                        <h4 class="project__grid__overlay__title">Premier portfolio</h4>
                        <div class="project__grid__overlay__category">Web</div>
                    </div>
                    <p class="project__grid__text">Découvrez mon tout premier portfolio réalisé avec mon ancien partenaire Bootstrap&nbsp;!</p>
                </div>
            </section>
            <section class="project web"><!-- Mon portfolio actuel -->
                <h3 class="hidden">Mon 3ème projet web</h3>
                <div class="project__grid">
                    <a href="/accueil" target="_blank">
                        <img class="project__img" src="http://design-web-portfolio.test/wp-content/themes/portfolio/img/projets/web/portfolio2.jpg" alt="Image de projet">
                    </a>
                    <div class="project__grid__overlay">
                        <h4 class="project__grid__overlay__title">Dernier portfolio</h4>
                        <div class="project__grid__overlay__category">Web</div>
                    </div>
                    <p class="project__grid__text">Présentation de mon portfolio de fin de 2ᵉ année à l'HEPL qui reste celui que je préfère.</p>
                </div>
            </section>
            <section class="project mobile"><!-- Appli Chehdice -->
                <h3 class="hidden">Mon 1er projet de design d'application</h3>
                <div class="project__grid">
                    <a href="https://github.com/VanMeerbergenRenaud/285_VanMeerbergen_Renaud/tree/main/ThisOrThat" target="_blank">
                        <img class="project__img" src="http://design-web-portfolio.test/wp-content/themes/portfolio/img/projets/application/chedice.jpg" alt="Image de projet">
                    </a>
                    <div class="project__grid__overlay">
                        <h4 class="project__grid__overlay__title">Chehhdice</h4>
                        <div class="project__grid__overlay__category">App</div>
                    </div>
                    <p class="project__grid__text">L'application Chehhdice propose quotidiennement le choix entre deux produits sélectionnés avec passion pour les fans de nouvelles technologies.</p>
                </div>
            </section>
            <section class="project mobile"><!-- Appli Reciper -->
                <h3 class="hidden">Mon 2ème projet de design d'application</h3>
                <div class="project__grid">
                    <a href="https://github.com/VanMeerbergenRenaud/285_VanMeerbergen_Renaud/tree/main/Reciper" target="_blank">
                        <img class="project__img" src="http://design-web-portfolio.test/wp-content/themes/portfolio/img/projets/application/recipy.jpg" alt="Image de projet">
                    </a>
                    <div class="project__grid__overlay">
                        <h4 class="project__grid__overlay__title">Recipy</h4>
                        <div class="project__grid__overlay__category">App</div>
                    </div>
                    <p class="project__grid__text">Recipy est une application destinée à faciliter la recherche et la découverte de recettes de cuisine pour les passionnés comme Philippe Etchebest.</p>
                </div>
            </section>
            <section class="project mobile"><!-- Appli Pole dance -->
                <h3 class="hidden">Mon 3ème projet de design d'application</h3>
                <div class="project__grid">
                    <a href="https://github.com/VanMeerbergenRenaud/285_VanMeerbergen_Renaud/tree/main/PoleDance" target="_blank">
                        <img class="project__img" src="http://design-web-portfolio.test/wp-content/themes/portfolio/img/projets/application/polydancing.jpg" alt="Image de projet">
                    </a>
                    <div class="project__grid__overlay">
                        <h4 class="project__grid__overlay__title">Poly dancing</h4>
                        <div class="project__grid__overlay__category">App</div>
                    </div>
                    <p class="project__grid__text">L'application Polydancing permet aux utilisateurs d'apprendre et de créer des routines de mouvements indépendants de pole dance pour les niveaux.</p>
                </div>
            </section>
            <section class="project client"><!-- Stassen -->
                <h3 class="hidden">Mon 1er projet client</h3>
                <div class="project__grid">
                    <a href="#" target="_blank">
                        <img class="project__img" src="http://design-web-portfolio.test/wp-content/themes/portfolio/img/projets/client/jf.jpg" alt="Image de projet">
                    </a>
                    <div class="project__grid__overlay">
                        <h4 class="project__grid__overlay__title">Entrepreneur Stassen</h4>
                        <div class="project__grid__overlay__category">Client</div>
                    </div>
                    <p class="project__grid__text">Mon premier site effectué pour un client. Réalisation du site de Jean-François Stassen (entrepreneur paysagiste) durant l'année 2022.</p>
                </div>
            </section>
            <section class="project client"><!-- Clinicoeurs -->
                <h3 class="hidden">Mon 2ème projet client</h3>
                <div class="project__grid">
                    <a href="#" target="_blank">
                        <img class="project__img" src="http://design-web-portfolio.test/wp-content/themes/portfolio/img/projets/client/clinicoeurs.jpg" alt="Image de projet">
                    </a>
                    <div class="project__grid__overlay">
                        <h4 class="project__grid__overlay__title">Clinicoeurs ASBL</h4>
                        <div class="project__grid__overlay__category">Client</div>
                    </div>
                    <p class="project__grid__text">
                        Présentation d'un site pour l'asbl des Clinicoeurs de Vielsam durant mon parcours scolaire à l'HEPL.<br>
                        <small>Nb&nbsp;:&nbsp;site non officiel.</small>
                    </p>
                </div>
            </section>
        </article>
    </main>

<?php endwhile; endif; ?>
<?php get_footer(); ?>
