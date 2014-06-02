<?php
/**
 * Created by PhpStorm.
 * User: seintsan
 * Date: 6/2/14
 * Time: 10:31 AM
 */
require_once '..\..\lib\TackThis\Authentication.php';
require_once '..\..\lib\TackThis\ShopApi.php';
require_once '..\..\lib\TackThis\HTTPService.php';

$username = "developers@paywhere.com";
$password = "developers@paywhere.com";

$result = \Tackthis\Auth\Authentication::login($username,$password );
$auth = \TackThis\Auth\Authentication::check_auth();
var_dump($auth);


$shop_id =0;
$shop = \TackThis\Shop\ShopApi::deleteShop($shop_id);
var_dump($shop);