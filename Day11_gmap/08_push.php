<?php header('Content-Type:text/event-stream;charset=utf-8');
/**
 * Created by PhpStorm.
 * User: alfo06-18
 * Date: 2017-10-11
 * Time: 오전 11:16
 */
$msg = $_GET['msg'];
$id = $_GET['id'];


echo "retry: 1500" . PHP_EOL;
echo "id: $id" . PHP_EOL;
echo "data: $msg" . PHP_EOL;
echo PHP_EOL; //PHP_EOL == \n