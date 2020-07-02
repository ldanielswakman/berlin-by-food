<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>

      <?php if($pagination->page() == 1): ?>
        <div class="intro text">
          <?= $page->text()->kt() ?>
        </div>
      <?php endif ?>

      <hr />
    </header>

    <section class="article-index">
      <?php if($articles->count()): ?>
        <?php foreach($articles as $article): ?>

          <a href="<?= $article->url() ?>" class="article-item">

            <div>

              <h2><?= $article->title()->html() ?></h2>
              <p class="article-date"><?= $article->date('F jS, Y') ?></p>
              <p><?= $article->text()->kt()->excerpt(52, 'words') ?></p>

            </div>

            <?php snippet('coverimage', $article) ?>

            <object><a class="link" href="<?= $article->url() ?>"><?= l::get('read_more') ?></a></object>

          </a>

          <hr />

        <?php endforeach ?>
      <?php else: ?>
        <p>This blog does not contain any articles yet.</p>
      <?php endif ?>
    </section>

  </main>

<?php snippet('footer') ?>