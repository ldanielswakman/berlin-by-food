<!doctype html>

<?  
// In maintenance redirect
if($site->maintenance_mode() == 'true') :
  if(!$site->user() && page()->template() != 'soon') go('soon');  
endif;
?>

<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">

  <head>

    <title><?= $page->title()->html() ?> | <?= $site->title()->html() ?></title>

    <? snippet('head-meta') ?>

    <? snippet('google-analytics') ?>

    <?= css('assets/css/flexboxgrid2.min.css') ?>
    <?= css('assets/css/style.css') ?>

    <?= js('assets/js/jquery-3.3.1.min.js') ?>
    <?= js('assets/js/jquery.smooth-scroll.min.js') ?>
    <?= js('assets/js/scripts.js') ?>

    <? if(c::get('env') !== 'DEV') { snippet('cookie-notice'); } ?>

  </head>

  <body class="page--<?= $page->template() ?><? e($page->coverimage()->isNotEmpty() , ' page--hasImage') ?>">

    <script>$('body').addClass('isLoading'); setTimeout(function() { $('body').addClass('isLoaded').removeClass('isLoading'); }, 2000);</script>

    <div class="side-panel">
      <a href="<?= url() ?>" rel="home" class="logo">
        <span style="position: absolute; left: -9999px; opacity: 0;"><?= $site->title()->html() ?></span>
        <img src="<?= url('assets/images/logo.svg') ?>" alt="<?= $site->title()->html() ?>" />
      </a>

      <? if(strlen(l::get('sticker')) > 0) : ?>
        <div class="sticker"><span><?= l::get('sticker') ?></span></div>
      <? endif ?>

      <? snippet('lang-switcher') ?>
      
    </div>

    <? snippet('menu') ?>

    <? snippet('image-panel') ?>
    