<?php include ( dirname(__FILE__) . '/parts/staff_add/main_header.php' ); ?>

<?php
    function csvToArray($csvPath){
        $csvArray = array();
        $firstFlg = true;
        $keys = array();
        $count = 0;
        $file = fopen($csvPath, 'r');

        while ($line = fgetcsv($file)) {
            if($firstFlg){
            for($i = 0; $i < count($line); $i++){
                array_push($keys,$line[$i]);
            }
            $firstFlg = false;
            }else{
            for($i = 0; $i < count($line); $i++){
                $csvArray[$count][$keys[$i]] = $line[$i];
            }
            $count++;
            }
        }
        fclose($file);
        return $csvArray;
    }

$csvPath = $_FILES["csvfile"]["tmp_name"];
$csvfiles = csvToArray($csvPath);

try{

$dsn='mysql:dbname=listMaster;host=localhost;charset=utf8';
$user='root';
$password='root';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='INSERT INTO list (corp_name,phone,fax,mail,prefectures,address,name,web,establishment,capital,revenue,employee,industry) VALUES (:corp_name,:phone,:fax,:mail,:prefectures,:address,:name,:web,:establishment,:capital,:revenue,:employee,:industry)';
$stmt=$dbh->prepare($sql);

foreach($csvfiles as $csvfile){
    $stmt->bindValue(':corp_name',$csvfile["企業名"],PDO::PARAM_STR);
    $stmt->bindValue(':phone',$csvfile["電話番号"],PDO::PARAM_STR);
    $stmt->bindValue(':fax',$csvfile["FAX"],PDO::PARAM_STR);
    $stmt->bindValue(':mail',$csvfile["Mail"],PDO::PARAM_STR);
    $stmt->bindValue(':prefectures',$csvfile["都道府県"],PDO::PARAM_STR);
    $stmt->bindValue(':address',$csvfile["住所"],PDO::PARAM_STR);
    $stmt->bindValue(':name',$csvfile["代表取締役社長"],PDO::PARAM_STR);
    $stmt->bindValue(':web',$csvfile["WEB"],PDO::PARAM_STR);
    $stmt->bindValue(':establishment',$csvfile["設立年月日"],PDO::PARAM_STR);
    $stmt->bindValue(':capital',$csvfile["資本金"],PDO::PARAM_STR);
    $stmt->bindValue(':revenue',$csvfile["売上高"],PDO::PARAM_STR);
    $stmt->bindValue(':employee',$csvfile["従業員"],PDO::PARAM_STR);
    $stmt->bindValue(':industry',$csvfile["業種"],PDO::PARAM_STR);
    $stmt->execute();
}

$dbh=null;
}
catch (Exception $e)
{
  echo $e->getMessage();
  exit();
}
?>


登録が完了しました。


<?php include ( dirname(__FILE__) . '/parts/staff_add/main_footer.php' ); ?>
