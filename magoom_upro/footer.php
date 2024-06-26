</main>

<footer class="footer" data-footer>
  <div class="footer__transform-wrapper">
    <div class="footer__inner">
      <div class="container">
        <div class="footer__row-1">

          <?php if ($locations = get_nav_menu_locations()): ?>

            <div class="footer__nav-wrap">

              <?php $counter = 1; ?>

              <?php foreach ($locations as $index => $menu): ?>

                <?php if (str_contains($index, 'footer') && has_nav_menu($index)): ?>
                <div class="footer__nav-col footer__nav-col-<?= $counter ?>">
                  <div class="footer__nav-title"><?= wp_get_nav_menu_object($locations[$index])->name ?></div>

                  <?php 

                  $ul_class = 'footer__nav-list';
                  if($counter == 1) $ul_class .= ' footer__nav-list--cols-2';

                  wp_nav_menu( array(
                    'theme_location'  => $index,
                    'container'       => '',
                    'items_wrap'      => '<ul class="' . $ul_class . '">%3$s</ul>'
                  ) ); 

                  ?>

                </div>

                <?php $counter++; ?>

              <?php endif ?>

            <?php endforeach ?>


          </div>
        <?php endif ?>

        <?php if ($field = get_field('footer_logo', 'option')): ?>
          <a href="<?= get_home_url() ?>" class="footer__logo">
            <?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
              <img src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
            <?php else: ?>
              <?= wp_get_attachment_image($field['ID'], 'full') ?>
            <?php endif ?>
          </a>
        <?php endif ?>
        
      </div>

      <?php if ($field = get_field('footer_text', 'option')): ?>
        <div class="footer__row-2">
          <div class="footer__copy"><?= $field ?></div>
        </div>
      <?php endif ?>

    </div>
  </div>
</div>

<?php the_field('footer_code_f', 'option') ?>

</footer>

<?php wp_footer(); ?>
</body>
</html>