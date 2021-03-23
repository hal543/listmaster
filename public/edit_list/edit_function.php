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

function editCorpId($corp_name,$id)
{
    $sql = $sql='UPDATE list SET corp_name=:corp_name WHERE id=:id';
    $stmt = dbc()->prepare($sql);
    $stmt->bindvalue( ':corp_name', $corp_name, PDO::PARAM_STR );
    $stmt->bindvalue( ':id', $id, PDO::PARAM_INT );
    $stmt->execute();
}

function editPhoneId($phone,$id)
{
    $sql = $sql='UPDATE list SET phone=:phone WHERE id=:id';
    $stmt = dbc()->prepare($sql);
    $stmt->bindvalue( ':phone', $phone, PDO::PARAM_STR );
    $stmt->bindvalue( ':id', $id, PDO::PARAM_INT );
    $stmt->execute();
}

function editFaxId($fax,$id)
{
    $sql = $sql='UPDATE list SET fax=:fax WHERE id=:id';
    $stmt = dbc()->prepare($sql);
    $stmt->bindvalue( ':fax', $fax, PDO::PARAM_STR );
    $stmt->bindvalue( ':id', $id, PDO::PARAM_INT );
    $stmt->execute();
}

function editMailId($mail,$id)
{
    $sql = $sql='UPDATE list SET mail=:mail WHERE id=:id';
    $stmt = dbc()->prepare($sql);
    $stmt->bindvalue( ':mail', $mail, PDO::PARAM_STR );
    $stmt->bindvalue( ':id', $id, PDO::PARAM_INT );
    $stmt->execute();
}

function editPrefecturesId($prefectures,$id)
{
    $sql = $sql='UPDATE list SET prefectures=:prefectures WHERE id=:id';
    $stmt = dbc()->prepare($sql);
    $stmt->bindvalue( ':prefectures', $prefectures, PDO::PARAM_STR );
    $stmt->bindvalue( ':id', $id, PDO::PARAM_INT );
    $stmt->execute();
}

function editAddressId($address,$id)
{
    $sql = $sql='UPDATE list SET address=:address WHERE id=:id';
    $stmt = dbc()->prepare($sql);
    $stmt->bindvalue( ':address', $address, PDO::PARAM_STR );
    $stmt->bindvalue( ':id', $id, PDO::PARAM_INT );
    $stmt->execute();
}

function editNameId($name,$id)
{
    $sql = $sql='UPDATE list SET name=:name WHERE id=:id';
    $stmt = dbc()->prepare($sql);
    $stmt->bindvalue( ':name', $name, PDO::PARAM_STR );
    $stmt->bindvalue( ':id', $id, PDO::PARAM_INT );
    $stmt->execute();
}

function editWebId($web,$id)
{
    $sql = $sql='UPDATE list SET web=:web WHERE id=:id';
    $stmt = dbc()->prepare($sql);
    $stmt->bindvalue( ':web', $web, PDO::PARAM_STR );
    $stmt->bindvalue( ':id', $id, PDO::PARAM_INT );
    $stmt->execute();
}

function editEstablishmentId($establishment,$id)
{
    $sql = $sql='UPDATE list SET establishment=:establishment WHERE id=:id';
    $stmt = dbc()->prepare($sql);
    $stmt->bindvalue( ':establishment', $establishment, PDO::PARAM_STR );
    $stmt->bindvalue( ':id', $id, PDO::PARAM_INT );
    $stmt->execute();
}

function editCapitalId($capital,$id)
{
    $sql = $sql='UPDATE list SET capital=:capital WHERE id=:id';
    $stmt = dbc()->prepare($sql);
    $stmt->bindvalue( ':capital', $capital, PDO::PARAM_STR );
    $stmt->bindvalue( ':id', $id, PDO::PARAM_INT );
    $stmt->execute();
}

function editRevenueId($revenue,$id)
{
    $sql = $sql='UPDATE list SET revenue=:revenue WHERE id=:id';
    $stmt = dbc()->prepare($sql);
    $stmt->bindvalue( ':revenue', $revenue, PDO::PARAM_STR );
    $stmt->bindvalue( ':id', $id, PDO::PARAM_INT );
    $stmt->execute();
}

function editEmployeeId($employee,$id)
{
    $sql = $sql='UPDATE list SET employee=:employee WHERE id=:id';
    $stmt = dbc()->prepare($sql);
    $stmt->bindvalue( ':employee', $employee, PDO::PARAM_STR );
    $stmt->bindvalue( ':id', $id, PDO::PARAM_INT );
    $stmt->execute();
}

function editIndustryId($industry,$id)
{
    $sql = $sql='UPDATE list SET industry=:industry WHERE id=:id';
    $stmt = dbc()->prepare($sql);
    $stmt->bindvalue( ':industry', $industry, PDO::PARAM_STR );
    $stmt->bindvalue( ':id', $id, PDO::PARAM_INT );
    $stmt->execute();
}