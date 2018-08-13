<? snippet('header') ?>

  <main class="main" role="main">
    
    <article class="article single wrap">

      <header class="article-header">
        <h1><?= $page->title()->html() ?></h1>
        <div class="article-date"><?= $page->date('F jS, Y') ?></div>
        <br>
        <hr />
      </header>
      
      <? snippet('coverimage', $page) ?>

      <br>
      
      <div class="text">
        <?= $page->text()->kirbytext() ?>
      </div>
      
    </article>
    
  </main>

<? snippet('footer') ?>