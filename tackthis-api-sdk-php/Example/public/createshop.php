<?php
/**
 * Created by PhpStorm.
 * User: seintsan
 * Date: 5/30/14
 * Time: 6:33 PM
 */

require_once '..\..\lib\TackThis\Authentication.php';
require_once '..\..\lib\TackThis\ShopApi.php';
require_once '..\..\lib\TackThis\HTTPService.php';

$username = "developers@paywhere.com";
$password = "developers@paywhere.com";


$result = \Tackthis\Auth\Authentication::login($username,$password );


$name="test1";
$alias ="test";
$default_email ="developers@paywhere.com";
$currency_code = "SGD";
$country_code ="SGD";
$shop_url="www.tackthis.com";
$custom_domain ="www.aaa.com";

$shop = \TackThis\Shop\ShopApi::createShop($name,$alias,$default_email,$currency_code,$country_code,$shop_url,$custom_domain);
var_dump($shop);


