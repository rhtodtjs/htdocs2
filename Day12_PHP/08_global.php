<?php header('Content-type:text/html; charset=utf-8');
/**
 * Created by PhpStorm.
 * User: alfo06-18
 * Date: 2017-10-18
 * Time: 오전 11:18
 */


//슈퍼 전역변수

//$_GET
//$_POST
//$_REQUEST : get,post든 둘다받겠다거..


//$GLOBALS : 전역변수로 선언..

function aaa()
{
    $a = 10;
    $GLOBALS['g'] = 10; //전역 변수
}

aaa();
echo "전역변수 : ".$g."<br/>";


//$_SERVER : php의 정보출력..

echo $_SERVER['PHP_SELF']; //현재실행중 문서이름
echo $_SERVER['SERVER_NAME']; //서버네임
echo $_SERVER['REQUEST_METHOD']; //
echo $_SERVER['SCRIPT_NAME']; //실행되는 무서의 경로
echo $_SERVER['REMOTE_ADDR']; //접속한 아이피

//$_COOKIE : 클라쪽에 저장되는것 읽고쓰기.
//$_SESSION : 서버쪼에 저장되는것 읽고쓰기.

?>