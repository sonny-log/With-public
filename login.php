<!doctype html>
<html lang="ko">
<head>
<title></title>
<meta charset="utf-8">
<meta name="msapplication-tap-highlight" content="no">
<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0, width=device-width, viewport-fit=cover">
<meta name="color-scheme" content="light dark">
<script src="js/jquery.min.js"></script>

</head>

<body class="app_index">

<header>
	<div class="wrap">
		<h1 id="docTitle"></h1>
	</div>
</header>
<?php if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) { ?>
<div id="content" class="content">
	<div class="wrap" >
		<img src="lib/img/public.png" alt="index"><br>
		<div class="box" >
			<form action = "register.php" method="post">
				<div id="lo"><input type="text" name="user_id" placeholder= "ID" required></div>
				<div id="lo"><input type="password" name="user_pw" placeholder= "Password" required></div>
				<div id="btn"><input type="submit" name="login" value="로그인"></div>
			</form>
		</div>
	</div>
</div>
<?php } else {
            $user_id = $_SESSION['user_id'];
            $user_name = $_SESSION['user_name'];
            echo "<p>$user_name($user_id)님은 이미 로그인되어 있습니다.";
            echo "<p><button onclick=\"window.location.href=index.htm'\">메인으로</button> <button onclick=\"window.location.href='logout.php'\">로그아웃</button></p>";
        } ?>
<script src="js/app.common.js"></script>

</body>
</html>


