<?
$projects = page('tours')->children()->visible();
if(isset($limit)) $projects = $projects->limit($limit);
?>

<ul class="showcase grid gutter-1">

  <?php foreach($projects as $project): ?>

    <li class="showcase-item column">
        <a href="<?= $project->url() ?>" class="showcase-link">
          <?php if($image = $project->images()->sortBy('sort', 'asc')->first() && false): $thumb = $image->crop(600, 600); ?>
            <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase-image" />
          <?php endif ?>
          <h3><?= $project->title()->html() ?></h3>
        </a>
    </li>

  <?php endforeach ?>

</ul>