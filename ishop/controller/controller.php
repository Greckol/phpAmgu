<?php
defined('ISHOP') or die('Access denied');

require_once MODEL;

// подключение библеотеки функций
require_once 'functions/functions.php';

//получение массива каталога
$cat = catalog();

$informers = informer();

// получение динамичной части шаблона #content
$view = empty($_GET['view']) ? 'hits' : $_GET['view'];

require_once TEMPLATE.'index.php';