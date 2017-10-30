<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h2>게시판 </h2>
<table border="1" width="100%" cellspacing="0" cellpadding="0" id="news" style="display:">

    <tr>
        <th width="5%">번호</th>
        <th width="65%">제목</th>
        <th width="10%">작성자</th>
        <th width="20%">작성 시간</th>
    </tr>


    <?php
    include "config_beer.php";

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_port) or exit("Mysql 서버에 접속하는데 실패했습니다. (서버 컴퓨터 Off)<br>
    <br>오류사인:" . mysql_error());
    $db = mysqli_select_db($conn, $db_name) or exit(mysqli_error());
    $lang = mysqli_query($conn, "SET NAMES utf8");

    $rank = mysqli_query($conn, "SELECT * FROM `board` ORDER BY `nID` DESC");
    $order = 1;
    while ($row = mysqli_fetch_array($rank)) {
        if ($order >= 35) {
            mysqli_close($conn);
            break;
        }

        echo "
                    <tr >
                        <td width='10%'><font color='black'>$row[nID]</td>
                    
                        <td width='50%'><a href='board_view.php?id=$row[nID]'style='color:#7BA6AD;text-decoration:none;'>$row[Title]</a></td>
                    
                        <td width='20%'><font color='black'>$row[WriteID]</td>
                    
                        <td width='20%'><font color='black'>$row[Date]</td>
                    </tr>
                    
    ";
        $order++;
    } ?>
</table>

</body>
</html>