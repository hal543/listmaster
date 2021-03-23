<?php require_once '../common/getData.php';?>
<?php include ( dirname(__FILE__) . '/parts/staff_add/main_header.php' ); ?>

<?php
$check_prefecture =$_POST['check_prefecture'];


$t=getListFreeName($check_prefecture);
foreach($t as $y){
}
var_dump($y);

//$t=getListFreeName($check_prefecture);
//foreach($t as $y){
//}


?>

<?php include ( dirname(__FILE__) . '/parts/staff_add/main_footer.php' ); ?>