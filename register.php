<?php

$host ="localhost";
$user = "root";
$pw = "123456";
$db_name = "resist";

$con = mysqli_connect($host,$user,$pw,$db_name);
$user_id = $_POST['user_id'];
$user_pw = $_POST['user_pw'];

$sql = "SELECT * FROM tb_user where userid='$user_id' and userpw='$user_pw'";
    $res = mysqli_fetch_array(mysqli_query($con,$sql));
    if($res){
        session_start();
        $_SESSION['user_id'] = $res['user_id'];
        $_SESSION['user_name'] = $res['user_name'];
        echo "<script>alert('로그인에 성공했습니다!');";
        echo "window.location.replace('index.htm');</script>";
        exit;
    }
    else{
       echo "<script>alert('아이디 혹은 비밀번호가 잘못되었습니다.');";
       echo "window.location.replace('login.html');</script>";
    }

/* $sql = "insert into tb_user (userid, userpw, username, userphone,
useremail) values('sky', '12341234', 'blue', '01012341234', 'test3@test.com'
)";
$result = mysqli_query($con, $sql);

if($result) { echo "insert success!"; }
else { echo "failure"; }

mysqli_close($con);  */

?>

<meta http-equiv="refresh" content="0;url=main.php">