<?php

/*
 * setting url for admin site
 * to beautify url in admin site
 * author:ubd
 */
$rules_admin = array(
    /** admin url ** */
     'admin' => '/site/login',
     'login' => '/site/login',
     'admin/config/<m:[\w-\.]+>' => '/configurations/load',
     'admin/paypallsettins/<id:[\w-\.]+>' => '/configurations/payPallSettings',
     'admin/payment-notifications' => '/configurations/PaymentNotifications',
     /**----------- advertinsg -----------**/
     'admin/advertising/create' => '/bspAdvertising/create',
     'admin/advertising/update' => '/bspAdvertising/update',
     'admin/advertising/create' => '/bspAdvertising/delete',
     'admin/advertising/index' => '/bspAdvertising/index',
     'admin/advertising/view' => '/bspAdvertising/view',
     /**----------- article -----------**/
     'admin/article/create' => '/bspArticla/create',
     'admin/article/update' => '/bspArticla/update',
     'admin/article/create' => '/bspArticla/delete',
     'admin/article/index' => '/bspArticla/index',
     'admin/article/view' => '/bspArticla/view',
     /**----------- blog -----------**/
     'admin/blog/create' => '/bspBlog/create',
     'admin/blog/update' => '/bspBlog/update',
     'admin/blog/create' => '/bspBlog/delete',
     'admin/blog/index' => '/bspBlog/index',
     'admin/blog/view' => '/bspBlog/view',
     /**----------- category -----------**/
     'admin/category/create' => '/bspCategory/create',
     'admin/category/update' => '/bspCategory/update',
     'admin/category/create' => '/bspCategory/delete',
     'admin/category/index' => '/bspCategory/index',
     'admin/category/view' => '/bspCategory/view',
     /**----------- faq -----------**/
     'admin/faq/create' => '/bspFaq/create',
     'admin/faq/update' => '/bspFaq/update',
     'admin/faq/create' => '/bspFaq/delete',
     'admin/faq/index' => '/bspFaq/index',
     'admin/faq/view' => '/bspFaq/view',
     /**----------- item -----------**/
     'admin/item/create' => '/bspItem/create',
     'admin/item/update' => '/bspItem/update',
     'admin/item/create' => '/bspItem/delete',
     'admin/item/index' => '/bspItem/index',
     'admin/item/view' => '/bspItem/view',
     /**----------- message -----------**/
     'admin/message/create' => '/bspMessage/create',
     'admin/message/update' => '/bspMessage/update',
     'admin/message/create' => '/bspMessage/delete',
     'admin/message/index' => '/bspMessage/index',
     'admin/message/view' => '/bspMessage/view',
     /**----------- news feed -----------**/
     'admin/newfeed/create' => '/bspNewfeed/create',
     'admin/newfeed/update' => '/bspNewfeed/update',
     'admin/newfeed/create' => '/bspNewfeed/delete',
     'admin/newfeed/index' => '/bspNewfeed/index',
     'admin/newfeed/view' => '/bspNewfeed/view',
     /**----------- order -----------**/
     'admin/order/create' => '/bspOrder/create',
     'admin/order/update' => '/bspOrder/update',
     'admin/order/create' => '/bspOrder/delete',
     'admin/order/index' => '/bspOrder/index',
     'admin/order/view' => '/bspOrder/view',
     /**----------- user -----------**/
     'admin/users/create' => '/users/create',
     'admin/users/update' => '/users/update',
     'admin/users/create' => '/users/delete',
     'admin/users/index' => '/users/index',
     'admin/users/view' => '/users/view',
     'admin/users/changepass' => '/users/changepass',
     'admin/users/profile' => '/users/profile',
     'admin/users/profileview' => '/users/profileview',
      //rights 
     'admin/rights' => '/rights',
);
?>
