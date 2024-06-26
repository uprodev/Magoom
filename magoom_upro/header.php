<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="UTF-8">
  <?php wp_head(); ?>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <style>
    .page-loaded .page-loader {
      display: none;
    }

    .page-loader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #c1f5f4;
      z-index: 100;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      color: #9394f8;
    }

    .lds-roller,
    .lds-roller div,
    .lds-roller div:after {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }

    .lds-roller {
      display: inline-block;
      position: relative;
      width: 80px;
      height: 80px;
    }

    .lds-roller div {
      -webkit-animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
      animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
      -webkit-transform-origin: 40px 40px;
      -ms-transform-origin: 40px 40px;
      transform-origin: 40px 40px;
    }

    .lds-roller div:after {
      content: " ";
      display: block;
      position: absolute;
      width: 7.2px;
      height: 7.2px;
      border-radius: 50%;
      background: currentColor;
      margin: -3.6px 0 0 -3.6px;
    }

    .lds-roller div:nth-child(1) {
      -webkit-animation-delay: -0.036s;
      animation-delay: -0.036s;
    }

    .lds-roller div:nth-child(1):after {
      top: 62.62742px;
      left: 62.62742px;
    }

    .lds-roller div:nth-child(2) {
      -webkit-animation-delay: -0.072s;
      animation-delay: -0.072s;
    }

    .lds-roller div:nth-child(2):after {
      top: 67.71281px;
      left: 56px;
    }

    .lds-roller div:nth-child(3) {
      -webkit-animation-delay: -0.108s;
      animation-delay: -0.108s;
    }

    .lds-roller div:nth-child(3):after {
      top: 70.90963px;
      left: 48.28221px;
    }

    .lds-roller div:nth-child(4) {
      -webkit-animation-delay: -0.144s;
      animation-delay: -0.144s;
    }

    .lds-roller div:nth-child(4):after {
      top: 72px;
      left: 40px;
    }

    .lds-roller div:nth-child(5) {
      -webkit-animation-delay: -0.18s;
      animation-delay: -0.18s;
    }

    .lds-roller div:nth-child(5):after {
      top: 70.90963px;
      left: 31.71779px;
    }

    .lds-roller div:nth-child(6) {
      -webkit-animation-delay: -0.216s;
      animation-delay: -0.216s;
    }

    .lds-roller div:nth-child(6):after {
      top: 67.71281px;
      left: 24px;
    }

    .lds-roller div:nth-child(7) {
      -webkit-animation-delay: -0.252s;
      animation-delay: -0.252s;
    }

    .lds-roller div:nth-child(7):after {
      top: 62.62742px;
      left: 17.37258px;
    }

    .lds-roller div:nth-child(8) {
      -webkit-animation-delay: -0.288s;
      animation-delay: -0.288s;
    }

    .lds-roller div:nth-child(8):after {
      top: 56px;
      left: 12.28719px;
    }

    @-webkit-keyframes lds-roller {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }

      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @keyframes lds-roller {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }

      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }
  </style>

  <script>
    let element = document.querySelector('html');
    if (element) {
      const setFontSize = () => {
        let baseWidth = 1440;
        let baseFontSize = 10;
        let screenWidth = element.clientWidth;
        let value;

        if (screenWidth <= baseWidth) {
          let scaleFactor = 10; 
          value = baseFontSize + (screenWidth - baseWidth) * scaleFactor / baseWidth;
        } else {
          let scaleFactor = 1; 
          value = baseFontSize + (screenWidth - baseWidth) * scaleFactor / baseWidth;
        }

        element.style.fontSize = value + 'px';
      }

      setFontSize();
      window.addEventListener('resize', setFontSize);
    }
  </script>

  <?php the_field('head_code_h', 'option') ?>

