<form class="contact-form" action="<?= $page->url() ?>" method="POST">
    <label>Email</label>
    <input<? if ($form->error('email')): ?> class="error"<? endif; ?> name="email" type="email" value="<?= $form->old('email') ?>">

    <label>Name</label>
    <input<? if ($form->error('name')): ?> class="error"<? endif; ?> name="name" type="text" value="<?= $form->old('name') ?>">

    <label>Tour</label>
    <select<? if ($form->error('name')): ?> class="error"<? endif; ?> name="tour">
        <!-- placeholder item -->
        <option value="" hidden>Select tour (optional)</option>
        <!-- normal options -->
        <? foreach (page('tours')->children()->visible() as $tour) : ?>
            <option><?= $tour->title()->html() ?></option>
        <? endforeach ?>
    </select>

    <label>Message</label>
    <textarea<? if ($form->error('message')): ?> class="error"<? endif; ?> name="message" rows="3"><?= $form->old('message') ?></textarea>

    <?= csrf_field() ?>
    <?= honeypot_field() ?>
    <button type="submit" class="button">Submit</button>
</form>
<? if ($form->success()): ?>
    Thank you for your message. We will get back to you soon!
<? else: ?>
    <? snippet('uniform/errors', ['form' => $form]) ?>
<? endif; ?>