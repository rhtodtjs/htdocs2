<?php

$file = $_FILES['file']; //넘어온 이 파일 친구는 넘어온 파일의 확장자..경로,,바이트덩어리..
                        // 등등 여러가지정보가 담여있기때문에 배열로 전달됩니당..

$fileName = $file['name'];//파일의 이름을 얻어왔다..
$fileSize = $file['size'];
$fileType = $file['type'];

$tmpName = $file['tmp_name'];
$now = date("Ymd_his");

echo "<hr/>";
echo "<p>";
echo "$fileName $fileSize $fileType";

$result = move_uploaded_file($tmpName,"../uploadImg/$now".$fileName);

if($result) echo "success";
else echo "fail";



?>