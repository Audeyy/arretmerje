<?php

$app->get('/', 'App\controllers\HomePage::httpGetMethod')
->bind('home');

$app->get('/user/create', 'App\controllers\user\CreateUser::httpGetMethod')
->bind('create');
$app->post('/user/create', 'App\controllers\user\CreateUser::httpPostMethod');

$app->get('/user/login', 'App\controllers\user\Login::httpGetMethod')
->bind('login');
$app->post('/user/login', 'App\controllers\user\Login::httpPostMethod');

$app->get('/admin/slider', 'App\controllers\admin\SliderAdmin::httpGetMethod');
$app->post('/admin/slider', 'App\controllers\admin\SliderAdmin::httpPostMethod');

$app->get('/admin/users', 'App\controllers\admin\UsersAdmin::httpGetMethod');
$app->post('/admin/users', 'App\controllers\admin\UsersAdmin::httpPostMethod');

$app->get('/admin/orders', 'App\controllers\admin\OrdersAdmin::httpGetMethod');
$app->post('/admin/orders', 'App\controllers\admin\OrdersAdmin::httpPostMethod');

$app->get('/admin/travels', 'App\controllers\admin\TravelsAdmin::httpGetMethod');
$app->post('/admin/travels', 'App\controllers\admin\TravelsAdmin::httpPostMethod');

$app->get('/travel/{id}', 'App\controllers\TravelPage::httpGetMethod')
->assert('id', '\d+');
$app->post('/travel/{id}', 'App\controllers\TravelPage::httpPostMethod')
->assert('id', '\d+');

$app->get('/user/{id}/order', 'App\controllers\user\OrderPage::httpGetMethod')
->assert('id', '\d+');
$app->post('/user/{id}/order', 'App\controllers\user\OrderPage::httpPostMethod')
->assert('id', '\d+');

$app->get('/user/{id}', 'App\controllers\user\Profil::httpGetMethod')
->assert('id', '\d+');
$app->post('/user/{id}', 'App\controllers\user\Profil::httpPostMethod')
->assert('id', '\d+');

