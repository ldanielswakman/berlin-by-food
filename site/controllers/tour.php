<?php 
return function ($site, $pages, $page) {

    require_once(kirby()->roots()->controllers() . '/shared/contact-form.php');

    return compact('form');
    
};
