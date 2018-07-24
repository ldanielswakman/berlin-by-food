<?php snippet('header') ?>


  <div class="image-panel">
    <img src="<?= url('assets/images/cover-photo.jpg') ?>" alt="" />
  </div>

  <main class="main" role="main">
    
    <header class="wrap">
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <hr />
    </header>

    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>
  
    <section class="projects-section">
      
      <div class="wrap wide">
        <?php snippet('showcase') ?>
        <!-- <p class="projects-section-more"><a href="<?= page('tours')->url() ?>" class="btn">show all projects &hellip;</a></p> -->
      </div>
      
    </section>

  </main>

<?php snippet('footer') ?>