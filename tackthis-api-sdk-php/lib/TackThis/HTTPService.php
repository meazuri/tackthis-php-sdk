<?php
/**
 * Created by PhpStorm.
 * User: seintsan
 * Date: 5/29/14
 * Time: 6:14 PM
 */
namespace TackThis;

define('TACKTHIS_URL','http://tackthis.localhost');

class HTTPService {


    public static function http_get($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL ,TACKTHIS_URL .$url);
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result);
    }

    /*
     * http post method
     * $postdata should be array
     */

    public static function http_post($url,$post_data)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_POST, count($post_data));
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
        curl_setopt($ch, CURLOPT_URL ,TACKTHIS_URL .$url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result);

    }
    public static function http_put($url ,$post_data)
    {
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_RETURNTRANSFER ,true);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER ,FALSE);
        curl_setopt($ch,CURLOPT_CUSTOMREQUEST ,"PUT");
        curl_setopt($ch,CURLOPT_URL,TACKTHIS_URL . $url);
        curl_setopt($ch,CURLOPT_POSTFIELDS ,http_build_query($post_data));

        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result);

    }

    public  static function http_delete($url)
    {
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_RETURNTRANSFER ,true);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER ,FALSE);
        curl_setopt($ch,CURLOPT_CUSTOMREQUEST ,"DELETE");
        curl_setopt($ch,CURLOPT_URL,TACKTHIS_URL . $url);


        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result);

    }
} 