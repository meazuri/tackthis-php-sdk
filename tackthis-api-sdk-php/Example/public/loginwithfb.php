<?php
/**
 * Created by PhpStorm.
 * User: seintsan
 * Date: 5/30/14
 * Time: 6:32 PM
 */

require_once '..\..\lib\TackThis\Authentication.php';
require_once '..\..\lib\TackThis\HTTPService.php';
$username = "";
$password ="";

$result = \Tackthis\Auth\Authentication::login_with_facebook($username,$password);
var_dump($result);
