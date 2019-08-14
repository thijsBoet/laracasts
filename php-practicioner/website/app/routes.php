<?php

$router->get('', 'PagesController@index.php');
$router->get('about', 'PagesController@about.php');
$router->get('about/culture', 'PagesController@aboutCulture.php');
$router->get('contact', 'PagesController@contact.php');
$router->post('names', 'PagesController@addNames.php');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');