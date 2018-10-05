<? if($page->coverimage()->isNotEmpty()) :
	$img = image($page->coverimage());
	$url = $img->thumb(['height' => 1200])->url();
	$alt = ($img->alt()->isNotEmpty()) ? $img->alt()->html() : $site->title()->html();
?>
<div class="image-panel">
  <img src="<?= $url ?>" alt="<?= $alt ?>" />
</div>
<? endif ?>
