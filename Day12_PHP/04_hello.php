<?php
/**
 * Created by PhpStorm.
 * User: alfo06-18
 * Date: 2017-10-17
 * Time: 오전 10:29
 */


$dan = 2;

for ($i = 1; $i < 10; $i++) {

    echo "$dan  *  $i = " . $dan * $i;
    echo "<br/>";
}


echo '<hr/>';

//출력 결과를 테이블로 보여주자

$dan2 = 2;

echo "<table border='1' style='text-align: center'>";

for ($i = 1; $i < 10; $i++) {

    echo "
        <tr> 
        
            <td width='20px'> $dan2 </td>
            <td width='40px'> $i </td>
            <td width='60px'>" . $dan2 * $i . " </td >  
            
         </tr>
    ";

}

echo "</table>";


echo "<hr/>";

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>계산기</title>
</head>
<body>
<!--HTML을 베이스로 잡고 php로 데이터만 보여주기..-->
<!--윗 방법은 php가 베이스라 echo문으로 태그쓰기 너무 힘듬-->

<h2>구구단 출려ㅑㄱ</h2>

<table border="1" style="text-align: center">

    <thead>구구단</thead>


    <?php

    $dan = 5;
    for ($i = 1; $i < 10; $i++) {
        //html문법을 쓰고시퍼요..
        //php를 끊어버리자..
        ?>


        <!--이공간은 html의 영역..-->
        <tr>
            <td><? echo $dan ?></td>
            <td><?= $i ;?></td>
            <td width="100px"><?= $dan * $i;?></td>
        </tr>


        <?php
    }
    ?>


</table>
</body>
</html>