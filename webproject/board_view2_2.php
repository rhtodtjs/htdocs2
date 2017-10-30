<?php
require_once("config_beer.php");
$bNo = $_GET['bno'];

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_port) or exit("Mysql 서버에 접속하는데 실패했습니다. (서버 컴퓨터 Off)<br><br>오류사인:" . mysql_error());
$db = mysqli_select_db($conn, $db_name) or exit(mysqli_error());
$lang = mysqli_query($conn, "SET NAMES utf8");


if(!empty($bNo) && empty($_COOKIE['board_free_' . $bNo])) {
    $sql = 'update board set b_hit = b_hit + 1 where nID = ' . $bNo;
    $result = mysqli_query($conn,$sql);
    if(empty($result)) {
        ?>
        <script>
            alert('오류가 발생했습니다.');
            history.back();
        </script>
        <?php
    } else {
        setcookie('board' . $bNo, TRUE, time() + (60 * 60 * 24), '/');
    }
}

$sql = 'select Title, content, Date, hit, nID from board where nID = ' . $bNo;
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>자유게시판 - 글 보기</title>
    <link rel="stylesheet" href="./css/normalize.css" />
    <link rel="stylesheet" href="./css/board.css" />
    <script src="./js/jquery-3.2.1.min.js"></script>
</head>
<body>
<article class="boardArticle">
    <h3>자유게시판 글쓰기</h3>
    <div id="boardView">
        <h3 id="boardTitle"><?php echo $row['Title']?></h3>
        <div id="boardInfo">
            <span id="boardID">작성자: <?php echo $row['nID']?></span>
            <span id="boardDate">작성일: <?php echo $row['Date']?></span>
            <span id="boardHit">조회: <?php echo $row['hit']?></span>
        </div>
        <div id="boardContent"><?php echo $row['content']?></div>
        <div class="btnSet">
            <a href="./board_add.php?bno=<?php echo $bNo?>">수정</a>
            <a href="./board_delete.php?bno=<?php echo $bNo?>">삭제</a>
            <a href="./">목록</a>
        </div>
        <div id="boardComment">
            <?php require_once('./comment.php')?>
        </div>
    </div>
</article>
</body>
</html>