<?php
// Get result amount
$n = page('blog')->relatedcount()->isNotEmpty() ? intval(page('blog')->relatedcount()->value()) : 3;
// Select related pages
$selection = $site->search($page->title()->value(), 'title')->not($page)->visible()->filterBy('template', 'article')->limit($n);


// Get backup articles if too little results
if($selection->count() < $n) {
  $backup = page('blog')->children()->visible()->not($page);
  $backup = $backup->sortBy('date','DESC')->chunk($backup->count()/2)->first();
  $backup = $backup->shuffle()->limit($n - $selection->count());
  // add backup articles to related pages
  $selection = new Pages(array($selection, $backup));
}

?>

<section class="related">
  <h3><?= l::get('related_title') ?></h3>

	<?php foreach ($selection as $article) : ?>
		<a href="<?= $article->url() ?>" class="article-item">

      <?php snippet('coverimage', $article) ?>

      <div>
        <h4><?= $article->title()->html() ?></h4>
        <p class="article-date"><?= $article->date('F jS, Y') ?></p>
      </div>

      <object><a class="link" href="<?= $article->url() ?>"><?= l::get('read') ?></a></object>

    </a>
	<?php endforeach ?>

</section>
