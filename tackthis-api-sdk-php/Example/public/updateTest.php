<?php
/**
 * Created by PhpStorm.
 * User: seintsan
 * Date: 8/15/14
 * Time: 2:46 PM
 */
$username = "developers@paywhere.com";
$password = "developers@paywhere.com";

$result = \Tackthis\Auth\Authentication::login($username,$password );
$auth = \TackThis\Auth\Authentication::check_auth();
var_dump($auth);