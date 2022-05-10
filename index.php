<?php
require 'core/bootstrap.php';

$routes = [
	'/creditlist' => 'CreditListController@index',
	'/createcredit' => 'CreateCreditController@index',
	'/home' => 'HomeController@index',
	'/editcredit' => 'EditCreditController@index',
	'/validate' => 'ValidationController@index'
];

$db = [
	'name'     => 'kredihay',
	'username' => 'root',
	'password' => '',
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');