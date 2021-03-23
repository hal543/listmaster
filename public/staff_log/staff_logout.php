<?php

include ( dirname(__FILE__) . '../parts/staff_add/staff_add_header.php' );

session_start();
$_SESSION=array();
if(isset($_COOKIE[session_name()])==true)
{
	setcookie(session_name(),'',time()-42000,'/');
}
session_destroy();

?>

<div class="main_log1">
	<div class="main_log2">
		<p class="log">ログアウトしました</p>
		<p class="log2"><a href='staff_login_top.php'>ログインページに戻る</a></p>
	</div>
</div


<?php include ( dirname(__FILE__) . '../parts/staff_add/staff_add_footer.php' ); ?>