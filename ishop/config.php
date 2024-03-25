<?php
defined("ISHOP") or die('Access denied');

define('PATH', 'http://ishop/');
define('MODEL', 'model/model.php');
define('CONTROLLER', 'controller/controller.php');
define('VIEW', 'views/');
define('TEMPLATE', VIEW.'ishop/');
define('HOST', 'localhost');
define('USER', 'ishop_user');
define('PASS', '123');
define('DB', 'ishop');
define('TITLE', 'Интернет магазин сотовых телефонов');

$link = mysqli_connect(HOST, USER, PASS, DB) or die('No connect to Server');
mysqli_set_charset($link, 'UTF8') or die('Cant set charset');
