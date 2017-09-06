<?php header("Content-Type:text/html;charset=utf-8");

$name = $_GET['name'];
$password = $_GET['pass'];
$conn = mysqli_connect("localhost", "root", "apmsetup", "phptest", "3306");
$regIP = $_SERVER["REMOTE_ADDR"];

echo "$name \n $password 입니다";


mysqli_query($conn, "set names utf8");

$sql = "insert into player (PlayerID, Password, Phone, Massage, IP) VALUES ('$name',PASSWORD('$password'),'010124','안녕','$regIP')";


$result = mysqli_query($conn, $sql);

if ($result) echo "success";
else echo "fail..";

mysqli_close($conn);

?>