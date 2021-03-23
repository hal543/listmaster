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
var_dump($csvfiles);

try{

$dsn='mysql:dbname=listMaster;host=localhost;charset=utf8';
$user='root';
$password='root';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='INSERT INTO testlist (name,gender,point) VALUES (:name,:gender,:point)';
$stmt=$dbh->prepare($sql);

foreach($csvfiles as $csvfile){
    $stmt->bindValue(':name',$csvfile["名前"],PDO::PARAM_STR);
    $stmt->bindValue(':gender',$csvfile["性別"],PDO::PARAM_STR);
    $stmt->bindValue(':point',$csvfile["点数"],PDO::PARAM_STR);
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


