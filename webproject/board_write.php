<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <title>MRHI ADMIN PAGE</title>

    <style>
        .nse_content {
            width: 660px;
            height: 500px;
        }
    </style>

    <script type="text/javascript" src="./nse_files/js/HuskyEZCreator.js" charset="utf-8"></script>

</head>
<body>

<h2>어드민 페이지</h2>

<form name="nse" action="board_add.php" method="post">
    <label>제목 : <input type="text" required name="title" style="width: 630px"> </label>
    <br/>
    <textarea name="ir1" id="ir1" class="nse_content"></textarea>
    <script type="text/javascript">
        var oEditors = [];
        nhn.husky.EZCreator.createInIFrame({
            oAppRef: oEditors,
            elPlaceHolder: "ir1",
            sSkinURI: "./nse_files/SmartEditor2Skin.html",
            fCreator: "createSEditor2"
        });
        function submitContents(elClickedObj) {
            // 에디터의 내용이 textarea에 적용됩니다.
            oEditors.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []);
            // 에디터의 내용에 대한 값 검증은 이곳에서 document.getElementById("ir1").value를 이용해서 처리하면 됩니다.


            try {
                elClickedObj.form.submit();
            } catch (e) {
            }
        }
    </script>
    <br/>
    <input type="submit" value="전송" onclick="submitContents(this)">
</form>




</body>
</html>