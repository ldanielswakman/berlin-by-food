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

      <h4>Don't be a stranger?</h4>
      <p>Stay in touch by getting notified of new articles on this blog, and other updates!</p>

      <!-- Begin Mailchimp Signup Form -->
      <div id="mc_embed_signup">
      <form action="https://berlinbyfood.us19.list-manage.com/subscribe/post?u=8fc50fab79d0061f7f57c37a5&amp;id=9ce6423e66" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div class="field-group">
          <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="<?= l::get('email-placeholder') ?>">
          <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
        </div>
        <div id="mce-responses" class="clear">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
        </div>
        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8fc50fab79d0061f7f57c37a5_9ce6423e66" tabindex="-1" value=""></div>
      </form>
      </div>

      <!--End mc_embed_signup-->
    </section>
    
  </main>

<?php snippet('footer') ?>