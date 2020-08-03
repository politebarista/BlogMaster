<?php

ini_set('display_errors', 1);
error_reporting(E_ALL); // отключи ошибки

define('ROOT', dirname(__FILE__));
require_once('components/Router.php');

$router = new Router();
$router -> run();