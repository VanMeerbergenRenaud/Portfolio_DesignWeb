<!-- Class benefits -->
<section id="benefits" class="benefits">
    <h2 class="benefits__title"><?= get_field('benefits-title'); ?></h2>
    <div class="benefits__bg-blur">
        <div class="benefits__bg-gradient"></div>
    </div>
    <div class="benefits__grid" id="cards">
        <?php
        $data = array(
            array("class" => "data1", "count" => "50", "label" => "Happy clients"),
            array("class" => "data2", "count" => "100", "label" => "Customers clients"),
            array("class" => "data3", "count" => "32", "label" => "yolo clients"),
            array("class" => "data4", "count" => "24", "label" => "Baby clients")
        );
        ?>

        <?php foreach ($data as $item) { ?>
            <div class="data <?= $item['class']; ?> card">
                <p>
                    <?= $item['count']; ?><span>+</span>
                </p>
                <p><?= $item['label']; ?></p>
            </div>
        <?php } ?>

        <!--second section-->
        <div class="info info1 card">
            <h3 class="info__title"><?= get_field('info1_title'); ?></h3>
            <p class="info__text">
                <?= get_field('info1_text'); ?>
            </p>
        </div>
        <div class="info info2 card">
            <div class="info__grid">
                <h3 class="info__title"><?= get_field('info2_title'); ?></h3>
                <p class="info__text panel">
                    <?= get_field('info2_text'); ?>
                </p>
                <img src="<?= get_field('info2_image'); ?>" alt="" class="info__img">
            </div>
            <div class="info__anim-video">
                <div class="test1">
                    <div class="test2">
                        <video loop="" muted="" playsinline="" autoplay="">
                            <source src="<?= get_field('info2_video'); ?>" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <div class="info info3 card">
            <h3 class="info__title"><?= get_field('info3_title'); ?></h3>
            <div class="info3__example-code">
                <div class="info3__example-code__img"></div>
            </div>
        </div>
        <div class="info info4 card">
            <h3 class="info__title"><?= get_field('info4_title'); ?></h3>
            <div class="info__card-dev">
                <div class="info__card-dev-months">
                    <div class="info__card-dev-month-line"></div>
                    <div>Mois</div>
                </div>
                <div class="info__card-dev-week-line" style="opacity: 1;">Semaines</div>
            </div>
        </div>
        <div class="info info5 card">
            <h3 class="info__title"><?= get_field('info5_title'); ?></h3>
            <p class="info__text">
                <?= get_field('info5_text'); ?>
            </p>
        </div>
        <div class="info info6 card">
            <h3 class="info__title"><?= get_field('info6_title'); ?></h3>
            <p class="info__text">
                <?= get_field('info6_text'); ?>
            </p>
        </div>
    </div>
</section>