<?php snippet('header') ?>

  <?php   // Redirect for invisible articles
  if(!$site->user() && page()->isInvisible()) go('blog');
  ?>

  <main class="main" role="main">
    
    <article class="article single wrap">

      <header class="article-header">
        <h1><?= $page->title()->html() ?></h1>
      </header>

      <?php // Draft info panel ?>
      <?php if($site->user() && page()->isInvisible()) : ?>
        <div class="article-infopanel">
          <p>This article set to <strong>invisible</strong> and is not public yet.</p>
        </div>
      <?php endif ?>

      <?php // Original info panel (if canonical URL) ?>
      <?php if ($page->canonical_url()->isNotEmpty()) : ?>
        <div class="article-infopanel">
          <p>
            <?php $bare_url = str_replace(['www.', 'http://', 'https://'], '', url::base($page->canonical_url())); ?>
            <?= l::get('article_appeared_in') ?> <?= $bare_url ?> — <a href="<?= $page->canonical_url() ?>" target="_blank"><?= l::get('see_original') ?></a>
          </p>
        </div>
      <?php endif ?>

      <?php // General info panel ?>
      <?php if ($page->infopanel()->isNotEmpty()) : ?>
        <div class="article-infopanel">
          <?= $page->infopanel()->kirbytext() ?>
        </div>
      <?php endif ?>

      <?php // Cover image ?>
      <?php snippet('coverimage', $page) ?>
      
      <div class="text">
        <?= $page->text()->kirbytext() ?>
      </div>

      <div class="article-date"><?= $page->date('j F Y') ?></div>
      <br />
      
    </article>

    <section class="cta">
      <?php snippet('newsletter-signup-form') ?>
    </section>

    <?php snippet('related-articles') ?>
    
  </main>

  <?php if(page('blog')->newsletterpopup()->bool() !== false) : ?>
    <?php $d = (page('blog')->newsletterpopupdelay()->isNotEmpty()) ? (floatval(page('blog')->newsletterpopupdelay()->value()) * 1000) : 5000 ?>
    <div class="cta-modal" data-popup-delay="<?= $d ?>">
      <button class="cta-modal__close"></button>
      <?php snippet('newsletter-signup-form') ?>
    </div>
  <?php endif ?>

<?php snippet('footer') ?>
