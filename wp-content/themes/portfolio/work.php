<section id="work" class="work">
    <h2 class="work__title"><?= get_field('work-title'); ?></h2>
    <div class="work__row__filter-buttons">
        <ul role="tablist" id="filter-btns" class="work__row__filter-buttons__list">
            <?php
            $filterButtons = array(
                array("target" => "all", "label" => "Tout", "selected" => true, "tabindex" => -1),
                array("target" => "branding", "label" => "Clients", "selected" => false, "tabindex" => 1),
                array("target" => "photoshop", "label" => "Portfolio", "selected" => false, "tabindex" => 1),
                array("target" => "fashion", "label" => "&Eacute;cole", "selected" => false, "tabindex" => 1)
            );

            foreach ($filterButtons as $filterButton) { ?>
                <li role="presentation" class="work__row__filter-buttons__list__item">
                    <button class="work__row__filter-buttons__list__item__button <?php if ($filterButton['selected']) echo 'active'; ?>" role="tab" data-target="<?= $filterButton['target']; ?>" aria-selected="<?= $filterButton['selected']; ?>" tabindex="<?= $filterButton['tabindex']; ?>">
                        <?= $filterButton['label']; ?>
                    </button>
                </li>
            <?php } ?>
        </ul>
    </div>

    <div class="work__grid">
        <?php
        $projects = array(
            array("id" => "branding"),
            array("id" => "branding"),
            array("id" => "photoshop"),
            array("id" => "photoshop"),
            array("id" => "fashion"),
            array("id" => "fashion")
        );

        foreach ($projects as $project) { ?>
            <div class="work__grid__project" data-id="<?= $project['id']; ?>">
                <div class="work__grid__project__display">
                    <!--Background image-->
                </div>
            </div>
        <?php } ?>

        <a href="#" class="work__grid__link">Voir plus de projets&nbsp;&nbsp;
            <svg width="16px" height="16px" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                <path d="M0,7.35740662 C0,7.63005066 0.0969772339,7.86215973 0.290931702,8.05373383 C0.484886169,8.24530792 0.715805054,8.34109497 0.983688354,8.34109497 L6.37522888,8.34109497 L6.37522888,13.7326355 C6.37522888,13.9994202 6.47074127,14.2297897 6.66176605,14.4237442 C6.85279083,14.6176987 7.08462524,14.7146759 7.35726929,14.7146759 C7.63000488,14.7146759 7.86334991,14.6176987 8.05730438,14.4237442 C8.25125885,14.2297897 8.34823608,13.9994202 8.34823608,13.7326355 L8.34823608,8.34109497 L13.7326355,8.34109497 C13.9994202,8.34109497 14.2297897,8.24530792 14.4237442,8.05373383 C14.6176987,7.86215973 14.7146759,7.63005066 14.7146759,7.35740662 C14.7146759,7.08476257 14.6176987,6.85146332 14.4237442,6.65750885 C14.2297897,6.46355438 13.9994202,6.36657715 13.7326355,6.36657715 L8.34823608,6.36657715 L8.34823608,0.983688354 C8.34823608,0.715805054 8.25125885,0.484886169 8.05730438,0.290931702 C7.86334991,0.0969772339 7.63000488,0 7.35726929,0 C7.08462524,0 6.85279083,0.0969772339 6.66176605,0.290931702 C6.47074127,0.484886169 6.37522888,0.715805054 6.37522888,0.983688354 L6.37522888,6.36657715 L0.983688354,6.36657715 C0.715805054,6.36657715 0.484886169,6.46355438 0.290931702,6.65750885 C0.0969772339,6.85146332 0,7.08476257 0,7.35740662 Z" fill="currentColor"></path>
            </svg>
        </a>
    </div>
</section>