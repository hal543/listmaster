<?php require_once './edit_function.php';?>
<?php include ( dirname(__FILE__) . '../parts/staff_add/main_header.php' ); ?>

<?php
$capital= filter_input(INPUT_POST,'capital',FILTER_SANITIZE_SPECIAL_CHARS);
$id=filter_input(INPUT_POST,'id',FILTER_SANITIZE_SPECIAL_CHARS);

$result=editCapitalId($capital,$id);

header("Location: ../listDetail.php?list_id=$id");
exit ;

?>

<?php include ( dirname(__FILE__) . '/parts/staff_add/main_footer.php' ); ?>