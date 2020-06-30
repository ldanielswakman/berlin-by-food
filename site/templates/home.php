<?php snippet('header') ?>

<main class="main" role="main">

	<?php if($page->isHomePage()) { snippet('lang-switcher'); } ?>
  
  <section id="intro" class="intro">
    <?= $page->intro()->kirbytext() ?>
  </section>

  <section id="more" class="more">
    <?= $page->text()->kirbytext() ?>
  </section>

  <br />
  <a href="<?= page('tours')->url() ?>" class="button button--small"><?= l::get('see_all') ?></a>

</main>

<?php snippet('footer') ?>