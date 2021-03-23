<?php include ( dirname(__FILE__) . '../parts/staff_add/staff_add_header.php' ); ?>

<?php

try{ 

    $business_unit= filter_input(INPUT_POST,'business_unit',FILTER_SANITIZE_SPECIAL_CHARS);
    $name= filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);
    $pass= filter_input(INPUT_POST,'pass',FILTER_SANITIZE_SPECIAL_CHARS);
    $repass= filter_input(INPUT_POST,'repass',FILTER_SANITIZE_SPECIAL_CHARS);
    

    $dsn='mysql:dbname=listMaster;host=localhost;charset=utf8';
    $user='root';
    $password='root';
    $dbh=new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql='INSERT INTO staff (business_unit,name,pass) VALUES (?,?,?)';
    $stmt=$dbh->prepare($sql);
    $data[]=$business_unit;
    $data[]=$name;
    $data[]=$pass;
    $stmt->execute($data);

    $dbh=null;

    print $name;
    print 'さんを追加しました。<br />';

}catch (Exception $e){
  echo $e->getMessage();
  exit();
}

?>

<a href="../staff_log/staff_login_top.php">ログイン画面へ</a>



<?php include ( dirname(__FILE__) . '../parts/staff_add/staff_add_footer.php' ); ?>