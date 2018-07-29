<? snippet('header') ?>

  <main class="main" role="main">

    <h1><?= $page->title()->html() ?></h1>

    <?= $page->text()->kirbytext() ?>

    <div class="tours-index row">
      <? foreach (page('tours')->children()->visible() as $tour) : ?>
      <div class="col-xs-12 col-sm-6" style="margin-bottom: 2rem;">
        <div class="card" id="<?= $tour->slug() ?>">
          <h3><?= $tour->title()->html() ?></h3>
          <br>
          <p><?= $tour->text()->kirbytext()->excerpt(50, 'words') ?></p>
          <br>
          <a href="#" class="button">I'm interested</a>

        </div>
      </div>
      <? endforeach ?>
    </div>

    <div>
      <?= $page->text_2()->kirbytext() ?>
    </div>

  </main>

<? snippet('footer') ?>