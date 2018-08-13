<? snippet('header') ?>

<main class="main" role="main">
  
  <section id="intro" class="intro">
    <?= $page->intro()->kirbytext() ?>
    <a href="#more" class="home-more"><img src="<?= url('assets/images/arrow-down.svg') ?>" alt="" /></a>
  </section>

  <section id="more" class="more">
    <?= $page->text()->kirbytext() ?>
  </section>

  <section class="projects-section">
    <? snippet('showcase') ?>
  </section>

</main>

<? snippet('footer') ?>