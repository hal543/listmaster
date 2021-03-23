<?php

try{ 

$csvfiles=$_POST['csvfile'];

$fp = fopen("$csvfiles", "r");
 
while ($line = fgets($fp)) {
  echo "$line<br>";
}


foreach($csvfiles as $csvfile){}
var_dump($csvfile);

$dsn='mysql:dbname=listMaster;host=localhost;charset=utf8';
$user='root';
$password='root';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='INSERT INTO testlist (name,gender,point) VALUES (:name,:gender,:point)';
$stmt=$dbh->prepare($sql);
$data[]=$user_name;
$data[]=$user_mail;
$data[]=$age;
$data[]=$gender;
$data[]=$user_address;
$data[]=$w_lbn;
$data[]=$w_morph;
$data[]=$user_pass;

$stmt->execute($data);

$dbh=null;
}
catch (Exception $e)
{
  echo $e->getMessage();
  exit();
}

?>

<div class="uad_main">
  <div class="uad_me">
      <p class="uad_me1">Welcome!</p>
      <p class="uad_me2"><?= $user_name ?>さんの登録が完了しました！</p>
      <a href="user_login.html">ログイン画面へ</a>
  </div>
</div>
