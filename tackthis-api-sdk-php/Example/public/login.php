
<?php
/**
 * Created by PhpStorm.
 * User: seintsan
 * Date: 5/30/14
 * Time: 5:50 PM
 */

require_once '..\..\lib\TackThis\Authentication.php';
require_once '..\..\lib\TackThis\HTTPService.php';
$username = "developers@paywhere.com";
$password = "developers@paywhere.com";
$remember_me = false;
$result = \Tackthis\Auth\Authentication::login($username,$password );
var_dump($result);

?>