<?php
/**
 * Created by PhpStorm.
 * User: seintsan
 * Date: 5/30/14
 * Time: 5:12 PM
 */
require_once '..\..\lib\TackThis\ShopApi.php';

require_once '..\..\lib\TackThis\HTTPService.php';
use TackThis\Shop\ShopApi;
$result = ShopApi::getShopByID(1);
var_dump($result);