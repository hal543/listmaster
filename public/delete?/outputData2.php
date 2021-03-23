<?php

    /*
      csvファイルの定義
    */
    $file_path = "list2.csv";
    $export_csv_title = ["No", "name", "gender", "point"];
    $export_csv_title = mb_convert_encoding($export_csv_title, 'SJIS-win', 'UTF-8');
    $export_sql = "SELECT id, name, gender, point FROM list";

    /*
      データベースの接続
     */
    try{
        $dsn='mysql:dbname=listMaster;host=localhost;charset=utf8';
        $user='root';
        $password='root';
        $dbh=new PDO($dsn,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        print('Connection failed:'.$e->getMessage());
        die();
    }

    // encoding SJIS-win
    foreach( $export_csv_title as $key => $val ){

        $export_header[] = mb_convert_encoding($val, 'SJIS-win', 'UTF-8');
    }
    /*
        CSV作成
     */
    if(touch($file_path)){
        $file = new SplFileObject($file_path, "w");

        // write csv header
        $file->fputcsv($export_header);

        // query database
        $stmt = $dbh->query($export_sql);

        // create csv sentences
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $file->fputcsv($row);

        }

        // データベースの切断
        $dbh = null;
    }

    
// HTTPヘッダを設定
header('Content-Type: application/octet-stream');
header('Content-Length: '.filesize($file_path));
header('Content-Disposition: attachment; filename=download_list.csv');
 
// ファイル出力
readfile($file_path);
?>