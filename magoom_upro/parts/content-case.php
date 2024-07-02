<li>
    <div class="case-studies-card"<?php if($field = get_field('card_color')) echo ' style="background-color: ' . $field . '"' ?>>
        <div class="case-studies-card__head">
            <div class="case-studies-card__title title-2-subtitle"><?php the_title() ?></div>

            <?php if ($field = get_field('industry')): ?>
                <div class="case-studies-card__subtitle"><?= $field ?></div>
            <?php endif ?>

        </div>
        <div class="case-studies-card__footer">

            <?php if ($field = get_field('client_logo')): ?>
                <div class="case-studies-card__footer-left">
                    <div class="case-studies-card__type"><?php _e('Client', 'Magoom') ?></div>
                    <div class="case-studies-card__logo">
                        <?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
                            <img src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
                        <?php else: ?>
                            <?= wp_get_attachment_image($field['ID'], 'full') ?>
                        <?php endif ?>
                    </div>
                </div>
            <?php endif ?>

            <div class="case-studies-card__footer-right">
                <a href="<?php the_permalink() ?>" class="btn-default btn-default--secondary"><?php _e('Learn more', 'Magoom') ?></a>
            </div>
        </div>
    </div>
</li>