<?php
/**
 * Created by PhpStorm.
 * User: alfo06-18
 * Date: 2017-10-17
 * Time: 오전 11:36
 */


echo strlen("Hellow WOrld")."<br/>";

echo str_word_count("Hello World!")."<br/>";

echo strpos("Hello Wolrld","Wol");


echo str_replace("World","고오반","Hello World");

//split

$phone = "010-1234-5678";

$nbs[] = explode("-",$phone);

echo "<br/>";
echo $nbs;
echo $nbs[0];

for($i=0;$i<3;$i++){
    echo "$nbs[i]";
}

//줄바꿈 문자 \n을 <br/>태그로 변경..
echo "<br/>";

$content = "Hello. \nNice to meey you .\n\n Have a Nice ";

echo $content;

echo nl2br($content);