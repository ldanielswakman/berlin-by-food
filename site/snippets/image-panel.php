<?
$url = url('assets/images/cover-photo.jpg');
if($page->coverimage()->isNotEmpty()) :
	$url = image($page->coverimage())->thumb(['height' => 1200])->url();
endif;
?>
<div class="image-panel">
  <img src="<?= $url ?>" alt="" />
</div>
