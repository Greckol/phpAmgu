<?php
defined('ISHOP') or die('Access denied');

require_once MODEL;

// получение динамичной части шаблона #content
$view = empty($_GET['view']) ? 'hits' : $_GET['view'];

require_once TEMPLATE.'index.php';