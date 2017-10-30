<?php
session_start();

//회원가입을 통해 저장되어 있는 세션값.
$userid = $_SESSION['userid'];
$usernick = $_SESSION['usernick'];
$userlevel = $_SESSION['userlevel'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/common.css">
</head>
<body>
<div id="wrap">

    <header id="header">
        <?php include "../lib/top_login2.php" ?>
    </header>

    <nav id="menu">
        <?php include "../lib/top_menu2.php" ?>
    </nav>

    <div id="content">
        <!-- 왼쪽 사이드 nav메뉴 영역(선택X단순 리스트) :공통모듈 -->
        <aside id="col1">
            <div id="left_menu">
                <?php include "../lib/left_menu.php" ?>
            </div>
        </aside>

        <!-- 나머지 콘텐츠 영역 : 회원가입 폼-->
        <section id="col2">


        </section>
    </div>

</div>
</body>
</html>
