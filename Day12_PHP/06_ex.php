<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: alfo06-18
 * Date: 2017-10-18
 * Time: 오전 9:17
 */

//연산자는 자바스크립트와 거의 같음..


//다른건 논리연산자 && , || --> 키워드로 표현하는 방법이있다.
// && = and , || = or

$age = 26;

if ($age > 20 and $age < 30) { //21살 ~ 29살이니?
    echo "aa<br>";
}

if ($age < 10 or $age < 30) echo "bb<br/>";


//제어문.. elseif

$score = 85;

if ($score >= 90) {
    echo "your grade is A";
} elseif ($score >= 80) { //else if가 띄어쓰기가 없어도되고 없는거쓰셈걍
    echo "your grade is B";
} else echo "F";


//문자열 비교 == 써도 됩니다 참조주소 비교가아님

$name = "hong";

if ($name == "hong") echo "ccc<br/>";

switch ($name) {
    case "kim":

        echo "KIM?";
        break;

    case "hong":
        echo "홍?";
        break;
}

$arr = array(10, 20, 30);

foreach ($arr as $t) {
    echo "$t" . "<br/>";
}

function show()
{
    echo "show<br/>";
}

show();


//php문서 안에서는 <? ?.>는 {} 같은 영역(지역 특징)이 아님..


function sss($x){

    if($x < 20 ) return true;
    if($x > 20) return "sss";
}

echo "sss(5)의 결과".sss(5)."<br/>";
echo "sss(5)의 결과".sss(10)."<br/>";
echo "sss(5)의 결과".sss(25)."<br/>";

echo "없는변수 출력".$hhh ."<br/>";

echo "false : ".false."<br/>"; //false 나 NULl은 안나옴 그냥
echo "NULL : ".NULL."<br/>";