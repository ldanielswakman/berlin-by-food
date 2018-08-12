<?php snippet('header') ?>

	<? snippet('image-panel') ?>

  <main class="main" role="main">
    
    <h1><?= $page->title()->html() ?></h1>

    <?= $page->text()->kirbytext() ?>
    
  </main>

<?php snippet('footer') ?>