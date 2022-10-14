<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main</title>
</head>
<body>
    <h1>MAIN</h1>
    <?php
        if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
            echo "<p>로그인을 해 주세요.</p>";
            echo "<p><button onclick=\"window.location.href='login.php'\">로그인</button> <button onclick=\"window.location.href='join.php'\">회원가입</button></p>";
        } else {
            $user_id = $_SESSION['user_id'];
            $user_name = $_SESSION['user_name'];
            echo "<p>$user_name($user_id)님 환영합니다.";
            echo "<p><button onclick=\"window.location.href='logout.php'\">로그아웃</button></p>";
        }
    ?>
</body>
</html>