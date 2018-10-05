<? snippet('header') ?>

<main class="main" role="main">

	<? if($page->isHomePage()) { snippet('lang-switcher'); } ?>
  
  <section id="intro" class="intro">
    <?= $page->intro()->kirbytext() ?>
    <a href="#more" class="home-more"><img src="<?= url('assets/images/arrow-down.svg') ?>" alt="" /></a>
  </section>

  <section id="more" class="more">
    <?= $page->text()->kirbytext() ?>
  </section>

  <br />
  <a href="<?= page('tours')->url() ?>" class="button button--small"><?= l::get('see_all') ?></a>

</main>

<? snippet('footer') ?>