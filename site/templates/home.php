<? snippet('header') ?>

<? snippet('image-panel') ?>

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
      <? snippet('showcase') ?>
      <!-- <p class="projects-section-more"><a href="<?= page('tours')->url() ?>" class="btn">show all projects &hellip;</a></p> -->
    </div>
    
  </section>

</main>

<? snippet('footer') ?>