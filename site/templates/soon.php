<!doctype html>
<?php // Temporary redirect; remove when going live
if(!$site->user() && page()->template() != 'soon') go('soon');
?>

<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">

  <head>

    <title><?= $page->title()->html() ?> | <?= $site->title()->html() ?></title>

    <?php snippet('head-meta') ?>

    <?php snippet('google-analytics') ?>

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
      
    </div>

	  <main class="main" role="main">
	    
	    <br><br><br>
	    <h1>Coming soon...</h1>
	    
	  </main>

</body>
</html>