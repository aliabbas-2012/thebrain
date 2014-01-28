<?php

/*
 * setting url for web module
 * to beautify url in user's site
 * author:ubd
 */
$rules_web = array(
    /** other urls * */
    '<controller:\w+>/<id:\d+>' => '<controller>/view',
    '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
    '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
    '' => '/web/default/index',
    '<slug:[\w-\.]+>/article' => '/web/article/index',
    '<slug:[\w-\.]+>/blog-detail' => '/web/blog/detail',
    'blog' => '/web/blog/index',
    'faq' => '/web/faq/index',
    'dashboard' => '/web/user/dashboard',
    'my-messages' => '/web/user/messages',
    'my-offers' => '/web/userdata/myoffers',
    'my-orders' => '/web/userdata/myorders',
    'my-settings' => '/web/userdata/settings',
    '<type:[\w-\.]+>/my-payments' => '/web/userdata/payment',
    'my-payments' => '/web/userdata/payment',
    'ratings' => '/web/userdata/ratings',
    'view/profile/user' => '/web/user/profileview',
    'edit/profile/user' => '/web/user/profile',
    '/offers/category/<category:[\w-\.]+>/' => '/web/offers/category',
    '/offers/search-result' => '/web/offers/search',
    '/offers/detail/<slug:[\w-\.]+>' => '/web/offers/detail',
    '/offers/post/<action:[\w-\.]+>' => '/web/offers/post',
    '/offers/post/<action:[\w-\.]+>/<slug:[\w-\.]+>' => '/web/offers/post',
);
?>