</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <?php the_field('body_code_h', 'option') ?>

  <div class="page-loader">
    <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
  </div>

  <header class="header<?php if($field = get_field('header_color')) echo ' header--' . $field ?>" data-header data-popup="lock-padding" data-css-variable-height="--header-height">
    <div class="header__inner">
      <div class="container header__body">

        <?php if ($field = get_field('header_logo', 'option')): ?>
          <div class="header__left">
            <a href="<?= get_home_url() ?>" class="header__logo">
              <?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
                <img src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
              <?php else: ?>
                <?= wp_get_attachment_image($field['ID'], 'full') ?>
              <?php endif ?>
            </a>
          </div>
        <?php endif ?>
        
        <div class="header__right">

          <?php if(have_rows('menu_h', 'option')): ?>

            <ul class="header__nav">

              <?php while(have_rows('menu_h', 'option')): the_row() ?>

                <?php if ($link = get_sub_field('link')): ?>

                  <?php $is_child_menu = get_sub_field('is_child_menu') ?>

                  <li<?php if($is_child_menu) echo ' class="header__nav-has-drop-down"' ?>>
                    <a href="<?= $link['url'] ?>" class="header__nav-item<?php if($is_child_menu) echo ' chevron-right' ?>"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>

                    <?php if ($is_child_menu): ?>
                      <div class="header__drop-down header-drop-down">

                        <?php if ($field = get_sub_field('banner')): ?>
                          <div class="header-drop-down__banner">

                            <?php if ($field['image']): ?>
                              <div class="header-drop-down__banner-bg ibg">
                                <?= wp_get_attachment_image($field['image']['ID'], 'full') ?>
                              </div>
                            <?php endif ?>
                            
                            <div class="header-drop-down__banner-body">

                              <?php if ($field['text']): ?>
                                <div class="header-drop-down__banner-title"><?= $field['text'] ?></div>
                              <?php endif ?>

                              <?php if ($field['link']): ?>
                                <div class="header-drop-down__banner-btn">
                                  <a href="<?= $field['link']['url'] ?>" class="btn-default btn-default--primary"<?php if($field['link']['target']) echo ' target="_blank"' ?>><?= $field['link']['title'] ?></a>
                                </div>
                              <?php endif ?>

                            </div>
                          </div>
                        <?php endif ?>
                        
                        <?php if ($child_menu = get_sub_field('child_menu')): ?>
                          <ul class="header-drop-down__list">

                            <?php foreach ($child_menu as $item): ?>
                              <?php if ($item['link']): ?>
                                <li>
                                  <a href="<?= $item['link']['url'] ?>" class="header-drop-down__list-item"<?php if($item['link']['target']) echo ' target="_blank"' ?>>

                                    <?php if ($item['icon']): ?>
                                      <div class="header-drop-down__list-icon">
                                        <?php if (pathinfo($item['icon']['url'])['extension'] == 'svg'): ?>
                                          <img src="<?= $item['icon']['url'] ?>" alt="<?= $item['icon']['alt'] ?>">
                                        <?php else: ?>
                                          <?= wp_get_attachment_image($item['icon']['ID'], 'full') ?>
                                        <?php endif ?>
                                      </div>
                                    <?php endif ?>
                                    
                                    <div class="header-drop-down__list-content">
                                      <h4 class="header-drop-down__list-title"><?= $item['link']['title'] ?></h4>

                                      <?php if ($item['text']): ?>
                                        <div class="header-drop-down__list-text last-no-margin"><?= $item['text'] ?></div>
                                      <?php endif ?>
                                      
                                    </div>
                                  </a>
                                </li>
                              <?php endif ?>
                            <?php endforeach ?>

                          </ul>
                        <?php endif ?>

                      </div>
                    <?php endif ?>

                  </li>
                <?php endif ?>

              <?php endwhile ?>

            </ul>

          <?php endif ?>

          <?php if ($field = get_field('header_button', 'option')): ?>
          <a href="<?= $field['url'] ?>" class="header__btn-book btn-default btn-default--primary"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
        <?php endif ?>

        <button type="button" class="header__burger" data-action="toggle-show-mobile-menu">
          <img class="i-burger" src="<?= get_stylesheet_directory_uri() ?>/img/icons/burger.svg" alt="">
          <img class="i-x-mark" src="<?= get_stylesheet_directory_uri() ?>/img/icons/x-mark.svg" alt="">
        </button>
      </div>
    </div>
  </div>
  <div data-mobile-menu class="mobile-menu">
    <div class="mobile-menu__inner">
      <div class="mobile-menu__scroll-container">
        <div class="mobile-menu__body">

          <?php wp_nav_menu( array(
            'theme_location'  => 'header-mobile',
            'container'       => '',
            'items_wrap'      => '<ul data-spoiler class="mobile-menu__list">%3$s</ul>'
          )); ?>

        </div>
      </div>

      <?php if ($field = get_field('header_button', 'option')): ?>
      <div class="mobile-menu__btn">
        <a href="<?= $field['url'] ?>" class="btn-default btn-default--secondary"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
      </div>
    <?php endif ?>

  </div>
</div>
</header>

<main class="_page">