<?php

/*
 * setting url for web module
 * to beautify url in user's site
 * author:ubd
 */
$rules_web = array(
    /** other urls * */
    '' => '/web/default/index',
    'about-us' => '/web/default/aboutus',
    'ideas' => '/web/default/ideas',
    'contact-us' => '/web/default/contactUs',
    'slider/<slug:[\w-\.]+>/' => '/web/default/loadSlider',
    'ebook/<slug:[\w-\.]+>/' => '/web/default/ebook',
    'jobs' => '/web/default/jobs',
    'products' => '/web/product/index'  ,
    '<slug:[\w-\.]+>/' => '/web/product/products',
    '<controller:\w+>/<id:\d+>' => '<controller>/view',
    '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
    '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
);
?>
