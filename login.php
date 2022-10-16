<!doctype html>
<html lang="ko">
<head>
<title></title>
<meta charset="utf-8">

<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0, width=device-width, viewport-fit=cover">


<script src="js/jquery.min.js"></script>
<style>
	body{
		background-color: black;
	}
	*{
	  color: white;
	  text-align: center;
	  font-family:'나눔고딕','NanumGothic','NanumGothicWeb','맑은 고딕','Malgun Gothic','돋움',dotum,Helvetica,sans-serif;
	}
	.box{
		background-color: white;
		width: 400px;
		height: 300px;
		border-radius: 15px;
		margin:0 auto;
	}
	img{
		width: 150px;
	}
	header{
		margin: 50px;
	}
	#lo{
		/* border: solid 1px red; */
		width: 350px;
		height: 50px;
		margin:0 auto;
	}
	input{
		position:relative;
		border-radius: 5px;
		border: 0;
		background-color: rgb(168, 168, 168);
		width: 250px;
		height: 30px;
		top:50%;
  		left:50%;
		transform:translate(-50%,-50%);
	}
	#btn{
		width: 100px;
		height: 40px;
	}
</style>
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
		<img src="img/skull.png" alt="index"><br>
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


