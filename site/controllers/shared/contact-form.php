<?php 
use Uniform\Form;

$form = new Form([
    'email' => [
        'rules' => ['required', 'email'],
        'message' => l::get('error_email'),
    ],
    'name' => [],
    'message' => [
        'rules' => ['required', 'minLength' => 10],
        'message' => l::get('error_message'),
    ],
    'data_consent' => [
        'rules' => ['required'],
        'message' => l::get('error_data_consent'),
    ],
]);

$prefix = '[Berlin by Food] New message';
$subject = ($form->data('name')) ? $prefix . ' from ' . $form->data('name') : $prefix;

if (r::is('POST')) {

    $form->logAction([
        'file' => kirby()->roots()->site() . '/form-submissions.log',
    ]);

    // Send email if not in dev env
    if (c::get('env') !== 'DEV') :
        $form->emailAction([
            'to' => 'info@berlinbyfood.eu',
            'from' => $form->data('email'),
            'subject' => $subject,
        ]);
    endif;
}
