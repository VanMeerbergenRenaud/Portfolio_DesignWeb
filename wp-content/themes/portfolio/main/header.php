<!-- Class header -->
<div class="header">
    <h1 class="header__title bouncing-letters"><?= get_field('header-title'); ?></h1>
    <p class="header__text"><?= get_field('header-text'); ?></p>
    <a href="<?= get_field('header-link'); ?>" title="vers la page contact" class="header__link link__effect">
        Travaillez avec moi&nbsp;
        <img src="<?= get_field('arrow-right'); ?>" alt="">
    </a>
</div>