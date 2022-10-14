<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <h2>로그인</h2>
        <?php if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) { ?>
        <form method="post" action="register.php" autocomplete="off">
            <p>아이디: <input type="text" name="user_id" required></p>
            <p>비밀번호: <input type="password" name="user_pw" required></p>
            <p><input type="submit" value="로그인"></p>
        </form>
        <small><a href="join.php">처음 오셨나요?</a><small>
        <?php } else {
            $user_id = $_SESSION['user_id'];
            $user_name = $_SESSION['user_name'];
            echo "<p>$user_name($user_id)님은 이미 로그인되어 있습니다.";
            echo "<p><button onclick=\"window.location.href='main.php'\">메인으로</button> <button onclick=\"window.location.href='logout.php'\">로그아웃</button></p>";
        } ?>
    </body>
</html>