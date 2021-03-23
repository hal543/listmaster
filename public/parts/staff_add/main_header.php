<?php 

session_start();
session_regenerate_id(true);
if(isset($_SESSION['login'])==false)
{
	print 'ログインされていません。<br />';
	print '<a href="seller_login.html">ログイン画面へ</a>';
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=1024" />
	<title>listMaster_スタッフページ</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.3.min.js"></script>
	<script src="../public/js/detail.js"></script>
</head>

<div class="wrap">
<body>
<div class="header">
    <div class="header-container">
      	<div class="header-left">
        	<a href="../listmaster_top.php"><img src="./pic/logo.png" class="logo"></a>
      	</div>
      	<div class="header-right">
        	<ul style="list-style: none;" class="header-right-content">
        		<li><a href="staff_log/staff_logout.php">ログアウト</a></li>
        		<li><a href="seller_chat/seller_chat_top.php">設定</a></li>
				<li><a href="detail_research.php">詳細検索</a></li>
				<li><a href="inputData.php">データ登録</a></li>
			</ul>
		</div>
  	</div>
</div>
