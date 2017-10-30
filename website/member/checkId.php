<meta charset="utf-8">

<?php

$id = $_GET['id'];
//중복확인

if(!$id){
    echo "아이디를 입력 하세요";
    exit();
}

//데이터베이스접속
include "../lib/db_conn.php";

$sql = "select * from member WHERE id= '$id'";

$result = mysqli_query($conn,$sql);

$rowNum = mysqli_num_rows($result);



if($rowNum){

    echo "중복된 아이디";
    echo "<br/>다른 아이디를 사용하세요";
}else {
    echo "사용 가능한 아이디입니다.";
}

mysqli_close($conn);
?>