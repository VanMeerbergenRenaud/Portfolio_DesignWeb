<!-- Class sponsor mobile -->
<div class="sponsor">
    <p class="sponsor__text">Mes outils <span class="hidden">quotidiens</span></p>
    <div class="sponsor__slider">
        <div class="sponsor__slider__track">
            <?php
            $images = get_field('sponsor-gallery'); // récupère les images de la galerie
            if ($images):
                // Dupliquer les images pour créer un effet de boucle infinie
                $duplicated_images = array_merge($images, $images);
                foreach ($duplicated_images as $image): ?>
                    <img src="<?= esc_url($image); ?>" class="sponsor__slider__track__img" alt=""/>
                <?php endforeach;
            endif;
            ?>
        </div>
    </div>
</div>