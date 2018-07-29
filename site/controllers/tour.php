<?

use Uniform\Form;

return function ($site, $pages, $page)
{
    $form = new Form([
        'email' => [
            'rules' => ['required', 'email'],
            'message' => 'Please enter a valid email address',
        ],
        'name' => [],
        'message' => [
            'rules' => ['required'],
            'message' => 'Please enter a message',
        ],
    ]);

    if (r::is('POST')) {
        $form->emailAction([
            'to' => 'me@example.com',
            'from' => 'info@example.com',
        ]);
    }

    return compact('form');
};
