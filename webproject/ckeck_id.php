<?php header("Content-Type:text/html;charset=utf-8");
header("Access-Control-Allow-Origin: *"); // 모든 도메인
require("config_beer.php");
// session_start();


$link = mysqli_connect($db_host, $db_user, $db_pass , $db_port) or exit("Mysql 서버에 접속하는데 실패했습니다. (서버 컴퓨터 Off)<br><br>오류사인:" . mysql_error());
$db = mysqli_select_db($link,$db_name) or exit(mysqli_error());
$lang = mysqli_query($link, "SET NAMES utf8");


$id = isset($_POST['id']) ? $_POST['id'] : exit();
$sql = " select count(*) from User_info where UserID='$id' ";

$Result = mysqli_query($link,$sql);

$rows = mysqli_num_rows($Result);

if ($rows > 0) {
    $data = mysqli_fetch_array($Result);
}

$_json_array = array();

if ($data[0] == 0) {
    $_json_array['success'] = '사용 가능 ㅇㅇ';
} else {
    $_json_array['err'] = '조까';
}


$sql2 = "INSERT INTO User_info( UserID, Password, Name, Phone) VALUES ('aaa','1234','rlawns','010123')";

mysqli_query($link,sql2);


mysqli_close($conn);
mysqli_close($link);

echo json_encode($_json_array);

?>