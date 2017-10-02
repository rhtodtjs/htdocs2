

<?php header("Content-Type:text/html;charset=utf-8");


$_number = $_POST['number'];
$_message = $_POST['message'];

$_ip = $_POST['uri'];
$_user = $_POST['user'];
$_pass = $_POST['pass'];
$_dbname = $_POST['dbname'];
$_portnum = $_POST['port'];


$conn = mysqli_connect($_ip, $_user, $_pass, $_dbname, $_portnum);
$lang = mysqli_query($conn,"SET NAMES utf8");


$sql = "INSERT INTO ReceiveData(Number , Message , Date) VALUES ('$_number','$_message',now()) ";

$result = mysqli_query($conn,$sql);

if ($result){
    echo "success";

}
else echo "fail";

mysqli_close($conn);

