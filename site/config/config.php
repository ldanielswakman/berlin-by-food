<?php

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

// Ignore cache for pages
c::set('cache.ignore', [
  'contact',
  'tours/*',
]);

// Define Languages
c::set('languages', array(
  array(
    'code'    => 'en',
    'name'    => 'English',
    'default' => true,
    'locale'  => 'en_UK',
    'url'     => '/',
  ),
  array(
    'code'    => 'de',
    'name'    => 'Deutsch',
    'locale'  => 'de_DE',
    'url'     => '/de',
  ),
  array(
    'code'    => 'fr',
    'name'    => 'Français',
    'locale'  => 'fr_FR',
    'url'     => '/fr',
  ),
));

// Define Kirby panel widgets
c::set('panel.widgets', array(
  'account'  => true,
  'history'  => true,
  'live'    => true,
  'pages'    => true,
  'help-docs'    => true,
  'site'     => false,
));
