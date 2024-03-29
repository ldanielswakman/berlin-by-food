<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="card visual--<?= $page->visual() ?>">

      <h1><?= $page->title()->html() ?></h1>
      <br>

      <?= $page->text()->kirbytext() ?>

      <br>

      <?php if ($page->duration()->isNotEmpty()) : ?><p class="tour-meta">
        <?= l::get('duration') ?>: <?= $page->duration()->html() ?><?= ($page->duration()->int() == 1) ? ' ' . l::get('hour') : ' ' . l::get('hours') ?>
      </p><?php endif ?>

      <?php if ($page->starting_point()->isNotEmpty()) : ?><p class="tour-meta">
        <?= l::get('starting_point') ?>: <a href="https://www.google.com/maps/search/?api=1&query=<?= $page->starting_point()->html() ?>+Berlin" target="_blank"><?= $page->starting_point()->html() ?></a>
      </p><?php endif ?>

      <?php if (!$form->success()): ?>
        <a href="#info" class="button"><?= l::get('request_tour') ?></a>
      <?php endif ?>
      
    </div>

    <div class="card" style="margin-top: 0.25rem;" id="info">
      <?php snippet('contact-form') ?>
    </div>

  </main>

<?php snippet('footer') ?>