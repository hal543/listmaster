<?php 

include ( dirname(__FILE__) . '../parts/staff_add/staff_add_header.php' );


try
{

$name= filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);
$pass= filter_input(INPUT_POST,'pass',FILTER_SANITIZE_SPECIAL_CHARS);


$pass=md5($pass);

$dsn='mysql:dbname=listMaster;host=localhost;charset=utf8';
$user='root';
$password='root';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT name FROM staff WHERE name=? AND pass=?';
$stmt=$dbh->prepare($sql);
$data[]=$name;
$data[]=$pass;
$stmt->execute($data);

$dbh=null;

$rec=$stmt->fetch(PDO::FETCH_ASSOC);

if($rec==false)
{
	print '名前かパスワードが間違っています。<br />';
	print '<a href="staff_login_top.php"> 戻る</a>';
}
else
{

	$dsn='mysql:dbname=listMaster;host=localhost;charset=utf8';
	$user='root';
	$password='root';
	$dbh=new PDO($dsn,$user,$password);
	$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$sql='SELECT * FROM staff WHERE name=? AND pass=?';
	$stmt=$dbh->prepare($sql);
	$stmt->execute($data);

	$dbh=null;

	$all=$stmt->fetch(PDO::FETCH_ASSOC);

	session_start();
	$_SESSION['login']=1;
	$_SESSION['all']=$all;
	$_SESSION['pass']=$rec['pass'];
	header('Location:../listMaster_top.php');
	exit();
}

}
catch(Exception $e)
{
  echo $e->getMessage();
  exit();
}

?>

<?php include ( dirname(__FILE__) . '../parts/staff_add/staff_add_footer.php' ); ?>