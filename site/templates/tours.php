<?php snippet('header') ?>

  <main class="main" role="main">

    <h1><?= $page->title()->html() ?></h1>

    <?= $page->text()->kirbytext() ?>

    <div class="tours-index row">
      <?php foreach (page('tours')->children()->visible() as $tour) : ?>
      <div class="col-xs-12 col-sm-6 tours-index__col">
        <div class="card visual--<?= $tour->visual() ?>" id="<?= $tour->slug() ?>">

          <h3><?= $tour->title()->html() ?></h3>
          <br>
          <p><?= $tour->text()->kirbytext()->excerpt(32, 'words') ?></p>
          <br>
          <a href="<?= $tour->url() ?>#info" class="button"><?= l::get('interested') ?></a>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <a href="<?= $tour->url() ?>" class="a--light"><?= l::get('more_info') ?></a>

        </div>
      </div>
      <?php endforeach ?>
    </div>

    <div>
      <?= $page->text_2()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>