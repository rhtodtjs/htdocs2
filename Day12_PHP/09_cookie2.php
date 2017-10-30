<?php header('Content-type:text/html;charset=utf-8');
/**
 * Created by PhpStorm.
 * User: alfo06-18
 * Date: 2017-10-19
 * Time: 오전 9:52
 */


$userid = $_COOKIE['userid'];
$username = $_COOKIE['username'];

echo "아이디".$userid."<br/>";
echo "이름".$username."<br/>";