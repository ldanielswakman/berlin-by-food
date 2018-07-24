<ul class="language-switcher">
  <? foreach($site->languages() as $lang): ?>
    <li<? e($site->language() == $lang, ' class="active"') ?>>
      <a href="<?= $lang->url() ?>">
        <?= html(strtoupper($lang->code())) ?>
      </a>
    </li>
  <? endforeach ?>
</ul>
