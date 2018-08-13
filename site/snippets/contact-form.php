<? if (!$form->success()): ?>

<form class="contact-form" action="<?= $page->url() ?><?= e($page->template() == 'tour', '#info') ?>" method="POST">

  <div class="field">
    <label><?= l::get('email') ?></label>
    <input<? if ($form->error('email')): ?> class="error"<? endif; ?> name="email" type="email" value="<?= $form->old('email') ?>" required />
    <? e($form->error('email'), '<p class="error-text">' . implode('<br>', $form->error('email')) . '</p>') ?>
  </div>

  <div class="field">
    <label><?= l::get('name') ?></label>
    <input<? if ($form->error('name')): ?> class="error"<? endif; ?> name="name" type="text" value="<?= $form->old('name') ?>" />
    <? e($form->error('name'), '<p class="error-text">' . implode('<br>', $form->error('name')) . '</p>') ?>
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
    <? e($form->error('tour'), '<p class="error-text">' . implode('<br>', $form->error('tour')) . '</p>') ?>
  </div>

  <div class="field">
    <label><?= l::get('message') ?></label>
    <textarea<? if ($form->error('message')): ?> class="error"<? endif; ?> name="message" rows="3" required><?= $form->old('message') ?></textarea>
    <? e($form->error('message'), '<p class="error-text">' . implode('<br>', $form->error('message')) . '</p>') ?>
  </div>

  <div class="data-consent">
    <p><?= l::get('form_data_consent_text') ?></p>
    <div class="input">
      <input type="checkbox" name="data_consent" id="data_consent" required <? e($form->old('data_consent') == true, ' checked') ?> />
      <label for="data_consent"><?= l::get('form_data_consent_agree') ?></label>
    </div>
    <? e($form->error('data_consent'), '<p class="error-text">' . implode('<br>', $form->error('data_consent')) . '</p>') ?>
  </div>

  <?= csrf_field() ?>
  <?= honeypot_field() ?>

  <button type="submit" class="button"><?= l::get('send') ?></button>

</form>

<? else: ?>
  <div class="card success-message" style="display: flex">
    <span class="icon">✓</span>

    <div>
      <h3><?= l::get('success_message') ?></h3>
      <br>
      <a href="<?= $site->page('blog')->url() ?>" class="button"><?= l::get('read_blog') ?></a>
    </div>
  </div>
<? endif ?>