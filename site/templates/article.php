<? snippet('header') ?>

  <main class="main" role="main">
    
    <article class="article single wrap">

      <header class="article-header">
        <h1><?= $page->title()->html() ?></h1>
        <div class="article-date"><?= $page->date('j F Y') ?></div>
        <br>
        <hr />
      </header>

      <? if ($page->canonical_url()->isNotEmpty()) : ?>
        <div class="article-infopanel">
          <p>
            <? $bare_url = str_replace(['www.', 'http://', 'https://'], '', url::base($page->canonical_url())); ?>
            <?= l::get('article_appeared_in') ?> <?= $bare_url ?> — <a href="<?= $page->canonical_url() ?>" target="_blank"><?= l::get('see_original') ?></a>
          </p>
        </div>
      <? endif ?>

      <? if ($page->infopanel()->isNotEmpty()) : ?>
        <div class="article-infopanel">
          <?= $page->infopanel()->kirbytext() ?>
        </div>
      <? endif ?>
      
      <? snippet('coverimage', $page) ?>

      <br>
      
      <div class="text">
        <?= $page->text()->kirbytext() ?>
      </div>
      
    </article>
    
  </main>

<? snippet('footer') ?>