<!-- Class workflow -->
<section class="workflow" id="workflow">
    <h2 class="workflow__title"><?= get_field('workflow-title'); ?></h2>
    <div class="workflow__grid">
        <ul class="workflow__grid__wrapper">
            <?php
            $workflow_items = get_field('workflow-items'); // Assuming 'workflow-items' is the field name that contains the array of workflow items
            if ($workflow_items) {
                foreach ($workflow_items as $item) {
                    $number = $item['number'];
                    $title = $item['title'];
                    $text = $item['text'];
                    ?>
                    <li class="card workflow__grid__wrapper__card">
                        <span class="workflow__grid__wrapper__card__number"><?= $number; ?></span>
                        <h3 class="workflow__grid__wrapper__card__title"><?= $title; ?></h3>
                        <p class="workflow__grid__wrapper__card__text"><?= $text; ?></p>
                    </li>
                <?php }
            }
            ?>
        </ul>
    </div>
</section>