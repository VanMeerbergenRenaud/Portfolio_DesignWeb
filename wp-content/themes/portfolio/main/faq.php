<!-- Class faq -->
<section class="faq" id="faq">
    <h2 class="faq__title"><?= get_field('faq-title'); ?></h2>
    <div class="faq__grid">
        <div class="faq__grid__case">
            <input type="checkbox" id="toggle-all-btn">
            <label for="toggle-all-btn">Tout voir</label>
        </div>

        <?php
        // Get the FAQ items from ACF
        $faq_items = get_field('faq-items');

        // Check if there are any FAQ items
        if ($faq_items) {
            echo '<ul id="accordion" class="faq__grid__list accordion">';

            // Loop through the FAQ items
            foreach ($faq_items as $faq_item) {
                $question_id = sanitize_title($faq_item['question']);
                $question_label = esc_html($faq_item['question']);
                $answer = wp_kses($faq_item['answer'], array(
                    'a' => array(
                        'href' => array(),
                        'title' => array()
                    )
                ));
                ?>

                <li class="faq__grid__list__item">
                    <input type="checkbox" name="accordion" id="<?php echo $question_id; ?>" class="faq__grid__list__item__input">
                    <label for="<?php echo $question_id; ?>" class="faq__grid__list__item__label">
                        <?php echo $question_label; ?>
                    </label>
                    <p class="faq__grid__list__item__text content">
                        <?php echo $answer; ?>
                    </p>
                </li>
                <?php
            }

            echo '</ul>';
        }
        ?>
    </div>
</section>