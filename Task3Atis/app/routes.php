 <?php

$router->get('home', 'TasksController@home');
$router->get('logout', 'UsersController@logout');
$router->get('', 'TasksController@home');
$router->post('home', 'TasksController@save');
$router->post('index', 'TasksController@sort');
$router->post('check', 'TasksController@check');
$router->get('register', 'UsersController@home');
$router->post('register', 'UsersController@store');
$router->get('login', 'UsersController@indexLog');
$router->post('login', 'UsersController@log');
$router->get('logout', 'UsersController@logout');
$router->get('edit', 'TasksController@edit');
$router->post('edit', 'TasksController@editData');
$router->post('delete', 'TasksController@delete');