<?php
/**
 * Created by PhpStorm.
 * User: alfo06-18
 * Date: 2017-10-18
 * Time: 오전 11:46
 */

$arr = array(15, 13, 9, 7, 6, 12, 19, 30, 28, 26);

$count = 10;

echo "정렬되기전: ";

for ($a = 0; $a < $count; $a++) {
    echo $arr[$a] . " ";
}

echo "<br/>";


for ($i = $count - 2; $i >= 0; $i--) {
    for ($j = 0; $j <= $i; $j++) {

        if ($arr[$j] > $arr[$j + 1]) {
            $tmp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $tmp;
        }
    }
}


echo "오름차순 버블 정령 : ";

for ($a = 0; $a < 10; $a++) {
    echo $arr[$a] . " ";
}