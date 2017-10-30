<?php

session_start();

//한글 인코딩
header('Content-Type:text/html; charset=utf-8');

// member_form.php로 부터 post방식으로 전달된 값들 받기..
$id = $_POST['id'];
$pass = $_POST['pass'];
$name = $_POST['name'];
$nick = $_POST['nick'];
$hp = $_POST['hp1'] . "-" . $_POST['hp2'] . "-" . $_POST['hp3'];
$email = $_POST['email1'] . "@" . $_POST['email2'];

//회원가입 되는 날짜...
$regist_day = date("Y-m-d (H:i)");
//회원등급은 무조건 9등급으로..

//데이터베이스 접근.. site_db : 공통모듈
include "../lib/db_conn.php";

//한글처리..
$sql = "update member set pass='$pass', name='$name', nick='$nick', hp='$hp', email='$email', regist_day='$regist_day' where id='$id'";


$result = mysqli_query($conn, $sql);

if (!$result) mysqli_error($conn);
mysqli_close($conn);

$_SESSION['username'] = $name;
$_SESSION['usernick'] = $nick;
//$_SESSION['userlevel'] = $level;

//insert작업이 종료되면... 페이지를 다시 홈화면으로..
echo("
		<script>
			location.href='../index.php';
		</script>
		");

?>