<!doctype html>

<?php 
// In maintenance redirect
if($site->maintenance_mode() == 'true') :
  if(!$site->user() && page()->template() != 'soon') go('soon');  
endif;
?>

<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">

  <head>

    <title><?= $page->title()->html() ?> | <?= $site->title()->html() ?></title>

    <?php snippet('head-meta') ?>

    <?= css('assets/css/flexboxgrid2.min.css') ?>
    <?= css('assets/css/style.css') ?>

    <?= js('assets/js/jquery-3.3.1.min.js') ?>
    <?= js('assets/js/jquery.smooth-scroll.min.js') ?>
    <?= js('assets/js/scripts.js') ?>

    <?php if(c::get('env') !== 'DEV') : ?>
      <?php snippet('cookie-notice') ?>
      <?php snippet('google-analytics') ?>
      <?php snippet('mailchimp') ?>
    <?php endif ?>

  </head>

  <body class="page--<?= $page->template() ?><?php e($page->coverimage()->isNotEmpty() && ($page->template() !== 'article'), ' page--hasImage') ?> isLoaded">

    <script>$('body').addClass('isLoading').removeClass('isLoaded'); setTimeout(function() { $('body').addClass('isLoaded').removeClass('isLoading'); }, 2000);</script>

    <div class="side-panel">
      <a href="<?= $site->homepage()->url() ?>" rel="home" class="logo">
        <span style="position: absolute; left: -9999px; opacity: 0;"><?= $site->title()->html() ?></span>
        <img src="<?= url('assets/images/logo.svg') ?>" alt="<?= $site->title()->html() ?>" />
      </a>

      <?php if(strlen(l::get('sticker')) > 0) : ?>
        <a href="<?= $site->find('tours')->url() ?>" class="sticker"><span><?= l::get('sticker') ?></span></a>
      <?php endif ?>

      <?php if(!$page->isHomePage()) { snippet('lang-switcher'); } ?>
      
    </div>

    <?php snippet('menu') ?>

    <?php snippet('image-panel') ?>
    