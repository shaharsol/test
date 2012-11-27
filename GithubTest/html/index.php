<?php

require_once "Zend/Controller/Front.php";
require_once "Zend/Controller/Router/Route/Hostname.php";
require_once "Zend/Controller/Router/Route.php";
require_once "Zend/Rest/Route.php";


$front = Zend_Controller_Front::getInstance();
/*
$front->setControllerDirectory(array(
	'api'		=> '../application/api/controllers',
	'users'		=> '../application/users/controllers',
	'admin'		=> '../application/admin/controllers',
	'ipn'		=> '../application/ipn/controllers',
));

$front->setDefaultModule('users');
$front->setDefaultControllerName('index');
$front->setDefaultAction('index');
$front->setParam('prefixDefaultModule', true);
*/


$front->dispatch();

?>