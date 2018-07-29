<?php snippet('header') ?>

  <main class="main" role="main">
    
    <h1><?= $page->title()->html() ?></h1>

    <?= $page->text()->kirbytext() ?>

    <div class="faq-items">
	    <? foreach ($page->items()->toStructure() as $item) : ?>
	    	<div class="faq-item">
	    		<h4><?= $item->question()->html() ?></h4>
	    		<p><?= $item->answer()->html() ?></p>
	  		</div>
	    <? endforeach ?>
	  </div>
    
  </main>

<?php snippet('footer') ?>