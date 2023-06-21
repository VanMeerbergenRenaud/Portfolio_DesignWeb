<!-- Class about -->
<section class="about" id="about">
    <div class="about__zoom">
        <div class="about__zoom__grid">
            <h2 class="about__zoom__grid__title"><?= get_field('about-title'); ?></h2>
            <p class="about__zoom__grid__text"><?= get_field('about-text'); ?></p>
            <a href="<?= get_field('about-link'); ?>" title="Vers la page projets" class="about__zoom__grid__link">
                <svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M429.6 92.1c4.9-11.9 2.1-25.6-7-34.7s-22.8-11.9-34.7-7l-352 144c-14.2 5.8-22.2 20.8-19.3 35.8s16.1 25.8 31.4 25.8H224V432c0 15.3 10.8 28.4 25.8 31.4s30-5.1 35.8-19.3l144-352z"/>
                </svg>
                Découvrez mes projets
            </a>
        </div>
        <img src="<?= get_field('about-image')['url']; ?>" alt="<?= get_field('about-image')['alt']; ?>" class="about__zoom__img">
        <div class="about__zoom__bg"></div>
        <div class="about__zoom__img-overlay"></div>
    </div>
</section>