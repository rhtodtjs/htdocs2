<?php
session_start();
?>

<meta charset="utf-8">

<?php

//로그인가입시 전달된 pOST값

$id = $_POST['id'];
$password = $_POST['pass'];

if (!$id) {
    //경고 아이디가없어이새끼야 login_form.php


    echo "
    
    <script>
    alert('아이디를 입력하세요');
    history.go(-1); //이것도 back
    </script>

    ";

    exit();
}

if (!$password) {
    //경고 아이디가없어이새끼야 login_form.php


    echo "
    
    <script>
    alert('비밀번호를 입력하세요');
    history.go(-1); //이것도 back
    </script>

    ";

    exit();
}

//아이디와비번이온전히 온다면..
//비교시작..

include "../lib/db_conn.php";

$sql = "select * from member where id = '$id' AND pass = '$password'";
$result = mysqli_query($conn, $sql);

$rowNum = mysqli_num_rows($result);

if (!$rowNum) {
    //검색결과가없다 없는아이디다.. 아니면 비번이틀렸거나.
    echo("<script>alert('잘못된 정보입니다.'); history.go(-1);</script>");
    exit();
}

//로그인이될 자격이다.. 세션에 멤버정보를 저장하자..
//멤버 정보 저장..

$row = mysqli_fetch_array($result); //한줄의 레코드를 가저온다..연관배열로

$userid = $row['id'];
$username = $row['name'];
$usernick = $row['nick'];
$userlevel = $row['level'];


$_SESSION['userid'] = $userid;
$_SESSION['username'] = $username;
$_SESSION['usernick'] = $usernick;
$_SESSION['userlevel'] = $userlevel;

//세션저장됬당

echo "
<script>location.href = '../index.php';</script>
";

mysqli_close($conn);


?>

