<?php
/**
 * Created by PhpStorm.
 * User: seintsan
 * Date: 5/30/14
 * Time: 6:29 PM
 */
require_once '..\..\lib\TackThis\Authentication.php';
require_once '..\..\lib\TackThis\HTTPService.php';

$result = \Tackthis\Auth\Authentication::logout();
var_dump($result);
