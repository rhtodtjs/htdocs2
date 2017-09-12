<?php


header('Content-Type: text/html; charset = utf-8');
$gender = $_POST['rg1'];
$fruits = $_POST['fruits'];
$msg = $_POST['msg'];
$select = $_POST['sel'];

//echo "<meta charset=\"UTF-8\">";

echo "<h2> 당신의 성별은 $gender</h2>";
$num = count($fruits);
echo "<p>";
for ($i = 0; $i < count($fruits);$i++){
    echo "$fruits[$i]";
    echo "<br/>";
}
echo "</p>";

$msg = nl2br($msg);


echo "<p>$msg</p>";
echo "<p>$select</p>";


?>