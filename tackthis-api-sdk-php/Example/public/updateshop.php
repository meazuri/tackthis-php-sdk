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


$shop_id =20;
$name="TackThis Demo Shop";
$alias ="test";
$default_email ="developers@paywhere.com";
$currency_code = "SGD";
$country_code ="SG";
$shop_url="www.tackthis.com";
$custom_domain ="tackthis.com";

$shop = \TackThis\Shop\ShopApi::updateShop($shop_id,$name,$alias,$default_email,$currency_code,$country_code,$shop_url,$custom_domain);
var_dump($shop);