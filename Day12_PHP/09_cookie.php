<?php header('Content-type:text/html;charset=utf-8');


//Cookie : 사용자가 웹페이지에 접속하면 사용자의
//컴퓨터에 텍스트파일로 저장되는 4kb이하의 작은 정보저장

$bool = setcookie("userid", "android"); //셋쿠기함수는 리턴값을 가지고있다

//쿠키저장할때 저장기간 설정 가능

$bool2 = setcookie("username","sam",time()+30); //30초간..
//1970.01.01 부터 시간이라..

//쿠기의 기본 저장경로는 같은 폴더내임.. 다른곳으로 폴더 이동되면 못씀

$c = setcookie("usernick","mrhi",time()+60*60,"/"); //60초가 60개 = 1시간

//setcookie 류는 header정보에 보내는거기때문에 body전에해야함 고로 echo문 위에..

if ($bool && $bool2) echo "성공";
else echo "실패";
