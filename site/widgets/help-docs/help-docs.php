<?php 

$site    = panel()->site();
$pages   = $site->ui()->pages();

return array(
  'title' => 'Help Docs',
  'html'  => function() use($site) {
    return tpl::load(__DIR__ . DS . 'help-docs.html.php');
  }
);