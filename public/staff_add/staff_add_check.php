<?php include ( dirname(__FILE__) . '../parts/staff_add/staff_add_header.php' ); ?>

<?php

$business_unit= filter_input(INPUT_POST,'business_unit',FILTER_SANITIZE_SPECIAL_CHARS);
$name= filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);
$pass= filter_input(INPUT_POST,'pass',FILTER_SANITIZE_SPECIAL_CHARS);
$repass= filter_input(INPUT_POST,'repass',FILTER_SANITIZE_SPECIAL_CHARS);

if(empty($business_unit))
{
    array_push($err_msgs,'事業部が選択されていません。');
}

if(empty($name))
{
    array_push($err_msgs,'名前が選択されていません。');
}

if($pass!==$repass)
{   
    echo "パスワードが一致しておりません。";
	print '<form>';
	print '<input type="button" onclick="history.back()" value="戻る">';
    print '</form>';
    exit;
}
?>

<?php if( $business_unit =="" || $name =="" || $pass!==$repass ) :?>
	
	<form>
	<input type="button" onclick="history.back()" value="戻る">
	</form>

<?php else :?>
	<?php $pass=md5($pass); ?>

    <div class="sac-wrapper">
        <div class="sac-content">
            <p>担当部署：<?= $business_unit?></p>
            <p>名前：<?= $name?></p>
        </div>
    </div>

	<form method="post" action="staff_add_done.php">
	<input type="hidden" name="business_unit" value=<?= $business_unit?>>
	<input type="hidden" name="name" value=<?= $name?>>
	<input type="hidden" name="pass" value=<?= $pass?>>

	<input type="button" onclick="history.back()" value="戻る">
	<input type="submit" value="ＯＫ">
	</form>
<?php endif?>

<?php include ( dirname(__FILE__) . '../parts/staff_add/staff_add_footer.php' ); ?>