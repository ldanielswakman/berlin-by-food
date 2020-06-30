<?php snippet('header') ?>

  <main class="main" role="main">
    
    <h1><?= $page->title()->html() ?></h1>

    <?= $page->intro()->kirbytext() ?>

    <hr />

    <?php snippet('contact-form') ?>
      
    <div class="contact-twitter text wrap cf">
      <?= $page->text()->kirbytext() ?>
    </div>
    
  </main>

<?php snippet('footer') ?>