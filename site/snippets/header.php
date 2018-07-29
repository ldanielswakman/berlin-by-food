<!doctype html>

<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
    <meta name="description" content="<?= $site->description()->html() ?>">

    <?= css('assets/css/flexboxgrid2.min.css') ?>
    <?= css('assets/css/style.css') ?>

    <?= js('assets/js/jquery-3.3.1.min.js') ?>
    <?= js('assets/js/jquery.smooth-scroll.min.js') ?>
    <?= js('assets/js/scripts.js') ?>

  </head>

  <body class="page--<?= $page->template() ?>">

    <script>$('body').addClass('isLoading');</script>

    <div class="side-panel">
      <a href="<?= url() ?>" rel="home" class="logo">
        <span style="position: absolute; left: -9999px; opacity: 0;"><?= $site->title()->html() ?></span>
        <img src="<?= url('assets/images/logo.svg') ?>" alt="<?= $site->title()->html() ?>" />
      </a>

      <? snippet('lang-switcher') ?>
      
    </div>

    <? snippet('menu') ?>
