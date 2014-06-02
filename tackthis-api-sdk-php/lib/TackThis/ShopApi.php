<?php
/**
 * Created by PhpStorm.
 * User: seintsan
 * Date: 5/30/14
 * Time: 11:26 AM
 */
namespace TackThis\Shop;
use TackThis\HTTPService;


class ShopApi{

    public static function getShopByID($id){
        $url = "/shop/".$id;
        return  HTTPService::http_get($url);

    }
    public static function createShop($name ,$alias,$default_email ,$currency_code,$country_code,$shop_url,$custom_domain){

        $url = "/shop";
        $post_data = array( "name" => $name , "alias" => $alias , "default_email" => $default_email , "currency_code" => $currency_code,"country_code" => $country_code,"url" => $shop_url ,"custom_domain" => $custom_domain);
        return HTTPService::http_post($url ,$post_data);
    }

    public static function updateShop($shop_id ,$name,$alias ,$default_email ,$currency_code,$country_code,$shop_url,$custom_domain){
        $url = "/shop/".$shop_id;
        $post_data = array( "id" => $shop_id , "name" => $name , "alias" => $alias, "default_email" => $default_email ,"currency_code" => $currency_code , "country_code" => $country_code , "shop_url" => $shop_url , "custom_domain" => $custom_domain);
        return HTTPService::http_put($url ,$post_data);
    }

    public static function deleteShop($shop_id)
    {
        $url = "/shop/". $shop_id;
        return HTTPService::http_delete($url);
    }


}