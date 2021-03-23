<?php
    /*
      csvファイルの定義
    */
    $file_path = "list2.csv";
    $export_csv_title = ["No","企業名","電話番号","FAX番号","メールアドレス","都道府県","住所","代表取締役","WEB","設立年月日","資本金","売上高","従業員数","業種"];
    $export_csv_title = mb_convert_encoding($export_csv_title, 'SJIS-win', 'UTF-8');
    $export_sql = "SELECT * FROM list";

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
header('Content-Type: text/html; charset=UTF-8');
header('Content-Length: '.filesize($file_path));
header('Content-Disposition: attachment; filename=download_list.csv');
 
// ファイル出力
readfile($file_path);
?>