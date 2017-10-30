<?php header("Content-Type:text/html;charset=utf-8");
header("Access-Control-Allow-Origin: *");

session_start();

include "config_beer.php";

//if (isset($_SESSION['id'])) {
//    $id = $_SESSION['id'];
//} else {
//
//    echo "
//				<script language='javascript'>
//				alert('로그인이 되어있지 않습니다.')
//				history.back(1)
//			</script>
//		";
//
//    exit();
//}

$id = "1234";
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_port) or exit("Mysql 서버에 접속하는데 실패했습니다. (서버 컴퓨터 Off)<br><br>오류사인:" . mysql_error());
$db = mysqli_select_db($conn, $db_name) or exit(mysqli_error());
$lang = mysqli_query($conn, "SET NAMES utf8");

$msg = $_POST['ir1'];
$regIP = $_SERVER["REMOTE_ADDR"];


$sql = "INSERT INTO BEER.board(content, WriteID, Date, IP) VALUES ('$msg','$id',now(),'$regIP')";

$res = mysqli_query($conn, $sql);

if ($res) {
    //입력 성공시
    echo "success";
} else {
    echo "fail"; // 디비 입력 실패시 fail표시
}
