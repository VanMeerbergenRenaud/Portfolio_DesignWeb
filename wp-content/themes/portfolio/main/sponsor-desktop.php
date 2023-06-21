<!-- Class sponsor desktop -->
<div class="none sponsor">
    <p class="sponsor__text">Mes outils <span class="hidden">quotidiens</span></p>
    <div class="sponsor__slider">
        <div class="sponsor__slider__track">
            <?php
            $images = get_field('sponsor-gallery'); // récupère les images de la galerie
            if ($images):
                foreach ($images as $image): ?>
                    <img src="<?= esc_url($image); ?>" class="sponsor__slider__track__img" alt="logo de mes divers outils"/>
                <?php endforeach;
            endif;
            ?>
        </div>
    </div>
</div>