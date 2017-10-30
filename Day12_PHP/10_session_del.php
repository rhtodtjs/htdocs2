<?php
/**
 * Created by PhpStorm.
 * User: alfo06-18
 * Date: 2017-10-19
 * Time: 오전 10:48
 */

session_start();

if(isset($_SESSION['userid']) and isset($_SESSION['username'])){

    unset($_SESSION['username']); //함수로 지우기..
    $_SESSION['userid'] = ""; //null로지우기..
}