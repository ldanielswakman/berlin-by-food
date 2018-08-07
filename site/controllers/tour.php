<?

use Uniform\Form;

return function ($site, $pages, $page)
{
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
    ]);

    $prefix = '[Berlin By Food] New message';
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
            ])
            ->emailAction([
                'to' => 'daniel@berlinbyfood.eu',
                'from' => $form->data('email'),
                'subject' => $subject,
            ]);
        endif;
    }

    return compact('form');
};
