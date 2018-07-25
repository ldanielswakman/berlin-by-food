<? snippet('header') ?>

<? snippet('image-panel') ?>

<main class="main" role="main">
  
  <section id="intro" class="intro">
    <?= $page->intro()->kirbytext() ?>
    <a href="#more" class="button">En garde</a>
  </section>

  <section id="more" class="more">
    <?= $page->text()->kirbytext() ?>
  </section>

  <section class="projects-section">
    
    <div class="wrap wide">
      <? snippet('showcase') ?>
      <!-- <p class="projects-section-more"><a href="<?= page('tours')->url() ?>" class="btn">show all projects &hellip;</a></p> -->
    </div>
    
  </section>

</main>

<? snippet('footer') ?>