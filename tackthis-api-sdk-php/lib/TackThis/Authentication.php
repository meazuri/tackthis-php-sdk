<?php
/**
 * Created by PhpStorm.
 * User: seintsan
 * Date: 5/29/14
 * Time: 6:17 PM
 */

namespace Tackthis\Auth;


use TackThis\HTTPService;

class Authentication {

    public static function check_auth()
    {
        $url ="/auth/";
        return HTTPService::http_get($url);
    }
    public static function login($username ,$password )
    {
        $url = "/auth/login";
        $post_data = array( "email" => $username , "password" => $password );
        return HTTPService::http_post($url ,$post_data);
    }
    public static function logout()
    {
        $url = "/auth/logout";
        return HTTPService::http_get($url);
    }
    public static function login_with_facebook ($username,$password)
    {
        $url = "/auth/login/facebook ";
        $post_data = array( "email" => $username , "password" => $password);
        return HTTPService::http_post($url,$post_data);
    }

} 