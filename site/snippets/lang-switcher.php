<ul class="lang-switcher">
  <? foreach($site->languages() as $lang): ?>
    <li<? e($site->language() == $lang, ' class="active"') ?>>
      <!-- <a href="<?= $lang->url() ?>"> -->
      <a href="<?= $page->url($lang->code()) ?>">
        <?= html(strtoupper($lang->code())) ?>
      </a>
    </li>
  <? endforeach ?>
</ul>
