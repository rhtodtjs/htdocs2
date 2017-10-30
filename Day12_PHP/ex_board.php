<!DOCTYPE HTML>

<html>
<head>
    <meta charset="utf-8">
    <title>123</title>
</head>
<body>

<table border="1" width="600">

    <tr bgcolor="#cccc" align="center">
        <td>번호</td>
        <td>제목</td>
        <td>글쓴이</td>
        <td>날짜짜</td>
    </tr>
    <?php

    $num = 1;
    $name = "홍길등";
    $date = "2014/03/15";

    for ($i = 0; $i < 10; $i++) {
        $title = "게시판 ㅔ제목".$num;

        echo ("<tr><td width='50'align='center'>$num</td><td>$title</td> 
        <td width='50'>$name</td><td width='80'>$date </td></tr>");
        $num++;
    }
    ?>
</table>

</body>

</html>