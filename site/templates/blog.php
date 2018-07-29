<? snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>

      <?
      // This page uses a separate controller to set variables, which can be used
      // within this template file. This results in less logic in your templates,
      // making them more readable. Learn more about controllers at:
      // https://getkirby.com/docs/developer-guide/advanced/controllers
      if($pagination->page() == 1):
      ?>
        <div class="intro text">
          <?= $page->text()->kirbytext() ?>
        </div>
      <? endif ?>

      <hr />
    </header>

    <section class="article-index">
      <? if($articles->count()): ?>
        <? foreach($articles as $article): ?>

          <a href="<?= $article->url() ?>" class="article-item">

            <div>

              <h2><?= $article->title()->html() ?></h2>
              <p class="article-date"><?= $article->date('F jS, Y') ?></p>
              <p><?= $article->text()->kirbytext()->excerpt(50, 'words') ?></p>

            </div>

            <? snippet('coverimage', $article) ?>

            <object><a class="link" href="<?= $article->url() ?>"><?= l::get('read_more') ?></a></object>

          </a>

          <hr />

        <? endforeach ?>
      <? else: ?>
        <p>This blog does not contain any articles yet.</p>
      <? endif ?>
    </section>

  </main>

<? snippet('footer') ?>