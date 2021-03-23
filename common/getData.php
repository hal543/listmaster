<?php

function dbc(){

    try {
        $host = "localhost";
        $dbname = "listMaster";
        $user='root';
        $password='root';

        $dsn='mysql:dbname=listMaster;host=localhost;charset=utf8';
        $pdo=new PDO($dsn,$user,$password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC

        ]);
        return $pdo;
        
        }catch (PDOException $e){
        echo $e->getMessage();
        exit;
        }
}

function getListFreeWord($free_word)
{
    $sql = "SELECT * FROM list WHERE (corp_name LIKE :free_word or industry LIKE :free_word or  phone LIKE :free_word)";
    $stmt = dbc()->prepare($sql);
    $stmt->bindvalue( ':free_word','%'.$free_word.'%', PDO::PARAM_STR);
    $stmt->execute();
    $file = $stmt->fetchall( PDO::FETCH_ASSOC );
    return $file;
}

function getListId($id)
{
    $sql = "SELECT * FROM list WHERE id=:id";
    $stmt = dbc()->prepare($sql);
    $stmt->bindvalue( ':id', $id, PDO::PARAM_INT );
    $stmt->execute();
    $file = $stmt->fetchall( PDO::FETCH_ASSOC );
    return $file;
}

?>