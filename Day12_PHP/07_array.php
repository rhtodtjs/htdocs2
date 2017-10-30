<?php
echo "<meta charset='utf-8'>";

//JS와 거의 같음.
//$arr= [];
//echo "$arr[0], $arr[1], $arr[2]";
//echo phpinfo();

$arr[0] = 10;
$arr[1] = 20;
$arr[2] = 30;

echo "$arr[0], $arr[1], $arr[2]<br/>";
echo $arr . "<br/>";

// 배열의 개수
$len = count($arr);
echo "배열 길이 : " . $len . "<br/>";

//개수에 맞지 않는 인덱스 사용??
$arr[9] = 100;
echo "$arr[9]<br/>";

// 배열의 개수
$len = count($arr);
echo "배열 길이 : " . $len . "<br/>";

$arr[3] = 40;
$len = count($arr);
echo "배열 길이 : " . $len . "<br/>";

for ($i = 0; $i < $len; $i++) {
    echo "arr[$i] : " . $arr[$i] . "<br/>";
}

$num = 0;
foreach ($arr as $e) {
    $num++;
    echo "$num : " . $e . "<br/>";
}


$arr2[0] = 10;
$arr2[1] = "aaa";
$arr2[2] = 3.14;

echo "$arr2[0], $arr2[1], $arr2[2]<br/>";

//배열생성의 2번째 방법 :array()함수 사용
$arr = array(10, "aaa", "3.14");
echo $arr . "<br/>";
foreach ($arr as $e) {
    echo "$e <br/>";
}


//연관배열 가능. 키밸류 방식

$arr2 = array("name" => "sam", "age" => 20, aver => 70.5); //aver에 ""를써야하지만 안써도되긴하는데 쓰ㅅ셈걍

echo $arr2["name"] . $arr2["age"] . $arr2[aver] . "<br/>";

foreach ($arr2 as $k => $v) { //연관 배열 포이치문의 키 밸류 출력방법
    echo "$k : $v <br/>";
}

//연관배열은 키값을 구분하므로 인덱스번호 불가능

//다차원 배열 ..!

$arr3 = array(

    array(10, 20),
    array("aa", "bb", "cc"),
    array(3.14,5.4,10)

);

//count

//sort() - sort arrays in ascending order
//rsort() - sort arrays in descending order
//asort() - sort associative arrays in ascending order, according to the value
//ksort() - sort associative arrays in ascending order, according to the key
//arsort() - sort associative arrays in descending order, according to the value
//krsort() - sort associative arrays in descending order, according to the key

//위의메소드는 배열의 원본을 바꾸는거임 리턴을안받는다는ㄷ뜻

?>
