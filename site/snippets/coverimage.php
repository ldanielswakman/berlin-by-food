<? if($image = $item->coverimage()->toFile()): ?>
  <figure class="article-coverimage">
    <img src="<?= (page()->template() == 'blog') ? $image->thumb(array('width' => 500))->url() : $image->url() ?>" alt="" />
  </figure>
<? endif ?>
