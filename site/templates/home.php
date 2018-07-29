<? snippet('header') ?>

<? snippet('image-panel') ?>

<main class="main" role="main">
  
  <section id="intro" class="intro">
    <?= $page->intro()->kirbytext() ?>
    <a href="#more" class="button"><?= l::get('read_more') ?></a>
  </section>

  <section id="more" class="more">
    <?= $page->text()->kirbytext() ?>
  </section>

  <section class="projects-section">
    <? snippet('showcase') ?>
  </section>

</main>

<? snippet('footer') ?>