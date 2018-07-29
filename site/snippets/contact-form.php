<form class="contact-form" action="<?= $page->url() ?>" method="POST">

  <div class="field">
    <label><?= l::get('email') ?></label>
    <input<? if ($form->error('email')): ?> class="error"<? endif; ?> name="email" type="email" value="<?= $form->old('email') ?>" />
  </div>

  <div class="field">
    <label><?= l::get('name') ?></label>
    <input<? if ($form->error('name')): ?> class="error"<? endif; ?> name="name" type="text" value="<?= $form->old('name') ?>" />
  </div>

  <div class="field">
    <label><?= l::get('tour') ?></label>
    <select<? if ($form->error('name')): ?> class="error"<? endif; ?> name="tour">
        <!-- placeholder item -->
        <option value="" hidden>Select tour (optional)</option>
        <!-- normal options -->
        <? foreach (page('tours')->children()->visible() as $tour) : ?>
            <option <? e($page == $tour, 'selected') ?>><?= $tour->title()->html() ?></option>
        <? endforeach ?>
    </select>
  </div>

  <div class="field">
    <label><?= l::get('message') ?></label>
    <textarea<? if ($form->error('message')): ?> class="error"<? endif; ?> name="message" rows="3"><?= $form->old('message') ?></textarea>
  </div>

  <?= csrf_field() ?>
  <?= honeypot_field() ?>

  <button type="submit" class="button"><?= l::get('send') ?></button>

</form>

<? if ($form->success()): ?>
  <?= l::get('success_message') ?>
<? else: ?>
  <? snippet('uniform/errors', ['form' => $form]) ?>
<? endif; ?>
