<?php
    /*
      データベースの定義
     */
    $dsn='mysql:dbname=listMaster;host=localhost;charset=utf8';
    $user='root';
    $password='root';
    $dbh=new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    /*
      csvファイルの定義
    */
    $file_path = "customer.csv";
    $export_csv_title = ["No", "名前", "性別", "点数"];
    $export_sql = "SELECT id, name, gender, point FROM testlist";

    /*
      データベースの接続
     */
    try{
        $dbh = new PDO($dsn, $user, $password);
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