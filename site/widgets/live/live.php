<?php 

$site    = panel()->site();
$pages   = $site->ui()->pages();

return array(
  'title' => 'Live',
  'html'  => function() use($site) {
    return tpl::load(__DIR__ . DS . 'live.html.php');
  }
);