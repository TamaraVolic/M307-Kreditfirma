<?php
require 'core/bootstrap.php';

$routes = [
	'/creditlist' => 'CreditListController@index',
	'/createcredit' => 'CreateCreditController@index',
<<<<<<< HEAD
	'/home' => 'HomeController@index'
=======
	'/editcredit' => 'EditCreditController@index',
	'/validate' => 'ValidationController@index'
>>>>>>> c625101ddcda95fd0d14a08ad87c009373f55dbe
];

$db = [
	'name'     => 'kredihay',
	'username' => 'root',
	'password' => '',
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');