<?php if($image = $item->coverimage()->toFile()): ?>
  <figure class="article-coverimage">
    <img src="<?= $image->thumb(array('width' => 500))->url() ?>" alt="" />
  </figure>
<?php endif ?>
