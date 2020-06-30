<ul class="lang-switcher">
  <?php foreach($site->languages() as $lang): ?>
    <li<?php e($site->language() == $lang, ' class="active"') ?>>
      <!-- <a href="<?= $lang->url() ?>"> -->
      <a href="<?= $page->url($lang->code()) ?>">
        <?= html(strtoupper($lang->code())) ?>
      </a>
    </li>
  <?php endforeach ?>
</ul>
