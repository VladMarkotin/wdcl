<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.07.2019
 * Time: 12:33
 */
require_once  'vendor/autoload.php';

$core   = Core\CoreClass::getInstance();
$core->init();

$router = $core->getSystemObject();
$db     = $core->getSystemObject("db");
$router->FindPath();

//var_dump($db);
